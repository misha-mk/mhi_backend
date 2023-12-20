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
    <section class="hospitalDetails">
        <div class="section sigma_post-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="sigma_post-details-inner">
                            <div class="entry-content">
                                <div class="sigma_team style-17 mb-0">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <div class="sigma_team-thumb"><img src="https://metropolitanhost.com/themes/themeforest/react/docfind/assets/img/clinic-grid/348x350-0.jpg" alt="Matthew Reyes"></div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="sigma_team-body">
                                                <h5><a href="/">Matthew Reyes</a></h5>
                                                <div class="sigma_rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-3">(3)</span></div>
                                                <div class="sigma_team-categories"><a class="sigma_team-category" href="/">Obstetrics &amp; Gynaecology</a></div>
                                                <div class="sigma_team-info mt-4"><span><i class="fal fa-phone"></i>(741)376-5672</span><span><i class="fal fa-at"></i>example@example.com</span><span><i class="fal fa-building"></i>Hong Kong</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-menu-list">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <div class="menu nav-item"><a class="nav-link active p-0" href="/">Overview</a></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="menu nav-item"><a class="nav-link p-0" href="/">Location &amp; Contact</a></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="menu nav-item border-0"><a class="nav-link p-0" href="/">Review</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="overview">
                                    <h4>Overview Of Matthew Reyes</h4>
                                    <div>
                                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                        <div class="spacer"></div>
                                        <h4>Subspecialities</h4>
                                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="sigma_general-list style-3">
                                                    <ul>
                                                        <li> <i class="far fa-check"></i> <span>Best Fitness Excercises</span></li>
                                                        <li> <i class="far fa-check"></i> <span>Combine Fitness and Lifestyle</span></li>
                                                        <li> <i class="far fa-check"></i> <span>Achieve a Specific Goal</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="sigma_general-list style-3">
                                                    <ul>
                                                        <li> <i class="far fa-check"></i> <span>Best Fitness Excercises</span></li>
                                                        <li> <i class="far fa-check"></i> <span>Combine Fitness and Lifestyle</span></li>
                                                        <li> <i class="far fa-check"></i> <span>Achieve a Specific Goal</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="spacer"></div>
                                <div id="contact">
                                    <h4>Matthew Reyes Location &amp; Contact Information</h4>
                                    <div class="sigma_contact-wrapper">
                                        <div class="sigma_contact-map"><iframe title="Matthew Reyes" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9914406081493!2d2.292292615201654!3d48.85837360866272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sEiffel%20Tower!5e0!3m2!1sen!2sin!4v1571115084828!5m2!1sen!2sin" height="600" allowfullscreen=""></iframe></div>
                                        <div class="sigma_contact-blocks">
                                            <h5>Hospital Address</h5>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="sigma_contact-block style-3"><i class="fal fa-map-marker-alt icon"></i>
                                                        <div class="contact-block-inner">
                                                            <p>Hong Kong</p>
                                                            <p class="mb-0">Hong Kong</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="sigma_contact-block style-3 mt-3 mt-md-0"><i class="fal fa-phone icon"></i>
                                                        <div class="contact-block-inner">
                                                            <p>(741)376-5672</p>
                                                            <p class="mb-0">(741)376-5672</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="sigma_contact-block style-3 mt-3 mt-md-0"><i class="fal fa-globe icon"></i>
                                                        <div class="contact-block-inner">
                                                            <p>example@example.com</p>
                                                            <p class="mb-0">example@example.com</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="spacer"></div>
                                <div id="reviews">
                                    <h4>Patient Experience</h4>
                                    <div class="sigma_testimonial style-14">
                                        <div class="sigma_testimonial-thumb"><img src="https://metropolitanhost.com/themes/themeforest/react/docfind/assets/img/clinic-grid/348x350-0.jpg" alt="Matthew Reyes"></div>
                                        <div class="sigma_testimonial-body">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-block d-sm-flex align-items-center">
                                                    <div class="sigma_author-block">
                                                        <h5>Matthew Reyes</h5>
                                                    </div>
                                                    <div class="sigma_rating ml-sm-4 ml-0 mt-2 mt-sm-0"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><span class="ml-3">(4/5)</span></div>
                                                </div><span class="sigma_testimonial-date">07 March</span>
                                            </div>
                                            <p>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."</p>
                                        </div>
                                    </div>
                                    <div class="sigma_testimonial style-14">
                                        <div class="sigma_testimonial-thumb"><img src="https://metropolitanhost.com/themes/themeforest/react/docfind/assets/img/clinic-grid/348x350-0.jpg" alt="Rebecca Gilbert"></div>
                                        <div class="sigma_testimonial-body">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-block d-sm-flex align-items-center">
                                                    <div class="sigma_author-block">
                                                        <h5>Rebecca Gilbert</h5>
                                                    </div>
                                                    <div class="sigma_rating ml-sm-4 ml-0 mt-2 mt-sm-0"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-3">(5/5)</span></div>
                                                </div><span class="sigma_testimonial-date">07 March</span>
                                            </div>
                                            <p>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."</p>
                                        </div>
                                    </div>
                                    <div class="sigma_testimonial style-14">
                                        <div class="sigma_testimonial-thumb"><img src="/https://metropolitanhost.com/themes/themeforest/react/docfind/assets/img/clinic-grid/348x350-0.jpg" alt="Bobby Stanley"></div>
                                        <div class="sigma_testimonial-body">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-block d-sm-flex align-items-center">
                                                    <div class="sigma_author-block">
                                                        <h5>Bobby Stanley</h5>
                                                    </div>
                                                    <div class="sigma_rating ml-sm-4 ml-0 mt-2 mt-sm-0"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><span class="ml-3">(4/5)</span></div>
                                                </div><span class="sigma_testimonial-date">07 March</span>
                                            </div>
                                            <p>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."</p>
                                        </div>
                                    </div><button type="button" class="sigma_btn">See More<i class="fal fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar style-10 mt-5 mt-lg-0">
                            <div class="widget">
                                <h5 class="widget-title">Get in Touch</h5>
                                <div class="widget-inner">
                                    <form>
                                        <div class="form-group"><i class="fal fa-user"></i><input type="text" name="fname" placeholder="Name" required=""></div>
                                        <div class="form-group"><i class="fal fa-envelope"></i><input type="email" name="email" placeholder="Email" required=""></div>
                                        <div class="form-group"><textarea name="message" rows="5" placeholder="Message" required=""></textarea></div><button type="button" class="sigma_btn btn-block btn-sm">Send Message<i class="fal fa-arrow-right ml-3"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="widget">
                                <h5 class="widget-title">Contact</h5>
                                <div class="widget-inner">
                                    <div class="sigma_info style-24 p-0 shadow-none">
                                        <div class="sigma_info-title"><span class="sigma_info-icon bg-primary-1 text-white"><i class="fal fa-phone"></i></span></div>
                                        <div class="sigma_info-description">
                                            <h5>Our Phone</h5>
                                            <p>Phone No.: (741)376-5672</p>
                                        </div>
                                    </div>
                                    <div class="sigma_info style-24 p-0 shadow-none">
                                        <div class="sigma_info-title"><span class="sigma_info-icon bg-primary-1 text-white"><i class="fal fa-envelope-open-text"></i></span></div>
                                        <div class="sigma_info-description">
                                            <h5>Our Email</h5>
                                            <p>Inquiries: example@example.com</p>
                                        </div>
                                    </div>
                                    <div class="sigma_info style-24 p-0 shadow-none mb-0">
                                        <div class="sigma_info-title"><span class="sigma_info-icon bg-primary-1 text-white"><i class="fal fa-map-marker-alt"></i></span></div>
                                        <div class="sigma_info-description">
                                            <h5>Our Address</h5>
                                            <p>Hong Kong</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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