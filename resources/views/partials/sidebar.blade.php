<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-text mx-3" style="font-size:22px; ">{{ __('MHI') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->


    <!-- Divider -->

    <li class="nav-item {{ request()->is('admin/dashboard') || request()->is('admin/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
            <svg class="svg-inline--fa fa-chart-pie" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chart-pie" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="" style="width: 16px;">
                <path fill="currentColor" d="M304 16.58C304 7.555 310.1 0 320 0C443.7 0 544 100.3 544 224C544 233 536.4 240 527.4 240H304V16.58zM32 272C32 150.7 122.1 50.34 238.1 34.25C248.2 32.99 256 40.36 256 49.61V288L412.5 444.5C419.2 451.2 418.7 462.2 411 467.7C371.8 495.6 323.8 512 272 512C139.5 512 32 404.6 32 272zM558.4 288C567.6 288 575 295.8 573.8 305C566.1 360.9 539.1 410.6 499.9 447.3C493.9 452.1 484.5 452.5 478.7 446.7L320 288H558.4z"></path>
            </svg>
            <span>{{ __('Dashboard') }}</span></a>
    </li>
    <li class="nav-item {{ request()->is('admin/patient') || request()->is('admin/patient') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.patient.index') }}" onclick = "addtopbarlistforpatient()">

            <svg class="svg-inline--fa fa-user-injured" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-injured" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="width: 16px;">
                <path fill="currentColor" d="M277.4 11.98C261.1 4.469 243.1 0 224 0C170.3 0 124.5 33.13 105.5 80h81.07L277.4 11.98zM342.5 80c-7.895-19.47-20.66-36.19-36.48-49.51L240 80H342.5zM224 256c70.7 0 128-57.31 128-128c0-5.48-.9453-10.7-1.613-16H97.61C96.95 117.3 96 122.5 96 128C96 198.7 153.3 256 224 256zM272 416h-45.14l58.64 93.83C305.4 503.1 320 485.8 320 464C320 437.5 298.5 416 272 416zM274.7 304H173.3c-5.393 0-10.71 .3242-15.98 .8047L206.9 384H272c44.13 0 80 35.88 80 80c0 18.08-6.252 34.59-16.4 48h77.73C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM0 477.3C0 496.5 15.52 512 34.66 512H64v-169.1C24.97 374.7 0 423.1 0 477.3zM96 322.4V512h153.1L123.7 311.3C114.1 314.2 104.8 317.9 96 322.4z"></path>
            </svg><!-- <i class="fas fa-user-injured"></i> Font Awesome fontawesome.com -->

            <span>{{ __('Patient') }}</span></a>
    </li>
   
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <svg class="svg-inline--fa fa-hospital-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="hospital-user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="" style="width: 16px;">
                    <path fill="currentColor" d="M272 0C298.5 0 320 21.49 320 48V367.8C281.8 389.2 256 430 256 476.9C256 489.8 259.6 501.8 265.9 512H48C21.49 512 0 490.5 0 464V384H144C152.8 384 160 376.8 160 368C160 359.2 152.8 352 144 352H0V288H144C152.8 288 160 280.8 160 272C160 263.2 152.8 256 144 256H0V48C0 21.49 21.49 0 48 0H272zM152 64C143.2 64 136 71.16 136 80V104H112C103.2 104 96 111.2 96 120V136C96 144.8 103.2 152 112 152H136V176C136 184.8 143.2 192 152 192H168C176.8 192 184 184.8 184 176V152H208C216.8 152 224 144.8 224 136V120C224 111.2 216.8 104 208 104H184V80C184 71.16 176.8 64 168 64H152zM512 272C512 316.2 476.2 352 432 352C387.8 352 352 316.2 352 272C352 227.8 387.8 192 432 192C476.2 192 512 227.8 512 272zM288 477.1C288 425.7 329.7 384 381.1 384H482.9C534.3 384 576 425.7 576 477.1C576 496.4 560.4 512 541.1 512H322.9C303.6 512 288 496.4 288 477.1V477.1z"></path>
                </svg>
            <span>{{ __('Providers') }}</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class=" py-2 collapse-inner rounded">
                <a class="collapse-item colorchange{{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}" href="{{ route('admin.hospital.index') }}" style="color:white;"> 
                    
                    {{ __('Hospitals') }}</a>
                <a class="collapse-item colorchange {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}" href="{{ route('admin.hospital.cliniclist') }}" style="color:white;">
                   
                    {{ __('Clinic`s') }}</a>
                
            </div>
        </div>
    </li>
    <!-- <li class="nav-item {{ request()->is('admin/services') || request()->is('admin/services') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.doctor.index') }}">
            <svg class="svg-inline--fa fa-user-doctor" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-doctor" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="width: 16px;">
                <path fill="currentColor" d="M352 128C352 198.7 294.7 256 223.1 256C153.3 256 95.1 198.7 95.1 128C95.1 57.31 153.3 0 223.1 0C294.7 0 352 57.31 352 128zM287.1 362C260.4 369.1 239.1 394.2 239.1 424V448C239.1 452.2 241.7 456.3 244.7 459.3L260.7 475.3C266.9 481.6 277.1 481.6 283.3 475.3C289.6 469.1 289.6 458.9 283.3 452.7L271.1 441.4V424C271.1 406.3 286.3 392 303.1 392C321.7 392 336 406.3 336 424V441.4L324.7 452.7C318.4 458.9 318.4 469.1 324.7 475.3C330.9 481.6 341.1 481.6 347.3 475.3L363.3 459.3C366.3 456.3 368 452.2 368 448V424C368 394.2 347.6 369.1 320 362V308.8C393.5 326.7 448 392.1 448 472V480C448 497.7 433.7 512 416 512H32C14.33 512 0 497.7 0 480V472C0 393 54.53 326.7 128 308.8V370.3C104.9 377.2 88 398.6 88 424C88 454.9 113.1 480 144 480C174.9 480 200 454.9 200 424C200 398.6 183.1 377.2 160 370.3V304.2C162.7 304.1 165.3 304 168 304H280C282.7 304 285.3 304.1 288 304.2L287.1 362zM167.1 424C167.1 437.3 157.3 448 143.1 448C130.7 448 119.1 437.3 119.1 424C119.1 410.7 130.7 400 143.1 400C157.3 400 167.1 410.7 167.1 424z"></path>
            </svg>
            <span>{{ __('Doctors') }}</span></a>
    </li> -->
    <li class="nav-item {{ request()->is('admin/services') || request()->is('admin/services') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.department.index') }}">
            <svg class="svg-inline--fa fa-file-medical" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-medical" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="" style="width: 16px;">
                <path fill="currentColor" d="M256 0v128h128L256 0zM224 128L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V160h-127.1C238.3 160 224 145.7 224 128zM288 301.7v36.57C288 345.9 281.9 352 274.3 352L224 351.1v50.29C224 409.9 217.9 416 210.3 416H173.7C166.1 416 160 409.9 160 402.3V351.1L109.7 352C102.1 352 96 345.9 96 338.3V301.7C96 294.1 102.1 288 109.7 288H160V237.7C160 230.1 166.1 224 173.7 224h36.57C217.9 224 224 230.1 224 237.7V288h50.29C281.9 288 288 294.1 288 301.7z"></path>
            </svg>
            <span>{{ __('Departments') }}</span></a>
    </li>
    <li class="nav-item {{ request()->is('admin/services') || request()->is('admin/services') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.facilites.index') }}">
            <svg class="svg-inline--fa fa-file-medical" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-medical" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="" style="width: 16px;">
                <path fill="currentColor" d="M256 0v128h128L256 0zM224 128L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V160h-127.1C238.3 160 224 145.7 224 128zM288 301.7v36.57C288 345.9 281.9 352 274.3 352L224 351.1v50.29C224 409.9 217.9 416 210.3 416H173.7C166.1 416 160 409.9 160 402.3V351.1L109.7 352C102.1 352 96 345.9 96 338.3V301.7C96 294.1 102.1 288 109.7 288H160V237.7C160 230.1 166.1 224 173.7 224h36.57C217.9 224 224 230.1 224 237.7V288h50.29C281.9 288 288 294.1 288 301.7z"></path>
            </svg>
            <span>{{ __('Facilites') }}</span></a>
    </li>
    <li class="nav-item {{ request()->is('admin/services') || request()->is('admin/services') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.benefits.index') }}">
            <svg class="svg-inline--fa fa-file-medical" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-medical" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="" style="width: 16px;">
                <path fill="currentColor" d="M256 0v128h128L256 0zM224 128L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V160h-127.1C238.3 160 224 145.7 224 128zM288 301.7v36.57C288 345.9 281.9 352 274.3 352L224 351.1v50.29C224 409.9 217.9 416 210.3 416H173.7C166.1 416 160 409.9 160 402.3V351.1L109.7 352C102.1 352 96 345.9 96 338.3V301.7C96 294.1 102.1 288 109.7 288H160V237.7C160 230.1 166.1 224 173.7 224h36.57C217.9 224 224 230.1 224 237.7V288h50.29C281.9 288 288 294.1 288 301.7z"></path>
            </svg>
            <span>{{ __('Benefits') }}</span></a>
    </li>
    <li class="nav-item {{ request()->is('admin/services') || request()->is('admin/services') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.appointments.index') }}">
            <svg class="svg-inline--fa fa-calendar-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="width: 16px;">
                <path fill="currentColor" d="M160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32zM0 192H448V464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192zM328.1 304.1C338.3 295.6 338.3 280.4 328.1 271C319.6 261.7 304.4 261.7 295 271L200 366.1L152.1 319C143.6 309.7 128.4 309.7 119 319C109.7 328.4 109.7 343.6 119 352.1L183 416.1C192.4 426.3 207.6 426.3 216.1 416.1L328.1 304.1z"></path>
            </svg>
            <span>{{ __('Appointments') }}</span></a>
    </li>
   
    <li class="nav-item {{ request()->is('admin/services') || request()->is('admin/services') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
            <svg class="svg-inline--fa fa-box" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="width: 16px;">
                <path fill="currentColor" d="M50.73 58.53C58.86 42.27 75.48 32 93.67 32H208V160H0L50.73 58.53zM240 160V32H354.3C372.5 32 389.1 42.27 397.3 58.53L448 160H240zM448 416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V192H448V416z"></path>
            </svg>
            <span>{{ __('Services') }}</span></a>
    </li>
    <li class="nav-item {{ request()->is('admin/services') || request()->is('admin/services') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
            <svg class="svg-inline--fa fa-file-prescription" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-prescription" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="" style="width: 16px;">
                <path fill="currentColor" d="M176 240H128v32h48C184.9 272 192 264.9 192 256S184.9 240 176 240zM256 0v128h128L256 0zM224 128L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V160h-127.1C238.3 160 224 145.7 224 128zM292.5 315.5l11.38 11.25c6.25 6.25 6.25 16.38 0 22.62l-29.88 30L304 409.4c6.25 6.25 6.25 16.38 0 22.62l-11.25 11.38c-6.25 6.25-16.5 6.25-22.75 0L240 413.3l-30 30c-6.249 6.25-16.48 6.266-22.73 .0156L176 432c-6.25-6.25-6.25-16.38 0-22.62l29.1-30.12L146.8 320H128l.0078 48.01c0 8.875-7.125 16-16 16L96 384c-8.875 0-16-7.125-16-16v-160C80 199.1 87.13 192 96 192h80c35.38 0 64 28.62 64 64c0 24.25-13.62 45-33.5 55.88L240 345.4l29.88-29.88C276.1 309.3 286.3 309.3 292.5 315.5z"></path>
            </svg>
            <span>{{ __('Prescription') }}</span></a>
    </li>
    <li class="nav-item {{ request()->is('admin/services') || request()->is('admin/services') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
            <svg class="svg-inline--fa fa-file-medical" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-medical" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="" style="width: 16px;">
                <path fill="currentColor" d="M256 0v128h128L256 0zM224 128L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V160h-127.1C238.3 160 224 145.7 224 128zM288 301.7v36.57C288 345.9 281.9 352 274.3 352L224 351.1v50.29C224 409.9 217.9 416 210.3 416H173.7C166.1 416 160 409.9 160 402.3V351.1L109.7 352C102.1 352 96 345.9 96 338.3V301.7C96 294.1 102.1 288 109.7 288H160V237.7C160 230.1 166.1 224 173.7 224h36.57C217.9 224 224 230.1 224 237.7V288h50.29C281.9 288 288 294.1 288 301.7z"></path>
            </svg>
            <span>{{ __('Reports') }}</span></a>
    </li>
    <li class="nav-item {{ request()->is('admin/services') || request()->is('admin/services') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.enquiry.index') }}">
            <svg class="svg-inline--fa fa-circle-question" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle-question" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="width: 16px;">
                <path fill="currentColor" d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 400c-18 0-32-14-32-32s13.1-32 32-32c17.1 0 32 14 32 32S273.1 400 256 400zM325.1 258L280 286V288c0 13-11 24-24 24S232 301 232 288V272c0-8 4-16 12-21l57-34C308 213 312 206 312 198C312 186 301.1 176 289.1 176h-51.1C225.1 176 216 186 216 198c0 13-11 24-24 24s-24-11-24-24C168 159 199 128 237.1 128h51.1C329 128 360 159 360 198C360 222 347 245 325.1 258z"></path>
            </svg>
            <span>{{ __('Enquiries') }}</span></a>
    </li>
    <li class="nav-item {{ request()->is('admin/services') || request()->is('admin/services') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.hospital.charges') }}">
            <svg class="svg-inline--fa fa-coins" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="coins" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="width: 16px;">
                <path fill="currentColor" d="M512 80C512 98.01 497.7 114.6 473.6 128C444.5 144.1 401.2 155.5 351.3 158.9C347.7 157.2 343.9 155.5 340.1 153.9C300.6 137.4 248.2 128 192 128C183.7 128 175.6 128.2 167.5 128.6L166.4 128C142.3 114.6 128 98.01 128 80C128 35.82 213.1 0 320 0C426 0 512 35.82 512 80V80zM160.7 161.1C170.9 160.4 181.3 160 192 160C254.2 160 309.4 172.3 344.5 191.4C369.3 204.9 384 221.7 384 240C384 243.1 383.3 247.9 381.9 251.7C377.3 264.9 364.1 277 346.9 287.3C346.9 287.3 346.9 287.3 346.9 287.3C346.8 287.3 346.6 287.4 346.5 287.5L346.5 287.5C346.2 287.7 345.9 287.8 345.6 288C310.6 307.4 254.8 320 192 320C132.4 320 79.06 308.7 43.84 290.9C41.97 289.9 40.15 288.1 38.39 288C14.28 274.6 0 258 0 240C0 205.2 53.43 175.5 128 164.6C138.5 163 149.4 161.8 160.7 161.1L160.7 161.1zM391.9 186.6C420.2 182.2 446.1 175.2 468.1 166.1C484.4 159.3 499.5 150.9 512 140.6V176C512 195.3 495.5 213.1 468.2 226.9C453.5 234.3 435.8 240.5 415.8 245.3C415.9 243.6 416 241.8 416 240C416 218.1 405.4 200.1 391.9 186.6V186.6zM384 336C384 354 369.7 370.6 345.6 384C343.8 384.1 342 385.9 340.2 386.9C304.9 404.7 251.6 416 192 416C129.2 416 73.42 403.4 38.39 384C14.28 370.6 .0003 354 .0003 336V300.6C12.45 310.9 27.62 319.3 43.93 326.1C83.44 342.6 135.8 352 192 352C248.2 352 300.6 342.6 340.1 326.1C347.9 322.9 355.4 319.2 362.5 315.2C368.6 311.8 374.3 308 379.7 304C381.2 302.9 382.6 301.7 384 300.6L384 336zM416 278.1C434.1 273.1 452.5 268.6 468.1 262.1C484.4 255.3 499.5 246.9 512 236.6V272C512 282.5 507 293 497.1 302.9C480.8 319.2 452.1 332.6 415.8 341.3C415.9 339.6 416 337.8 416 336V278.1zM192 448C248.2 448 300.6 438.6 340.1 422.1C356.4 415.3 371.5 406.9 384 396.6V432C384 476.2 298 512 192 512C85.96 512 .0003 476.2 .0003 432V396.6C12.45 406.9 27.62 415.3 43.93 422.1C83.44 438.6 135.8 448 192 448z"></path>
            </svg>
            <span>{{ __('Hospital Charges') }}</span></a>
    </li>
    <li class="nav-item {{ request()->is('admin/services') || request()->is('admin/services') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
            <svg class="svg-inline--fa fa-video" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="video" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="" style="width: 16px;">
                <path fill="currentColor" d="M384 112v288c0 26.51-21.49 48-48 48h-288c-26.51 0-48-21.49-48-48v-288c0-26.51 21.49-48 48-48h288C362.5 64 384 85.49 384 112zM576 127.5v256.9c0 25.5-29.17 40.39-50.39 25.79L416 334.7V177.3l109.6-75.56C546.9 87.13 576 102.1 576 127.5z"></path>
            </svg>
            <span>{{ __('Live Consulations') }}</span></a>
    </li>
    <li class="nav-item {{ request()->is('admin/services') || request()->is('admin/services') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
            <svg class="svg-inline--fa fa-gears" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gears" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="" style="width: 16px;">
                <path fill="currentColor" d="M286.3 155.1C287.4 161.9 288 168.9 288 175.1C288 183.1 287.4 190.1 286.3 196.9L308.5 216.7C315.5 223 318.4 232.1 314.7 241.7C312.4 246.1 309.9 252.2 307.1 257.2L304 262.6C300.1 267.6 297.7 272.4 294.2 277.1C288.5 284.7 278.5 287.2 269.5 284.2L241.2 274.9C230.5 283.8 218.3 290.9 205 295.9L198.1 324.9C197 334.2 189.8 341.6 180.4 342.8C173.7 343.6 166.9 344 160 344C153.1 344 146.3 343.6 139.6 342.8C130.2 341.6 122.1 334.2 121 324.9L114.1 295.9C101.7 290.9 89.5 283.8 78.75 274.9L50.53 284.2C41.54 287.2 31.52 284.7 25.82 277.1C22.28 272.4 18.98 267.5 15.94 262.5L12.92 257.2C10.13 252.2 7.592 247 5.324 241.7C1.62 232.1 4.458 223 11.52 216.7L33.7 196.9C32.58 190.1 31.1 183.1 31.1 175.1C31.1 168.9 32.58 161.9 33.7 155.1L11.52 135.3C4.458 128.1 1.62 119 5.324 110.3C7.592 104.1 10.13 99.79 12.91 94.76L15.95 89.51C18.98 84.46 22.28 79.58 25.82 74.89C31.52 67.34 41.54 64.83 50.53 67.79L78.75 77.09C89.5 68.25 101.7 61.13 114.1 56.15L121 27.08C122.1 17.8 130.2 10.37 139.6 9.231C146.3 8.418 153.1 8 160 8C166.9 8 173.7 8.418 180.4 9.23C189.8 10.37 197 17.8 198.1 27.08L205 56.15C218.3 61.13 230.5 68.25 241.2 77.09L269.5 67.79C278.5 64.83 288.5 67.34 294.2 74.89C297.7 79.56 300.1 84.42 304 89.44L307.1 94.83C309.9 99.84 312.4 105 314.7 110.3C318.4 119 315.5 128.1 308.5 135.3L286.3 155.1zM160 127.1C133.5 127.1 112 149.5 112 175.1C112 202.5 133.5 223.1 160 223.1C186.5 223.1 208 202.5 208 175.1C208 149.5 186.5 127.1 160 127.1zM484.9 478.3C478.1 479.4 471.1 480 464 480C456.9 480 449.9 479.4 443.1 478.3L423.3 500.5C416.1 507.5 407 510.4 398.3 506.7C393 504.4 387.8 501.9 382.8 499.1L377.4 496C372.4 492.1 367.6 489.7 362.9 486.2C355.3 480.5 352.8 470.5 355.8 461.5L365.1 433.2C356.2 422.5 349.1 410.3 344.1 397L315.1 390.1C305.8 389 298.4 381.8 297.2 372.4C296.4 365.7 296 358.9 296 352C296 345.1 296.4 338.3 297.2 331.6C298.4 322.2 305.8 314.1 315.1 313L344.1 306.1C349.1 293.7 356.2 281.5 365.1 270.8L355.8 242.5C352.8 233.5 355.3 223.5 362.9 217.8C367.6 214.3 372.5 210.1 377.5 207.9L382.8 204.9C387.8 202.1 392.1 199.6 398.3 197.3C407 193.6 416.1 196.5 423.3 203.5L443.1 225.7C449.9 224.6 456.9 224 464 224C471.1 224 478.1 224.6 484.9 225.7L504.7 203.5C511 196.5 520.1 193.6 529.7 197.3C535 199.6 540.2 202.1 545.2 204.9L550.5 207.9C555.5 210.1 560.4 214.3 565.1 217.8C572.7 223.5 575.2 233.5 572.2 242.5L562.9 270.8C571.8 281.5 578.9 293.7 583.9 306.1L612.9 313C622.2 314.1 629.6 322.2 630.8 331.6C631.6 338.3 632 345.1 632 352C632 358.9 631.6 365.7 630.8 372.4C629.6 381.8 622.2 389 612.9 390.1L583.9 397C578.9 410.3 571.8 422.5 562.9 433.2L572.2 461.5C575.2 470.5 572.7 480.5 565.1 486.2C560.4 489.7 555.6 492.1 550.6 496L545.2 499.1C540.2 501.9 534.1 504.4 529.7 506.7C520.1 510.4 511 507.5 504.7 500.5L484.9 478.3zM512 352C512 325.5 490.5 304 464 304C437.5 304 416 325.5 416 352C416 378.5 437.5 400 464 400C490.5 400 512 378.5 512 352z"></path>
            </svg>
            <span>{{ __('Settings') }}</span></a>
    </li>
   



    <!-- services -->
    <!-- <li class="nav-item {{ request()->is('admin/services') || request()->is('admin/services') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.services.index') }}">
                <i class="fas fa-cogs"></i>
                    <span>{{ __('Services') }}</span></a>
            </li> -->

    <!-- employees -->
    <!-- <li class="nav-item {{ request()->is('admin/employees') || request()->is('admin/employees') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.employees.index') }}">
                <i class="fas fa-cogs"></i>
                    <span>{{ __('Employees') }}</span></a>
            </li> -->

    <!-- clients -->
    <!-- <li class="nav-item {{ request()->is('admin/clients') || request()->is('admin/clients') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.clients.index') }}">
                <i class="fas fa-cogs"></i>
                    <span>{{ __('Clients') }}</span></a>
            </li> -->

    <!-- appointments -->
    <!-- <li class="nav-item {{ request()->is('admin/appointments') || request()->is('admin/appointments') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.appointments.index') }}">
                <i class="fas fa-cogs"></i>
                    <span>{{ __('appointments') }}</span></a>
            </li> -->

    <!-- calendar -->
    <!-- <li class="nav-item {{ request()->is('admin/calendar') || request()->is('admin/calendar') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.calendar') }}">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>{{ __('Calendar') }}</span></a>
            </li> -->


</ul>