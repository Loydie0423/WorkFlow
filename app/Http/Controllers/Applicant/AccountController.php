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
        $validator = Validator::make($data, 
            array(
                "first_name" => ["required","max:255"],
                "middle_name" => ["required","max:255"],
                "last_name" => ["required","max:255"],
                "email" => ["required","email","max:255","unique:users,email,".auth()->user()->email],
                "address" => ["required","max:255"],
                "mobile_no" => ["required","numeric"],
                "birthdate" => ["required","date","before:today"]
            ), array("email.unique" => "Email is already used by other users.")
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
}
