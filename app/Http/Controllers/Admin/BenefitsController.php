<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Benefits;
use Session;
use DateTime;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Http\Exceptions\HttpResponseException;



class BenefitsController extends Controller
{
    public function index()
    {
        $benefits = DB::table('benefits')->get();
        return view('admin.benefits.index', compact('benefits'));

    }
    public function getbenefits()
    {
        $benefits = DB::table('benefits')->get();
        if ($benefits) {
            $benefits = json_encode($benefits);
            $benefits = response()->json($benefits);
            $data = [
                "status" => "200",
                "details" => [
                    'data' => $benefits,

                    "message" => "Data Fetched !!"
                ]
            ];
            return response()->json($data);
        } else {
            $data = [
                "status" => "201",
                "details" => [
                    'id' => 1,

                    "message" => "Bad Request : Data not found !!"
                ]
            ];
            return response()->json($data);
        }
        

    }
    public function editbenefits($id)
    {
        $benefitsdetails = DB::table('benefits')->where('benefits_id', $id)->get();
        return view('admin.benefits.editbenefits', compact('benefitsdetails'));
    }
    public function addbenefits(Request $request)
    {
        return view('admin.benefits.addbenefits');
    }
    public function savebenefitsdata(Request $request)
    {
        $data = [];
        $inputdata = Request::input();
        $data[] = [
            'benefits_name'  => $inputdata['benefits_name'],
            'status' => $inputdata['status'],
            'created_at' => new DateTime(),
           
        ];
        Benefits::insert($data);
        return view('admin.benefits.addbenefits')->with([
            'message' => 'successfully Added !',
            'alert-type' => 'success'
        ]);
    }
    public function saveupdatedbenefitsdata(Request $request ,$id)
    {

        $inputdata = Request::input();
        $data[] = [
            'benefits_name'  => $inputdata['benefits_name'],
            'status' => $inputdata['status'],
            'updated_at' => new DateTime(),
           
        ];
        $affected = DB::table('benefits')
                ->where('benefits_id', $id)  // find your user by their email
                ->limit(1)  // optional - to ensure only one record is updated.
                ->update($data[0]);  // update the record in the DB. 
        $benefitsdetails = DB::table('benefits')->where('benefits_id', $id)->get();
            return view('admin.benefits.editbenefits',compact('benefitsdetails'))->with([
                'message' => 'successfully updated !',
                'alert-type' => 'success'
            ]);
    }
    public function deletebenefits($id)
    {
        $deleteduser = DB::table('benefits')->where('benefits_id', $id)->delete();
        $benefits = DB::table('benefits')->get();
        return view('admin.benefits.index', compact('benefits'))->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'success'
        ]);;

    }
}