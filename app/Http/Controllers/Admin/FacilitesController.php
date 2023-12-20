<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Facilites;
use Session;
use DateTime;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Http\Exceptions\HttpResponseException;



class FacilitesController extends Controller
{
    public function index()
    {
        $facilites = DB::table('facilites')->get();
        return view('admin.facilites.index', compact('facilites'));

    }
    public function getFacilites()
    {
        $facilites = DB::table('facilites')->get();
        if ($facilites) {
            $facilites = json_encode($facilites);
            $facilites = response()->json($facilites);
            $data = [
                "status" => "200",
                "details" => [
                    'data' => $facilites,
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
    public function editfacilites($id)
    {
        $facilitesdetails = DB::table('facilites')->where('facilites_id', $id)->get();
        return view('admin.facilites.editfacilites', compact('facilitesdetails'));
    }
    public function addfacilites(Request $request)
    {
        return view('admin.facilites.addfacilites');
    }
    public function savefacilitesdata(Request $request)
    {
        $data = [];
        $inputdata = Request::input();
        $data[] = [
            'facilites_name'  => $inputdata['facilites_name'],
            'status' => $inputdata['status'],
            'created_at' => new DateTime(),
           
        ];
        Facilites::insert($data);
        return view('admin.facilites.addfacilites')->with([
            'message' => 'successfully Added !',
            'alert-type' => 'success'
        ]);
    }
    public function saveupdatedfacilitesdata(Request $request ,$id)
    {

        $inputdata = Request::input();
        $data[] = [
            'facilites_name'  => $inputdata['facilites_name'],
            'status' => $inputdata['status'],
            'updated_at' => new DateTime(),
           
        ];
        $affected = DB::table('facilites')
                ->where('facilites_id', $id)  // find your user by their email
                ->limit(1)  // optional - to ensure only one record is updated.
                ->update($data[0]);  // update the record in the DB. 
        $facilitesdetails = DB::table('facilites')->where('facilites_id', $id)->get();
            return view('admin.facilites.editfacilites',compact('facilitesdetails'))->with([
                'message' => 'successfully updated !',
                'alert-type' => 'success'
            ]);
    }
    public function deletefacilites($id)
    {
        $deleteduser = DB::table('facilites')->where('facilites_id', $id)->delete();
        $facilites = DB::table('facilites')->get();
        return view('admin.facilites.index', compact('facilites'))->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'success'
        ]);;

    }
}