<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Page</title>

    <!-- Custom fonts for this template-->
    <!-- jQuery -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet"
/>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Include Flatpickr JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css" />

    <!-- Custom styles for this template-->
    <link href="{{ asset('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">
    @stack('style-alt')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
            @include('partials.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand-xl  top-navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow d-xl-flex d-block px-3 px-xl-0 py-4 py-xl-0" id="nav-header">
                <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
        <div class="container-fluid pe-0">
            <div class="navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Dashboard
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Users
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        IPD Patients
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0  " href="">
        OPD Patients
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Vaccinated Patients
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Vaccinations
    </a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Admins
    </a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Account
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Employee Payrolls
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Invoices
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Payments
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Payment Reports
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Advance Payments
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Bills
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Bed Status
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Bed Assigns
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Beds
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Bed Types
    </a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Blood Banks
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Blood Donors
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Blood Donations
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Blood Issues
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 hovernot d-none pd-none ">
    <a class="nav-link p-0 patientsactive" href="">
        Patients
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 hovernot d-none pd-none  ">
    <a class="nav-link p-0 patientsactive" href="">
        Cases
    </a>
</li>
<!-- <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0  ">
    <a class="nav-link p-0 " href="">
        Case Handlers
    </a>
</li> -->
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 hovernot d-none pd-none ">
    <a class="nav-link p-0 patientsactive" href="">
        Patient Admissions
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Documents
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Document Types
    </a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Insurances
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Packages
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Services
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Ambulances
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Ambulance Calls
    </a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Doctors
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        <span class="menu-title" style="white-space: nowrap">Doctor Departments
    </span></a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Schedules
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Prescriptions
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Accountants
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Nurses
    </a>
</li>


<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Receptionists
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Lab Technicians
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Pharmacists
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Appointments
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Birth Reports
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Death Reports
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Investigation Reports
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Operation Reports
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Medicine Categories
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Medicine Brands
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Medicines
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Purchase Medicine
    </a>
</li>


<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">Used Medicine</a>
</li>


<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Medicine Bill
    </a>
 </li>
  
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0  d-none">
    <a class="nav-link p-0 " href="">
        Radiology Categories
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Radiology Tests
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Pathology Categories
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Pathology Tests
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Diagnosis Categories
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Diagnosis Tests
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        SMS
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Mail
    </a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0  d-none">
    <a class="nav-link p-0 " href="">
        Incomes
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Expenses
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Items Categories
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Items
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Item Stocks
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Issued Items
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Charge Categories
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Charges
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Doctor OPD Charges
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Call Logs
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Visitors
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Postal Receive
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Postal Dispatch
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Live Consultations
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0  d-none">
    <a class="nav-link p-0 " href="">
        Live Meetings
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0  d-none">
    <a class="nav-link p-0  active" href="">
        General
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Hospital Schedule
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0  d-none ">
    <a class="nav-link p-0 " href="">
        Modules Setting
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0  d-none ">
    <a class="nav-link p-0 " href="">
        Currencies
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0  " href="">
        CMS
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0  " href="">
        Front CMS Services
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Notice Boards
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Testimonials
    </a>
</li>


<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0  " href="">
        Enquiries
    </a>
</li>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Operation Categories
    </a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 d-none">
    <a class="nav-link p-0 " href="">
        Operations
    </a>
</li>
                </ul>
            </div>
        </div>
    
                    <!-- Sidebar Toggle (Topbar) -->
                 


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow hovernot">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('backend/img/undraw_profile.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                               
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Edit Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Change Password
                                </a>
                                 <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="post">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                @if(session()->has('message'))
                    <div class="alert alert-{{ session()->get('alert-type') }} alert-dismissible fade show" role="alert" id="alert-message">
                        {{ session()->get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer ">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <div class="container-fluid">
    <div class="footer py-4 d-flex flex-lg-column position-sticky bottom-0">
        <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
            <div class="text-muted">
                <span>All Rights Reserved</span>
                <span class="text-muted fw-bold me-1">© 2023</span>
                <a data-turbo="false" href="https://www.gatiktech.com/" class="text-hover-primary">GatikAI Technologies</a>
            </div>
            <div class="text-muted order-2 order-md-1">
                v1.0.0
            </div>
        </div>
    </div>
</div>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                  <form action="" method="POST">
                    @csrf
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Logout</button>
                  </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
></script>
    <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('backend/js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
    <!-- Page level plugins -->
    <script src="{{ asset('backend/vendor/chart.js/Chart.min.js') }}"></script>
    
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script>
      function addtopbarlistforpatient(e) {
  var elems = document.querySelectorAll(".pd-none");
  [].forEach.call(elems, function(el) {
    el.classList.remove("d-none");
    // document.getElementsByClassName("patientsactive").classList.add("active");
  });
  
 
}
        $(function() {
  let copyButtonTrans = 'copy'
  let csvButtonTrans = 'csv'
  let excelButtonTrans = 'excel'
  let pdfButtonTrans = 'pdf'
  let printButtonTrans = 'print'
  let colvisButtonTrans = 'Column visibility'
  let languages = {
    'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
  };
  $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
  $.extend(true, $.fn.dataTable.defaults, {
    language: {
      url: languages['{{ app()->getLocale() }}']
    },
    columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
    }, {
        orderable: false,
        searchable: false,
        targets: -1
    }],
    select: {
      style:    'multi+shift',
      selector: 'td:first-child'
    },
    order: [],
    scrollX: true,
    pageLength: 100,
    dom: 'lBfrtip<"actions">',
    buttons: [
    //   {
    //     extend: 'copy',
    //     className: 'btn-outline-secondary mx-2',
    //     text: copyButtonTrans,
    //     exportOptions: {
    //       columns: ':visible'
    //     }
    //   },
      {
        extend: 'csv',
        className: 'btn-outline-secondary mx-2',
        text: csvButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'excel',
        className: 'btn-outline-secondary mx-2',
        text: excelButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'pdf',
        className: 'btn-outline-secondary mx-2',
        text: pdfButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'print',
        className: 'btn-outline-secondary mx-2',
        text: printButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
    ]
  });
  $.fn.dataTable.ext.classes.sPageButton = '';
});

            $('.extra-fields-customer').click(function() {
                // window.print("hello");
                var name=document.getElementById('name').value;
                var relation = document.getElementById('relation').value;
                var issue = document.getElementById('issue').value;
                var el= document.getElementById("familymemberdetailslist");
               el.innerHTML += "<ul style='display:flex;background:linear-gradient(to right, #004e92, #000428);color:white;padding:5px;'><li style='list-style:none;width:29%;'>"+name+"</li><li style='width:29%;list-style:none;'>"+relation+"</li><li style='width:29%;list-style:none;'>"+issue+"</li><li style='margin-left:50px;list-style:none;width:29%;'><a href='/'>Remove</a></li></ul>"

});
/**
 * Variables
 */
const signupButton = document.getElementById('signup-button'),
    loginButton = document.getElementById('login-button'),
    userForms = document.getElementById('user_options-forms')

/**
 * Add event listener to the "Sign Up" button
 */
signupButton.addEventListener('click', () => {
  userForms.classList.remove('bounceRight')
  userForms.classList.add('bounceLeft')
}, false)

/**
 * Add event listener to the "Login" button
 */
loginButton.addEventListener('click', () => {
  userForms.classList.remove('bounceLeft')
  userForms.classList.add('bounceRight')
}, false)
        </script>
        
    
    @stack('script-alt')
    <!-- Page level custom scripts -->
    <!-- <script src="{{ asset('backend/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('backend/js/demo/chart-pie-demo.js') }}"></script> -->

</body>

</html>