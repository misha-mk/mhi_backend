<?php

use App\Http\Controllers\Api;

use App\Models\Role;
use App\Models\User;
use App\Models\Patient;
use Session;
use DateTime;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
// use App\Http\Requests\Admin\StoreUserRequest;
// use App\Http\Requests\Admin\UpdateUserRequest;
use Illuminate\Support\Facades\Validator;


class ApiController extends Controller
{
    
    public function hello()
    {
        $data = [
            "status" => "201",
            "details" => [
                'id'=> 1,
                
                "message"=> "Bad Request : Data not found !!"            
            ]
        ];
        return response()->json($data);  
    }
    public function index()
    {
        $patient = DB::table('patients')->get();
        if($patient)
        {
            $patient = json_encode($patient);
            $patient = response()->json($patient);
            $data=[
                "status" => "200",
                "details" => [
                    'data'=> $patient,
                    
                    "message"=> "Data Fetched !!"            
                ]
                ];
                return response()->json($data);  
        }
        else{
            $data = [
                "status" => "201",
                "details" => [
                    'id'=> 1,
                    
                    "message"=> "Bad Request : Data not found !!"            
                ]
            ];
            return response()->json($data);  
        }
    }

    
   
    public function saveapidata(Request $request)
    {
    //         $validator = Validator::make(Request::all(), [
    //            'password'=> 'required|required_with:password_confirmation|same:password_confirmation',
    //            'photo' => 'required|mimes:png,jpg,jpeg,pdf,docx',
    //        ]);
    //        if ($validator->fails()) {
    //         return response()->json($validator->messages(), Response::HTTP_BAD_REQUEST);
    //    }
    //    else{
        $data = [];
        $inputdata = Request::input();
        if(Request::file('photo')) {

            $file = Request::file('photo');
            $filename = $file->hashName(); 
            $file->move(public_path('images'),$filename);
                 
        }
      
        $data[] = [
            'p_id'  =>'MHI'.$inputdata['fname'] ,
            'fname' => $inputdata['fname'] ,
            'lname' => $inputdata['lname'] ,
            'email' => $inputdata['email'] ,
            'dob' => $inputdata['dob'] ,
            'phone' => $inputdata['phone'] ,
            'gender' => 'F' ,
            'status' => $inputdata['status'] ,
            'bloodgroup' => $inputdata['bloodgroup'] ,
            'password' => $inputdata['password'] ,
            'photo' => $filename ,
            'address' => $inputdata['address'] ,
            'pincode' => $inputdata['pincode'] ,
            'emer_name' => $inputdata['emer_name'] ,
            'emer_contact_nu' => $inputdata['emer_contact_nu'] ,
            'disease' => json_encode($inputdata['disease']),
            'created_at' => new DateTime(),
            'update_at' => new DateTime(),
        ];
        Patient::insert($data);
        if($patient)
        {
            
            $data=[
                "status" => "200",
                "details" => [
                    "message"=> "Data stored !!"            
                ]
                ];
                return response()->json($data);  
        }
        else{
            $data = [
                "status" => "201",
                "details" => [
                   
                    "message"=> "Bad Request : Data storing failed !!"            
                ]
            ];
            return response()->json($data);  
        
        }
    }
   
    public function updatepatient(Request $request)
    {
        $inputdata = Request::input();
        $id = $inputdata['id'];
        $patient = DB::table('patients')->where('id', $id)->get();
        
        if(empty($inputdata['photo']))
        {
            return response()->json("Image can not be empty", Response::HTTP_BAD_REQUEST);
        }
        if(empty($inputdata['disease']))
        {
            return response()->json("Disease can not be empty", Response::HTTP_BAD_REQUEST);
        }
        $validator = Validator::make(Request::all(), [
            'photo' => 'required|mimes:png,jpg,jpeg,pdf,docx',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->messages(), Response::HTTP_BAD_REQUEST);
    }
    
    else{
     $data = [];
    //  $inputdata = Request::input();
     if(Request::file('photo')) {

         $file = Request::file('photo');
         $filename = $file->hashName(); 
         $file->move(public_path('images'),$filename);
              
     }
     $data[] = [
         'fname' => $inputdata['fname'] ,
         'lname' => $inputdata['lname'] ,
         'email' => $inputdata['email'] ,
         'dob' => $inputdata['dob'] ,
         'phone' => $inputdata['phone'] ,
         'gender' => 'Female' ,
         'status' => $inputdata['status'] ,
         'bloodgroup' => $inputdata['bloodgroup'] ,
         'photo' => $filename ,
         'address' => $inputdata['address'] ,
         'pincode' => $inputdata['pincode'] ,
         'emer_name' => $inputdata['emer_name'] ,
         'emer_contact_nu' => $inputdata['emer_contact_nu'] ,
         'disease' => json_encode($inputdata['disease']),
         'created_at' => new DateTime(),
        
     ];
    //  var_dump($data);die();
     $affected = DB::table('patients')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data[0]);  // update the record in the DB. 
    
        if($affected)
        {
            
            $data=[
                "status" => "200",
                "details" => [
                    "message"=> "Data updated !!"            
                ]
                ];
                return response()->json($data);  
        }
        else{
            $data = [
                "status" => "201",
                "details" => [
                   
                    "message"=> "Bad Request : Data updating failed !!"            
                ]
            ];
            return response()->json($data);  
        }
    }

    }

    
}
