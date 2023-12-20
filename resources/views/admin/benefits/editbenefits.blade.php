@extends('layouts.admin')

@section('content')
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
                <h3 class="mb-0" style="color: black; font-weight:700;"> New Benefits
                </h3>
                <a href="{{ route('admin.benefits.index') }}" class="btn btn-outline-primary">Back</a>
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
                            <form method="POST" action="{{ route('admin.benefits.saveupdatedbenefitsdata', ['id' => $benefitsdetails[0]->benefits_id]) }}" accept-charset="UTF-8" id="" enctype="multipart/form-data">
                            @csrf <!-- {{ csrf_field() }} -->
                                <div class="alert alert-danger d-none" id="patientErrorBox"></div>
                                <div class="row gx-10 ">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Benefits Details</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <label for="first_name" class="form-label labelcolor">Benefits Name:</label>
                                            <input class="form-control" required="required" tabindex="1" name="benefits_name" type="text" value="{{$benefitsdetails[0]->benefits_name}}">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-md-3">
                                        <div class="form-group mb-5">
                                            <label for="status" class="form-label labelcolor">Status:</label>
                                            
                                            <select class="form-select select2-hidden-accessible" id="mhigender" data-control="select2" tabindex="6" name="status" data-select2-id="select2-data-patientBloodGroup" aria-hidden="true" required>
                                                <option selected="selected" value="{{$benefitsdetails[0]->status}}" data-select2-id="select2-data-171-hn1b">{{$benefitsdetails[0]->status}}</option>
                                                <option value="Active">Active</option>
                                                <option value="InActive">InActive</option>
                                                
                                            </select>

                                        </div>
                                    </div>
                                
                        </div>
                        <div class="d-flex justify-content-end">
                            <input class="btn btn-primary me-2"  type="submit" value="Save">
                            <a href="{{ route('admin.benefits.index') }}" class="btn btn-secondary me-2">Cancel</a>
                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection