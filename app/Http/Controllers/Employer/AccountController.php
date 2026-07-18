<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function profile() 
    {
        $user = DB::table('users AS a')->select(['c.user_id','b.description AS role','a.email','a.first_name','a.middle_name','a.last_name'])->join('roles AS b', 'a.role_id','=','b.id')->join('employers AS c','a.id','=','c.user_id')->where('a.id', auth()->user()->id)->first();
        return view('employer.account.profile', array("user" => $user));
    }
}
