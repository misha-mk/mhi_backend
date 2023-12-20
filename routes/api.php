<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Registration
Route::post('/PatientRegister', [AuthController::class, 'PatientRegister']);
Route::get('/get-location/{pin}', [\App\Http\Controllers\Admin\HospitalController::class, 'getLocation']);
Route::get('/AllDoctorsofHospital/{id}/{type}', [\App\Http\Controllers\Admin\DepartmentController::class , 'AllDoctorsofHospital'])->name('hospital.AllDoctorsofHospital');
// Login 
Route::post('/Patientlogin', [AuthController::class, 'Patientlogin']);
Route::get('/getpatient', [\App\Http\Controllers\Admin\PatientController::class , 'apigetp'])->name('patient.getpatient');
Route::post('/registerPatients', [\App\Http\Controllers\Admin\PatientController::class , 'saveapidata'])->name('patient.registerPatients');
Route::get('/getDoctors', [\App\Http\Controllers\Admin\DoctorController::class , 'getTop5Doctors'])->name('doctor.getDoctors');
Route::get('/getHospitals', [\App\Http\Controllers\Admin\HospitalController::class , 'getTop5Hospitals'])->name('hospital.getHospitals');
Route::get('/getClinic', [\App\Http\Controllers\Admin\HospitalController::class , 'getTop5Clinic'])->name('hospital.getClinic');
Route::get('/getHomePageInfo', [\App\Http\Controllers\Admin\DepartmentController::class , 'getHomePageInfo']);
Route::get('/pdoctors', [\App\Http\Controllers\Admin\DoctorController::class , 'pdoctors'])->name('doctor.pdoctors');
// Route::get('/getHomePageInfo', [\App\Http\Controllers\Admin\DepartmentController::class , 'getHomePageInfo'])->name('hospital.getHomePageInfo');
Route::get('/HospitalDetails/{id}', [\App\Http\Controllers\Admin\DepartmentController::class , 'HospitalDetails'])->name('hospital.HospitalDetails');
Route::get('/ClinicDetails/{id}', [\App\Http\Controllers\Admin\DepartmentController::class , 'ClinicDetails'])->name('hospital.ClinicDetails');
Route::get('/DoctorDetails/{id}', [\App\Http\Controllers\Admin\DepartmentController::class , 'DoctorDetails'])->name('hospital.DoctorDetails');
Route::get('/AllHospitals', [\App\Http\Controllers\Admin\DepartmentController::class , 'AllHospitals'])->name('hospital.AllHospitals');
Route::get('/settings', [\App\Http\Controllers\Admin\DepartmentController::class , 'settings'])->name('hospital.settings');
Route::get('/availblity/{d_id}/{p_id}/{p_type}', [\App\Http\Controllers\Admin\DepartmentController::class , 'availblity'])->name('hospital.availblity');
// Route::post('/PatientRegister', [\App\Http\Controllers\Admin\DepartmentController::class , 'PatientRegister'])->name('hospital.PatientRegister');






