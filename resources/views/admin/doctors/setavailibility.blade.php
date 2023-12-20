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
                <!-- <h3 class="mb-0" style="color: black; font-weight:700;">Set Availbility</h3> -->
                <!-- <a href="{{ route('admin.hospital.index') }}" class="btn btn-outline-primary">Back</a> -->
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
                            <form method="POST" action="{{ route('admin.doctor.saveAvailablity') }}" accept-charset="UTF-8" id="" enctype="multipart/form-data">
                            @csrf <!-- {{ csrf_field() }} -->
                                <div class="alert alert-danger d-none" id="patientErrorBox"></div>
                                <div class="row gx-10 ">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Availbility</h5>
                                    </div>
                                    <div class="col-md-6">
                                    <input class="form-control" required="required" tabindex="1" name="provider_id" type="hidden" value="{{$doctordetails[0]->provider_id}}">
                                    <input class="form-control" required="required" tabindex="1" name="provider_type" type="hidden" value="{{$doctordetails[0]->provider_type}}">
                                    <input class="form-control" required="required" tabindex="1" name="doctor_id" type="hidden" value="{{$doctordetails[0]->d_id}}">
                                        <div class="form-group mb-5">
                                            <label for="first_name" class="form-label labelcolor">Doctor Name:</label>
                                            <input class="form-control" required="required" tabindex="1" name="doctorname" type="text" value="{{$doctordetails[0]->fname}} {{$doctordetails[0]->lname}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <label for="lname" class="form-label labelcolor">Hospital Name:</label>
                                            
                                            <input class="form-control"  tabindex="2" name="hospitalname" type="text" value="{{$hospital->name}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                        <label for="day" class="form-label labelcolor">Day:</label>
                                        <select class="form-select select2-hidden-accessible" id="mhigender" data-control="select2" tabindex="6" name="day" data-select2-id="select2-data-patientBloodGroup" aria-hidden="true" required>
                                                <option selected="selected" value="" data-select2-id="select2-data-171-hn1b">Select Day</option>
                                                <option value="Monday">Monday</option>
                                                <option value="Tuesday">Tuesday</option>
                                                <option value="Wednesday">Wednesday</option>
                                                <option value="Thursday">Thursday</option>
                                                <option value="Friday">Friday</option>
                                                <option value="Saturday">Saturday</option>
                                                <option value="Sunday">Sunday</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="phone" class="form-label labelcolor">Time From:</label>
                                            <input class="bg-white patientBirthDate form-control flatpickr-input" id="time_from" name="time_from" type="time"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="phone" class="form-label labelcolor">Time To:</label>
                                            <input class="bg-white patientBirthDate form-control flatpickr-input" id="time_to"  name="time_to" type="time"  required>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="noofpatient" class="form-label labelcolor">Slot Time (In mint):</label>
                                            <input class="bg-white patientBirthDate form-control flatpickr-input" id="per_patient_time"  name="slottime" type="time"  required>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="noofpatient" class="form-label labelcolor">No Of Patient Per Slot:</label>
                                            <input class="bg-white patientBirthDate form-control flatpickr-input" id=""  name="noofpatient" type="number"   required>
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
                                    <!-- <hr style="margin: -12px !important;">
                                <div class="row mt-3 mb-5">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="labelcolor" style="font-weight:700;">Set Break Time</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="date" class="form-label labelcolor">Date:</label>
                                            
                                            <input class="form-control" id="datetime" name="break_date" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="phone" class="form-label labelcolor">Time From:</label>
                                            <input class="bg-white patientBirthDate form-control flatpickr-input" id="b_time_from" name="break_time_from" type="time"  >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-5">
                                            <label for="phone" class="form-label labelcolor">Time To:</label>
                                            <input class="bg-white patientBirthDate form-control flatpickr-input" id="b_time_to"  name="break_time_to" type="text">
                                        </div>
                                    </div>
                                   
                                </div> -->
                        </div>
                        <div class="d-flex justify-content-end">
                            <input class="btn btn-primary me-2" id="" type="submit" value="Save">
                            
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
    flatpickr("#datetime", {
            enableTime: false,
            dateFormat: "Y-m-d",
            minDate: "today", // Minimum date is today
        });
        flatpickr("#time_from", {
            enableTime: true,
            noCalendar: true, // Hide the calendar
            // dateFormat: "H:i", // Do not display a formatted date
            dateFormat: "h:i K", // Use 24-hour time format
        });
        flatpickr("#time_to", {
            enableTime: true,
            noCalendar: true, // Hide the calendar
            // dateFormat: "H:i", // Do not display a formatted date
            dateFormat: "h:i K", // Use 24-hour time format
        });
        flatpickr("#b_time_from", {
            enableTime: true,
            noCalendar: true, // Hide the calendar
            // dateFormat: "H:i", // Do not display a formatted date
            dateFormat: "h:i K", // Use 24-hour time format
        });
        flatpickr("#b_time_to", {
            enableTime: true,
            noCalendar: true, // Hide the calendar
            // dateFormat: "H:i", // Do not display a formatted date
            dateFormat: "h:i K", // Use 24-hour time format
        });
        flatpickr("#per_patient_time", {
            enableTime: true,
            noCalendar: true, // Hide the calendar
            dateFormat: "H:i:S", // Use 24-hour time format with seconds
            time_24hr: true,
            maxTime: "0:30",
          
        });
        
function setDay() {
   
    var selectedDate = document.getElementById('datetime').value;
    
            console.log(selectedDate);
            var date = new Date(selectedDate);
            var daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            var selectedDay = daysOfWeek[date.getDay()];

            document.getElementById('day').value = selectedDay;
        }
</script>
@endpush
