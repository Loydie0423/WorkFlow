<?php

namespace App\Services;

use Exception;
use App\Helpers\Slug;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class JobService 
{
    use Slug;

    public function save(array $data): JsonResponse
    {
         try {
            DB::beginTransaction();
            $employer = DB::table("employers")->where("user_id", auth()->user()->id)->first();
            $jobid = DB::table("jobs")->insertGetId(array(
                "company_id" => $employer->company_id,
                "employer_id" => $employer->id,
                "job_category_id" => $data["job"]["category"],
                "title" => $data["job"]["title"],
                "location" => $data["job"]["location"],
                "arrangement" => $data["job"]["arrangement"],
                "description" => $data["job"]["description"],
                "employment_type" => $data["job"]["employment_type"],
                "min_salary" => $data["job"]["min_salary"],
                "max_salary" => $data["job"]["max_salary"],
                "slot" => $data["job"]["slot"],
                "application_deadline" => $data["job"]["application_deadline"],
                "slug" => $this->generate(),
                "created_at" => now()
            ));

            foreach($data["job_det"] AS $item) {
                DB::table("job_details")->insert(["job_id" => $jobid, "type" => $item["type"], "details" => $item["details"], "created_at" => now()]);
            }

            DB::commit();
            return response()->json(array("result" => true, "message" => "Saved.", "data" => [], "status" => 201));
        } catch(Exception $e) {
            DB::rollBack();
            return response()->json(array("result" => false, "message" => $e->getMessage(), "data" => []));
        }
    }
}