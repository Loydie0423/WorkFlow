<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function getcompanies(Request $request): JsonResponse 
    {
        if(!$request->ajax()) {
            abort(400, "Invalid Request");
        }

        $companies = DB::table('companies')->get();
        return response()->json(array("result" => true, "message" => "Load.", "data" => $companies));
    }

    public function selectcompany(Request $request): JsonResponse 
    {
        try {
            DB::beginTransaction();
            if(!$request->ajax()) {
                abort(400, "Invalid Request");
            }

            $company = DB::table('companies')->where('id', $request->id)->where('name', $request->name)->first();
            DB::table('employers')->where('user_id', auth()->user()->id)
                ->update(array('company_id' => $company->id, 'updated_at' => now())
            );

            $data = DB::table('employers AS a')->join('companies AS b','a.company_id','=','b.id')->where('a.user_id', auth()->user()->id)->get();
            DB::commit();
            return response()->json(array("result" => true, "message" => "Saved.", "data" => $data));
        } catch(Exception $e) {
            DB::rollBack();
            return response()->json(array("result" => false, "message" => $e->getMessage(), "data" => []));
        }
    }

    public function getcurrentcompany(Request $request) 
    {
        if(!$request->ajax()) {
            abort(400, "Invalid Request");
        }

        $data = DB::table('employers AS a')->join('companies AS b','a.company_id','=','b.id')->where('a.user_id', auth()->user()->id)->get();
        return response()->json(array("result" => true, "message" => "Load.", "data" => $data));
    }
}
