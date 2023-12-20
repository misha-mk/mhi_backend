<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\Department;
use Session;
use DateTime;
use DB;
use App\Models\Hospital;
// use App\Models\Doctor;
use App\Http\Controllers\Controller;
// use Illuminate\Database\Query\Builder;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Models\Doctor;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;


// use Illuminate\Http\Exceptions\HttpResponseException;



class DepartmentController extends Controller
{
    public function index()
    {
        $departments = DB::table('departments')->get();
        return view('admin.department.index', compact('departments'));

    }
    public function availblity($d_id,$p_id,$p_type)
    {
        $doctordetails = DB::table('availablities')->where('doctor_id', $d_id)->where('provider_id',$p_id)->where('provider_type',$p_type)->get();
        // $count = count($doctordetails);
        // for($i=0; $i < $count; $i++)
        // {
        //     $numberOfSlots = [];
        //     $totalhours = ($doctordetails->time_from)->diff($doctordetails->time_to);
        //     $totalTimeMinutes = $totalhours * 60;
            // Calculate the number of slots
            //  $numberOfSlots[$i] = $totalTimeMinutes / ($doctordetails->slottime);


        // }

        if ($doctordetails) {
            // $departments = json_encode($departments);
            // $departments = response()->json($departments);
            $data = [
                "status" => "200",
                "details" => [
                    
                    'Hospital_Details' => $doctordetails,
                    "message" => "Data Fetched !!"
                ]
            ];
            return response()->json($data);
        } else {
            $data = [
                "status" => "400",
                "details" => [
                    'id' => 1,

                    "message" => "Bad Request : Data not found !!"
                ]
            ];
            return response()->json($data);
        }

    }
    public function HospitalDetails($id)
    {
        $hospitals = DB::table('hospitals')->where('h_id',$id)->get();
    
        
        if ($hospitals) {
            // $departments = json_encode($departments);
            // $departments = response()->json($departments);
            $data = [
                "status" => "200",
                "details" => [
                    
                    'Hospital_Details' => $hospitals,
                    "message" => "Data Fetched !!"
                ]
            ];
            return response()->json($data);
        } else {
            $data = [
                "status" => "400",
                "details" => [
                    'id' => 1,

                    "message" => "Bad Request : Data not found !!"
                ]
            ];
            return response()->json($data);
        }
    }
    public function ClinicDetails($id)
    {
        $clinics = DB::table('clinics')->where('c_id',$id)->get();
    
        
        if ($clinics) {
            // $departments = json_encode($departments);
            // $departments = response()->json($departments);
            $data = [
                "status" => "200",
                "details" => [
                    
                    'Clinic_Details' => $clinics,
                    "message" => "Data Fetched !!"
                ]
            ];
            return response()->json($data);
        } else {
            $data = [
                "status" => "400",
                "details" => [
                    'id' => 1,
                    "message" => "Bad Request : Data not found !!"
                ]
            ];
            return response()->json($data);
        }
    }
    // public function PatientRegister(Request $request)
    // {
     
