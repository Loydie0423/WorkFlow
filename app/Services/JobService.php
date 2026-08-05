<?php

namespace App\Services;

use Exception;
use App\Helpers\Slug;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class JobService 
{
    use Slug;

    public function savejob(array $job, array $jobdet): JsonResponse
    {
         try {
            DB::beginTransaction();
            $employer = DB::table("employers")->where("user_id", auth()->user()->id)->first();
            $jobid = DB::table("jobs")->insertGetId(array(
                "company_id" => $employer->company_id,
                "employer_id" => $employer->id,
                "job_category_id" => $job["category"],
                "title" => $job["title"],
                "location" => $job["location"],
                "arrangement" => $job["arrangement"],
                "description" => $job["description"],
                "employment_type" => $job["employment_type"],
                "min_salary" => $job["min_salary"],
                "max_salary" => $job["max_salary"],
                "slot" => $job["slot"],
                "application_deadline" => $job["application_deadline"],
                "slug" => $this->generate(),
                "created_at" => now()
            ));

            foreach($jobdet AS $item) {
                DB::table("job_details")->insert([
                    "job_id" => $jobid,
                    "type" => $item["type"],
                    "details" => $item["details"],
                    "created_at" => now()
                ]);
            }

            DB::commit();
            return response()->json(array("result" => true, "message" => "Saved.", "data" => [], "status" => 201));
        } catch(Exception $e) {
            DB::rollBack();
            return response()->json(array("result" => false, "message" => $e->getMessage(), "data" => []));
        }
    }
}