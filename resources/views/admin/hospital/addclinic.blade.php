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
                <h3 class="mb-0" style="color: black; font-weight:700;"> New Clinic
                </h3>
                
                <a href="{{ route('admin.hospital.cliniclist') }}" class="btn btn-outline-primary">Back</a>
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
                            <form method="POST" action="{{ route('admin.hospital.saveclinicdetails') }}" accept-charset="UTF-8" id="" enctype="multipart/form-data">
                            @csrf <!-- {{ csrf_field() }} -->
                                <div class="alert alert-danger d-none" id="patientErrorBox"></div>
                                <div class="row gx-10 ">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Clinic Details</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <label for="first_name" class="form-label labelcolor">Clinic Name:</label>
                                            <input class="form-control" required="required" tabindex="1" name="name" type="text" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <label for="last_name" class="form-label labelcolor">Website:</label>
                                            
                                            <input class="form-control"  tabindex="2" name="website" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="last_name" class="form-label labelcolor">Fees:</label>
                                            
                                            <input class="form-control"  tabindex="2" name="fees" type="text" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="dob" class="form-label labelcolor">Number Of Bed:</label>
                                            <input class="bg-white patientBirthDate form-control flatpickr-input" id="mhiBirthDate" tabindex="4" name="number_bed" type="number"  required>
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
                                    <div class="col-md-12">
                                        <div class="form-group mb-5">
                                            <label for="facilities" class="form-label labelcolor">Facilities:</label>
                                            <div class="dropdown"> 
                                                <button class="btn btn-success dropdown-toggle"
                                                        type="button" 
                                                        id="multiSelectDropdown"
                                                        data-bs-toggle="dropdown" 
                                                        aria-expanded="false"> 
                                                    Select Facilities
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
                                            <label for="ots" class="form-label labelcolor">Number of OT:</label>
                                            <div class="d-block">
                                                <input class="form-control" name="ots" type="text" id="ot">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-md-4">
                                    <div class="form-group col-md-12 mb-5" style="margin-top: 20px;">
                                        <div class="row2" io-image-input="true">
                                            <label for="image" class="form-label labelcolor">Clinic Image:</label>
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
                                                <option selected="selected" value="" data-select2-id="select2-data-171-hn1b">Select Emergency Ward Availbility</option>
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
                                            <input class="form-control" name="ownername" type="text" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Phone Number:</label>
                                            <input class="form-control" maxlength="10" minlength="10" name="ownerphone" type="number"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Email:</label>
                                            <input class="form-control" name="owneremail" type="email"  required>
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-2">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Clinic Address Details</h5>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group mb-5">
                                            <label for="address" class="form-label labelcolor">Address :</label>
                                            <input class="form-control" name="address" type="text" id="address" required>
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="col-md-9">
                                        <div class="form-group mb-5">
                                            <label for="address" class="form-label labelcolor">Address :</label>
                                            <input class="form-control" name="address" type="text" id="address" required>
                                        </div>
                                    </div> -->
                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <div id="error-message" style="color:red;font-size:10px"></div>
                                            <label for="zip" class="form-label labelcolor">Pin Code:</label>
                                            <input class="form-control" maxlength="6" minlength="6" name="pincode" type="text" id="pin" onchange="getLocationDetails()" required placeholder="Enter Pincode">
                                        </div>
                                    </div>
                                </div>
                                <div class="row  mb-5">
                                <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <label for="state" class="form-label labelcolor">State :</label>
                                            <input class="form-control" name="state" type="text" id="state" required readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <label for="city" class="form-label labelcolor">City :</label>
                                            <input class="form-control" name="city" type="text" id="city" required readonly>
                                        </div>
                                    </div>
</div>
                                <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-5 customer_records">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Clinic Contact Details</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <label for="email" class="form-label labelcolor">Email:</label>
                                           
                                            <input class="form-control" required="required" name="email" type="email" id="email">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mobile-overlapping  mb-5">
                                            <label for="contact" class="form-label labelcolor">Contact Number:</label>
                                           
                                            <input class="form-control" required min="10" tabindex="5" name="contact" type="number" value="" id="" required>
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-5">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Clinic Establishment Details</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="address" class="form-label labelcolor">Register Name:</label>
                                            <input class="form-control" name="rname" type="text"  required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Type:</label>
                                            <select class="form-select select2-hidden-accessible"  data-control="select2" name="rtype" data-select2-id="select2-data-patientBloodGroup" aria-hidden="true" required>
                                                <option selected="selected" value="" data-select2-id="select2-data-171-hn1b">Select Type of Registration</option>
                                                <option value="Provisional Registration">Provisional Registration</option>
                                                <option value="Parmanent Registration">Parmanent Registration</option> 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">CMO Number:</label>
                                            <input class="form-control"  name="cmonumber" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">NABH:</label>
                                            <input class="form-control" name="nabh" type="text"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">USP:</label>
                                            <input class="form-control"  name="usp" type="text"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Established Date:</label>
                                            <input class="form-control" name="rdate" type="date" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="zip" class="form-label labelcolor">Registeration Certificate:</label>
                                            <input class="form-control"  name="registrationCerti" type="file"  required>
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
                                                    Select Coverage
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
                                        <h5 class="labelcolor" style="font-weight:700;">Clinic Bank Details</h5>
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
                                        <h5 class="labelcolor" style="font-weight:700;">About Clinic</h5>
                                        <label for="address" class="form-label labelcolor">About Us :</label>
                                        <textarea name="editor1" required></textarea>
                                    </div>

                                </div>
                               
                        </div>
                        <div class="d-flex justify-content-end">
                            <input class="btn btn-primary me-2" id="" type="submit" value="Save">
                            <a href="{{ route('admin.hospital.cliniclist') }}" class="btn btn-secondary me-2">Cancel</a>
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
   
    function getLocationDetails() {
        var pin = $('#pin').val();
var url = 'http://127.0.0.1:8000/api/get-location/' + pin;
// console.log(url);
        if (pin.length === 6) {
            // Make an AJAX request to the Laravel backend
            $.ajax({
                url: url,
                type: 'GET',
                success: function (response) {
                    // console.log(response);
                    // Update state and city fields
                    if(response.state)
                    {
                        $('#state').val(response.state);
                        $('#city').val(response.city);
                    }
                    else{
                        document.getElementById('error-message').innerText = 'Invalid PIN';
                        $('#pin').val(' ');
                    }
                    
                },
                error: function (error) {
                    console.error('Error fetching location details:', error);
                }
            });
        } else {
            document.getElementById('error-message').innerText = 'Invalid PIN';
            $('#pin').val(' ');
        }
    }

</script>
@endpush
