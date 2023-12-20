@extends('layouts.admin')

@section('content')
<style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 8px;
  font-size: 16px;
  border: none;
  border-radius: 4px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
ol, ul {
    padding-left: 0rem !important;
}
.tags-container {
  display: flex;
  flex-flow: row wrap;
  margin-bottom: 15px;
  width: 100%;
  min-height: 34px;
  padding: 6px 5px;
  font-size: 14px;
  line-height: 1.6;
  background-color: transparent;
  border: 1px solid #d1d3e2;
  border-radius: 5px;
  overflow: hidden;
  word-wrap: break-word;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}

input.tag-input {
  flex: 3;
  border: 0;
  outline: 0;
}

.tag {
  position: relative;
  margin: 2px 6px 2px 0;
  padding: 1px 20px 1px 8px;
  font-size: inherit;
  font-weight: 400;
  text-align: center;
  color: #fff;
  background-color: #317caf;
  border-radius: 3px;
  transition: background-color 0.3s ease;
  cursor: default;
}
.tag:first-child {
  margin-left: 0;
}
.tag--marked {
  background-color: #6fadd7;
}
.tag--exists {
  background-color: #edb5a1;
  -webkit-animation: shake 1s linear;
          animation: shake 1s linear;
}
.tag__name {
  margin-right: 3px;
}

.tag__remove {
  position: absolute;
  right: 0;
  bottom: 0;
  width: 20px;
  height: 100%;
  padding: 0 5px;
  font-size: 16px;
  font-weight: 400;
  transition: opacity 0.3s ease;
  opacity: 0.5;
  cursor: pointer;
  border: 0;
  background-color: transparent;
  color: #fff;
  line-height: 1;
}
.tag__remove:hover {
  opacity: 1;
}
.tag__remove:focus {
  outline: 5px auto #fff;
}

@-webkit-keyframes shake {
  0%, 100% {
    transform: translate3d(0, 0, 0);
  }
  10%, 30%, 50%, 70%, 90% {
    transform: translate3d(-5px, 0, 0);
  }
  20%, 40%, 60%, 80% {
    transform: translate3d(5px, 0, 0);
  }
}

@keyframes shake {
  0%, 100% {
    transform: translate3d(0, 0, 0);
  }
  10%, 30%, 50%, 70%, 90% {
    transform: translate3d(-5px, 0, 0);
  }
  20%, 40%, 60%, 80% {
    transform: translate3d(5px, 0, 0);
  }
}

