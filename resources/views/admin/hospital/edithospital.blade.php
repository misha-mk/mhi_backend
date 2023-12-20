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
                <h3 class="mb-0" style="color: black; font-weight:700;"> Update Hospital
                </h3>
                <a href="{{ route('admin.hospital.addtestimonial', ['id' => $hospitaldetails[0]->h_id])}}" class="btn btn-outline-primary">Testimonial</a>
                <a href="{{ route('admin.hospital.addfaq', ['id' => $hospitaldetails[0]->h_id]) }}" class="btn btn-outline-primary">FAQ</a>
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

                        <div class="card-body p-12">
                            <form method="POST" action="{{ route('admin.hospital.saveupdatedhospitalinfo') }}" accept-charset="UTF-8" id="" enctype="multipart/form-data">
                            @csrf <!-- {{ csrf_field() }} -->
                                <div class="alert alert-danger d-none" id="patientErrorBox"></div>
                                <input class="form-control"  tabindex="1" name="h_id" type="hidden" value="{{$hospitaldetails[0]->h_id}}">
                                <div class="row gx-10 ">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Hospital Details</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <label for="first_name" class="form-label labelcolor">Hospital Name:</label>
                                            <input class="form-control" required="required" value="{{$hospitaldetails[0]->name}}" tabindex="1" name="name" type="text" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <label for="last_name" class="form-label labelcolor">Website:</label>
                                            
                                            <input class="form-control"  tabindex="2" name="website" type="text" value="{{$hospitaldetails[0]->website}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="last_name" class="form-label labelcolor">Fees:</label>
                                            
                                            <input class="form-control"  tabindex="2" name="fees" type="text" required="required" value="{{$hospitaldetails[0]->fees}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="dob" class="form-label labelcolor">Number Of Bed:</label>
                                            <input class="bg-white patientBirthDate form-control flatpickr-input" id="mhiBirthDate" tabindex="4" name="number_bed" type="number"  required value="{{$hospitaldetails[0]->number_bed}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5 ml-4">
                                        <label for="status" class="form-label labelcolor">Status:</label>
                                            
                                            <select class="form-select select2-hidden-accessible" id="mhigender" data-control="select2" tabindex="6" name="status" data-select2-id="select2-data-patientBloodGroup" aria-hidden="true" required>
                                                <option selected="selected" value="{{$hospitaldetails[0]->status}}" data-select2-id="select2-data-171-hn1b">{{$hospitaldetails[0]->status}}</option>
                                                <option value="Active">Active</option>
                                                <option value="InActive">InActive</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-5">
                                            <label for="facilities" class="form-label labelcolor">Facilities:</label>
                                            <div class="dropdown"> 
                                                <button class="btn btn-success dropdown-toggle"
                                                        type="button" 
                                                        id="multiSelectDropdown"
                                                        data-bs-toggle="dropdown" 
                                                        aria-expanded="false"> 
                                                        {{$hospitaldetails[0]->facilities}}
                                                </button> 

                                                <ul class="dropdown-menu" 
                                                    aria-labelledby="multiSelectDropdown"> 
                                                    @foreach($facilites as $f)
                                                    <li style="margin-left: 10px;"> 
                                                    <label> 
                                                        <input type="checkbox" 
                                                            value="{{$f->facilites_name}}"  name="facilities[]"> 
                                                            {{$f->facilites_name}}
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
                                           
                                            <a href="{{ route('admin.facilites.addfacilites') }}" class="btn btn-primary" >
                                                <span class="icon text-white-50">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                                <span class="text">{{ __('Add More Facilities') }}</span>
                                            </a>
                                        </div>
                                    </div>
                                   
                                    
                                   
                                    <div class="form-group col-md-4 mb-5">
                                        <div class="row2" io-image-input="true">
                                            <label for="ots" class="form-label labelcolor">Number of OT:</label>
                                            <div class="d-block">
                                                <input class="form-control" name="ots" type="text" id="ot" value="{{$hospitaldetails[0]->ots}}">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-md-4">
                                    <div class="form-group col-md-12 mb-5" style="margin-top: 20px;">
                                        <div class="row2" io-image-input="true">
                                            <label for="image" class="form-label labelcolor">Hospital Image:</label>
                                            <div class="d-block">
                                                <input class="form-control" name="image" type="file" id="image" required>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5 ml-4" style="margin-top: 20px;">
                                            <label for="status" class="form-label labelcolor">Emergency Ward:</label>
                                            <select class="form-select select2-hidden-accessible"  data-control="select2" tabindex="6" name="emergencyward" data-select2-id="select2-data-patientBloodGroup" aria-hidden="true" required>
                                                <option selected="selected" value="{{$hospitaldetails[0]->emergencyward}}" data-select2-id="select2-data-171-hn1b">{{$hospitaldetails[0]->emergencyward}}</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-5">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Owner Details</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="address" class="form-label labelcolor">Name :</label>
                                            <input class="form-control" name="ownername" type="text" required value="{{$hospitaldetails[0]->ownername}}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Phone Number:</label>
                                            <input class="form-control" maxlength="10" minlength="10" name="ownerphone" type="number"  required value="{{$hospitaldetails[0]->ownerphone}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Email:</label>
                                            <input class="form-control" name="owneremail" type="email"  required value="{{$hospitaldetails[0]->owneremail}}">
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-5">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Hospital Address Details</h5>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group mb-5">
                                            <label for="address" class="form-label labelcolor">Address :</label>
                                            <input class="form-control" name="address" type="text" id="address" required value="{{$hospitaldetails[0]->address}}">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Pin Code:</label>
                                            <input class="form-control" maxlength="6" minlength="6" name="pincode" type="text" id="pincode" required value="{{$hospitaldetails[0]->pincode}}">
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-5 customer_records">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Hospital Contact Details</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <label for="email" class="form-label labelcolor">Email:</label>
                                           
                                            <input class="form-control" required="required" name="email" type="email" id="email" value="{{$hospitaldetails[0]->email}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mobile-overlapping  mb-5">
                                            <label for="contact" class="form-label labelcolor">Contact Number:</label>
                                           
                                            <input class="form-control" required min="10" tabindex="5" name="contact" type="number" id="" required value="{{$hospitaldetails[0]->contact}}">
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-5">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Hospital Establishment Details</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="address" class="form-label labelcolor">Register Name:</label>
                                            <input class="form-control" name="rname" type="text"  required value="{{$hospitaldetails[0]->rname}}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Type:</label>
                                            <select class="form-select select2-hidden-accessible"  data-control="select2" name="rtype" data-select2-id="select2-data-patientBloodGroup" aria-hidden="true" required>
                                                <option selected="selected" value="{{$hospitaldetails[0]->rtype}}" data-select2-id="select2-data-171-hn1b">{{$hospitaldetails[0]->rtype}}</option>
                                                <option value="Provisional Registration">Provisional Registration</option>
                                                <option value="Parmanent Registration">Parmanent Registration</option> 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">CMO Number:</label>
                                            <input class="form-control"  name="cmonumber" type="text" required value="{{$hospitaldetails[0]->cmonumber}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">NABH:</label>
                                            <input class="form-control" name="nabh" type="text"  required value="{{$hospitaldetails[0]->nabh}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">USP:</label>
                                            <input class="form-control"  name="usp" type="text"  required value="{{$hospitaldetails[0]->usp}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Established Date:</label>
                                            <input class="form-control" name="rdate" type="date" required value="{{$hospitaldetails[0]->rdate}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Registeration Certificate:</label>
                                            <input class="form-control"  name="registrationCerti" type="file"  required >
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-5 customer_records">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Coverage</h5>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <label for="password_confirmation" class="form-label labelcolor">Coverage:</label>
                                           <div class="dropdown"> 
                                           <button class="btn btn-success dropdown-toggle"
                                                        type="button" 
                                                        id="multiSelectDropdown1"
                                                        data-bs-toggle="dropdown" 
                                                        aria-expanded="false"> 
                                                        {{$hospitaldetails[0]->benifits}}
                                                </button> 
                                                <div class="dropdown-content">
                                            <ul class="dropdownMenu">
                                            @foreach($benefits as $f)
                                                <li style="list-style: none; padding-left:10px;padding-top:4px;">
                                                    <label>
                                                        <input type="checkbox" value="{{$f->benefits_name}}" name="benifits[]">   {{$f->benefits_name}}
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
                                            <a href="{{ route('admin.benefits.addbenefits') }}" class="btn btn-primary">
                                               <span class="icon text-white-50">
                                                   <i class="fa fa-plus"></i>
                                               </span>
                                               <span class="text">{{ __('Add More Coverage') }}</span>
                                           </a> 
                                        </div>
                                            
                                        </div>
                                    
                                </div>
                                <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-5">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Hospital Bank Details</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="address" class="form-label labelcolor">Bank Name :</label>
                                            <input class="form-control" name="bankname" type="text" required value="{{$hospitaldetails[0]->bankname}}">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Account Number:</label>
                                            <input class="form-control"  name="acnumber" type="text"  required value="{{$hospitaldetails[0]->acnumber}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Account Type:</label>
                                            <select class="form-select select2-hidden-accessible"  data-control="select2" name="atype" data-select2-id="select2-data-patientBloodGroup" aria-hidden="true" required>
                                                <option selected="selected" value="{{$hospitaldetails[0]->atype}}" data-select2-id="select2-data-171-hn1b">{{$hospitaldetails[0]->atype}}</option>
                                                <option value="Current">Current</option>
                                                <option value="Saving">Saving</option> 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Account Holder Name:</label>
                                            <input class="form-control"  name="acountholdername" type="text" required value="{{$hospitaldetails[0]->acountholdername}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">IFSC CODE:</label>
                                            <input class="form-control"  name="ifsc" type="text"  required value="{{$hospitaldetails[0]->ifsc}}">
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-5 customer_records">
                                <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">About Hospital</h5>
                                        <label for="address" class="form-label labelcolor">About Us :</label>
                                        <textarea name="editor1" required>{{$hospitaldetails[0]->aboutUs}}</textarea>
                                    </div>

                                </div>
                               
                        </div>
                        <div class="d-flex justify-content-end">
                            <input class="btn btn-primary me-2" id="" type="submit" value="Save">
                            <a href="{{ route('admin.hospital.index') }}" class="btn btn-secondary me-2">Cancel</a>
                        </div>

                    </div>
                    </form>
                </div>
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
</script>
@endpush
