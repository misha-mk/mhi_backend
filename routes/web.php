<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HospitalController;
use App\Models\Hospital;
;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login.index');
Route::get('/', function () {
  return view('auth.login');
});
// Route::get('register', [\App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register.create');
Route::group(['middleware' => ['auth','isAdmin'],'prefix' => 'admin', 'as' => 'admin.'], function() {
  // website route start 
  
  // website route end 
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);
    Route::delete('permissions_mass_destroy', [\App\Http\Controllers\Admin\PermissionController::class, 'massDestroy'])->name('permissions.mass_destroy');
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::delete('roles_mass_destroy', [\App\Http\Controllers\Admin\RoleController::class, 'massDestroy'])->name('roles.mass_destroy');

    // patient route start
    Route::get('patient', [\App\Http\Controllers\Admin\PatientController::class , 'index'])->name('patient.index');
    Route::get('createnewpatient', [\App\Http\Controllers\Admin\PatientController::class , 'create'])->name('patient.createnewpatient');
    Route::get('editpatient/{id}', [\App\Http\Controllers\Admin\PatientController::class , 'editpatient'])->name('patient.editpatient');
    Route::post('savepatient', [\App\Http\Controllers\Admin\PatientController::class , 'save'])->name('patient.savepatient');
    Route::post('updatepatient', [\App\Http\Controllers\Admin\PatientController::class , 'updatepatient'])->name('patient.updatepatient');
    // patient route end 

    // Doctor route start 
   
    Route::get('/events', [\App\Http\Controllers\Admin\DoctorController::class , 'events'])->name('doctor.events');
    Route::post('saveAvailablity', [\App\Http\Controllers\Admin\DoctorController::class , 'saveAvailablity'])->name('doctor.saveAvailablity');
    Route::get('setAvailibility/{id}/{h_id}/{p_type}', [\App\Http\Controllers\Admin\DoctorController::class , 'setAvailibility'])->name('doctor.setAvailibility');
    Route::get('viewAvailibility/{id}/{h_id}/{p_type}', [\App\Http\Controllers\Admin\DoctorController::class , 'viewAvailibility'])->name('doctor.viewAvailibility');
    Route::post('savedoctordetails', [\App\Http\Controllers\Admin\DoctorController::class , 'savedoctordetails'])->name('doctor.savedoctordetails');
    Route::post('updatedoctordetails/{id}', [\App\Http\Controllers\Admin\DoctorController::class , 'updatedoctordetails'])->name('doctor.updatedoctordetails');
    Route::get('addDoctor/{id}/{type}', [\App\Http\Controllers\Admin\DoctorController::class , 'addDoctor'])->name('doctor.addDoctor');
    Route::get('editDoctor/{id}/{d_id}/{type}', [\App\Http\Controllers\Admin\DoctorController::class , 'editDoctor'])->name('doctor.editDoctor');
    Route::get('/doctor', [\App\Http\Controllers\Admin\DoctorController::class , 'index'])->name('doctor.index');
    Route::get('viewparticulardoctor/{id}', [\App\Http\Controllers\Admin\DoctorController::class , 'viewparticulardoctordeatils'])->name('doctor.viewparticulardoctor');
    // Doctor route end 

    // hospital route start
    // Route::get('/get-location/{pin}', [\App\Http\Controllers\Admin\HospitalController::class, 'getLocation']);
    
    Route::get('/hospital', [\App\Http\Controllers\Admin\HospitalController::class , 'index'])->name('hospital.index');
    Route::get('viewparticularhospital/{id}', [\App\Http\Controllers\Admin\HospitalController::class , 'viewparticularhospital'])->name('hospital.viewparticularhospital');
    Route::get('addhospital', [\App\Http\Controllers\Admin\HospitalController::class , 'addhospital'])->name('hospital.addhospital');
    Route::get('edithospitalinfo/{id}', [\App\Http\Controllers\Admin\HospitalController::class , 'edithospitalinfo'])->name('hospital.edithospitalinfo');
    Route::post('savehospitaldetails', [\App\Http\Controllers\Admin\HospitalController::class , 'savehospitaldetails'])->name('hospital.savehospitaldetails');
    Route::post('saveupdatedhospitalinfo', [\App\Http\Controllers\Admin\HospitalController::class , 'saveupdatedhospitalinfo'])->name('hospital.saveupdatedhospitalinfo');
    Route::get('deletehospital/{id}', [\App\Http\Controllers\Admin\HospitalController::class , 'deletehospital'])->name('hospital.deletehospital');
    Route::get('charges', [\App\Http\Controllers\Admin\HospitalController::class , 'charges'])->name('hospital.charges');
    Route::get('addtestimonial/{id}', [\App\Http\Controllers\Admin\HospitalController::class , 'addtestimonial'])->name('hospital.addtestimonial');
    Route::post('savetestimonial', [\App\Http\Controllers\Admin\HospitalController::class , 'savetestimonial'])->name('hospital.savetestimonial');
    Route::get('addfaq/{id}', [\App\Http\Controllers\Admin\HospitalController::class , 'addfaq'])->name('hospital.addfaq');
    Route::post('savefaq', [\App\Http\Controllers\Admin\HospitalController::class , 'savefaq'])->name('hospital.savefaq');
    // hospital route end 

    // Clinic route start
    Route::get('cliniclist', [\App\Http\Controllers\Admin\HospitalController::class , 'cliniclist'])->name('hospital.cliniclist');
    Route::get('viewparticularclinic/{id}', [\App\Http\Controllers\Admin\HospitalController::class , 'viewparticularclinic'])->name('hospital.viewparticularclinic');
    Route::get('addclinic', [\App\Http\Controllers\Admin\HospitalController::class , 'addclinic'])->name('hospital.addclinic');
    Route::get('editclinicinfo/{id}', [\App\Http\Controllers\Admin\HospitalController::class , 'editclinicinfo'])->name('hospital.editclinicinfo');
    Route::post('saveclinicdetails', [\App\Http\Controllers\Admin\HospitalController::class , 'saveclinicdetails'])->name('hospital.saveclinicdetails');
    Route::post('saveupdatedclinicinfo', [\App\Http\Controllers\Admin\HospitalController::class , 'saveupdatedclinicinfo'])->name('hospital.saveupdatedclinicinfo');
    Route::get('deleteclinic/{id}', [\App\Http\Controllers\Admin\HospitalController::class , 'deleteclinic'])->name('hospital.deleteclinic');
    // Clinic route end 

    // departments route start
    Route::get('department', [\App\Http\Controllers\Admin\DepartmentController::class , 'index'])->name('department.index');
    Route::get('adddepartment', [\App\Http\Controllers\Admin\DepartmentController::class , 'adddepartment'])->name('department.adddepartment');
    Route::post('savedepartmentdata', [\App\Http\Controllers\Admin\DepartmentController::class , 'savedepartmentdata'])->name('department.savedepartmentdata');
    Route::get('editdepartment/{id}', [\App\Http\Controllers\Admin\DepartmentController::class , 'editdepartment'])->name('department.editdepartment');
    Route::post('saveupdateddepartmentdata/{id}', [\App\Http\Controllers\Admin\DepartmentController::class , 'saveupdateddepartmentdata'])->name('department.saveupdateddepartmentdata');
    Route::get('deletedepartment/{id}', [\App\Http\Controllers\Admin\DepartmentController::class , 'deletedepartment'])->name('department.deletedepartment');
    // department route end 

     // Benefits route start
     Route::get('benefits', [\App\Http\Controllers\Admin\BenefitsController::class , 'index'])->name('benefits.index');
     Route::get('addbenefits', [\App\Http\Controllers\Admin\BenefitsController::class , 'addbenefits'])->name('benefits.addbenefits');
     Route::post('savebenefitsdata', [\App\Http\Controllers\Admin\BenefitsController::class , 'savebenefitsdata'])->name('benefits.savebenefitsdata');
     Route::get('editbenefits/{id}', [\App\Http\Controllers\Admin\BenefitsController::class , 'editbenefits'])->name('benefits.editbenefits');
     Route::post('saveupdatedbenefitsdata/{id}', [\App\Http\Controllers\Admin\BenefitsController::class , 'saveupdatedbenefitsdata'])->name('benefits.saveupdatedbenefitsdata');
     Route::get('deletebenefits/{id}', [\App\Http\Controllers\Admin\BenefitsController::class , 'deletebenefits'])->name('benefits.deletebenefits');
     // Benefits route end 

      // Facilites route start
    Route::get('facilites', [\App\Http\Controllers\Admin\FacilitesController::class , 'index'])->name('facilites.index');
    Route::get('addfacilites', [\App\Http\Controllers\Admin\FacilitesController::class , 'addfacilites'])->name('facilites.addfacilites');
    Route::post('savefacilitesdata', [\App\Http\Controllers\Admin\FacilitesController::class , 'savefacilitesdata'])->name('facilites.savefacilitesdata');
    Route::get('editfacilites/{id}', [\App\Http\Controllers\Admin\FacilitesController::class , 'editfacilites'])->name('facilites.editfacilites');
    Route::post('saveupdatedfacilitesdata/{id}', [\App\Http\Controllers\Admin\FacilitesController::class , 'saveupdatedfacilitesdata'])->name('facilites.saveupdatedfacilitesdata');
    Route::get('deletefacilites/{id}', [\App\Http\Controllers\Admin\FacilitesController::class , 'deletefacilites'])->name('facilites.deletefacilites');
    // Facilites route end 

      // enquiry route start
      Route::get('enquiry', [\App\Http\Controllers\Admin\EnquiryController::class , 'index'])->name('enquiry.index');
      
      // enquiry route end


    // Route::get('doctor', [\App\Http\Controllers\Admin\DoctorController::class , 'index'])->name('patient.index');
    Route::delete('users_mass_destroy', [\App\Http\Controllers\Admin\UserController::class, 'massDestroy'])->name('users.mass_destroy');

    // services
    Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class);
    Route::delete('services_mass_destroy', [\App\Http\Controllers\Admin\ServiceController::class, 'massDestroy'])->name('services.mass_destroy');
    
    // employees
    Route::resource('employees', \App\Http\Controllers\Admin\EmployeeController::class);
    Route::delete('employees_mass_destroy', [\App\Http\Controllers\Admin\EmployeeController::class, 'massDestroy'])->name('employees.mass_destroy');
    Route::post('employees/media', [\App\Http\Controllers\Admin\EmployeeController::class, 'storeMedia'])->name('employees.storeMedia');

    // client
    Route::resource('clients', \App\Http\Controllers\Admin\ClientController::class);
    Route::delete('clients_mass_destroy', [\App\Http\Controllers\Admin\ClientController::class, 'massDestroy'])->name('clients.mass_destroy');
    Route::post('clients/media', [\App\Http\Controllers\Admin\ClientController::class, 'storeMedia'])->name('clients.storeMedia');

    // appointment
    Route::resource('appointments', \App\Http\Controllers\Admin\AppointmentController::class);
    Route::delete('appointments_mass_destroy', [\App\Http\Controllers\Admin\AppointmentController::class, 'massDestroy'])->name('appointments.mass_destroy');

    Route::get('calendar', [\App\Http\Controllers\Admin\CalendarController::class, 'index'])->name('calendar');
});
// Route::get('/hospitals', function () {
//   return view('web.hospital.index');
// });
// Route::get('/hospitals-details', function () {
//   return view('web.hospital.details');
// });
// Route::get('/hospitals', [\App\Http\Controllers\Auth\HomeController::class, 'hospitals'])->name('home.hospital');
Auth::routes(['register' => true]);