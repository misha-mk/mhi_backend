<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Patient;
use Session;
use DateTime;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Http\Exceptions\HttpResponseException;



class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient = DB::table('patients')->get();
        // var_dump($patient);die();
        return view('admin.patients.index', compact('patient'));
    }

    // public function showToken() {

    //   }
    public function create()
    {
        return view('admin.patients.create');
    }


    public function updatepatient(Request $request)
    {
        $inputdata = Request::input();
        $id = $inputdata['id'];
        $patient = DB::table('patients')->where('id', $id)->get();
        // ar_dump($patient);die();v
        // var_dump($patient[0]->photo);die();
        if (empty($inputdata['photo'])) {
            $inputdata['photo'] = $patient[0]->photo;
        }
        if (empty($inputdata['disease'])) {
            $inputdata['disease'] = $patient->disease;
        }
        $validator = Validator::make(Request::all(), [
            'photo' => 'required|mimes:png,jpg,jpeg,pdf,docx',
        ]);
        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        } else {
            $data = [];
            //  $inputdata = Request::input();
            if (Request::file('photo')) {

                $file = Request::file('photo');
                $filename = $file->hashName();
                $file->move(public_path('images'), $filename);
            }
            $data[] = [
                'fname' => $inputdata['fname'],
                'lname' => $inputdata['lname'],
                'email' => $inputdata['email'],
                'dob' => $inputdata['dob'],
                'phone' => $inputdata['phone'],
                'gender' => 'Female',
                'status' => $inputdata['status'],
                'bloodgroup' => $inputdata['bloodgroup'],
                'photo' => $filename,
                'address' => $inputdata['address'],
                'pincode' => $inputdata['pincode'],
                'emer_name' => $inputdata['emer_name'],
                'emer_contact_nu' => $inputdata['emer_contact_nu'],
                'disease' => json_encode($inputdata['disease']),
                'updated_at' => new DateTime(),

            ];
           
            //  var_dump($data);die();
            $affected = DB::table('patients')
                ->where('id', $id)  // find your user by their email
                ->limit(1)  // optional - to ensure only one record is updated.
                ->update($data[0]);  // update the record in the DB. 

            return view('admin.patients.index')->with([
                'message' => 'successfully updated !',
                'alert-type' => 'success'
            ]);
        }
    }

    public function save(Request $request, $id)
    {

        $validator = Validator::make(Request::all(), [
            'password' => 'required|required_with:password_confirmation|same:password_confirmation',
            'photo' => 'required|mimes:png,jpg,jpeg,pdf,docx',
        ]);
        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        } else {
            $data = [];
            $inputdata = Request::input();
            if (Request::file('photo')) {

                $file = Request::file('photo');
                $filename = $file->hashName();
                $file->move(public_path('images'), $filename);
            }
            $data[] = [
                'p_id'  => 'MHI' . $inputdata['fname'],
                'fname' => $inputdata['fname'],
                'lname' => $inputdata['lname'],
                'email' => $inputdata['email'],
                'dob' => $inputdata['dob'],
                'phone' => $inputdata['phone'],
                'gender' => 'F',
                'status' => $inputdata['status'],
                'bloodgroup' => $inputdata['bloodgroup'],
                'password' => $inputdata['password'],
                'photo' => $filename,
                'address' => $inputdata['address'],
                'pincode' => $inputdata['pincode'],
                'emer_name' => $inputdata['emer_name'],
                'emer_contact_nu' => $inputdata['emer_contact_nu'],
                'disease' => json_encode($inputdata['disease']),
                'created_at' => new DateTime(),
                'update_at' => new DateTime(),
            ];
            Patient::insert($data);
            return view('admin.patients.create')->with([
                'message' => 'successfully created !',
                'alert-type' => 'success'
            ]);
        }
    }


    public function editpatient($id)
    {
        $patient = DB::table('patients')->where('id', $id)->get();
        return view('admin.patients.edit', compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->validated() + ['password' => bcrypt($request->password)]);
        $user->roles()->sync($request->input('roles'));

        return redirect()->route('admin.users.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::pluck('title', 'id');

        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated() + ['password' => bcrypt($request->password)]);
        $user->roles()->sync($request->input('roles'));

        return redirect()->route('admin.users.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index')->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }

    /**
     * Delete all selected Permission at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        User::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }



    // apis for patient start
    public function apigetp()
    {
        $patient = DB::table('patients')->get();
        if ($patient) {
            $patient = json_encode($patient);
            $patient = response()->json($patient);
            $data = [
                "status" => "200",
                "details" => [
                    'data' => $patient,

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

    public function rules()
    {
        return [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|max:50',
            'dob' => 'required',
            'gender' => 'required',
            'bloodgroup' => 'required',
            'password' => 'required',
            'photo' => 'required|mimes:png,jpg,jpeg,pdf,docx',
            'address' => 'required',
            'pincode' => 'required',
            'emer_name' => 'required',
            'emer_contact_nu' => 'required',
            'disease' => 'required|min:6',
            
        ];
    }

    public function saveapidata(Request $request)
    {
       
        $validator = Validator::make(Request::all(), [ 
            'password'=> 'required|required_with:password_confirmation|same:password_confirmation',
            'photo' => 'required|mimes:png,jpg,jpeg,pdf,docx',
        ]);
        if ($validator->fails()) {
            $responseArr = CustomHelper::returnRespArr("");
            $responseArr['message'] = $validator->errors();;
            $responseArr['token'] = '';
            return response()->json($responseArr, Response::HTTP_BAD_REQUEST);
        }
        
        else{
        $data = [];
        $inputdata = Request::input();
        // if(Request::file('photo')) {

        //     $file = Request::file('photo');
        //     $filename = $file->hashName(); 
        //     $file->move(public_path('images'),$filename);

        // }

        $data[] = [
            'p_id'  => 'MHI' . $inputdata['fname'],
            'fname' => $inputdata['fname'],
            'lname' => $inputdata['lname'],
            'email' => $inputdata['email'],
            'dob' => $inputdata['dob'],
            'phone' => $inputdata['phone'],
            'gender' => $inputdata['gender'],
            'status' => $inputdata['status'],
            'bloodgroup' => $inputdata['bloodgroup'],
            'password' => $inputdata['password'],
            'photo' => $inputdata['photo'],
            'address' => $inputdata['address'],
            'pincode' => $inputdata['pincode'],
            'emer_name' => $inputdata['emer_name'],
            'emer_contact_nu' => $inputdata['emer_contact_nu'],
            'disease' => json_encode($inputdata['disease']),
            'created_at' => new DateTime(),
            'update_at' => new DateTime(),
        ];
        $patient = Patient::insert($data);
        if ($patient) {

            $data = [
                "status" => "200",
                "details" => [
                    "message" => "Data stored !!"
                ]
            ];
            return response()->json($data);
        } else {
            $data = [
                "status" => "201",
                "details" => [

                    "message" => "Bad Request : Data storing failed !!"
                ]
            ];
            return response()->json($data);
        }
    }
    }
    // apis for patient end
}
