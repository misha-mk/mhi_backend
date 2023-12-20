@extends('layouts.admin')

@section('content')
<div class="container-fluid" style="background: #eff3f7 !important;">

    <!-- Page Heading -->

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="content d-flex flex-column flex-column-fluid pt-7">
                    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-7">
            <h3 class="mb-0" style="color: black; font-weight:700;"> New Patient
</h3>
            <a href="https://hms.infyom.com/patients" class="btn btn-outline-primary">Back</a>
        </div>
    </div>
    <div class="row mt-3 mb-5 customer_records">
    <div class="col-md-12 mb-3">
        <h5 class="labelcolor">Family Members</h5>
    </div>
<div class="familymemberdetailslist container-fluid" id="familymemberdetailslist">

</div>
   
    
    <div class="form-group col-sm-6 mb-5">
        <label for="facebook_url" class="form-label labelcolor">Name:</label>
        <input class="form-control" id="name"  name="" type="text">
    </div>

    <div class="form-group col-sm-6 mb-5">
        <label for="twitter_url" class="form-label labelcolor">Phone Number:</label>
        <input class="form-control" id="phone" name="" type="number">
    </div>

 
    <div class="form-group col-sm-6 mb-5">
        <label for="instagram_url" class="form-label labelcolor">Relation:</label>
        <input class="form-control patientInstagramUrl" id="relation"  name="" type="text">
    </div>
    <div class="form-group col-sm-6 mb-5">
        <label for="instagram_url" class="form-label labelcolor">Age:</label>
        <input class="form-control patientInstagramUrl" id="age"  name="" type="number">
    </div>
    <div class="form-group col-sm-6 mb-5">
        <label for="instagram_url" class="form-label labelcolor">Gender:</label>
        <select class="form-select select2-hidden-accessible" id="gender" data-control="select2" tabindex="-1" name="blood_group" data-select2-id="select2-data-patientBloodGroup" aria-hidden="true">
                <option selected="selected" value="" data-select2-id="select2-data-171-hn1b">Select Gender</option>
                <option value="0 +ve">Male</option>
                <option value="484">Female</option>
                <option value="A">Other</option>
                
            </select>
    </div>


    <div class="form-group col-sm-6 mb-5">
        <label for="linkedIn_url" class="form-label labelcolor">Disease:</label>
        <input class="form-control patientLinkedInUrl" id="issue"  name="linkedIn_url" type="text">
    </div>
    <div class="d-flex justify-content-end">
    <input class="btn btn-primary me-2 extra-fields-customer" id="" type="submit" value="Add Family Member">
    
</div>

</div> 




    </div>
    @endsection
    