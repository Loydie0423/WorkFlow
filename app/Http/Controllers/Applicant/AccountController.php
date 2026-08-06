<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Services\Applicant\AccountService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class AccountController extends Controller
{
    private AccountService $accservice;

    public function __construct() {
        $this->accservice = new AccountService();
    }

    public function profile(): View
    {
        $user = DB::table("users AS a")->select("c.user_id","b.description AS role","a.email","a.first_name","a.middle_name","a.last_name","c.birthdate","c.mobile_no","c.address")->join("roles AS b", "a.role_id","=","b.id")->join("applicants AS c","a.id","=","c.user_id")->where("a.id", auth()->user()->id)->first();
        return view("applicant.account.profile", array("user" => $user));
    }
    
    public function validateprofiledet(array $data): array 
    {
        $errors = array();
        $validator = Validator::make($data, array(
            "first_name" => ["required","max:255"],
            "middle_name" => ["required","max:255"],
            "last_name" => ["required","max:255"],
            "email" => ["required","email","max:255","unique:users,email,".auth()->user()->email],
            "address" => ["required","max:255"],
            "mobile_no" => ["required","numeric"],
            "birthdate" => ["required","date","before:today"]), 
            array("email.unique" => "Email is already used by other users.")
        );

        if($validator->fails()) {
            foreach($validator->errors()->toArray() AS $key => $item) {
                $errors[$key] = $item[0];
            }

            return array("result" => false, "message" => "Validation Error!", "data" => array("errors" => $errors));
        }

        return array("result" => true, "message" => "Success", "data" => []);
    }

    public function updateprofiledet(Request $request): JsonResponse 
    {
        $data = $request->all();
        $validate = $this->validateprofiledet($data);

        if($validate["result"]) {
            $this->accservice->updateprofiledet($data);
            return response()->json(array("result" => true, "message" => "Success", "data" => []));
        }

        return response()->json(array("result" => false, "message" => $validate["message"], "data" => $validate["data"]));
    }

    public function validateskill(array $data): array 
    {
        $errors = array();
        $applicant = DB::table("applicants AS a")->where("user_id", auth()->user()->id)->First();
        $validator = Validator::make($data, array(
            "skill_name" => array("required","max:255","unique:job_skills,skill_name,NULL,id,applicant_id," . $applicant->id),
            "experience_level" => array("required", "max:255")
        ), array("skill_name.unique" => "Skill is already exists."));

        if($validator->fails()) {
            foreach($validator->errors()->toArray() AS $key => $item) {
                $errors[$key] = $item[0];
            }

            return array("result" => false, "message" => "Validation Error!", "data" => array("errors" => $errors));
        }

        $skills["cc"] = DB::table("job_skills")->where("applicant_id", $applicant->id)->count();
        if($skills["cc"] >= 10) {
            $errors["skill_name"] = "Skill reached maximum limit of 20.";
            return array("result" => false, "message" => "Validation Error!", "data" => array("errors" => $errors));
        }

        return array("result" => true, "message" => "Success", "data" => []);
    }

    public function addskills(Request $request): JsonResponse 
    {
        $validate = $this->validateskill($request->only("skill_name","experience_level"));

        if($validate["result"]) {
            $this->accservice->saveskill($request->only("skill_name","experience_level"));
            return response()->json(array("result" => true, "message" => "Success", "data" => []));
        }

        return response()->json(array("result" => false, "message" => $validate["message"], "data" => array("errors" => $validate["data"]["errors"])));        
    }

    public function getskills(): JsonResponse
    {
        $skills = DB::table("job_skills AS a")->join("applicants AS b","a.applicant_id","=","b.id")->join("users AS c","b.user_id","=","c.id")->where("b.user_id", auth()->user()->id)->select("a.skill_name", "experience_level")->get();
        return response()->json(array("result" => true, "message" => "Success", "data" => array("skills" => $skills)));
    }
}
