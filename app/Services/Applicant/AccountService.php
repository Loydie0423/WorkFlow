<?php

namespace App\Services\Applicant;

use Exception;
use Illuminate\Support\Facades\DB;

class AccountService {

    public function updateprofiledet(array $data): void 
    {
        try {
            DB::beginTransaction();
            DB::table("users")->where("id", auth()->user()->id)->update([
                "first_name" => $data["first_name"],
                "middle_name" => $data["middle_name"],
                "last_name" => $data["last_name"],
                "email" => $data["email"]
            ]);
        
            DB::table("applicants AS a")->join("users AS b","a.user_id","=","b.id")->where("b.id", auth()->user()->id)->update([
                "birthdate" => $data["birthdate"],
                "mobile_no" => $data["mobile_no"],
                "address" => $data["address"]
            ]);
            DB::commit();
        } catch(Exception $e) {
            DB::rollBack();
        }
    }

    public function saveskill($data): void 
    {
        try {
            DB::beginTransaction();
            $applicant = DB::table("applicants")->where("user_id", auth()->user()->id)->first();
            DB::table("job_skills")->insert(array(
                "applicant_id" => $applicant->id,
                "skill_name" => $data["skill_name"],
                "experience_level" => $data["experience_level"],
                "created_at" => now()
            ));
            DB::commit();
        } catch(Exception $e) {
            DB::rollBack();
        }
    }

    public function removeskill(array $data): void 
    {
        try{
            DB::beginTransaction();
            DB::table("job_skills AS a")->join("applicants AS b","a.applicant_id","=","b.id")->where("a.id", $data["skill_id"])->where("a.skill_name", $data["skill_name"])->where("b.user_id", auth()->user()->id)->delete();
            DB::commit();
        } catch(Exception $e) {
           DB::rollBack();
        }
    }

    public function saveeducationalatt(array $data): void 
    {
        try{
            DB::beginTransaction();
            $applicant = DB::table("applicants")->where("user_id", auth()->user()->id)->first();
            DB::table("educational_attainments")->insert(array(
                "applicant_id" => $applicant->id,
                "level" => $data["level"],
                "field_of_study" => $data["field_of_study"],
                "from" => $data["from"],
                "to" => $data["to"],
                "institution" => $data["institution"],
                "created_at" => now()
            ));
            DB::commit();
        } catch(Exception $e) {
           DB::rollBack();
        }
    }
}