<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout() 
    {
        try {
            Auth::logout();
            return response()->json(array("result" => true, "message" => "User session ended.", "data" => []));
        } catch(Exception $e) {
            return response()->json(array("result" => false, "message" => "Session ended.", "data" => []));
        }
        
    }
}