    // }
    public function DoctorDetails($id)
    {
        $doctor = DB::table('doctors')->where('d_id',$id)->get();
    
        
        if ($doctor) {
            // $departments = json_encode($departments);
            // $departments = response()->json($departments);
            $data = [
                "status" => "200",
                "details" => [
                    
                    'Doctor_Details' => $doctor,
                    "message" => "Data Fetched !!"
                ]
            ];
            return response()->json($data);
        } else {
            $data = [
                "status" => "400",
                "details" => [
                    'id' => 1,

                    "message" => "Bad Request : Data not found !!"
                ]
            ];
            return response()->json($data);
        }
    }
    public function getHomePageInfo()
    {
        // $user = $request->user();
        // if ($user) {
            // dd($user);
            // Authenticated user logic here
        $departments = DB::table('departments')->get();
        $aboutUs = DB::table('aboutUs')->get();
        $banners = DB::table('banners')->get();
        $contactus = DB::table('contactus')->get();
        $top10hospitals = DB::table('hospitals')->orderBy('created_at', 'desc')->take(10)->get();
        $top10doctors = DB::table('doctors')->orderBy('created_at', 'desc')->take(10)->get();
        $socialMedia = DB::table('socialMedia')->get();
        $testimonials = DB::table('testimonials')->orderBy('created_at', 'desc')->take(10)->get();
        $top10clinics = DB::table('clinics')->orderBy('created_at', 'desc')->take(10)->get();
        if ($departments && $aboutUs  && $banners &&  $contactus &&  $top10hospitals  && $top10doctors && $socialMedia && $testimonials && $top10clinics) {
            // $departments = json_encode($departments);
            // $departments = response()->json($departments);
            $data = [
                "status" => "200",
                "Message" => "Authenticated userr",
                "details" => [
                    'departments' => $departments,
                    'Hospitals' => $top10hospitals,
                    'Clinics' => $top10clinics,
                    'Doctors' => $top10doctors,
                    'Banner' => $banners,
                    'Aboutus' => $aboutUs,
                    'social_media' => $socialMedia,
                    'testimonial' => $testimonials,
                    'contact' => $contactus,
                    "message" => "Data Fetched !!"
                ]
            ];
            return response()->json($data);
        } else {
            $data = [
                "status" => "400",
                "details" => [
                    'id' => 1,
                    "message" => "Bad Request : Data not found !!"
                ]
            ];
            return response()->json($data);
        }
            // return response()->json(['message' => 'Authenticated user', 'user' => $user]);
        // } else {
            // Guest user logic here
        // $departments = DB::table('departments')->get();
        // $aboutUs = DB::table('aboutUs')->get();
        // $banners = DB::table('banners')->get();
        // $contactus = DB::table('contactus')->get();
        // $top10hospitals = DB::table('hospitals')->orderBy('created_at', 'desc')->take(10)->get();
        // $top10doctors = DB::table('doctors')->orderBy('created_at', 'desc')->take(10)->get();
        // $socialMedia = DB::table('socialMedia')->get();
        // $testimonials = DB::table('testimonials')->orderBy('created_at', 'desc')->take(10)->get();
        // $top10clinics = DB::table('clinics')->orderBy('created_at', 'desc')->take(10)->get();
        // if ($departments && $aboutUs  && $banners &&  $contactus &&  $top10hospitals  && $top10doctors && $socialMedia && $testimonials && $top10clinics) {
            // $departments = json_encode($departments);
            // $departments = response()->json($departments);
        //     $data = [
        //         "status" => "200",
        //         "Message" => "Guest user",
        //         "details" => [
        //             'departments' => $departments,
        //             'Hospitals' => $top10hospitals,
        //             'Clinics' => $top10clinics,
        //             'Doctors' => $top10doctors,
        //             'Banner' => $banners,
        //             'Aboutus' => $aboutUs,
        //             'social_media' => $socialMedia,
        //             'testimonial' => $testimonials,
        //             'contact' => $contactus,
        //             "message" => "Data Fetched !!"
        //         ]
        //     ];
        //     return response()->json($data);
        // } else {
        //     $data = [
        //         "status" => "400",
        //         "details" => [
        //             'id' => 1,
        //             "message" => "Bad Request : Data not found !!"
        //         ]
        //     ];
        //     return response()->json($data);
        // }
        // }
        
        

    }
    public function editdepartment($id)
    {
        $departmentsdetails = DB::table('departments')->where('department_id', $id)->get();
        return view('admin.department.editdepartment', compact('departmentsdetails'));
    }
    public function adddepartment(Request $request)
    {
        return view('admin.department.adddepartment');
    }
    public function savedepartmentdata(Request $request)
    {
        $data = [];
        $inputdata = Request::input();
        $data[] = [
            'department_name'  => $inputdata['department_name'],
            'status' => $inputdata['status'],
            'created_at' => new DateTime(),
           
        ];
        Department::insert($data);
        return view('admin.department.adddepartment')->with([
            'message' => 'successfully Added !',
            'alert-type' => 'success'
        ]);
    }
    public function saveupdateddepartmentdata(Request $request ,$id)
    {

        $inputdata = Request::input();
        $data[] = [
            'department_name'  => $inputdata['department_name'],
            'status' => $inputdata['status'],
            'updated_at' => new DateTime(),
           
        ];
        $affected = DB::table('departments')
                ->where('department_id', $id)  // find your user by their email
                ->limit(1)  // optional - to ensure only one record is updated.
                ->update($data[0]);  // update the record in the DB. 
        $departmentsdetails = DB::table('departments')->where('department_id', $id)->get();
            return view('admin.department.editdepartment',compact('departmentsdetails'))->with([
                'message' => 'successfully updated !',
                'alert-type' => 'success'
            ]);
    }
    public function deletedepartment($id)
    {
        $deleteduser = DB::table('departments')->where('department_id', $id)->delete();
        $departments = DB::table('departments')->get();
        return view('admin.department.index', compact('departments'))->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'success'
        ]);;

    }
    public function AllHospitals(Request $request)
    {
        // $hospitalId = Request::input('hospital_id');
        // $search = Request::input('search');

        // $doctors = DB::table('hospitals')
        // ->join('doctors', 'hospitals.h_id', '=', 'doctors.provider_id')
        // ->join('availablities', 'doctors.d_id', '=', 'availablities.doctor_id')
        // ->when($search, function ($query) use ($search) {
        //     $query->where('doctors.fname', 'like', '%' . $search . '%');
        // })
        // ->select('hospitals.name as hospital_name', 'doctors.fname as doctor_name', 'availablities.day', 'availablities.time_from', 'availablities.time_to')
        // ->paginate(10);
        
        $perPage = Request::input('per_page', 1);
        $query = Request::input('query');
        $city = Request::input('city');
        $benifits = Request::input('benifits');
        //  dd($benifits);die();
        $hospitals = Hospital::query();
        $hospitals=  $hospitals->join('doctors', 'hospitals.h_id', '=', 'doctors.provider_id')
        ->join('availablities', 'doctors.d_id', '=', 'availablities.doctor_id');
        // $hospitals = $hospitals->where('doctors.provider_type', 'Hospital');
        if ($query) {
            $hospitals->where(function ($queryBuilder) use ($query) {
                $queryBuilder->where('name', 'like', "%$query%")
                             ->orWhere('city', 'like', "%$query%");
                            // ->orWhere('benifits', 'like', "%$query%");
            });
        }
        if ($city) {
            $hospitals->where('city', $city);
        }
        if ($benifits) {
         
            $results = $hospitals->whereRaw("JSON_SEARCH(benifits, 'one', ?) IS NOT NULL", [$benifits])->get();
        }
        $results = $hospitals->paginate($perPage);
        $formattedData = [];
        $currentHospitalId = null;
        $currentDoctorId = null;

        foreach ($results as $hospital) {
            if ($currentHospitalId !== $hospital->h_id) {
                $currentHospitalId = $hospital->h_id;
                $currentDoctorId = null;

                $formattedData[$currentHospitalId] = [
                    'hospital_id' => $hospital->h_id,
                    'hospital_name' => $hospital->name,
                    'doctors' => [],
                ];
            }

            if ($currentDoctorId !== $hospital->d_id) {
                $currentDoctorId = $hospital->d_id;
                $formattedData[$currentHospitalId]['doctors'][$currentDoctorId] = [
                    'doctor_id' => $hospital->d_id,
                    'doctor_name' => $hospital->fname,
                    'availabilities' => [],
                ];
            }

            if ($hospital->day && $hospital->time_from && $hospital->time_to) {
                $formattedData[$currentHospitalId]['doctors'][$currentDoctorId]['availabilities'][] = [
                    'day' => $hospital->day,
                    'time_from' => $hospital->time_from,
                    'time_to' => $hospital->time_to,
                ];
            }
        }
        // $formattedData = $results->groupBy('h_id')->map(function ($items) {
        //     $hospital = $items->first();
        //     $doctors = $items->map(function ($item) {
        //         return [
        //             'doctor_details' => $item->d_id,
        //             'doctor_firstname' => $item->fname,
        //             'doctor_lastname' => $item->lname,

                    
        //             'day' => $item->day,
        //             'from-time' => $item->time_from,
        //             'to-time' => $item->time_to,
        //         ];
        //     })->toArray();

        //     return [
        //         'hospital_details' => $hospital,
        //         'doctors' => $doctors,
        //     ];
        // })->values();
       
       
        return response()->json($formattedData);
    }
    public function AllDoctorsofHospital(Request $request,$id,$type)
    {
        
               
        $perPage = Request::input('per_page', 1);
        $query = Request::input('query');
        // $city = Request::input('city');
        $specilities = Request::input('specilities');
        //  dd($benifits);die();
        $doctors = Doctor::query();
        if($id && $type)
        {
            $doctors->where('provider_id', $id)->where('provider_type',$type);
        }
        if ($query) {
            $doctors->where(function ($queryBuilder) use ($query) {
                $queryBuilder->where('fname', 'like', "%$query%")
                             ->orWhere('lname', 'like', "%$query%")
                            ->orWhere('benifits', 'like', "%$query%");
            });
        }
        // if ($city) {
        //     $doctors->where('city', $city);
        // }
        if ($specilities) {
         
            $results = $doctors->whereRaw("JSON_SEARCH(specilities, 'one', ?) IS NOT NULL", [$specilities])->get();
        }
        $results = $doctors->paginate($perPage);
       
        return response()->json($results);
    }
    public function settings()
    {
        $bloodgroups = DB::table('bloodGroup')->where('status','Active')->get();
        $languages = DB::table('languages')->where('status','Active')->get();
        if ($bloodgroups && $languages) {
        $data = [
            "status" => "200",
            "details" => [
                'Bloodgroups' => $bloodgroups,
                'Languages' => $languages,
                "message" => "Data Fetched !!"
            ]
        ];
        return response()->json($data);
    }
    else
    {
        $data = [
            "status" => "400",
            "details" => [
                'id' => 1,
                "message" => "Bad Request : Data not found !!"
            ]
        ];
        return response()->json($data);
    }
    }

}
