<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function profile() 
    {
        $user = DB::table('users AS a')->select(['c.user_id','b.description AS role','a.email','a.first_name','a.middle_name','a.last_name'])->join('roles AS b', 'a.role_id','=','b.id')->join('applicants AS c','a.id','=','c.user_id')->where('a.id', auth()->user()->id)->first();
        return view('applicant.account.profile', array("user" => $user));
    }
}
