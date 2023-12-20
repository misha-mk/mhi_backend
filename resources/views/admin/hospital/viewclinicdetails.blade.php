@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <style>
       #profileImage {
            font-family: Arial, Helvetica, sans-serif;
            width: 25rem;
            height: 20rem;
            padding: 26px;
            border-radius: 50%;
            background: #004D3C;
            font-size: 2rem;
            color: #fff;
            text-align: center;
            margin: 2rem 0;
}
.tagss{
    padding: 10px;
    color: #4e73df;
    border-color: #4e73df;
    border-radius: 20px;
}
.tagss:hover{
    color: white;
}
.tagss1 
{
    padding: 10px !important;
    margin-left: 130px;
}
    </style>
    @if(Session::has('message'))
    <div class="alert {{ Session::get('alert-class') }} ">
        {{ Session::get('message') }}
    </div>
    @endif
    <!-- Alert message (end) -->
    <div class="content d-flex flex-column flex-column-fluid pt-7">
        <div class="container-fluid">
            <div class="d-md-flex align-items-center justify-content-between mb-7 ">
                <h3 class="mb-0" style="color: black; font-weight:700;"> Clinic Details
                </h3>
                <a href="{{ route('admin.hospital.index') }}" class="btn btn-outline-primary">Back</a>
            </div>
        </div>
    </div>
    <div class="container-fuild hospitaldetailshead">
        <div class="row hospitaldetailsheadrow">
            <div class="col-md-12 text-center">
            <h4 style="color: blue !important;" id="fullname"> {{$clinicdetails[0]->name}}</h4>
            @if($clinicdetails[0]->image)
                <img src="{{ asset('images/'.$clinicdetails[0]->image) }}" alt="" class="user-img object-contain" width="700px" height="350px">
                @else
                <div class="image image-circle image-mini me-3" style="margin-top: 26px;">
                <span id="profileImage"></span>
                </div>
                @endif
               
            </div>
        </div>
        <div class="row hospitaldetailsheadrow text-center" style="margin-top: 20px;">
            <div class="col-md-12" style="color: black;">
            <h4>{{$clinicdetails[0]->contact}}</h4>
                <h4> {{$clinicdetails[0]->email}} </h4>
                <p style="padding-left:15px;"> {{$clinicdetails[0]->address}} </p> 
            </div>
        </div>
        <div class="row hospitaldetailsheadrow" style="border-bottom: 1px solid #dddfeb; ">
            <div class="col-md-12" style="margin-bottom:20px !important;">
                <div class="row" style="margin-top: 15px;">
                    <div class="col-md-3">
                        <div class="border rounded-10  h-100">
                            <h2 class="text-primary mb-3 font-1">0</h2>
                            <h3 class="fs-5 fw-light text-gray-600 mb-0 font-11">Doctors</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border rounded-10 h-100">
                            <h2 class="text-primary mb-3 font-1">0</h2>
                            <h3 class="fs-5 fw-light text-gray-600 mb-0 font-11">Patients</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border rounded-10  h-100">
                            <h2 class="text-primary mb-3 font-1">0</h2>
                            <h3 class="fs-5 fw-light text-gray-600 mb-0 font-11">Total Appointments</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border rounded-10  h-100">
                            <h2 class="text-primary mb-3 font-1">0</h2>
                            <h3 class="fs-5 fw-light text-gray-600 mb-0 font-11">Pending Appointments</h3>
                        </div>
                    </div>
                   
                </div>
            </div>

        </div>
        <div class="hospitaldetailsbodysection">
            <div class="mt-7 overflow-hidden" >
                <ul class="nav nav-tabs mb-5 pb-1 overflow-auto flex-nowrap text-nowrap text-center">
                    <li class="nav-item position-relative me-7 mb-3 foractive tagss" style="margin-left:0px;">
                        <a class="nav-link p-0" data-bs-toggle="tab" href="#doctorOverview">Overview</a>
                    </li>
                    <li class="nav-item position-relative me-7 mb-3 foractive tagss">
                        <a class="nav-link p-0" data-bs-toggle="tab" href="#doctorCases">Doctors</a>
                    </li>
                    <li class="nav-item position-relative me-7 mb-3 foractive tagss">
                        <a class="nav-link p-0" data-bs-toggle="tab" href="#doctorPatients">Patients</a>
                    </li>
                    <li class="nav-item position-relative me-7 mb-3 foractive tagss">
                        <a class="nav-link p-0" data-bs-toggle="tab" href="#doctorAppointments">Appointments</a>
                    </li>
                    <li class="nav-item position-relative me-7 mb-3 foractive tagss">
                        <a class="nav-link p-0" data-bs-toggle="tab" href="#doctorSchedules">Schedules</a>
                    </li>
                    <li class="nav-item position-relative me-7 mb-3 foractive tagss">
                        <a class="nav-link p-0" data-bs-toggle="tab" href="#doctorPayroll">My Payrolls</a>
                    </li>
                    <a class= "p-0 btn btn-primary tagss1 mb-3" href="{{ route('admin.doctor.addDoctor', ['id' => $clinicdetails[0]->c_id,'type' => 'Clinic']) }}">Add Doctor</a>
                </ul>
                
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="doctorOverview" role="tabpanel">
                    <div class="card mb-xl-10">
                        <div>
                            <div class="card-body  border-top p-9">
                                <div class="row">

                                    <div class="col-sm-6 d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-5 text-gray-600">Number of Bed</label>
                                        <p>
                                            <span class="fs-5 text-gray-800">{{$clinicdetails[0]->number_bed}}</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-6 d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-5 text-gray-600">Facilities</label>
                                        <p>
                                            <span class="fs-5 text-gray-800">{{$clinicdetails[0]->facilities}}</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-6 d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-5 text-gray-600">Operation Theatre (OT`S)</label>
                                        <p>
                                            <span class="fs-5 text-gray-800">{{$clinicdetails[0]->ots}}</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-6 d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-5 text-gray-600">Benifits</label>
                                        <p>
                                            <span class="fs-5 text-gray-800">{{$clinicdetails[0]->benifits}}</span>
                                        </p>
                                    </div>
                                   


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="doctorCases" role="tabpanel">
                    <div wire:id="n9mzgl6LIswpj6IQiRKY" id="datatable-n9mzgl6LIswpj6IQiRKY">
                        <div wire:offline.class.remove="d-none" class="d-none">
                            <div class="alert alert-danger d-flex align-items-center" style="display: none;">
                                <svg xmlns="http://www.w3.org/2000/svg" style="width:1.3em;height:1.3em;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>

                                <span class="d-inline-block ml-2">You are not connected to the internet.</span>
                            </div>
                        </div>

                        <div class="d-flex flex-column">
                            <div>
                            </div>
                            <div class="d-md-flex justify-content-between mb-3 livewire-search-box align-items-center">
                                <div class="d-md-flex">
                                    <div class="mb-3 mb-sm-0">
                                        <div class="position-relative d-flex width-320">
                                            
                                            <input type="search" wire:model="table.search" data-datatable-filter="search" name="search" class="form-control w-250px ps-10" placeholder="Search">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end ">
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="">
                                    <tr>
                                        <th scope="col" class="">
                                            <div class="" wire:click="sortBy('case_id')" style="cursor:pointer;">
                                                <span>Dcotor ID</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="" >
                                            <div class="" wire:click="sortBy('patient_id')" style="cursor:pointer;">
                                                <span>Doctor</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="" >
                                            <div class="" wire:click="sortBy('phone')" style="cursor:pointer;">
                                                <span>Phone</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="" wire:key="header-col-3-n9mzgl6LIswpj6IQiRKY">
                                            <div class="" wire:click="sortBy('date')" style="cursor:pointer;">
                                                <span>Email</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>
                                        <th scope="col" class="" wire:key="header-col-3-n9mzgl6LIswpj6IQiRKY">
                                            <div class="" wire:click="sortBy('date')" style="cursor:pointer;">
                                                <span>Qualification</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>
                                        <th scope="col" class="" wire:key="header-col-3-n9mzgl6LIswpj6IQiRKY">
                                            <div class="" wire:click="sortBy('date')" style="cursor:pointer;">
                                                <span>Specilities </span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="d-flex justify-content-end" style="padding-right: 7rem !important;" wire:key="header-col-4-n9mzgl6LIswpj6IQiRKY">
                                            <div class="" wire:click="sortBy('fee')" style="cursor:pointer;">
                                                <span>Fee</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="" wire:key="header-col-5-n9mzgl6LIswpj6IQiRKY">
                                            <div class="" wire:click="sortBy('status')" style="cursor:pointer;">
                                                <span>Status</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>
                                        <th scope="col" class="" wire:key="header-col-5-n9mzgl6LIswpj6IQiRKY">
                                            <div class="" wire:click="sortBy('status')" style="cursor:pointer;">
                                                <span>Action</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <?php if(isset($doctors))
                                {?>
                                     @foreach($doctors as $d)
                                     <tr>
                                        <td>{{$d->d_id}}</td>
                                        <td>{{$d->fname}} {{$d->lname}}</td>
                                        <td>{{$d->phone}}</td>
                                        <td>{{$d->email}}</td>
                                        <td>{{$d->qualification}}</td>
                                        <td>{{$d->specilities}}</td>
                                        <td>{{$d->fee}}</td>
                                        <td>{{$d->status}}</td>
                                        <td>
                                        <a href="{{ route('admin.doctor.editDoctor', ['id' => $clinicdetails[0]->c_id,'d_id' => $d->d_id,'type' =>'Clinic']) }}" style="margin-left:10px;margin-top:35px;"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="{{ route('admin.doctor.editDoctor', ['id' => $clinicdetails[0]->c_id,'d_id' => $d->d_id,'type' =>'Clinic']) }}" style="margin-left:10px;margin-top:35px;"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a href="{{ route('admin.doctor.editDoctor', ['id' => $clinicdetails[0]->c_id,'d_id' => $d->d_id,'type' =>'Clinic']) }}" style="margin-left:10px;margin-top:35px;"><i class="fa fa-ban" aria-hidden="true"></i></a>
                                        
                                        </td>
                                        <!-- <td>{{$d->d_id}}</td> -->
                                     </tr>
                                     @endforeach
                               <?php } else {?>
                                
                                <tbody class="">
                                    <tr wire:key="empty-message-n9mzgl6LIswpj6IQiRKY">
                                        <td colspan="12" class="text-center">
                                            No data available in table
                                        </td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                               

                            </table>
                        </div>

                        <div class="d-flex align-items-center mb-5 mt-3">
                            <div class="mb-xxl-0 d-flex align-items-center justify-content-sm-start justify-content-center">
                                <span class="me-3 text-gray-600 fs-4 fs-xl-6">Show</span>
                                <select wire:model="perPage" id="perPage" class="form-select w-auto data-sorting pl-1 pr-5 py-2 border-0">
                                    <option value="10" wire:key="per-page-10-table">
                                        10</option>
                                    <option value="25" wire:key="per-page-25-table">
                                        25</option>
                                    <option value="50" wire:key="per-page-50-table">
                                        50</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-12 ms-3 text-gray-600 fs-4">
                                    Showing <strong>0</strong>
                                    results </div>
                            </div>
                        </div>
                    </div>

                    <!-- Livewire Component wire-end:n9mzgl6LIswpj6IQiRKY -->
                </div>

                <div class="tab-pane fade" id="doctorPatients" role="tabpanel">
                    <div wire:id="Iim80suXC3052JdLfM0c" id="datatable-Iim80suXC3052JdLfM0c">
                        <div wire:offline.class.remove="d-none" class="d-none">
                            <div class="alert alert-danger d-flex align-items-center" style="display: none;">
                                <svg xmlns="http://www.w3.org/2000/svg" style="width:1.3em;height:1.3em;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>

                                <span class="d-inline-block ml-2">You are not connected to the internet.</span>
                            </div>
                        </div>

                        <div class="d-flex flex-column">
                            <div>
                            </div>
                            <div class="d-md-flex justify-content-between mb-3 livewire-search-box align-items-center">
                                <div class="d-md-flex">
                                    <div class="mb-3 mb-sm-0">
                                        <div class="position-relative d-flex width-320">
                                            <span class="position-absolute d-flex align-items-center top-0 bottom-0 left-0 text-gray-600 ms-3"> <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"></path>
                                                </svg><!-- <i class="fa-solid fa-magnifying-glass"></i> Font Awesome fontawesome.com --> </span>
                                            <input type="search" wire:model="table.search" data-datatable-filter="search" name="search" class="form-control w-250px ps-10" placeholder="Search">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end ">
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="">
                                    <tr>
                                        <th scope="col" class="" wire:key="header-col-0-Iim80suXC3052JdLfM0c">
                                            <div class="" wire:click="sortBy('patient.patientUser.first_name')" style="cursor:pointer;">
                                                <span>Patient</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="" wire:key="header-col-1-Iim80suXC3052JdLfM0c">
                                            <div class="" wire:click="sortBy('phone')" style="cursor:pointer;">
                                                <span>disease</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="" wire:key="header-col-2-Iim80suXC3052JdLfM0c">
                                            <div class="" wire:click="sortBy('patient.patientUser.blood_group')" style="cursor:pointer;">
                                                <span>Blood Group</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="" wire:key="header-col-3-Iim80suXC3052JdLfM0c">
                                            <div class="" wire:click="sortBy('status')" style="cursor:pointer;">
                                                <span>Status</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>
                                        <th scope="col" class="" wire:key="header-col-3-Iim80suXC3052JdLfM0c">
                                            <div class="" wire:click="sortBy('status')" style="cursor:pointer;">
                                                <span>Checkup Date</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="">
                                    <tr wire:key="empty-message-Iim80suXC3052JdLfM0c">
                                        <td colspan="5" class="text-center">

                                            No data available in table
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>

                        <div class="d-flex align-items-center mb-5 mt-3">
                            <div class="mb-xxl-0 d-flex align-items-center justify-content-sm-start justify-content-center">
                                <span class="me-3 text-gray-600 fs-4 fs-xl-6">Show</span>
                                <select wire:model="perPage" id="perPage" class="form-select w-auto data-sorting pl-1 pr-5 py-2 border-0">
                                    <option value="10" wire:key="per-page-10-table">
                                        10</option>
                                    <option value="25" wire:key="per-page-25-table">
                                        25</option>
                                    <option value="50" wire:key="per-page-50-table">
                                        50</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-12 ms-3 text-gray-600 fs-4">
                                    Showing <strong>0</strong>
                                    results </div>
                            </div>
                        </div>
                    </div>

                    <!-- Livewire Component wire-end:Iim80suXC3052JdLfM0c -->
                </div>
                <div class="tab-pane fade" id="doctorAppointments" role="tabpanel">
                    <div wire:id="4aDLx67veBLUJ2X5VPMF" id="datatable-4aDLx67veBLUJ2X5VPMF">
                        <div wire:offline.class.remove="d-none" class="d-none">
                            <div class="alert alert-danger d-flex align-items-center" style="display: none;">
                                <svg xmlns="http://www.w3.org/2000/svg" style="width:1.3em;height:1.3em;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>

                                <span class="d-inline-block ml-2">You are not connected to the internet.</span>
                            </div>
                        </div>

                        <div class="d-flex flex-column">
                            <div>
                            </div>
                            <div class="d-md-flex justify-content-between mb-3 livewire-search-box align-items-center">
                                <div class="d-md-flex">
                                    <div class="mb-3 mb-sm-0">
                                        <div class="position-relative d-flex width-320">
                                            <span class="position-absolute d-flex align-items-center top-0 bottom-0 left-0 text-gray-600 ms-3"> <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"></path>
                                                </svg><!-- <i class="fa-solid fa-magnifying-glass"></i> Font Awesome fontawesome.com --> </span>
                                            <input type="search" wire:model="table.search" data-datatable-filter="search" name="search" class="form-control w-250px ps-10" placeholder="Search">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end ">
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="">
                                    <tr>
                                        <th scope="col" class="" wire:key="header-col-0-4aDLx67veBLUJ2X5VPMF">
                                            <div class="" wire:click="sortBy('patient.patientUser.first_name')" style="cursor:pointer;">
                                                <span>Patient Name</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="" wire:key="header-col-1-4aDLx67veBLUJ2X5VPMF">
                                            <div class="" wire:click="sortBy('doctor.doctorUser.first_name')" style="cursor:pointer;">
                                                <span>Doctor Name</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="" wire:key="header-col-2-4aDLx67veBLUJ2X5VPMF">
                                            <div class="" wire:click="sortBy('doctor.department.title')" style="cursor:pointer;">
                                                <span>Department Name</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="" wire:key="header-col-3-4aDLx67veBLUJ2X5VPMF">
                                            <div class="" wire:click="sortBy('opd_date')" style="cursor:pointer;">
                                                <span>Opd Date</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="">
                                    <tr wire:key="empty-message-4aDLx67veBLUJ2X5VPMF">
                                        <td colspan="7" class="text-center">

                                            No data available in table
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>

                        <div class="d-flex align-items-center mb-5 mt-3">
                            <div class="mb-xxl-0 d-flex align-items-center justify-content-sm-start justify-content-center">
                                <span class="me-3 text-gray-600 fs-4 fs-xl-6">Show</span>
                                <select wire:model="perPage" id="perPage" class="form-select w-auto data-sorting pl-1 pr-5 py-2 border-0">
                                    <option value="10" wire:key="per-page-10-table">
                                        10</option>
                                    <option value="25" wire:key="per-page-25-table">
                                        25</option>
                                    <option value="50" wire:key="per-page-50-table">
                                        50</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-12 ms-3 text-gray-600 fs-4">
                                    Showing <strong>0</strong>
                                    results </div>
                            </div>
                        </div>
                    </div>

                    <!-- Livewire Component wire-end:4aDLx67veBLUJ2X5VPMF -->
                </div>
                <div class="tab-pane fade" id="doctorSchedules" role="tabpanel">
                    <div wire:id="9DpPsHI7qJEGVJ8iiqkg" id="datatable-9DpPsHI7qJEGVJ8iiqkg">
                        <div wire:offline.class.remove="d-none" class="d-none">
                            <div class="alert alert-danger d-flex align-items-center" style="display: none;">
                                <svg xmlns="http://www.w3.org/2000/svg" style="width:1.3em;height:1.3em;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>

                                <span class="d-inline-block ml-2">You are not connected to the internet.</span>
                            </div>
                        </div>

                        <div class="d-flex flex-column">
                            <div>
                            </div>
                            <div class="d-md-flex justify-content-between mb-3 livewire-search-box align-items-center">
                                <div class="d-md-flex">
                                    <div class="mb-3 mb-sm-0">
                                        <div class="position-relative d-flex width-320">
                                            <span class="position-absolute d-flex align-items-center top-0 bottom-0 left-0 text-gray-600 ms-3"> <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"></path>
                                                </svg><!-- <i class="fa-solid fa-magnifying-glass"></i> Font Awesome fontawesome.com --> </span>
                                            <input type="search" wire:model="table.search" data-datatable-filter="search" name="search" class="form-control w-250px ps-10" placeholder="Search">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end ">

                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="">
                                    <tr>
                                        <th scope="col" class="" wire:key="header-col-1-9DpPsHI7qJEGVJ8iiqkg">
                                            <div class="" wire:click="sortBy('available_on')" style="cursor:pointer;">
                                                <span>Available On</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="" wire:key="header-col-2-9DpPsHI7qJEGVJ8iiqkg">
                                            <div class="" wire:click="sortBy('available_from')" style="cursor:pointer;">
                                                <span>Available From</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="" wire:key="header-col-3-9DpPsHI7qJEGVJ8iiqkg">
                                            <div class="" wire:click="sortBy('available_to')" style="cursor:pointer;">
                                                <span>Available To</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="">
                                    <tr wire:loading.class.delay="" class="" wire:key="row-0-9DpPsHI7qJEGVJ8iiqkg">
                                        <td class="" wire:key="cell-0-1-9DpPsHI7qJEGVJ8iiqkg">
                                            Monday
                                        </td>

                                        <td class="" wire:key="cell-0-2-9DpPsHI7qJEGVJ8iiqkg">
                                            10:00 AM
                                        </td>

                                        <td class="" wire:key="cell-0-3-9DpPsHI7qJEGVJ8iiqkg">
                                            19:30 PM
                                        </td>
                                    </tr>

                                    <tr wire:loading.class.delay="" class="" wire:key="row-1-9DpPsHI7qJEGVJ8iiqkg">
                                        <td class="" wire:key="cell-1-1-9DpPsHI7qJEGVJ8iiqkg">
                                            Tuesday
                                        </td>

                                        <td class="" wire:key="cell-1-2-9DpPsHI7qJEGVJ8iiqkg">
                                            10:00 AM
                                        </td>

                                        <td class="" wire:key="cell-1-3-9DpPsHI7qJEGVJ8iiqkg">
                                            19:30 PM
                                        </td>
                                    </tr>

                                    <tr wire:loading.class.delay="" class="" wire:key="row-2-9DpPsHI7qJEGVJ8iiqkg">
                                        <td class="" wire:key="cell-2-1-9DpPsHI7qJEGVJ8iiqkg">
                                            Wednesday
                                        </td>

                                        <td class="" wire:key="cell-2-2-9DpPsHI7qJEGVJ8iiqkg">
                                            10:00 AM
                                        </td>

                                        <td class="" wire:key="cell-2-3-9DpPsHI7qJEGVJ8iiqkg">
                                            19:30 PM
                                        </td>
                                    </tr>

                                    <tr wire:loading.class.delay="" class="" wire:key="row-3-9DpPsHI7qJEGVJ8iiqkg">
                                        <td class="" wire:key="cell-3-1-9DpPsHI7qJEGVJ8iiqkg">
                                            Thursday
                                        </td>

                                        <td class="" wire:key="cell-3-2-9DpPsHI7qJEGVJ8iiqkg">
                                            10:00 AM
                                        </td>

                                        <td class="" wire:key="cell-3-3-9DpPsHI7qJEGVJ8iiqkg">
                                            19:30 PM
                                        </td>
                                    </tr>

                                    <tr wire:loading.class.delay="" class="" wire:key="row-4-9DpPsHI7qJEGVJ8iiqkg">
                                        <td class="" wire:key="cell-4-1-9DpPsHI7qJEGVJ8iiqkg">
                                            Friday
                                        </td>

                                        <td class="" wire:key="cell-4-2-9DpPsHI7qJEGVJ8iiqkg">
                                            10:00 AM
                                        </td>

                                        <td class="" wire:key="cell-4-3-9DpPsHI7qJEGVJ8iiqkg">
                                            19:30 PM
                                        </td>
                                    </tr>

                                    <tr wire:loading.class.delay="" class="" wire:key="row-5-9DpPsHI7qJEGVJ8iiqkg">
                                        <td class="" wire:key="cell-5-1-9DpPsHI7qJEGVJ8iiqkg">
                                            Saturday
                                        </td>

                                        <td class="" wire:key="cell-5-2-9DpPsHI7qJEGVJ8iiqkg">
                                            10:00 AM
                                        </td>

                                        <td class="" wire:key="cell-5-3-9DpPsHI7qJEGVJ8iiqkg">
                                            19:30 PM
                                        </td>
                                    </tr>

                                    <tr wire:loading.class.delay="" class="" wire:key="row-6-9DpPsHI7qJEGVJ8iiqkg">
                                        <td class="" wire:key="cell-6-1-9DpPsHI7qJEGVJ8iiqkg">
                                            Sunday
                                        </td>

                                        <td class="" wire:key="cell-6-2-9DpPsHI7qJEGVJ8iiqkg">
                                            10:00 AM
                                        </td>

                                        <td class="" wire:key="cell-6-3-9DpPsHI7qJEGVJ8iiqkg">
                                            19:30 PM
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>

                        <div class="d-flex align-items-center mb-5 mt-3">
                            <div class="mb-xxl-0 d-flex align-items-center justify-content-sm-start justify-content-center">
                                <span class="me-3 text-gray-600 fs-4 fs-xl-6">Show</span>
                                <select wire:model="perPage" id="perPage" class="form-select w-auto data-sorting pl-1 pr-5 py-2 border-0">
                                    <option value="10" wire:key="per-page-10-table">
                                        10</option>
                                    <option value="25" wire:key="per-page-25-table">
                                        25</option>
                                    <option value="50" wire:key="per-page-50-table">
                                        50</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-12 ms-3 text-gray-600 fs-4">
                                    Showing <strong>7</strong>
                                    results </div>
                            </div>
                        </div>
                    </div>

                    <!-- Livewire Component wire-end:9DpPsHI7qJEGVJ8iiqkg -->
                </div>
                <div class="tab-pane fade" id="doctorPayroll" role="tabpanel">
                    <div wire:id="LX3D3hPajEtiVghpaber" id="datatable-LX3D3hPajEtiVghpaber">
                        <div wire:offline.class.remove="d-none" class="d-none">
                            <div class="alert alert-danger d-flex align-items-center" style="display: none;">
                                <svg xmlns="http://www.w3.org/2000/svg" style="width:1.3em;height:1.3em;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>

                                <span class="d-inline-block ml-2">You are not connected to the internet.</span>
                            </div>
                        </div>

                        <div class="d-flex flex-column">
                            <div>
                            </div>
                            <div class="d-md-flex justify-content-between mb-3 livewire-search-box align-items-center">
                                <div class="d-md-flex">
                                    <div class="mb-3 mb-sm-0">
                                        <div class="position-relative d-flex width-320">
                                            <span class="position-absolute d-flex align-items-center top-0 bottom-0 left-0 text-gray-600 ms-3"> <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"></path>
                                                </svg><!-- <i class="fa-solid fa-magnifying-glass"></i> Font Awesome fontawesome.com --> </span>
                                            <input type="search" wire:model="table.search" data-datatable-filter="search" name="search" class="form-control w-250px ps-10" placeholder="Search">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end ">
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="">
                                    <tr>
                                        <th scope="col" class="" wire:key="header-col-1-LX3D3hPajEtiVghpaber">
                                            <div class="" wire:click="sortBy('payroll_id')" style="cursor:pointer;">
                                                <span>Payroll ID</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="" wire:key="header-col-2-LX3D3hPajEtiVghpaber">
                                            <div class="" wire:click="sortBy('month')" style="cursor:pointer;">
                                                <span>Month</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="" wire:key="header-col-3-LX3D3hPajEtiVghpaber">
                                            <div class="" wire:click="sortBy('year')" style="cursor:pointer;">
                                                <span>Year</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="text-end" style="padding-right: 2rem !important;" wire:key="header-col-4-LX3D3hPajEtiVghpaber">
                                            <div class="" wire:click="sortBy('basic_salary')" style="cursor:pointer;">
                                                <span>Basic Salary</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="text-end" style="padding-right: 2rem !important;" wire:key="header-col-5-LX3D3hPajEtiVghpaber">
                                            <div class="" wire:click="sortBy('allowance')" style="cursor:pointer;">
                                                <span>Allowance</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="text-end" style="padding-right: 2rem !important;" wire:key="header-col-6-LX3D3hPajEtiVghpaber">
                                            <div class="" wire:click="sortBy('deductions')" style="cursor:pointer;">
                                                <span>Deductions</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="text-end" style="padding-right: 2rem !important;" wire:key="header-col-7-LX3D3hPajEtiVghpaber">
                                            <div class="" wire:click="sortBy('net_salary')" style="cursor:pointer;">
                                                <span>Net Salary</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="" wire:key="header-col-8-LX3D3hPajEtiVghpaber">
                                            <div class="" wire:click="sortBy('status')" style="cursor:pointer;">
                                                <span>Status</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="">
                                    <tr wire:key="empty-message-LX3D3hPajEtiVghpaber">
                                        <td colspan="9" class="text-center">

                                            No data available in table
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>

                        <div class="d-flex align-items-center mb-5 mt-3">
                            <div class="mb-xxl-0 d-flex align-items-center justify-content-sm-start justify-content-center">
                                <span class="me-3 text-gray-600 fs-4 fs-xl-6">Show</span>
                                <select wire:model="perPage" id="perPage" class="form-select w-auto data-sorting pl-1 pr-5 py-2 border-0">
                                    <option value="10" wire:key="per-page-10-table">
                                        10</option>
                                    <option value="25" wire:key="per-page-25-table">
                                        25</option>
                                    <option value="50" wire:key="per-page-50-table">
                                        50</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-12 ms-3 text-gray-600 fs-4">
                                    Showing <strong>0</strong>
                                    results </div>
                            </div>
                        </div>
                    </div>

                    <!-- Livewire Component wire-end:LX3D3hPajEtiVghpaber -->
                </div>
            </div>
        </div>
    </div>
    @endsection
    @push('script-alt')
    <script>
        const fullName = document.getElementById('fullname').textContent;
        console.log(fullName);
        const intials = fullName.split(' ').map(name => name[0]).join('').toUpperCase();
        console.log(intials);
        document.getElementById('profileImage').innerHTML = intials;
    </script>
    @endpush