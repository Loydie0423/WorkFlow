<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobApplicationController extends Controller
{
    public function validateapplication(Request $request) 
    {
        try 
        {
            $arr = array();
            $cc = array("educational_attainment" => 0, "work_experience" => 0, "job_skill" => 0);
            $cc["educational_attainment"] = DB::table("educational_attainments AS a")->join("applicants AS b", "a.applicant_id", "=", "b.id")->where("b.user_id", auth()->user()->id)->count();
            $cc["work_experience"] = DB::table("work_experiences AS a")->join("applicants AS b", "a.applicant_id", "=", "b.id")->where("b.user_id", auth()->user()->id)->count();
            $cc["job_skill"] = DB::table("job_skills AS a")->join("applicants AS b", "a.applicant_id", "=", "b.id")->where("b.user_id", auth()->user()->id)->count();

            foreach($cc AS $key => $item) {
                if($cc[$key] == 0) {
                    $arrx = explode("_",$key);
                    $arrx = array_map(fn($itemx) => ucfirst($itemx) , $arrx);
                    $skrrt = implode(" ",$arrx);
                    array_push($arr, "No ".$skrrt. " Details Found.");
                }
            }

            if(sizeof($arr) == 0) {
                return response()->json(array("result" => true, "message" => "Success!", "data" => [], "code" => 200));
            }

            return response()->json(array("result" => true, "message" => "Application doesn't meet the following requirements:", "data" => $arr, "code" => 422));
        } catch(Exception $e) {
            return response()->json(array("result" => false, "message" => $e->getMessage(), "data" => []));
        }
    }
}
