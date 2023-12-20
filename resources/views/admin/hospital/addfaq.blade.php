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
                <h3 class="mb-0" style="color: black; font-weight:700;"> FAQ
                </h3>
                
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
                            <form method="POST" action="{{ route('admin.hospital.savefaq') }}" accept-charset="UTF-8" id="" enctype="multipart/form-data">
                            @csrf <!-- {{ csrf_field() }} -->
                                <div class="alert alert-danger d-none" id="patientErrorBox"></div>
                                <input class="form-control"  tabindex="1" name="hospital_id" type="hidden" value="{{$hospitaldetails[0]->h_id}}">
                                <div class="row gx-10 ">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">FAQ Details</h5>
                                    </div>
                                    <div class="faqlist container-fluid" id="faqlist"></div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <label for="first_name" class="form-label labelcolor">Question:</label>
                                            <input class="form-control" required="required" tabindex="1" name="question" type="text" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <label for="last_name" class="form-label labelcolor">Answer:</label>
                                            
                                            <input class="form-control"  tabindex="2" name="answer" type="text" required="required">
                                        </div>
                                    </div>
                                  
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                        <label for="status" class="form-label labelcolor">Status:</label>
                                            <select class="form-select select2-hidden-accessible" id="mhigender" data-control="select2" tabindex="6" name="status" data-select2-id="select2-data-patientBloodGroup" aria-hidden="true" required>
                                                <option selected="selected" value="" data-select2-id="select2-data-171-hn1b">Select Status</option>
                                                <option value="Active">Active</option>
                                                <option value="InActive">InActive</option>
                                                
                                            </select>
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



