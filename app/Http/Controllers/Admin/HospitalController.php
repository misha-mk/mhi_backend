<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Hospital;
use App\Models\Clinic;
use App\Models\Testimonial;
use App\Models\FAQ;
use App\Models\Benefits;
use App\Models\Facilites;
use Session;
use DateTime;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Http;


// use Illuminate\Http\Exceptions\HttpResponseException;



class HospitalController extends Controller
{
     // hospital function start
    public function index()
    {
        $hospitals = DB::table('hospitals')->get();
        return view('admin.hospital.index', compact('hospitals'));
    }
    public function charges()
    {
        $hospitals = DB::table('hospitals')->get();
        $clinics = DB::table('clinics')->get();
        return view('admin.hospital.charges', compact('hospitals','clinics'));
    }
    public function viewparticularhospital($id)
    {
        $hospitaldetails = DB::table('hospitals')->where('h_id', $id)->get();
        $doctors = DB::table('doctors')->where('provider_id',$id)->where('provider_type','Hospital')->get();
        return view('admin.hospital.viewhospitaldetails', compact('hospitaldetails','doctors'));
    }
    public function savetestimonial()
    {
        $data = [];
            $inputdata = Request::input();
            if (Request::file('photo')) {
               
                $file = Request::file('photo');
                $filename = $file->hashName();
                $file->move(public_path('photo'), $filename);
                $path = public_path('photo') . $filename;
                
            }
            $data[] = [
                
                'name' => $inputdata['name'],
                'hospital_id' => $inputdata['hospital_id'],
                'name' => $inputdata['name'],
                'photo' => $filename,
                'review' => $inputdata['review'],
                'title' => $inputdata['title'],
                'rating' => $inputdata['rating'],
                'email' => $inputdata['email'],
                'status' => $inputdata['status'],
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ];

            Testimonial::insert($data);
            $benefits = DB::table('benefits')->get();
            $facilites = DB::table('facilites')->get();
            $hospitals = DB::table('hospitals')->get();
            return view('admin.hospital.index',compact('hospitals','benefits','facilites'))->with([
                'message' => 'successfully Added !',
                'alert-type' => 'success'
            ]);
    }
    public function savehospitaldetails(Request $request)
    {
       
            $data = [];
            $inputdata = Request::input();
            if (Request::file('image')) {
               
                $file = Request::file('image');
                $filename = $file->hashName();
                $file->move(public_path('images'), $filename);
                $path = public_path('images') . $filename;
                
            }
            if (Request::file('registrationCerti')) {
               
                $file = Request::file('registrationCerti');
                $filename1 = $file->hashName();
                $file->move(public_path('images'), $filename1);
                $path = public_path('images') . $filename1;
                
            }
            $data[] = [
                
                'name' => $inputdata['name'],
                'address' => $inputdata['address'],
                'number_bed' => $inputdata['number_bed'],
                'email' => $inputdata['email'],
                'ots' => $inputdata['ots'],
                'fees' => $inputdata['fees'],
                'status' => $inputdata['status'],
                'contact' => $inputdata['contact'],
                'password' => $inputdata['password'],
                'website' => $inputdata['website'],
                'image' => $filename,
                'facilities' => json_encode($inputdata['facilities']),
                'pincode' => $inputdata['pincode'],
                'aboutUs' => $inputdata['editor1'],
                'emergencyward' => $inputdata['emergencyward'],
                'benifits' => json_encode($inputdata['benifits']),
                'registrationCerti' => $filename1,
                'ownername' => $inputdata['ownername'],
                'ownerphone' => $inputdata['ownerphone'],
                'owneremail' => $inputdata['owneremail'],
                'rname' => $inputdata['rname'],
                'rtype' => $inputdata['rtype'],
                'cmonumber' => $inputdata['cmonumber'],
                'nabh' => $inputdata['nabh'],
                'usp' => $inputdata['usp'],
                'rdate' => $inputdata['rdate'],
                'bankname' => $inputdata['bankname'],
                'acnumber' => $inputdata['acnumber'],
                'atype' => $inputdata['atype'],
                'acountholdername' => $inputdata['acountholdername'],
                'ifsc' => $inputdata['ifsc'],
                'update_at' => new DateTime(),
            ];
            
            hospital::insert($data);
            $benefits = DB::table('benefits')->get();
            $facilites = DB::table('facilites')->get();
            return view('admin.hospital.addhospital',compact('benefits','facilites'))->with([
                'message' => 'successfully Added !',
                'alert-type' => 'success'
            ]);
        
    }
    public function edithospitalinfo($id)
    {
        $benefits = DB::table('benefits')->get();
        $facilites = DB::table('facilites')->get();
        $hospitaldetails = DB::table('hospitals')->where('h_id', $id)->get();
        return view('admin.hospital.edithospital', compact('hospitaldetails','benefits','facilites'));
    }
   public function getLocation($pin)
   {
    // $response = Http::get('https://api.postalpincode.in/pincode/'.$pin);
    $data1 = DB::table('address')->where('Pincode',$pin)->get();
    
     $data = $data1->all();
    // dd($data);
    if ($data) {
       
        $state = $data[0]->State;
        $city = $data[0]->City;
    //    dd($state);
        return response()->json(['state' => $state, 'city' => $city]);
    } else {
        
        $data = [
            "status" => "400",
            "details" => [
                "message" => "Invalid Pin code"
            ]
        ];
        return response()->json($data);
    
    }
   }
    public function saveupdatedhospitalinfo(Request $request)
    {
        $inputdata = Request::input();
        $id = $inputdata['h_id'];
        $hospital = DB::table('hospitals')->where('h_id', $id)->get();
        if (empty($inputdata['image'])) {
            $filename = $hospital[0]->image;
        }
        if (empty($inputdata['registrationCerti'])) {
            $filename = $hospital[0]->registrationCerti;
        }
        $validator = Validator::make(Request::all(), [
            'image' => 'required|mimes:png,jpg,jpeg,pdf,docx',
        ]);
        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        } else {
            $data = [];
            if (Request::file('image')) {

                $file = Request::file('image');
                $filename = $file->hashName();
                $file->move(public_path('images'), $filename);
            }
            if (Request::file('registrationCerti')) {
               
                $file = Request::file('registrationCerti');
                $filename1 = $file->hashName();
                $file->move(public_path('images'), $filename1);
                $path = public_path('images') . $filename1;
                
            }
            $data[] = [
                
                'name' => $inputdata['name'],
                'address' => $inputdata['address'],
                'number_bed' => $inputdata['number_bed'],
                'email' => $inputdata['email'],
                'ots' => $inputdata['ots'],
                'fees' => $inputdata['fees'],
                'status' => $inputdata['status'],
                'contact' => $inputdata['contact'],
                'website' => $inputdata['website'],
                'image' => $filename,
                'facilities' => $inputdata['facilities'],
                'pincode' => $inputdata['pincode'],
                'aboutUs' => $inputdata['editor1'],
                'emergencyward' => $inputdata['emergencyward'],
                'benifits' => $inputdata['benifits'],
                'registrationCerti' => $filename1,
                'ownername' => $inputdata['ownername'],
                'ownerphone' => $inputdata['ownerphone'],
                'owneremail' => $inputdata['owneremail'],
                'rname' => $inputdata['rname'],
                'rtype' => $inputdata['rtype'],
                'cmonumber' => $inputdata['cmonumber'],
                'nabh' => $inputdata['nabh'],
                'usp' => $inputdata['usp'],
                'rdate' => $inputdata['rdate'],
                'bankname' => $inputdata['bankname'],
                'acnumber' => $inputdata['acnumber'],
                'atype' => $inputdata['atype'],
                'acountholdername' => $inputdata['acountholdername'],
                'ifsc' => $inputdata['ifsc'],
                'update_at' => new DateTime(),
            ];
            $affected = DB::table('hospitals')
                ->where('h_id', $id)  // find your user by their email
                ->limit(1)  // optional - to ensure only one record is updated.
                ->update($data[0]);  // update the record in the DB. 
            $hospitaldetails = DB::table('hospitals')->where('h_id', $id)->get();
            $benefits = DB::table('benefits')->get();
            $facilites = DB::table('facilites')->get();
            return view('admin.hospital.edithospital', compact('hospitaldetails','benefits','facilites'))->with([
                'message' => 'successfully updated !',
                'alert-type' => 'success'
            ]);
        }
    } 
    public function addhospital()
    {
        $benefits = DB::table('benefits')->get();
        $facilites = DB::table('facilites')->get();
        return view('admin.hospital.addhospital', compact('benefits','facilites'));

    }
    public function addtestimonial($id)
    {
        $hospitaldetails = DB::table('hospitals')->where('h_id', $id)->get();
        return view('admin.hospital.addtestimonial',compact('hospitaldetails'));
    }
    public function addfaq($id)
    {
        // var_dump("hello");die();
        $hospitaldetails = DB::table('hospitals')->where('h_id', $id)->get();
        return view('admin.hospital.addfaq',compact('hospitaldetails'));
    }
    public function savefaq()
    {
            $data = [];
            $inputdata = Request::input();
            $data[] = [
                
                'hospital_id' => $inputdata['hospital_id'],
                'question' => $inputdata['question'],
                'answer' => $inputdata['answer'],
                'status' => $inputdata['status'],
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ];

            FAQ::insert($data);
            $benefits = DB::table('benefits')->get();
            $facilites = DB::table('facilites')->get();
            $hospitals = DB::table('hospitals')->get();
            return view('admin.hospital.index',compact('hospitals','benefits','facilites'))->with([
                'message' => 'successfully Added !',
                'alert-type' => 'success'
            ]);
    }
    
   
    public function deletehospital($id)
    {
        $deleteduser = DB::table('hospitals')->where('h_id', $id)->delete();
        $hospitals = DB::table('hospitals')->get();
        return view('admin.hospital.index', compact('hospitals'))->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'success'
        ]);;
    }
    // hospital function end

    // clinic function start
    public function cliniclist()
    {
        $clinic = DB::table('clinics')->get();
        return view('admin.clinic.index', compact('clinic'));
    }
    public function viewparticularclinic($id)
    {
        $clinicdetails = DB::table('clinics')->where('c_id', $id)->get();
        $doctors = DB::table('doctors')->where('provider_id',$id)->where('provider_type','Clinic')->get();
        return view('admin.hospital.viewclinicdetails', compact('clinicdetails','doctors'));
    }
    public function saveclinicdetails(Request $request)
    {

            $data = [];
            $inputdata = Request::input();
            if (Request::file('image')) {
               
                $file = Request::file('image');
                $filename = $file->hashName();
                $file->move(public_path('images'), $filename);
                
            }
            if (Request::file('registrationCerti')) {
               
                $file = Request::file('registrationCerti');
                $filename1 = $file->hashName();
                $file->move(public_path('images'), $filename1);
                $path = public_path('images') . $filename1;   
            }
            $data[] = [
                
                'name' => $inputdata['name'],
                'address' => $inputdata['address'],
                'number_bed' => $inputdata['number_bed'],
                'email' => $inputdata['email'],
                'ots' => $inputdata['ots'],
                'website' => $inputdata['website'],
                'fees' => $inputdata['fees'],
                'status' => $inputdata['status'],
                'contact' => $inputdata['contact'],
                'password' => $inputdata['password'],
                'image' => $filename,
                'facilities' => json_encode($inputdata['facilities']),
                'pincode' => $inputdata['pincode'],
                'aboutUs' => $inputdata['editor1'],
                'emergencyward' => $inputdata['emergencyward'],
                'benifits' => json_encode($inputdata['benifits']),
                'registrationCerti' => $filename1,
                'ownername' => $inputdata['ownername'],
                'ownerphone' => $inputdata['ownerphone'],
                'owneremail' => $inputdata['owneremail'],
                'rname' => $inputdata['rname'],
                'rtype' => $inputdata['rtype'],
                'cmonumber' => $inputdata['cmonumber'],
                'nabh' => $inputdata['nabh'],
                'usp' => $inputdata['usp'],
                'rdate' => $inputdata['rdate'],
                'bankname' => $inputdata['bankname'],
                'acnumber' => $inputdata['acnumber'],
                'atype' => $inputdata['atype'],
                'acountholdername' => $inputdata['acountholdername'],
                'ifsc' => $inputdata['ifsc'],
                'created_at' => new DateTime(),
                'update_at' => new DateTime(),
            ];
            
            Clinic::insert($data);
            $benefits = DB::table('benefits')->get();
            $facilites = DB::table('facilites')->get();
            return view('admin.hospital.addclinic',compact('benefits','facilites'))->with([
                'message' => 'successfully Added !',
                'alert-type' => 'success'
            ]);
        
    }
    public function saveupdatedclinicinfo(Request $request)
    {
        $inputdata = Request::input();
        $id = $inputdata['c_id'];
        $hospital = DB::table('clinics')->where('c_id', $id)->get();
        if (empty($inputdata['image'])) {
            $filename = $hospital[0]->image;
        }
        if (empty($inputdata['registrationCerti'])) {
            $filename = $hospital[0]->registrationCerti;
        }
        $validator = Validator::make(Request::all(), [
            'image' => 'required|mimes:png,jpg,jpeg,pdf,docx',
        ]);
        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        } else {
            $data = [];
            if (Request::file('image')) {

                $file = Request::file('image');
                $filename = $file->hashName();
                $file->move(public_path('images'), $filename);
            }
            if (Request::file('registrationCerti')) {
               
                $file = Request::file('registrationCerti');
                $filename1 = $file->hashName();
                $file->move(public_path('images'), $filename1);
                $path = public_path('images') . $filename1;
                
            }
            $data[] = [
                
                'name' => $inputdata['name'],
                'address' => $inputdata['address'],
                'number_bed' => $inputdata['number_bed'],
                'email' => $inputdata['email'],
                'ots' => $inputdata['ots'],
                'fees' => $inputdata['fees'],
                'status' => $inputdata['status'],
                'contact' => $inputdata['contact'],
                'website' => $inputdata['website'],
                'image' => $filename,
                'facilities' => $inputdata['facilities'],
                'pincode' => $inputdata['pincode'],
                'aboutUs' => $inputdata['editor1'],
                'emergencyward' => $inputdata['emergencyward'],
                'benifits' => $inputdata['benifits'],
                'registrationCerti' => $filename1,
                'ownername' => $inputdata['ownername'],
                'ownerphone' => $inputdata['ownerphone'],
                'owneremail' => $inputdata['owneremail'],
                'rname' => $inputdata['rname'],
                'rtype' => $inputdata['rtype'],
                'cmonumber' => $inputdata['cmonumber'],
                'nabh' => $inputdata['nabh'],
                'usp' => $inputdata['usp'],
                'rdate' => $inputdata['rdate'],
                'bankname' => $inputdata['bankname'],
                'acnumber' => $inputdata['acnumber'],
                'atype' => $inputdata['atype'],
                'acountholdername' => $inputdata['acountholdername'],
                'ifsc' => $inputdata['ifsc'],
                'update_at' => new DateTime(),
            ];
            $affected = DB::table('clinics')
                ->where('c_id', $id)  // find your user by their email
                ->limit(1)  // optional - to ensure only one record is updated.
                ->update($data[0]);  // update the record in the DB. 
            $clinicdetails = DB::table('clinics')->where('c_id', $id)->get();
            $benefits = DB::table('benefits')->get();
            $facilites = DB::table('facilites')->get();
            return view('admin.hospital.editclinic', compact('clinicdetails','benefits','facilites'))->with([
                'message' => 'successfully updated !',
                'alert-type' => 'success'
            ]);
        }
    } 
    public function addclinic()
    {
        $benefits = DB::table('benefits')->get();
        $facilites = DB::table('facilites')->get();
        return view('admin.hospital.addclinic', compact('facilites','benefits'));

    }
    
    public function editclinicinfo($id)
    {
        $benefits = DB::table('benefits')->get();
        $facilites = DB::table('facilites')->get();
        $clinicdetails = DB::table('clinics')->where('c_id', $id)->get();
        return view('admin.hospital.editclinic')->with(compact('clinicdetails','benefits','facilites'));
    }
    public function deleteclinic($id)
    {
        $deleteduser = DB::table('clinics')->where('c_id', $id)->delete();
        $clinic = DB::table('clinics')->get();
        return view('admin.clinic.index', compact('clinic'))->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'success'
        ]);;
    }
    // clinic function end 

    // apis start
    public function getTop5Hospitals()
    {
        $hospitals = DB::table('hospitals')->get();
    //  var_dump($hospitals['image']);die();
        // $hospitals->image = public_path('images').$hospitals->image;
    // $hospitals->save();
        if ($hospitals) {
            $hospitals = json_encode($hospitals);
            
            $hospitals = response()->json($hospitals);
            $data = [
                "status" => "200",
                "details" => [
                    'data' => $hospitals,
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
    public function getTop5Clinic()
    {
        $hospitals = DB::table('clinics')->get();
        if ($hospitals) {
            $hospitals = json_encode($hospitals);
            $hospitals = response()->json($hospitals);
            $data = [
                "status" => "200",
                "details" => [
                    'data' => $hospitals,
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
