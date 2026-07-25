<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function store(Request $request) 
    {
        try {
            if(!$request->ajax()) {
                abort('403', 'Forbidden');
            }

            $validator = Validator::make($request->all(), array(
                'first_name' => array('required'),
                'middle_name' => array('required'),
                'last_name' => array('required'),
                'email' => array('required','email','unique:users'),
                'password' => array('required','confirmed'),
                'password_confirmation' => array('required'),
                'account_type' => array('required','in:2,3')
            ));

            if($validator->fails()) {
                return response()->json(array('result' => false, 'message' => 'Validation Error', 'data' => $validator->errors()->toArray()));
            }

            $userid = DB::table('users')->insertGetId(array(
                'role_id' => $request->account_type,
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'created_at' => now()
            ));

            $table = $request->account_type == 2 ? "employers" : "applicants";
            DB::table($table)->insert(array('user_id' => $userid, 'created_at' => now()));
            
            return response()->json(array('result' => true, 'message' => 'Successly, you can now login to your account.', 'data' => []));
        }catch(Exception $e) {
            return response()->json(array('result' => false, 'message' => $e->getMessage(), 'data' => []), 500);
        }
    }
}
