@extends('layouts.admin')

@section('content')
<div class="container-fluid" style="background: #e1e2e4 !important;">

    <!-- @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif -->
    <!-- Alert message (start) -->
                    @if(Session::has('message'))
                        <div class="alert {{ Session::get('alert-class') }} ">
                             {{ Session::get('message') }}
                        </div>
                    @endif
                    <!-- Alert message (end) -->
    <div class="content d-flex flex-column flex-column-fluid pt-7">
        <div class="container-fluid">
            <div class="d-md-flex align-items-center justify-content-between mb-7">
                <h3 class="mb-0" style="color: black; font-weight:700;"> New Patient
                </h3>
                <a href="{{ route('admin.patient.index') }}" class="btn btn-outline-primary">Back</a>
            </div>
        </div>
        <div class="d-flex flex-column-fluid">
            <div class="container-fluid">
                <div class="d-flex flex-column">
                    <div class="row">
                        <div class="col-12">
                        </div>
                    </div>
                    <div class="card mb-5">

                        <div class="card-body p-12">
                            <form method="POST" action="{{ route('admin.patient.updatepatient') }}" accept-charset="UTF-8" id="" enctype="multipart/form-data">
                            @csrf <!-- {{ csrf_field() }} -->
                                <div class="alert alert-danger d-none" id="patientErrorBox"></div>
                                <input class="form-control"  tabindex="1" name="id" type="hidden" value="{{$patient[0]->id}}">
                                <div class="row gx-10 ">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Personal Details</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <label for="first_name" class="form-label labelcolor">First Name:</label>
                                            <input class="form-control" required="required" tabindex="1" name="fname" type="text" value="{{$patient[0]->fname}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <label for="last_name" class="form-label labelcolor">Last Name:</label>
                                            
                                            <input class="form-control" required="" tabindex="2" name="lname" type="text" value="{{$patient[0]->lname}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <label for="email" class="form-label labelcolor">Email:</label>
                                           
                                            <input class="form-control" required="required" name="email" type="email" value="{{$patient[0]->email}}" id="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <label for="dob" class="form-label labelcolor">Date Of Birth:</label>
                                            <input class="bg-white patientBirthDate form-control flatpickr-input" id="mhiBirthDate" tabindex="4" name="dob" type="date" value="{{$patient[0]->dob}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mobile-overlapping  mb-5">
                                            <label for="phone" class="form-label labelcolor">Phone:</label>
                                           
                                            <input class="form-control" required min="10" tabindex="5" name="phone" type="number" value="{{$patient[0]->phone}}" id="phonenumber" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="gender" class="form-label labelcolor">Gender:</label>
                                            
                                            <select class="form-select select2-hidden-accessible" id="mhigender" data-control="select2" tabindex="6" name="gender" data-select2-id="select2-data-patientBloodGroup" aria-hidden="true" required>
                                                <option selected="selected" value="{{$patient[0]->gender}}  " data-select2-id="select2-data-171-hn1b">{{$patient[0]->gender}}</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>

                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-5 ml-4">
                                            <label for="status" class="form-label labelcolor">Status:</label>
                                            <div class="form-check form-switch form-check-custom">
                                               
                                                    <input class="form-check-input w-35px h-20px is-active" name="status" type="checkbox" value="1" tabindex="7" checked="">
                                                
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <label for="blood_group" class="form-label labelcolor">Blood Group:</label>
                                            <select class="form-select select2-hidden-accessible" id="mhipBloodGroup" data-control="select2" tabindex="8" name="bloodgroup" data-select2-id="select2-data-patientBloodGroup" aria-hidden="true" required>
                                                <option selected="selected" value="{{$patient[0]->bloodgroup}}" data-select2-id="select2-data-171-hn1b">{{$patient[0]->bloodgroup}}</option>
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                                <option value="A-">A-</option>
                                                <option value="A+">A+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="B-">B-</option>
                                                <option value="B+">B+</option>
                                            </select>
                                            <span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-170-myz1" style="width: 409.167px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="9" aria-disabled="false" aria-labelledby="select2-patientBloodGroup-container" aria-controls="select2-patientBloodGroup-container"><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="password" class="form-label labelcolor">Password:</label></span>
                                            <input class="form-control" required="" min="6" max="10" tabindex="10" name="password" type="password" value="" id="password" required disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="password_confirmation" class="form-label labelcolor">Confirm Password:</label>
                                            
                                            <input class="form-control" required="" min="6" max="10" tabindex="11" name="password_confirmation" type="password" value="" id="password_confirmation" required disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 mb-5">
                                        <div class="row2" io-image-input="true">
                                            <label for="image" class="form-label labelcolor">Profile:</label>
                                            <div class="d-block">
                                                <input class="form-control" name="photo" type="file" id="photo" required>
                                            </div>
                                        </div>
                                    </div>
                                <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-5">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Address Details</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <label for="address" class="form-label labelcolor">Address :</label>
                                            <input class="form-control" name="address" type="text" id="address" value="{{$patient[0]->address}}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Pin Code:</label>
                                            <input class="form-control" maxlength="6" minlength="6" name="pincode" type="text" id="pincode" value="{{$patient[0]->pincode}}" required>
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-5 customer_records">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Emergency Details</h5>
                                    </div>
                                    <div class="form-group col-sm-6 mb-5">
                                        <label for="emer_name" class="form-label labelcolor">Name:</label>
                                        <input class="form-control" value="{{$patient[0]->emer_name}}" id="emer_name" name="emer_name" type="text" required>
                                    </div>

                                    <div class="form-group col-sm-6 mb-5">
                                        <label for="emer_contact_nu" class="form-label labelcolor">Phone Number:</label>
                                        <input class="form-control" value="{{$patient[0]->emer_contact_nu}}" id="emer_contact_nu" min="10" name="emer_contact_nu" type="number" required>
                                    </div>
                                </div>


                                <div class="customer_records_dynamic"></div>
                                <hr style="margin: -12px !important;">
                                <div class="row mt-3">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Health Issues</h5>
                                    </div>

                                    <div class="form-group col-sm-6 mb-5">
                                        <label for="facebook_url" class="form-label labelcolor">Disease: <span style="font-size:12px !important; color:red;">You Can Select Multiple Disease here</span></label>
                                        <select id="disease" multiple="multiple" name="disease[]" class="form-select select2-hidden-accessible" required>
                                            <option value="Sugar">Sugar</option>
                                            <option value="Blood Pressuere">Blood Pressuere</option>
                                            <option value="Thyoid">Thyoid</option>
                                            <option value="others">others</option> 
                                        </select>
                                      
                                    </div>

                                </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <input class="btn btn-primary me-2" id="patientSave" type="submit" value="Save">
                            <a href="{{ route('admin.patient.index') }}" class="btn btn-secondary me-2">Cancel</a>
                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection