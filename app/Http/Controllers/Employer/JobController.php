<?php

namespace App\Http\Controllers\Employer;

use Exception;
use App\Helpers\Slug;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
{
    private Slug $slug;

    public function __construct() 
    {
        $this->slug = new Slug();
    }

    public function index() 
    {
        return view("employer.job.index");
    }

    public function joblist(Request $request) 
    {
        $data = array();
        $query = DB::table("jobs AS a")->join("companies AS b","a.company_id","=","b.id")->join("employers AS c","a.employer_id","=","c.id")->join("users AS d","c.user_id","=","d.id")->join("job_categories AS e","a.job_category_id","=","e.id")->select("a.title","b.name","a.arrangement","a.location",DB::raw("FORMAT(a.min_salary,2) AS min_salary"),DB::raw("FORMAT(a.max_salary,2) AS max_salary"), "e.description AS category")->where("d.id", auth()->user()->id)->get();

        foreach($query AS $item) {
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

        return response()->json(array("data" => $data));
    }

    public function create() 
    {
        $categories = DB::table("job_categories")->pluck("description", "id");
        return view("employer.job.create", array("categories" => $categories));
    }

    public function store(Request $request) 
    {
        try {
            DB::beginTransaction();
            $data = array();
            $employer = DB::table("employers")->select("id")->where("user_id", auth()->user()->id)->first();

            foreach($request->job[0] AS $key => $item) {
                $data[$key] = $item;
            }
            
            $data["company_id"] = isset($request->company) ? $request->company["id"] : "";
            $validator = Validator::make($data, array(
                "company_id" => array("required","exists:companies,id"),
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
                return response()->json(array("result" => false, "message" => "Validation Error!", "errors" => $validator->errors()->toArray(), "status" => 422));
            }

            $jobid = DB::table("jobs")->insertGetId(array(
                "company_id" => $data["company_id"],
                "employer_id" => $employer->id,
                "job_category_id" => $data["category"],
                "title" => $data["title"],
                "location" => $data["location"],
                "arrangement" => $data["arrangement"],
                "description" => $data["description"],
                "min_salary" => $data["min_salary"],
                "max_salary" => $data["max_salary"],
                "slot" => $data["slot"],
                "application_deadline" => $data["application_deadline"],
                "slug" => $this->slug->generate(),
                "created_at" => now()
            ));

            foreach($request->job_details AS $item) {
                DB::table("job_details")->insert([
                    "job_id" => $jobid,
                    "type" => $item["type"],
                    "details" => $item["details"],
                    "created_at" => now()
                ]);
            }

            DB::commit();
            return response()->json(array("result" => true, "message" => "Saved.", "data" => []));
        } catch(Exception $e) {
            DB::rollBack();
            return response()->json(array("result" => false, "message" => [], "data" => []));
        }
    }
}
