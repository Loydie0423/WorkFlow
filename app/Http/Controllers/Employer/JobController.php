<?php

namespace App\Http\Controllers\Employer;


use Exception;
use Illuminate\Http\JsonResponse;
use App\Services\JobService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class JobController extends Controller
{
    private JobService $jobservice;

    public function __construct() 
    {
        $this->jobservice = new JobService();
    }

    public function index(): View
    {
        return view("employer.job.index");
    }

    public function joblist(): JsonResponse
    {
        $data = array();
        $job = DB::table("jobs AS a")->join("companies AS b","a.company_id","=","b.id")->join("employers AS c","a.employer_id","=","c.id")->join("users AS d","c.user_id","=","d.id")->join("job_categories AS e","a.job_category_id","=","e.id")->select("a.title","b.name","a.arrangement","a.location",DB::raw("FORMAT(a.min_salary,2) AS min_salary"),DB::raw("FORMAT(a.max_salary,2) AS max_salary"), "e.description AS category")->where("d.id", auth()->user()->id)->get();

        foreach($job AS $item) {
            array_push($data, array(
                "title" => $item->title,
                "category" => $item->category,
                "company_name" => $item->name,
                "arrangement" => $item->arrangement,
                "location" => $item->location,
                "min_salary" => $item->min_salary,
                "max_salary" => $item->max_salary,
                "applications" => 0
            ));
        }

        return response()->json(array("result" => true, "message" => "Load.", "data" => $data));
    }

    public function create(): View
    {
        $categories = DB::table("job_categories")->pluck("description", "id");
        return view("employer.job.create", array("categories" => $categories));
    }

    public function validatepostjob(array $data): array
    {
        try 
        {
            $errors = array();
            $arrx = array("reqlist" => []);
            $validator = Validator::make($data["job"], array(
                "category" => array("required","exists:job_categories,id"),
                "title" => array("required","max:255"),
                "location" => array("required","max:255"),
                "arrangement" => array("required","in:Onsite,Work From Home,Hybrid"),
                "description" => array("required","max:255"),
                "employment_type" => array("required","in:Full-time,Part-time"),
                "slot" => array("required"),
                "application_deadline" => array("required","date","after:today"),
                "min_salary" => array("required","lte:max_salary"),
                "max_salary" => array("required","gte:min_salary")
            ));

            if($validator->fails()) {
                foreach($validator->errors()->toArray() AS $key => $item) {
                   $errors[$key] = $item[0];
                }   
                array_push($arrx["reqlist"], "Job Information form is incomplete or has an invalid value.");
            }

            if(empty($data["jobdet"])) {
                array_push($arrx["reqlist"], "No Job Details Found.");
            } 

            $det = DB::table("employers")->where("user_id", auth()->user()->id)->first();
            if(empty($det->company_id)) {
                array_push($arrx["reqlist"], "No Company Details Found.");
            }

            return array("data" => $data, "reqlist" => $arrx["reqlist"], "errors" => $errors);
        } catch(Exception $e) {
            return array("result" => false, "message" => $e->getMessage(), "data" => []);
        }
    }

    public function postjob(Request $request): JsonResponse
    {
        try {
            $payload = array("job" => [], "jobdet" => []);
            
            foreach($request->job[0] AS $key => $item) {
                $payload["job"][$key] = $item;
            }

            foreach(isset($request->jobdet) ? $request->jobdet : [] AS $key => $item) {
                $payload["jobdet"][$key] = $item;
            }

            $result = $this->validatepostjob($payload);
            if(empty($result["reqlist"])) {
                $data = array("job" => $result["data"]["job"], "jobdet" => $result["data"]["jobdet"]);
                $this->jobservice->save($data);
                return response()->json(array("result" => true, "message" => "Saved.", "data" => [], "status" => 201));
            }

            return response()->json(array("result" => false, "message" => "Job Post doesn't meet the following requirements:", "data" => array("reqlist" => $result["reqlist"], "errors" => $result["errors"]), "status" => 422));
        } catch(Exception $e) {
            return response()->json(array("result" => false, "message" => $e->getMessage(), "data" => []));
        }
    }
}
