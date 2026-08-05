<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use Throwable;

class LoginController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        try {
            $validator = Validator::make($request->only('email','password'), array(
                'email' => array('required'),
                'password' => array('required')
            ));

            if($validator->fails()) {
                return response()->json(array('result' => false, 'message' => "Validation Error!", 'data' => $validator->errors()->toArray(), 'status' => 422));
            }

            if(!Auth::attempt($request->only('email', 'password'))) {
                return response()->json(array('result' => false, 'message' => 'Email or Password is incorrect.', 'data' => [], "status" => 401));
            }
            
            $activeuser = DB::table('users')->where('id', auth()->user()->id)->first();
            return response()->json(array('result' => true, 'message' => 'Welcome '.auth()->user()->email, 'data' => $activeuser));
        } catch(Throwable $e) {
            return response()->json(array('result' => false, 'message' => $e->getMessage(), 'data' => []), 500);
        }
    }
}