</style>
<div class="container-fluid" style="background: #e1e2e4 !important;">

                    @if(Session::has('message'))
                        <div class="alert {{ Session::get('alert-class') }} ">
                             {{ Session::get('message') }}
                        </div>
                    @endif
                    <!-- Alert message (end) -->
    <div class="content d-flex flex-column flex-column-fluid pt-7">
        <div class="container-fluid">
            <div class="d-md-flex align-items-center justify-content-between mb-7">
                <h3 class="mb-0" style="color: black; font-weight:700;"> 
               <?php if(isset($doctordetails))
               {
                echo "Update Doctor ";
               }
               else
               {
                echo " New Doctor";
               }
               ?>
                </h3>
                <?php if(isset($doctordetails))
               { ?>
                <a href="{{ route('admin.doctor.setAvailibility',['id' => $doctordetails[0]->d_id ,'h_id' => $doctordetails[0]->provider_id,'p_type' => $doctordetails[0]->provider_type]) }}" class="btn btn-outline-primary">Set Availibity</a>

                <a href="{{ route('admin.doctor.viewAvailibility',['id' => $doctordetails[0]->d_id ,'h_id' => $doctordetails[0]->provider_id,'p_type' => $doctordetails[0]->provider_type]) }}" class="btn btn-outline-primary">View Availibity</a>
               <?php } ?>
                <a href="{{ route('admin.hospital.index') }}" class="btn btn-outline-primary">Back</a>
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
<?php if(isset($doctordetails)){
    // var_dump($doctordetails[0]->d_id);die();
    ?>

                        <div class="card-body p-12">
                            <form method="POST" action="{{ route('admin.doctor.updatedoctordetails', ['id' => $doctordetails[0]->d_id]) }}" accept-charset="UTF-8" id="" enctype="multipart/form-data">
                            @csrf <!-- {{ csrf_field() }} -->
                                <div class="alert alert-danger d-none" id="patientErrorBox"></div>
                                <div class="row gx-10 ">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Doctor Details</h5>
                                    </div>
                                    <div class="col-md-6">
                                    <input class="form-control" required="required" tabindex="1" name="provider_id" type="hidden" value="{{$hospital_id}}">
                                    <input class="form-control" required="required" tabindex="1" name="provider_type" type="hidden" value="{{$type}}">
                                        <div class="form-group mb-5">
                                            <label for="first_name" class="form-label labelcolor">Doctor First Name:</label>
                                            <input class="form-control" required="required" tabindex="1" name="fname" type="text" value="{{$doctordetails[0]->fname}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <label for="lname" class="form-label labelcolor">Doctor Last Name:</label>
                                            
                                            <input class="form-control"  tabindex="2" name="lname" type="text" value="{{$doctordetails[0]->lname}}" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="email" class="form-label labelcolor">Email:</label>
                                            
                                            <input class="form-control"  tabindex="2" name="email" type="email" required="required" value="{{$doctordetails[0]->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="phone" class="form-label labelcolor">Phone:</label>
                                            <input class="bg-white patientBirthDate form-control flatpickr-input" id="phone" tabindex="4" name="phone" type="number" value="{{$doctordetails[0]->phone}}"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5 ml-4">
                                        <label for="status" class="form-label labelcolor">Status:</label>
                                            
                                            <select class="form-select select2-hidden-accessible" id="mhigender" data-control="select2" tabindex="6" name="status" data-select2-id="select2-data-patientBloodGroup" aria-hidden="true" required>
                                                <option selected="selected" value="{{$doctordetails[0]->status ?? ' '}}" data-select2-id="select2-data-171-hn1b">{{$doctordetails[0]->status ?? 'Select Status'}}</option>
                                                <option value="Active">Active</option>
                                                <option value="InActive">InActive</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                        <label for="status" class="form-label labelcolor">Gender:</label>
                                            
                                            <select class="form-select select2-hidden-accessible" id="mhigender" data-control="select2" tabindex="6" name="gender" data-select2-id="select2-data-patientBloodGroup" aria-hidden="true" required>
                                                <option selected="selected" value="{{$doctordetails[0]->gender ?? ' '}}"data-select2-id="select2-data-171-hn1b">{{$doctordetails[0]->gender ?? 'Select Gender'}}</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="password" class="form-label labelcolor">Password:</label></span>
                                            <input class="form-control"  min="6" name="password" type="password" id="password" value="{{$doctordetails[0]->password}}"  required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-md-4 mb-5">
                                        <div class="row2" io-image-input="true">
                                            <label for="fee" class="form-label labelcolor">Fee:</label>
                                            <div class="d-block">
                                                <input class="form-control" name="fee" type="number" value="{{$doctordetails[0]->fee}}"  id="fee" required>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-4">
                                    <div class="form-group col-md-12 mb-5">
                                        <div class="row2" io-image-input="true">
                                            <label for="photo" class="form-label labelcolor">Doctor Image:</label>
                                            <div class="d-block">
                                                <input class="form-control" name="photo" type="file"  id="photo" required>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-5">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Education Details</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                        <!-- <div id="displayWords"></div> -->
                                        <label for="exist-values" class="form-label labelcolor">Specilities
                                            <span style="font-size: 10px;"><i class="fa fa-star" style="color: red;font-size:
                                            8px;"></i>after each specilities click enter for next</span></label>
                                        <input type="text" id="exist-values" class=" form-control tagged" data-removeBtn="true" name="specilities[]" value="{{$doctordetails[0]->specilities}}"  placeholder="Add Platform">
                                    
                                        
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 mb-5">
                                        <div class="row2" io-image-input="true">
                                            <label for="qualification" class="form-label labelcolor">Qualification:</label>
                                            <div class="d-block">
                                                <input class="form-control"  value="{{$doctordetails[0]->qualification}}" name="qualification" type="text" id="qualification">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 mb-5">
                                        <div class="row2" io-image-input="true">
                                            <label for="experience" class="form-label labelcolor">Experience:</label>
                                            <div class="d-block">
                                                <input class="form-control" name="experience" value="{{$doctordetails[0]->experience}}"  type="number" id="experience">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-5">
                                            <label for="facilities" class="form-label labelcolor">Department:</label>
                                            <div class="dropdown"> 
                                                <button class="btn btn-success dropdown-toggle"
                                                        type="button" 
                                                        id="multiSelectDropdown"
                                                        data-bs-toggle="dropdown" 
                                                        aria-expanded="false"> 
                                                        {{$doctordetails[0]->department ?? 'Select Department'}}
                                                </button> 

                                                <ul class="dropdown-menu" 
                                                    aria-labelledby="multiSelectDropdown"> 
                                                    @foreach($departments as $f)
                                                    <li style="margin-left: 10px;"> 
                                                    <label> 
                                                        <input type="checkbox" 
                                                            value="{{$f->department_name}}"  name="department[]"> 
                                                            {{$f->department_name}}
                                                        </label> 
                                                    </li> 
                                                    @endforeach
                                                    <li style="margin-left: 10px;"> 
                                                    <label> 
                                                        <input type="checkbox" 
                                                            value="None"> 
                                                           None of these
                                                        </label> 
                                                    </li> 
                                                </ul> 
                                            </div> 
                                           
                                           
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-5">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Doctor Address Details</h5>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group mb-5">
                                            <label for="address" class="form-label labelcolor">Address :</label>
                                            <input class="form-control" name="address"  value="{{$doctordetails[0]->address}}"  type="text" id="address" required>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Pin Code:</label>
                                            <input class="form-control" maxlength="6" value="{{$doctordetails[0]->pincode}}"  minlength="6" name="pincode" type="text" id="pincode" required>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-5">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Doctor Bank Details</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="address" class="form-label labelcolor">Bank Name :</label>
                                            <input class="form-control" name="bankname" value="{{$doctordetails[0]->bankname}}"  type="text" required>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Account Number:</label>
                                            <input class="form-control"  name="acnumber" value="{{$doctordetails[0]->acnumber}}"  type="text"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Account Type:</label>
                                            <select class="form-select select2-hidden-accessible"  data-control="select2" name="atype" data-select2-id="select2-data-patientBloodGroup" aria-hidden="true" required>
                                                <option selected="selected" value="{{$doctordetails[0]->atype ?? ' '}}" data-select2-id="select2-data-171-hn1b">{{$doctordetails[0]->atype ?? 'Select Account Type'}}</option>
                                                <option value="Current">Current</option>
                                                <option value="Saving">Saving</option> 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Account Holder Name:</label>
                                            <input class="form-control"  name="acountholdername" value="{{$doctordetails[0]->acountholdername}}"  type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">IFSC CODE:</label>
                                            <input class="form-control"  name="ifsc" type="text" value="{{$doctordetails[0]->ifsc}}"  required>
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-5 customer_records">
                                <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">About Doctor</h5>
                                        <label for="address" class="form-label labelcolor">About Us :</label>
                                        <textarea name="editor1" required>{{$doctordetails[0]->aboutUs ?? 'Enter About Doctor '}}</textarea>
                                    </div>

                                </div>
                               
                        </div>
                        <div class="d-flex justify-content-end">
                            <input class="btn btn-primary me-2" id="" type="submit" value="Save">
                            
                        </div>

                    </div>
                    </form>
                </div>
                <?php } else { ?>
                    <div class="card-body p-12">
                            <form method="POST" action="{{ route('admin.doctor.savedoctordetails') }}" accept-charset="UTF-8" id="" enctype="multipart/form-data">
                            @csrf <!-- {{ csrf_field() }} -->
                                <div class="alert alert-danger d-none" id="patientErrorBox"></div>
                                <div class="row gx-10 ">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Doctor Details</h5>
                                    </div>
                                    <div class="col-md-6">
                                    <input class="form-control" required="required" tabindex="1" name="provider_id" type="hidden" value="{{$hospital_id}}">
                                    <input class="form-control" required="required" tabindex="1" name="provider_type" type="hidden" value="{{$type}}">
                                        <div class="form-group mb-5">
                                            <label for="first_name" class="form-label labelcolor">Doctor First Name:</label>
                                            <input class="form-control" required="required" tabindex="1" name="fname" type="text" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <label for="lname" class="form-label labelcolor">Doctor Last Name:</label>
                                            
                                            <input class="form-control"  tabindex="2" name="lname" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="email" class="form-label labelcolor">Email:</label>
                                            
                                            <input class="form-control"  tabindex="2" name="email" type="email" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="phone" class="form-label labelcolor">Phone:</label>
                                            <input class="bg-white patientBirthDate form-control flatpickr-input" id="phone" tabindex="4" name="phone" type="number"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5 ml-4">
                                        <label for="status" class="form-label labelcolor">Status:</label>
                                            
                                            <select class="form-select select2-hidden-accessible" id="mhigender" data-control="select2" tabindex="6" name="status" data-select2-id="select2-data-patientBloodGroup" aria-hidden="true" required>
                                                <option selected="selected" value="" data-select2-id="select2-data-171-hn1b">Select Status</option>
                                                <option value="Active">Active</option>
                                                <option value="InActive">InActive</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                        <label for="status" class="form-label labelcolor">Gender:</label>
                                            
                                            <select class="form-select select2-hidden-accessible" id="mhigender" data-control="select2" tabindex="6" name="gender" data-select2-id="select2-data-patientBloodGroup" aria-hidden="true" required>
                                                <option selected="selected" value="" data-select2-id="select2-data-171-hn1b">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="password" class="form-label labelcolor">Password:</label></span>
                                            <input class="form-control"  min="6" name="password" type="password" value="" id="password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="password_confirmation" class="form-label labelcolor">Confirm Password:</label>
                                            
                                            <input class="form-control" required="" min="6" name="password_confirmation" type="password" value="" id="password_confirmation" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 mb-5">
                                        <div class="row2" io-image-input="true">
                                            <label for="fee" class="form-label labelcolor">Fee:</label>
                                            <div class="d-block">
                                                <input class="form-control" name="fee" type="number" id="fee" required>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-4">
                                    <div class="form-group col-md-12 mb-5">
                                        <div class="row2" io-image-input="true">
                                            <label for="photo" class="form-label labelcolor">Doctor Image:</label>
                                            <div class="d-block">
                                                <input class="form-control" name="photo" type="file" id="photo" required>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-5">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Education Details</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                        <!-- <div id="displayWords"></div> -->
                                        <label for="exist-values" class="form-label labelcolor">Specilities
                                            <span style="font-size: 10px;"><i class="fa fa-star" style="color: red;font-size:
                                            8px;"></i>after each specilities click enter for next</span></label>
                                        <input type="text" id="exist-values" class=" form-control tagged" data-removeBtn="true" name="specilities[]" value="" placeholder="Add Platform">
                                    
                                        
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 mb-5">
                                        <div class="row2" io-image-input="true">
                                            <label for="qualification" class="form-label labelcolor">Qualification:</label>
                                            <div class="d-block">
                                                <input class="form-control" name="qualification" type="text" id="qualification">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 mb-5">
                                        <div class="row2" io-image-input="true">
                                            <label for="experience" class="form-label labelcolor">Experience:</label>
                                            <div class="d-block">
                                                <input class="form-control" name="experience" type="number" id="experience">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-5">
                                            <label for="facilities" class="form-label labelcolor">Department:</label>
                                            <div class="dropdown"> 
                                                <button class="btn btn-success dropdown-toggle"
                                                        type="button" 
                                                        id="multiSelectDropdown"
                                                        data-bs-toggle="dropdown" 
                                                        aria-expanded="false"> 
                                                    Select Department
                                                </button> 

                                                <ul class="dropdown-menu" 
                                                    aria-labelledby="multiSelectDropdown"> 
                                                    @foreach($departments as $f)
                                                    <li style="margin-left: 10px;"> 
                                                    <label> 
                                                        <input type="checkbox" 
                                                            value="{{$f->department_name}}"  name="department[]"> 
                                                            {{$f->department_name}}
                                                        </label> 
                                                    </li> 
                                                    @endforeach
                                                    <li style="margin-left: 10px;"> 
                                                    <label> 
                                                        <input type="checkbox" 
                                                            value="None"> 
                                                           None of these
                                                        </label> 
                                                    </li> 
                                                </ul> 
                                            </div> 
                                           
                                           
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-5">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Doctor Address Details</h5>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group mb-5">
                                            <label for="address" class="form-label labelcolor">Address :</label>
                                            <input class="form-control" name="address" type="text" id="address" required>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Pin Code:</label>
                                            <input class="form-control" maxlength="6" minlength="6" name="pincode" type="text" id="pincode" required>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-5">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Doctor Bank Details</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="address" class="form-label labelcolor">Bank Name :</label>
                                            <input class="form-control" name="bankname" type="text" required>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Account Number:</label>
                                            <input class="form-control"  name="acnumber" type="text"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Account Type:</label>
                                            <select class="form-select select2-hidden-accessible"  data-control="select2" name="atype" data-select2-id="select2-data-patientBloodGroup" aria-hidden="true" required>
                                                <option selected="selected" value="" data-select2-id="select2-data-171-hn1b">Select Type of Bank Account</option>
                                                <option value="Current">Current</option>
                                                <option value="Saving">Saving</option> 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Account Holder Name:</label>
                                            <input class="form-control"  name="acountholdername" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">IFSC CODE:</label>
                                            <input class="form-control"  name="ifsc" type="text"  required>
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-5 customer_records">
                                <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">About Doctor</h5>
                                        <label for="address" class="form-label labelcolor">About Us :</label>
                                        <textarea name="editor1" required></textarea>
                                    </div>

                                </div>
                               
                        </div>
                        <div class="d-flex justify-content-end">
                            <input class="btn btn-primary me-2" id="" type="submit" value="Save">
                            
                        </div>

                    </div>
                    </form>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>


@endsection
@push('script-alt')
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>

CKEDITOR.replace( 'editor1' );

const chBoxes = 
            document.querySelectorAll('.dropdown-menu input[type="checkbox"]'); 
    const chBoxe = 
            document.querySelectorAll('.dropdownMenu input[type="checkbox"]'); 
        const dpBtn =  
            document.getElementById('multiSelectDropdown'); 
        const dpBtn1 =  
            document.getElementById('multiSelectDropdown1'); 
        let mySelectedListItems = []; 
        let mySelectedListItems1 = []; 
  
        function handleCB() { 
            mySelectedListItems = []; 
            mySelectedListItems1 = []; 
            let mySelectedListItemsText = '';
            let mySelectedListItemsText1 = ''; 
  
            chBoxes.forEach((checkbox) => { 
                if (checkbox.checked) { 
                    mySelectedListItems.push(checkbox.value); 
                    mySelectedListItemsText += checkbox.value + ', '; 
                } 
            }); 
            chBoxe.forEach((checkbox) => { 
                if (checkbox.checked) { 
                    mySelectedListItems1.push(checkbox.value); 
                    mySelectedListItemsText1 += checkbox.value + ', '; 
                } 
            }); 
  
            dpBtn.innerText = 
                mySelectedListItems.length > 0 
                    ? mySelectedListItemsText.slice(0, -2) : 'Select'; 
            dpBtn1.innerText = 
                mySelectedListItems1.length > 0 
                    ? mySelectedListItemsText1.slice(0, -2) : 'Select';
        } 
        
        
        chBoxes.forEach((checkbox) => { 
            checkbox.addEventListener('change', handleCB); 
        }); 
        chBoxe.forEach((checkbox) => { 
            checkbox.addEventListener('change', handleCB); 
        }); 
    // https://github.com/k-ivan/Tags
(function () {
  "use strict";

  // Helpers
  function $$(selectors, context) {
    return typeof selectors === "string"
      ? (context || document).querySelectorAll(selectors)
      : [selectors];
  }
  function $(selector, context) {
    return typeof selector === "string"
      ? (context || document).querySelector(selector)
      : selector;
  }
  function create(tag, attr) {
    var element = document.createElement(tag);
    if (attr) {
      for (var name in attr) {
        if (element[name] !== undefined) {
          element[name] = attr[name];
        }
      }
    }
    return element;
  }
  function whichTransitionEnd() {
    var root = document.documentElement;
    var transitions = {
      transition: "transitionend",
      WebkitTransition: "webkitTransitionEnd",
      MozTransition: "mozTransitionEnd",
      OTransition: "oTransitionEnd otransitionend"
    };

    for (var t in transitions) {
      if (root.style[t] !== undefined) {
        return transitions[t];
      }
    }
    return false;
  }
  function oneListener(el, type, fn, capture) {
    capture = capture || false;
    el.addEventListener(
      type,
      function handler(e) {
        fn.call(this, e);
        el.removeEventListener(e.type, handler, capture);
      },
      capture
    );
  }
  function hasClass(cls, el) {
    return new RegExp("(^|\\s+)" + cls + "(\\s+|$)").test(el.className);
  }
  function addClass(cls, el) {
    if (!hasClass(cls, el))
      return (el.className += el.className === "" ? cls : " " + cls);
  }
  function removeClass(cls, el) {
    el.className = el.className.replace(
      new RegExp("(^|\\s+)" + cls + "(\\s+|$)"),
      ""
    );
  }
  function toggleClass(cls, el) {
    !hasClass(cls, el) ? addClass(cls, el) : removeClass(cls, el);
  }

  function Tags(tag) {
    var el = $(tag);

    if (el.instance) return;
    el.instance = this;

    var type = el.type;
    var transitionEnd = whichTransitionEnd();

    var tagsArray = [];
    var KEYS = {
      ENTER: 13,
      COMMA: 188,
      BACK: 8
    };
    var isPressed = false;

    var timer;
    var wrap;
    var field;

    function init() {
      // create and add wrapper
      wrap = create("div", {
        className: "tags-container"
      });
      field = create("input", {
        type: "text",
        className: "tag-input",
        value: el.value || ""
      });

      wrap.appendChild(field);

      if (el.value.trim() !== "") {
        hasTags();
      }

      el.type = "hidden";
      el.parentNode.insertBefore(wrap, el.nextSibling);

      wrap.addEventListener("click", btnRemove, false);
      wrap.addEventListener("keydown", keyHandler, false);
      wrap.addEventListener("keyup", backHandler, false);
    }

    function hasTags() {
      var arr = el.value.trim().split(",");
      arr.forEach(function (item) {
        item = item.trim();
        if (~tagsArray.indexOf(item)) {
          return;
        }
        var tag = createTag(item);
        tagsArray.push(item);
        wrap.insertBefore(tag, field);
      });
    }

    function createTag(name) {
      var tag = create("div", {
        className: "tag",
        innerHTML:
          '<span class="tag__name">' +
          name +
          "</span>" +
          '<button class="tag__remove">&times;</button>'
      });
      
      return tag;
    }

    function btnRemove(e) {
      e.preventDefault();
      if (e.target.className === "tag__remove") {
        var tag = e.target.parentNode;
        var name = $(".tag__name", tag);
        wrap.removeChild(tag);
        tagsArray.splice(tagsArray.indexOf(name.textContent), 1);
        el.value = tagsArray.join(",");
      }
      field.focus();
    }

    function keyHandler(e) {
      if (e.target.tagName === "INPUT" && e.target.className === "tag-input") {
        var target = e.target;
        var code = e.which || e.keyCode;

        if (field.previousSibling && code !== KEYS.BACK) {
          removeClass("tag--marked", field.previousSibling);
        }

        var name = target.value.trim();

        // if(code === KEYS.ENTER || code === KEYS.COMMA) {
        if (code === KEYS.ENTER) {
          target.blur();

          addTag(name);

          if (timer) clearTimeout(timer);
          timer = setTimeout(function () {
            target.focus();
          }, 10);
        } else if (code === KEYS.BACK) {
          if (e.target.value === "" && !isPressed) {
            isPressed = true;
            removeTag();
          }
        }
      }
    }
    function backHandler(e) {
      isPressed = false;
    }

    function addTag(name) {
      // delete comma if comma exists
      name = name.toString().replace(/,/g, "").trim();

      if (name === "") return (field.value = "");

      if (~tagsArray.indexOf(name)) {
        var exist = $$(".tag", wrap);

        Array.prototype.forEach.call(exist, function (tag) {
          if (tag.firstChild.textContent === name) {
            addClass("tag--exists", tag);

            if (transitionEnd) {
              oneListener(tag, transitionEnd, function () {
                removeClass("tag--exists", tag);
              });
            } else {
              removeClass("tag--exists", tag);
            }
          }
        });

        return (field.value = "");
      }

      var tag = createTag(name);
      wrap.insertBefore(tag, field);
      tagsArray.push(name);
      field.value = "";
      el.value += el.value === "" ? name : "," + name;
    }

    function removeTag() {
      if (tagsArray.length === 0) return;

      var tags = $$(".tag", wrap);
      var tag = tags[tags.length - 1];

      if (!hasClass("tag--marked", tag)) {
        addClass("tag--marked", tag);
        return;
      }

      tagsArray.pop();

      wrap.removeChild(tag);

      el.value = tagsArray.join(",");
    }

    init();

    /* Public API */

    this.getTags = function () {
      return tagsArray;
    };

    this.clearTags = function () {
      if (!el.instance) return;
      tagsArray.length = 0;
      el.value = "";
      wrap.innerHTML = "";
      wrap.appendChild(field);
    };

    this.addTags = function (name) {
      if (!el.instance) return;
      if (Array.isArray(name)) {
        for (var i = 0, len = name.length; i < len; i++) {
          addTag(name[i]);
        }
      } else {
        addTag(name);
      }
      return tagsArray;
    };

    this.destroy = function () {
      if (!el.instance) return;

      wrap.removeEventListener("click", btnRemove, false);
      wrap.removeEventListener("keydown", keyHandler, false);
      wrap.removeEventListener("keyup", keyHandler, false);

      wrap.parentNode.removeChild(wrap);

      tagsArray = null;
      timer = null;
      wrap = null;
      field = null;
      transitionEnd = null;

      delete el.instance;
      el.type = type;
    };
  }

  window.Tags = Tags;
})();

// Use
var tags = new Tags(".tagged");

document.getElementById("get").addEventListener("click", function (e) {
  e.preventDefault();
  alert(tags.getTags());
});
document.getElementById("clear").addEventListener("click", function (e) {
  e.preventDefault();
  tags.clearTags();
});
document.getElementById("add").addEventListener("click", function (e) {
  e.preventDefault();
  tags.addTags("New");
});
document.getElementById("addArr").addEventListener("click", function (e) {
  e.preventDefault();
  tags.addTags(["Steam Machines", "Nintendo Wii U", "Shield Portable"]);
});
document.getElementById("destroy").addEventListener("click", function (e) {
  e.preventDefault();
  if (this.textContent === "destroy") {
    tags.destroy();
    this.textContent = "reinit";
  } else {
    this.textContent = "destroy";
    tags = new Tags(".tagged");
  }
});


</script>
@endpush
