<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Hospital;
use App\Models\Clinic;
use App\Models\Benefits;
use App\Models\Enquiry;
use Session;
use DateTime;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Http\Exceptions\HttpResponseException;



class EnquiryController extends Controller
{
    public function index()
    {
        $enquiry = DB::table('enquiry')->get();
        return view('admin.enquiry.index', compact('enquiry'));
    }
}