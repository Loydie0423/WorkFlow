<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    public function index() 
    {
        $jobs = DB::table('jobs AS a')->join('companies AS b','a.company_id','=','b.id')->join('employers AS c','a.employer_id','=','c.id')->join('users AS d','c.user_id','=','d.id')->select('a.id','title','a.description','min_salary','max_salary','location','arrangement','b.name AS company_name','a.employer_id','d.first_name AS employer_fname','d.middle_name AS employer_mname', 'd.last_name AS employer_lname','a.employment_type','a.created_at','a.slug AS uuid')->whereIn('a.status',array('Active','Pending'))->get();
        return view('applicant.job.index', array('jobs' => $jobs));
    }

    public function view(string $uuid) 
    {
        $data = array("info" => [], "details" => []);
        $job = DB::table("jobs AS a")->join('companies AS b','a.company_id','=','b.id')->join('employers AS c','a.employer_id','=','c.id')->join('users AS d','c.user_id','=','d.id')->select('a.id','title','a.description','min_salary','max_salary','location','arrangement','slot','application_deadline','b.name AS company_name','b.url AS company_url','a.employer_id','d.first_name AS employer_fname','d.middle_name AS employer_mname', 'd.last_name AS employer_lname','employment_type','a.created_at AS published_date','application_deadline', DB::raw("0 AS vacancy"))->whereIn('a.status',array('Active','Pending'))->where('a.slug', $uuid)->first();
        $details = DB::table("job_details")->select("type","details","created_at")->where("job_id",$job->id)->get()->groupBy("type");

        foreach($job AS $key => $item) {
            $data["info"][$key] = $item;
        }
        
        foreach($details AS $key => $item) {
            $data["details"][$key] = $item;
        }

        $data["meta"]["slug"] = $uuid;
        return view('applicant.job.view', array('data' => $data));
    }

    public function store(Request $request)
    {
        try{
            DB::beginTransaction();
            $job = DB::table("jobs")->where("slug",$request->uuid)->first();
            $applicant = DB::table("applicants")->where("user_id",auth()->user()->id)->first();
            $bool = DB::table("saved_jobs")->where("job_id",$job->id)->where("applicant_id",$applicant->id)->exists();

            if($bool) {
                return response()->json(array("result" => true, "message" => "Already Exists!", "data" => [], "code" => 200));
            }
            
            DB::table("saved_jobs")->insert(array(
                "job_id" => $job->id,
                "applicant_id" => $applicant->id
            ));
            DB::commit();
            return response()->json(array("result" => true, "message" => "Saved.", "data" => [], "code" => 201));
        } catch(Exception $e) {
            DB::rollBack();
            return response()->json(array("result" => false, "message" => "Server Error!", "data" => []));
        }
    }

    public function savejobsindex() 
    {
        $data = DB::table("saved_jobs AS a")->join("jobs AS b","a.job_id","=","b.id")->join("applicants AS c","a.applicant_id","=","c.id")->join("companies AS d","b.company_id","=","d.id")->select("b.title", "d.name AS company_name", "b.arrangement", "b.location", "b.slug AS uuid")->where("c.user_id",auth()->user()->id)->get();
        return view("applicant.job.saved-job", array("jobs" => $data));
    }

    public function savedjobsremove(string $uuid) 
    {
        try 
        {   
            DB::beginTransaction();
            $job = DB::table("jobs")->where("slug", $uuid)->first();
            DB::table("saved_jobs")->where("job_id",$job->id)->delete();
            DB::commit();
            return response()->json(array("result" => true, "message" => "Success.", "data" => []));
        } catch(Exception $e) {
            DB::rollBack();
            return response()->json(array("result" => false, "message" => $e->getMessage(), "data" => []));
        }
    } 
}
