<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Rules\PincodeValidationRule;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Str;



class AuthController extends Controller
{
    public function PatientRegister(Request $request)
    {
        $data = [

                'fname' => $request->fname,
                'lname' => $request->lname,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'pincode' => $request->pincode,
                'gender' => $request->gender,
                'dob' => $request->dob,
                'password' => $request->password,
                'password_confirmation'=>$request->comfirm_password,
                'language' => $request->language,
        ];
        $rules = [

            'pincode' => ['required', new PincodeValidationRule],
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email|unique:patients',
            'password' => 'required|string|min:6|confirmed',
            'phone' =>'required|min:10|unique:patients',
            'gender'=>'required|string',
            'dob'=>'required|date_format:d/m/Y|before:today',
            'address'=>'required|string',
            'language'=>'required|string',
            // 'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ];
        // Validation
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            $data = [
                "status" => "400",
                "details" => [
                    'Message' => 'Error',
                    'Error' => $validator->errors(),
                ]
            ];
            return response()->json($data);
        } else {
             $dob = $data['dob'];
            $eighteenYearsAgo = now()->subYears(18);
        
            if (strtotime($dob) <= strtotime($eighteenYearsAgo)) {
                $user = Patient::create([
                'p_id' =>'MHI'.$request->phone ,
                'fname' => $request->fname,
                'lname' => $request->lname,
                'email' => $request->email,
                'phone' => $request->phone,
                'bloodgroup' => $request->bloodgroup,
                'disease' => $request->disease,
                'address' => $request->address,
                'pincode' => $request->pincode,
                // 'photo' => $request->photo,
                'emer_name' => $request->emer_name,
                'gender' => $request->gender,
                'dob' => $request->dob,
                'emer_address' => $request->emer_address,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => 1,
                'emer_contact_nu' => $request->emer_contact_nu,
                'height' => $request->height,
                'weight' => $request->weight,
                'password' => $request->password,
                'language' => $request->language,
                'token'=>Str::random(30),
            ]);
             if(isset($user))
       {
          $data= [
              "status" => "200",
                "details" => [
                    'Message' => 'Registered Successfully',
       ]
              ];
        return response()->json($data);
       }
       else
       {
           $data= [
              "status" => "400",
                "details" => [
                    'Message' => 'User Not registered ',
       ]
              ];
        return response()->json($data);
       }      
            } else {
                
                $data= [
                  "status" => "400",
                    "details" => [
                        'Message' => 'Error',
                        'Error' =>'Person must be at least 18 years old.'
                         ]
                  ];
              return response()->json($data);
            }
        }
    }
    public function Patientlogin(Request $request)
    {
        // Validation
        $data = [   
            'email' => $request->email,
            'password' => $request->password,
        ];
        $rules = [
            'email' => 'required|email',
            'password' => 'required|string',    
        ];
    $validator = Validator::make($data, $rules);

    if ($validator->fails()) {
        $data = [
                "status" => "400",
                "details" => [
                    'Message' => 'Error',
                    'Error' => $validator->errors(),
                ]
            ];
            return response()->json($data);
    } 
    else
    {
         $user = Patient::where('email',$request->email)->where('password', $request->password)->first();
         // Attempt to log in the user
        if (isset($user)) {
           
            $user->token = Str::random(30);
            $user->save();
        
            $data = [
                "status" => "200",
                "details" => [
                    'Message' => 'Login successful',
                    'UserInfo' => $user,
                ]
            ];
            return response()->json($data);
        } else {
            $data = [
                "status" => "201",
                "details" => [
                    'Message' => 'Error',
                    'Error' => 'Invalid credentials',
                ]
            ];
            return response()->json($data);
        }
    }      
    }
}
