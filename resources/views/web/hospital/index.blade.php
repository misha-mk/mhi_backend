<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Web site created using create-react-app" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="{{ asset('css/webstyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.css') }}" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>React App</title>
</head>

<body>
    <section class="topbar">
        <div class="container-fuild">
            <div class="row topheaderrow">
                <div class="col-md-3">
                    <!-- <img src="" alt="" class="logo" /> -->
                    <h3 class="logo">MY Hospital</h3>
                </div>
                <div class="col-md-3">
                    <div class="box">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <form name="search">
                            <input type="text" class="input" name="txt" onmouseout="this.value = ''; this.blur();" />
                        </form>



                    </div>
                </div>
                <div class="col-md-3 contactdiv">
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                    <span class="contactDetails">
                        <span class="phonenumber">
                            +91 89799989078
                        </span>
                        <span class="emailid">
                            test@eaxmple.com
                        </span>
                    </span>

                </div>
                <div class="col-md-3 contactdiv">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>

                    <span class="contactDetails">
                        <span class="phonenumber">
                            ARG Group , Sikar Road,jaipur
                        </span>
                        <span class="emailid">
                            302012
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section class="headerdiv">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="fase" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav navui">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                Our Doctors
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('hospitals')}}">
                                Our Hospitals
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                Our Clinics
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                About us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                Contact us
                            </a>
                        </li>
                    </ul>
                    <div class="loginclass">
                        <a href="{{ route('login') }}" class="loginbtn">Login</a>
                        <a href="/" class="loginbtn">Signup</a>
                    </div>
                    <div class="socialmediaicons">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <section class="banner">
        <div class="section bannersection">
            <div class="container-fuild">
                <div class="row align-items-center">
                    <div class="col-md-6" style="position:relative;">
                        <h1 class='bannertitle'>Consult<span class='bannertitlespan1'> Best Doctors</span> Your Nearby Location.</h1>
                        <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                        <p class='bannertitle'>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                    </div>
                    <div class="col md-6">
                        <img src="{{ asset('images/doctorbannerimg.jpg') }}" alt="" class="bannerimg" />
                        <div class="banner-img">
                            <div class="banner-img1">
                                <img decoding="async" src="{{ asset('images/Group 2.svg') }}" class="img-fluid popupimage" alt="" />
                            </div>
                            <div class="banner-img2">
                                <img decoding="async" src="https://doccure-wp.dreamguystech.com/elementor/wp-content/uploads/2023/07/banner-img2.png" class="img-fluid" alt="" />
                            </div>
                            <div class="banner-img3">
                                <img decoding="async" src="https://doccure-wp.dreamguystech.com/elementor/wp-content/uploads/2023/07/banner-img3.png" class="img-fluid" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hospitallisting">
        <div class="hospitalheader">
            <h3 class="text-center" style="margin-top:50px;color:var(--primary-color);">Our Hospitals</h3>
        </div>
        <div class="sidebar-style-9">
            <div class="section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="sidebar mb-5">
                                <div class="widget widget-categories">
                                    <h5 class="widget-title">Filters</h5>
                                    <ul style="padding: 0;
    margin: 0;
    list-style-type: none;">
                                        <li><a href="/themes/themeforest/react/docfind/clinic/cat/1"></a></li>
                                        <li><a href="/themes/themeforest/react/docfind/clinic/cat/2"></a></li>
                                        <li><a href="/themes/themeforest/react/docfind/clinic/cat/3"></a></li>
                                        <li><a href="/themes/themeforest/react/docfind/clinic/cat/4"></a></li>
                                        <li><a href="/themes/themeforest/react/docfind/clinic/cat/5"></a></li>
                                    </ul>
                                </div>
                                <!-- <div class="widget p-0 border-0">
                                    <div class="sigma_contact-map"><iframe title="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9914406081493!2d2.292292615201654!3d48.85837360866272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sEiffel%20Tower!5e0!3m2!1sen!2sin!4v1571115084828!5m2!1sen!2sin" height="300" allowfullscreen=""></iframe></div>
                                </div> --> 
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="sigma_team style-16">
                                        <div class="sigma_team-thumb"><img src="https://metropolitanhost.com/themes/themeforest/react/docfind/assets/img/clinic-grid/348x350-0.jpg" alt="Matthew Reyes">
                                            <div class="sigma_team-controls"><a class="" href="/"><i class="fa fa-heart"></i></a></div>
                                        </div>
                                        <div class="sigma_team-body">
                                            <h5><a href="">Matthew Reyes</a></h5>
                                            <div class="sigma_rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span class="ml-3">(5)</span></div>
                                            <div class="sigma_team-categories"><a class="sigma_team-category" href="/">Obstetrics &amp; Gynaecology</a></div>
                                            <div class="sigma_team-info"><span><i class="fa fa-map-marker"></i>Jaipur</span></div><a class="sigma_btn btn-block btn-sm" href="/">View More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="sigma_team style-16">
                                        <div class="sigma_team-thumb"><img src="https://metropolitanhost.com/themes/themeforest/react/docfind/assets/img/clinic-grid/348x350-1.jpg" alt="Rebecca Gilbert">
                                            <div class="sigma_team-controls"><a class="" href="/"><i class="fa fa-heart"></i></a></div>
                                        </div>
                                        <div class="sigma_team-body">
                                            <h5><a href="/">Rebecca Gilbert</a></h5>
                                            <div class="sigma_rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span class="ml-3">(5)</span></div>
                                            <div class="sigma_team-categories"><a class="sigma_team-category" href="/">Obstetrics &amp; Gynaecology</a></div>
                                            <div class="sigma_team-info"><span><i class="fa fa-map-marker"></i>Jaipur</span></div><a class="sigma_btn btn-block btn-sm" href="/">View More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="sigma_team style-16">
                                        <div class="sigma_team-thumb"><img src="https://metropolitanhost.com/themes/themeforest/react/docfind/assets/img/clinic-grid/348x350-2.jpg" alt="Bobby Stanley">
                                            <div class="sigma_team-controls"><a class="" href="/"><i class="fa fa-heart"></i></a></div>
                                        </div>
                                        <div class="sigma_team-body">
                                            <h5><a href="/">Bobby Stanley</a></h5>
                                            <div class="sigma_rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span class="ml-3">(5)</span></div>
                                            <div class="sigma_team-categories"><a class="sigma_team-category" href="/">Obstetrics &amp; Gynaecology</a></div>
                                            <div class="sigma_team-info"><span><i class="fa fa-map-marker"></i>Jaipur</span></div><a class="sigma_btn btn-block btn-sm" href="/">View More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="sigma_team style-16">
                                        <div class="sigma_team-thumb"><img src="https://metropolitanhost.com/themes/themeforest/react/docfind/assets/img/clinic-grid/348x350-3.jpg" alt="Kathryn Cooper">
                                            <div class="sigma_team-controls"><a class="" href="/"><i class="fa fa-heart"></i></a></div>
                                        </div>
                                        <div class="sigma_team-body">
                                            <h5><a href="/">Kathryn Cooper</a></h5>
                                            <div class="sigma_rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span class="ml-3">(5)</span></div>
                                            <div class="sigma_team-categories"><a class="sigma_team-category" href="/">Obstetrics &amp; Gynaecology</a></div>
                                            <div class="sigma_team-info"><span><i class="fa fa-map-marker"></i>Jaipur</span></div><a class="sigma_btn btn-block btn-sm" href="/">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagination">
                                <li class="page-item disabled"><a class="page-link" href="#" aria-label="Go to first page">«</a></li>
                                <li class="page-item disabled"><a class="page-link" href="#" aria-label="Go to previous page">⟨</a></li>
                                <li class="page-item active"><a class="page-link undefined" href="#" aria-label="Go to page number 1">1</a></li>
                                <li class="page-item"><a class="page-link" href="#" aria-label="Go to page number 2">2</a></li>
                                <li class="page-item"><a class="page-link" href="#" aria-label="Go to next page">⟩</a></li>
                                <li class="page-item"><a class="page-link" href="#" aria-label="Go to last page">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="btFooterWrap btDarkSkin">
        <section class="boldSection btSiteFooterWidgets gutter topSpaced bottomSemiSpaced btDoubleRowPadding">
            <div class="port">
                <div class="boldRow" id="boldSiteFooterWidgetsRow" style="display:flex !important">
                    <div class="btBox widget_bt_text_image rowItem col-md-4 col-sm-12">
                        <div class="btImage">MHI</div>
                        <div class="widget_sp_image-description">
                            <p>Sed magna nulla, pulvinar vel ante vel, fringilla vulputate nibh. In placerat facilisis tincidunt. Integer quis erat dictum, placerat massa non, bibendum ante. Duis aliquet tellus magna, quis egestas enim vulputate sed. Phasellus in dui malesuada, lacinia urna sed.</p>
                        </div>
                    </div>
                    <div class="btBox widget_bt_recent_posts rowItem col-md-4 col-sm-12">
                        <h4><span>Recent Posts</span></h4>
                        <div class="menu-footer-menu-container">
                            <ul id="menu-footer-menu" class="menu">
                                <li id="menu-item-984" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-984"><a href="/">Term And Conditions</a></li>
                                <li id="menu-item-985" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-985"><a href="/">Privacy And Policy</a></li>
                                <li id="menu-item-987" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-987"><a href="/">Cancellation Policy</a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="btBox widget_nav_menu rowItem col-md-4 col-sm-12">
                        <h4><span>Our services</span></h4>
                        <div class="menu-footer-menu-container">
                            <ul id="menu-footer-menu" class="menu">
                                <li id="menu-item-984" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-984"><a href="/">Our Doctor</a></li>
                                <li id="menu-item-985" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-985"><a href="/">Our Hospitals</a></li>
                                <li id="menu-item-987" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-987"><a href="/">Our Clinics</a></li>
                                <li id="menu-item-988" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-988"><a href="/">Departments</a></li>
                                <li id="menu-item-989" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-989"><a href="/">Special offers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="boldSection gutter btSiteFooter btGutter">
            <div class="port">
                <div class="boldRow" style="display:flex !important">
                    <div class="rowItem btFooterCopy col-lg-6 btTextLeft">
                        <p class="copyLine">Copyright by GatikAi 2023. All rights reserved.</p>
                    </div><!-- /copy -->
                    <div class="rowItem btFooterMenu col-lg-6 col-sm-12 btTextRight">

                        <ul id="menu-sub-footer-menu" class="menu">
                            <li id="menu-item-991" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-991"><a href="/">About us</a></li>

                            <li id="menu-item-992" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-992"><a href="/">Contact us</a></li>
                            <li id="menu-item-993" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-993"><a href="/">Working hours</a></li>
                        </ul>
                    </div>
                </div><!-- /boldRow -->
            </div><!-- /port -->
        </section>

    </div>
    <script src="{{ asset('js/webscript.js') }}"></script>
    <script src="{{ asset('js/owl.js') }}"></script>
</body>

</html>