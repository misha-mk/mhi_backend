<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Availablity;
use Session;
use DateTime;
use DB;
use App\Models\Hospital;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
// use Illuminate\Http\Exceptions\HttpResponseException;



class DoctorController extends Controller
{
    public function index()
    {
        $doctors = DB::table('doctors')->get();
        return view('admin.doctors.index', compact('doctors'));

    }
    public function viewparticulardoctordeatils($id)
    {
        $doctordetails = DB::table('doctors')->where('d_id', $id)->get();
        return view('admin.doctors.viewdoctordetails', compact('doctordetails'));
    }
    public function addDoctor($id,$type)
    {
       $hospital_id = $id;
       $type = $type;
    //    var_dump($type);die();
        $departments = DB::table('departments')->get();
        return view('admin.doctors.adddoctor', compact('departments','hospital_id','type'));

    }
    public function events()
    {
        // var_dump('helo');die();
        $events = DB::table('availablities')->get();
// var_dump($events);die();
        return response()->json($events);
    }
    public function editDoctor($id,$d_id,$type)
    {
       $hospital_id = $id;
       $type = $type;
        $departments = DB::table('departments')->get();
        $doctordetails = DB::table('doctors')->where('d_id', $d_id)->get();
        return view('admin.doctors.adddoctor', compact('departments','hospital_id','doctordetails','type'));

    }
    public function setAvailibility($id,$h_id,$p_type)
    {
        $doctordetails = DB::table('doctors')->where('d_id', $id)->where('provider_id',$h_id)->where('provider_type',$p_type)->get();
        $hospital = DB::table('hospitals')->where('h_id',$h_id)->first();
        return view('admin.doctors.setavailibility', compact('doctordetails','hospital'));
    }
    public function viewAvailibility($id,$h_id,$p_type)
    {
        $doctordetails = DB::table('availablities')->where('doctor_id', $id)->where('provider_id',$h_id)->where('provider_type',$p_type)->get();
        // var_dump( $doctordetails);die()
        return view('admin.doctors.viewavailibility', compact('doctordetails'));
    }
    public function updatedoctordetails(Request $request,$id)
    {
        $inputdata = Request::input();
        $doctors = DB::table('doctors')->where('d_id', $id)->get();
        if (empty($inputdata['photo'])) {
            $filename = $doctors[0]->photo;
        }
        $validator = Validator::make(Request::all(), [
            'photo' => 'required|mimes:png,jpg,jpeg,pdf,docx',
        ]);
        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        } else {
            $data = [];
            if (Request::file('photo')) {

                $file = Request::file('photo');
                $filename = $file->hashName();
                $file->move(public_path('images'), $filename);
            }
           
            $data[] = [
                
             'fname' => $inputdata['fname'],
            'lname' => $inputdata['lname'],
            'email' => $inputdata['email'],
            'address' => $inputdata['address'],
            'phone' => $inputdata['phone'],
            'qualification' => $inputdata['qualification'],
            'fee' => $inputdata['fee'],
            'status' => $inputdata['status'],
            'specilities' => json_encode($inputdata['specilities']),
            'password' => $inputdata['password'],
            'gender' => $inputdata['gender'],
            'photo' => $filename,
            'pincode' => $inputdata['pincode'],
            'aboutUs' => $inputdata['editor1'],
            'provider_type' => $inputdata['provider_type'],
            'provider_id' => $inputdata['provider_id'],
            'department' => json_encode($inputdata['department']),
            'experience' => $inputdata['experience'],
            'bankname' => $inputdata['bankname'],
            'acnumber' => $inputdata['acnumber'],
            'atype' => $inputdata['atype'],
            'acountholdername' => $inputdata['acountholdername'],
            'ifsc' => $inputdata['ifsc'],
            'updated_at' => new DateTime(),
            ];

            $affected = DB::table('doctors')
                ->where('d_id', $id)  // find your user by their email
                ->limit(1)  // optional - to ensure only one record is updated.
                ->update($data[0]);  // update the record in the DB. 
            $doctors = DB::table('doctors')->where('d_id', $id)->get();
            $departments = DB::table('departments')->get();
            $hospital_id=  $inputdata['provider_id'];
            return view('admin.hospital.edithospital', compact('doctors','departments','hospital_id'))->with([
                'message' => 'successfully updated !',
                'alert-type' => 'success'
            ]);
        }
    }
    public function saveAvailablity(Request $request)
    {
        $data = [];
        $inputdata = Request::input();
        $data[] = [  
            'provider_id' => $inputdata['provider_id'],
            'provider_type' => $inputdata['provider_type'],
            'doctor_id' => $inputdata['doctor_id'],
            'doctorname' => $inputdata['doctorname'],
            'hospitalname' => $inputdata['hospitalname'],
            // 'date' => $inputdata['date'],
            'time_from' => date("H:i", strtotime($inputdata['time_from'])), 
            'time_to' => date("H:i", strtotime($inputdata['time_to'])),
            'slottime' => $inputdata['slottime'],
            'day' => $inputdata['day'],
            'noofpatient' => $inputdata['noofpatient'],
            'status' => $inputdata['status'],
            // 'break_date' => $inputdata['break_date'],
            // 'break_time_from' => date("H:i", strtotime($inputdata['break_time_from'])),
            // 'break_time_to' => date("H:i", strtotime($inputdata['break_time_to'])),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        // var_dump($data);die();
        Availablity::insert($data);
        // $departments = DB::table('departments')->get();
        // $hospital_id=  $inputdata['provider_id'];
        $doctordetails = DB::table('doctors')->where('d_id', $inputdata['doctor_id'])->where('provider_id',$inputdata['provider_id'])->where('provider_type',$inputdata['provider_type'])->get();
        $hospital = DB::table('hospitals')->where('h_id',$inputdata['provider_id'])->first();
        return view('admin.doctors.setavailibility', compact('doctordetails','hospital'))->with([
            'message' => 'successfully Added !',
            'alert-type' => 'success'
        ]);
        // return view('admin.doctors.adddoctor',compact('departments','hospital_id'))->with([
        //     'message' => 'successfully Added !',
        //     'alert-type' => 'success'
        // ]);
    }
    public function savedoctordetails(Request $request)
    {
        // dd("hello");die();
        $data = [];
        $inputdata = Request::input();
        if (Request::file('photo')) {
           
            $file = Request::file('photo');
            $filename = $file->hashName();
            $file->move(public_path('images'), $filename);
            $path = public_path('images') . $filename;
            
        }
        $data[] = [  
            'fname' => $inputdata['fname'],
            'lname' => $inputdata['lname'],
            'email' => $inputdata['email'],
            'address' => $inputdata['address'],
            'phone' => $inputdata['phone'],
            'qualification' => $inputdata['qualification'],
            'fee' => $inputdata['fee'],
            'status' => $inputdata['status'],
            'specilities' => json_encode($inputdata['specilities']),
            'password' => $inputdata['password'],
            'gender' => $inputdata['gender'],
            'photo' => $filename,
            'pincode' => $inputdata['pincode'],
            'aboutUs' => $inputdata['editor1'],
            'provider_type' => $inputdata['provider_type'],
            'provider_id' => $inputdata['provider_id'],
            'department' => json_encode($inputdata['department']),
            'experience' => $inputdata['experience'],
            'bankname' => $inputdata['bankname'],
            'acnumber' => $inputdata['acnumber'],
            'atype' => $inputdata['atype'],
            'acountholdername' => $inputdata['acountholdername'],
            'ifsc' => $inputdata['ifsc'],
            'updated_at' => new DateTime(),
        ];
        
        Doctor::insert($data);
        $departments = DB::table('departments')->get();
        $hospital_id=  $inputdata['provider_id'];
        return view('admin.doctors.adddoctor',compact('departments','hospital_id'))->with([
            'message' => 'successfully Added !',
            'alert-type' => 'success'
        ]);
    }
    // apis start
    public function getTop5Doctors()
    {
        $doctors = DB::table('doctors')->get();
        if ($doctors) {
            $doctors = json_encode($doctors);
            $doctors = response()->json($doctors);
            $data = [
                "status" => "200",
                "details" => [
                    'data' => $doctors,
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
    public function pdoctors(Request $request) {
        $hospitalId = Request::input('hospital_id');
        $search = Request::input('search');

        $doctors = DB::table('hospitals')
        ->join('doctors', 'hospitals.h_id', '=', 'doctors.provider_id')
        ->join('availablities', 'doctors.d_id', '=', 'availablities.doctor_id')
        ->when($search, function ($query) use ($search) {
            $query->where('doctors.fname', 'like', '%' . $search . '%');
        })
        ->select('hospitals.name as hospital_name', 'doctors.fname as doctor_name', 'availablities.day', 'availablities.time_from', 'availablities.time_to')
        ->paginate(10);


        // $hospital = Hospital::with(['doctors.availabilities'])
        //     ->when($hospitalId, function ($query) use ($hospitalId) {
        //         return $query->where('id', $hospitalId);
        //     })
        //     ->when($search, function ($query) use ($search) {
        //         return $query->whereHas('doctors', function ($query) use ($search) {
        //             $query->where('name', 'like', '%' . $search . '%');
        //         });
        //     })
        //     ->paginate(10);
            if($doctors){

                $data = [
                    "status" => "200",
                    "details" => [
                        'data' => $doctors,
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


   
    // apis end
}
