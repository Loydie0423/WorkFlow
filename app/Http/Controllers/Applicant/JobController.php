<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    public function index() 
    {
        $jobs = DB::table('jobs AS a')->join('companies AS b','a.company_id','=','b.id')->join('employers AS c','a.employer_id','=','c.id')->join('users AS d','c.user_id','=','d.id')->select('a.id','title','a.description','min_salary','max_salary','location','arrangement','b.name AS company_name','a.employer_id','d.first_name AS employer_fname','d.middle_name AS employer_mname', 'd.last_name AS employer_lname','a.created_at','a.slug AS uuid')->whereIn('a.status',array('Active','Pending'))->get();
        return view('applicant.job.index', array('jobs' => $jobs));
    }

    public function view(string $uuid) 
    {
        $job = DB::table('jobs AS a')->join('companies AS b','a.company_id','=','b.id')->join('employers AS c','a.employer_id','=','c.id')->join('users AS d','c.user_id','=','d.id')->select('a.id','title','a.description','min_salary','max_salary','location','arrangement','b.name AS company_name','b.url AS company_url','a.employer_id','d.first_name AS employer_fname','d.middle_name AS employer_mname', 'd.last_name AS employer_lname')->whereIn('a.status',array('Active','Pending'))->where('a.slug', $uuid)->first();
        return view('applicant.job.view', array('job' => $job));
    }
}
