<?php

namespace App\Http\Controllers\Employer;

use Exception;
use App\Helpers\Slug;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
{
    private Slug $slug;

    public function __construct() 
    {
        $this->slug = new Slug();
    }

    public function index() 
    {
        return view('employer.job.index');
    }

    public function joblist(Request $request) 
    {
        $data = array();
        $query = DB::table('jobs AS a')->join('companies AS b','a.company_id','=','b.id')->join('employers AS c','a.employer_id','=','c.id')->join('users AS d','c.user_id','=','d.id')->join('job_categories AS e','a.job_category_id','=','e.id')->select('a.title','b.name','a.arrangement','a.location',DB::raw('FORMAT(a.min_salary,2) AS min_salary'),DB::raw('FORMAT(a.max_salary,2) AS max_salary'), 'e.description AS category')->where('d.id', auth()->user()->id)->get();

        foreach($query AS $item) {
            array_push($data, array(
                'title' => $item->title,
                'category' => $item->category,
                'company_name' => $item->name,
                'arrangement' => $item->arrangement,
                'location' => $item->location,
                'min_salary' => $item->min_salary,
                'max_salary' => $item->max_salary,
                'applications' => 0
            ));
        }

        return response()->json(array("data" => $data));
    }

    public function create() 
    {
        $categories = DB::table('job_categories')->pluck('description', 'id');
        return view('employer.job.create', array('categories' => $categories));
    }

    public function store(Request $request) 
    {
        try {
            DB::beginTransaction();
            $data = array();
            $employer = DB::table('employers')->select('id')->where('user_id', auth()->user()->id)->first();

            foreach($request->job AS $item) {
                array_push($data, array(
                    'employer_id' => $employer->id,
                    'category' => $item['category'],
                    'title' => $item['title'],
                    'location' => $item['location'],
                    'arrangement' => $item['arrangement'],
                    'description' => $item['description'],
                    'min_salary' => $item['min_salary'],
                    'max_salary' => $item['max_salary'],
                    'company' => isset($request->company[0]['id']) ? $request->company[0]['id'] : ''
                ));
            }

            $validator = Validator::make($data[0], array(
                'company' => array('required','exists:companies,id'),
                'employer_id' => array('required','exists:employers,id'),
                'category' => array('required','exists:job_categories,id'),
                'title' => array('required','max:255'),
                'location' => array('required','max:255'),
                'arrangement' => array('required','in:Onsite,Work From Home,Hybrid'),
                'description' => array('required','max:255'),
                'min_salary' => array('required','lte:max_salary'),
                'max_salary' => array('required','gte:min_salary')
            ));


            if($validator->fails()) {
                return response()->json(array("result" => false, "message" => "Validation Error!", "errors" => $validator->errors()->toArray(), "status" => 422));
            }

            DB::table('jobs')->insert(array(
                'company_id' => $data[0]['company'],
                'employer_id' => $employer->id,
                'job_category_id' => $data[0]['category'],
                'title' => $data[0]['title'],
                'location' => $data[0]['location'],
                'arrangement' => $data[0]['arrangement'],
                'description' => $data[0]['description'],
                'min_salary' => $data[0]['min_salary'],
                'max_salary' => $data[0]['max_salary'],
                "slug" => $this->slug->generate(),
                'created_at' => now()
            ));

            DB::commit();
            return response()->json(array("result" => true, "message" => "Saved.", "data" => []));
        } catch(Exception $e) {
            DB::rollBack();
            return response()->json(array("result" => false, "message" => [], "data" => $e));
        }
    }
}
