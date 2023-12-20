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

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link" href="{{ url('hospitals') }}">
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
    <section id="bt_section653325401a786" class="boldSection bottomSpaced gutter inherit" style="margin-top: -20px; position: relative; z-index: 1;">
        <div class="port">
            <div class="boldCell">
                <div class="boldCellInner">
                    <div class="boldRow btDarkSkin " style="background-color: transparent">
                        <div class="boldRowInner btTableRow">
                            <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft animate animate-fadein btTopVertical btDoublePadding animated" style="background-color: rgba(18, 197, 195, 1)">
                                <div class="rowItemContent">
                                    <div class="btClear btSeparator topSemiSpaced noBorder">
                                    </div>
                                    <header class="header btClear large">
                                        <div class="btSubTitle">Professional staff</div>
                                    </header>
                                    <div class="btText">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Aliquam quis semper felis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft animate animate-fadein inherit btDoublePadding animated" style="background-color: rgba(12, 184, 182, 1)">
                                <div class="rowItemContent">
                                    <div class="btClear btSeparator topSemiSpaced noBorder">

                                    </div>
                                    <header class="header btClear large  ">
                                        <div class="btSubTitle">Affordable prices</div>
                                    </header>
                                    <div class="btText">
                                        <p>
                                            Aliquam sit amet porttitor ex, sit amet pellentesque
                                            nibh. Praesent viverra dui augue.
                                        </p>
                                    </div>

                                    <div class="btClear btSeparator topSemiSpaced noBorder">
                                        <hr />
                                    </div>
                                </div>
                            </div>
                            <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft animate animate-fadein btTopVertical btDoublePadding animated" style="background-color: rgba(18, 197, 195, 1)">
                                <div class="rowItemContent">
                                    <div class="btClear btSeparator topSemiSpaced noBorder">

                                    </div>
                                    <header class="header btClear large  ">
                                        <div class="btSubTitle">Professional staff</div>
                                    </header>
                                    <div class="btText">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Aliquam quis semper felis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft animate animate-fadein inherit btDoublePadding animated" style="background-color: rgba(12, 184, 182, 1)">
                                <div class="rowItemContent">
                                    <div class="btClear btSeparator topSemiSpaced noBorder">

                                    </div>
                                    <header class="header btClear large  ">
                                        <div class="btSubTitle">Affordable prices</div>
                                    </header>
                                    <div class="btText">
                                        <p>
                                            Aliquam sit amet porttitor ex, sit amet pellentesque
                                            nibh. Praesent viverra dui augue.
                                        </p>
                                    </div>

                                    <div class="btClear btSeparator topSemiSpaced noBorder">
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-31519973   elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="31519973" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-79b4b84e" data-id="79b4b84e" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-1e2f4c16 elementor-widget elementor-widget-doccure-toggle" data-id="1e2f4c16" data-element_type="widget" data-widget_type="doccure-toggle.default">
                        <div class="elementor-widget-container">

                            <section class="faq-section">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="section-header-one text-center aos" data-aos="fade-up">
                                                <h3>About </h3>
                                                <h2 class="section-title">My Hospital Inteligence</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12  aos" data-aos="fade-up">
                                            <div class="faq-img">
                                                <img decoding="async" src="{{ asset('images/faq-img.png') }}" alt="" class="img-fluid" />
                                                <div class="faq-patients-count">
                                                    <div class="faq-smile-img">
                                                        <img decoding="async" src="{{ asset('images/smiling-icon.svg') }}" alt="" />
                                                    </div>
                                                    <div class="faq-patients-content">
                                                        <h4><span class="count-digit">10</span>k+</h4>
                                                        <p>Happy Patients</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-lg-6  ">
                                            <h5>
                                                About Us
                                            </h5>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            </p>
                                            <ul class='aboutlist'>
                                                <li><i class="fa fa-plus" aria-hidden="true"></i>

                                                    <span>Lorem ipsum dolor sit amet</span>
                                                </li>
                                                <li><i class="fa fa-plus" aria-hidden="true"></i><span>Lorem ipsum dolor sit amet</span></li>
                                                <li><i class="fa fa-plus" aria-hidden="true"></i><span>Lorem ipsum dolor sit amet</span></li>
                                                <li>
                                                    <button type="button" class="btn btn-primary readmorebtn">Read More</button>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hospital">
        <h2 class="text-center tophospitals">Our Top Hospitals</h2>
        <div id="carouselExampleControls" class="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/h1.jpeg') }}" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Sawai Man Singh Hospital</h5>
                            <p class="card-text">Jawahar Lal Nehru Marg, Ashok Nagar, Jaipur, Rajasthan</p>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 4.5 out of 5."></div>
                            <p>(4.5)</p>
                            <a href="#" class="btn btn-primary">Book Appointment</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6" style="border-right:1px solid #0cb8b6;">
                                    <i class="fa fa-bed" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i> <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-user-md" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i>
                                    <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/h2.jpeg') }}" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Sawai Man Singh Hospital</h5>
                            <p class="card-text">Jawahar Lal Nehru Marg, Ashok Nagar, Jaipur, Rajasthan</p>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 4.5 out of 5."></div>
                            <p>(4.5)</p>
                            <a href="#" class="btn btn-primary">Book Appointment</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6" style="border-right:1px solid #0cb8b6;">
                                    <i class="fa fa-bed" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i> <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-user-md" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i>
                                    <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/h3.jpeg') }}" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Sawai Man Singh Hospital</h5>
                            <p class="card-text">Jawahar Lal Nehru Marg, Ashok Nagar, Jaipur, Rajasthan</p>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 4.5 out of 5."></div>
                            <p>(4.5)</p>
                            <a href="#" class="btn btn-primary">Book Appointment</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6" style="border-right:1px solid #0cb8b6;">
                                    <i class="fa fa-bed" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i> <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-user-md" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i>
                                    <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/h4.jpeg') }}" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Sawai Man Singh Hospital</h5>
                            <p class="card-text">Jawahar Lal Nehru Marg, Ashok Nagar, Jaipur, Rajasthan</p>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 4.5 out of 5."></div>
                            <p>(4.5)</p>
                            <a href="#" class="btn btn-primary">Book Appointment</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6" style="border-right:1px solid #0cb8b6;">
                                    <i class="fa fa-bed" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i> <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-user-md" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i>
                                    <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/h5.jpeg') }}" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Sawai Man Singh Hospital</h5>
                            <p class="card-text">Jawahar Lal Nehru Marg, Ashok Nagar, Jaipur, Rajasthan</p>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 4.5 out of 5."></div>
                            <p>(4.5)</p>
                            <a href="#" class="btn btn-primary">Book Appointment</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6" style="border-right:1px solid #0cb8b6;">
                                    <i class="fa fa-bed" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i> <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-user-md" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i>
                                    <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/h1.jpeg') }}" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Sawai Man Singh Hospital</h5>
                            <p class="card-text">Jawahar Lal Nehru Marg, Ashok Nagar, Jaipur, Rajasthan</p>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 4.5 out of 5."></div>
                            <p>(4.5)</p>
                            <a href="#" class="btn btn-primary">Book Appointment</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6" style="border-right:1px solid #0cb8b6;">
                                    <i class="fa fa-bed" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i> <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-user-md" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i>
                                    <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/h2.jpeg') }}" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Sawai Man Singh Hospital</h5>
                            <p class="card-text">Jawahar Lal Nehru Marg, Ashok Nagar, Jaipur, Rajasthan</p>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 4.5 out of 5."></div>
                            <p>(4.5)</p>
                            <a href="#" class="btn btn-primary">Book Appointment</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6" style="border-right:1px solid #0cb8b6;">
                                    <i class="fa fa-bed" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i> <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-user-md" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i>
                                    <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/h3.jpeg') }}" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Sawai Man Singh Hospital</h5>
                            <p class="card-text">Jawahar Lal Nehru Marg, Ashok Nagar, Jaipur, Rajasthan</p>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 4.5 out of 5."></div>
                            <p>(4.5)</p>
                            <a href="#" class="btn btn-primary">Book Appointment</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6" style="border-right:1px solid #0cb8b6;">
                                    <i class="fa fa-bed" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i> <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-user-md" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i>
                                    <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-96e0b2e  work-section elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="96e0b2e" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-67e443e7" data-id="67e443e7" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-7da0c284 elementor-widget elementor-widget-doccure-how-works" data-id="7da0c284" data-element_type="widget" data-widget_type="doccure-how-works.default">
                        <div class="elementor-widget-container">

                            <section class="">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 work-img-info aos" data-aos="fade-up">
                                            <div class="work-img">
                                                <img decoding="async" src="https://doccure-wp.dreamguystech.com/elementor/wp-content/uploads/2023/07/work-img.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-lg-8   work-details">
                                            <div class="section-header-one aos" data-aos="fade-up">
                                                <h5>How it Works</h5>
                                                <h2 class="section-title">4 easy steps to get your solution</h2>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 aos" data-aos="fade-up">
                                                    <div class="work-info">
                                                        <div class="work-icon">
                                                            <span><img decoding="async" alt="" src="{{ asset('images/work-01 1.svg') }}"></span>
                                                        </div>
                                                        <div class="work-content">
                                                            <h5>Search Doctor </h5>
                                                            <p>Lorem ipsum dolor consectetur adipiscing elit, tempor incididunt labore dolore magna aliqua. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 aos" data-aos="fade-up">
                                                    <div class="work-info">
                                                        <div class="work-icon">
                                                            <span><img decoding="async" alt="" src="{{ asset('images/work-02 1.svg') }}"></span>
                                                        </div>
                                                        <div class="work-content">
                                                            <h5>Check Doctor Profile </h5>
                                                            <p>Lorem ipsum dolor consectetur adipiscing elit, tempor incididunt labore dolore magna aliqua. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 aos" data-aos="fade-up">
                                                    <div class="work-info">
                                                        <div class="work-icon">
                                                            <span><img decoding="async" alt="" src="{{ asset('images/work-03 1.svg') }}"></span>
                                                        </div>
                                                        <div class="work-content">
                                                            <h5>Schedule Appointment </h5>
                                                            <p>Lorem ipsum dolor consectetur adipiscing elit, tempor incididunt labore dolore magna aliqua. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 aos" data-aos="fade-up">
                                                    <div class="work-info">
                                                        <div class="work-icon">
                                                            <span><img decoding="async" alt="" src="{{ asset('images/work-04 1.svg') }}"></span>
                                                        </div>
                                                        <div class="work-content">
                                                            <h5>Get Your Solution </h5>
                                                            <p>Lorem ipsum dolor consectetur adipiscing elit, tempor incididunt labore dolore magna aliqua. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="team spad">
        <div class="container-fuild">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Our Team</span>
                        <h2>Our Expert Doctors</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-6 margin-left-10">
                    <div class="team__item">
                        <img src="{{ asset('images/d1.webp') }}" alt="">
                        <h5>Dr. Rajesh Kumawat</h5>
                        <span>Plastic surgeon</span>
                        <div class="team__item__social">

                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 margin-left-10">
                    <div class="team__item">
                        <img src="{{ asset('images/d2.webp') }}" alt="">
                        <h5>Dr. Aarti Mahle</h5>
                        <span>Plastic surgeon</span>
                        <div class="team__item__social">

                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 margin-left-10">
                    <div class="team__item">
                        <img src="{{ asset('images/d3.webp') }}" alt="">
                        <h5>XYZ</h5>
                        <span>Plastic surgeon</span>
                        <div class="team__item__social">

                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 margin-left-10">
                    <div class="team__item">
                        <img src="{{ asset('images/d1.webp') }}" alt="">
                        <h5>Dr. Rajesh Kumawat</h5>
                        <span>Plastic surgeon</span>
                        <div class="team__item__social">

                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 margin-left-10">
                    <div class="team__item">
                        <img src="{{ asset('images/d2.webp') }}" alt="">
                        <h5>XYZ</h5>
                        <span>Plastic surgeon</span>
                        <div class="team__item__social">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hospital">
        <h2 class="text-center tophospitals">Our Top Clinics</h2>
        <div id="carouselExampleControls" class="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/h1.jpeg') }}" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Sawai Man Singh Hospital</h5>
                            <p class="card-text">Jawahar Lal Nehru Marg, Ashok Nagar, Jaipur, Rajasthan</p>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 4.5 out of 5."></div>
                            <p>(4.5)</p>
                            <a href="#" class="btn btn-primary">Book Appointment</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6" style="border-right:1px solid #0cb8b6;">
                                    <i class="fa fa-bed" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i> <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-user-md" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i>
                                    <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/h2.jpeg') }}" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Sawai Man Singh Hospital</h5>
                            <p class="card-text">Jawahar Lal Nehru Marg, Ashok Nagar, Jaipur, Rajasthan</p>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 4.5 out of 5."></div>
                            <p>(4.5)</p>
                            <a href="#" class="btn btn-primary">Book Appointment</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6" style="border-right:1px solid #0cb8b6;">
                                    <i class="fa fa-bed" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i> <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-user-md" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i>
                                    <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/h3.jpeg') }}" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Sawai Man Singh Hospital</h5>
                            <p class="card-text">Jawahar Lal Nehru Marg, Ashok Nagar, Jaipur, Rajasthan</p>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 4.5 out of 5."></div>
                            <p>(4.5)</p>
                            <a href="#" class="btn btn-primary">Book Appointment</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6" style="border-right:1px solid #0cb8b6;">
                                    <i class="fa fa-bed" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i> <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-user-md" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i>
                                    <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/h4.jpeg') }}" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Sawai Man Singh Hospital</h5>
                            <p class="card-text">Jawahar Lal Nehru Marg, Ashok Nagar, Jaipur, Rajasthan</p>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 4.5 out of 5."></div>
                            <p>(4.5)</p>
                            <a href="#" class="btn btn-primary">Book Appointment</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6" style="border-right:1px solid #0cb8b6;">
                                    <i class="fa fa-bed" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i> <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-user-md" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i>
                                    <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/h5.jpeg') }}" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Sawai Man Singh Hospital</h5>
                            <p class="card-text">Jawahar Lal Nehru Marg, Ashok Nagar, Jaipur, Rajasthan</p>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 4.5 out of 5."></div>
                            <p>(4.5)</p>
                            <a href="#" class="btn btn-primary">Book Appointment</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6" style="border-right:1px solid #0cb8b6;">
                                    <i class="fa fa-bed" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i> <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-user-md" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i>
                                    <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/h1.jpeg') }}" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Sawai Man Singh Hospital</h5>
                            <p class="card-text">Jawahar Lal Nehru Marg, Ashok Nagar, Jaipur, Rajasthan</p>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 4.5 out of 5."></div>
                            <p>(4.5)</p>
                            <a href="#" class="btn btn-primary">Book Appointment</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6" style="border-right:1px solid #0cb8b6;">
                                    <i class="fa fa-bed" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i> <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-user-md" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i>
                                    <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/h2.jpeg') }}" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Sawai Man Singh Hospital</h5>
                            <p class="card-text">Jawahar Lal Nehru Marg, Ashok Nagar, Jaipur, Rajasthan</p>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 4.5 out of 5."></div>
                            <p>(4.5)</p>
                            <a href="#" class="btn btn-primary">Book Appointment</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6" style="border-right:1px solid #0cb8b6;">
                                    <i class="fa fa-bed" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i> <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-user-md" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i>
                                    <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/h3.jpeg') }}" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Sawai Man Singh Hospital</h5>
                            <p class="card-text">Jawahar Lal Nehru Marg, Ashok Nagar, Jaipur, Rajasthan</p>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 4.5 out of 5."></div>
                            <p>(4.5)</p>
                            <a href="#" class="btn btn-primary">Book Appointment</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6" style="border-right:1px solid #0cb8b6;">
                                    <i class="fa fa-bed" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i> <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-user-md" aria-hidden="true" style="font-size:30px;color:#0cb8b6;"></i>
                                    <span style="font-size:22px;margin-left:15px;">(12)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="ftco-section testimony-section bg-light testimonials">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2 hedingpadding">
                <div class="col-md-8 text-center heading-section ftco-animate fadeInUp ftco-animated">
                    <span class="subheading">Testimonials</span>
                    <h2 class="mb-4">Our Patients Says About Us</h2>
                    <p>Lorem ipsum dolor consectetur adipiscing elit, tempor incididunt labore dolore magna aliqua.</p>
                </div>
            </div>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ asset('images/d2.webp') }}" class="d-block" alt="...">

                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>

                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('images/d1.webp') }}" class="d-block" alt="...">

                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>

                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/d3.webp') }}" class="d-block" alt="...">

                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 py-5 pr-md-5">
                    <div class="heading-section heading-section-white ftco-animate mb-5 fadeInUp ftco-animated">
                        <span class="subheading">Consultation</span>
                        <h2 class="mb-4">Free Consultation</h2>
                        <p>Lorem ipsum dolor consectetur adipiscing elit, tempor incididunt labore dolore magna aliqua.</p>
                    </div>
                    <form action="#" class="appointment-form ftco-animate fadeInUp ftco-animated">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Name" name="name">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="email" class="form-control" placeholder="Enter Email id " name="email">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select Your Services</option>
                                            <option value="">Neurology</option>
                                            <option value="">Cardiology</option>
                                            <option value="">Dental</option>
                                            <option value="">Ophthalmology</option>
                                            <option value="">Other Services</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="date" class="form-control appointment_date" placeholder="Date">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="time" class="form-control appointment_time ui-timepicker-input" placeholder="Time" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="submit" value="Appointment" class="btn btn-p py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 p-5 bg-counter aside-stretch">
                    <h3 class="vr">About MHI Facts</h3>
                    <div class="row pt-4 mt-1">
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
                            <div class="block-18 p-5 bg-light">
                                <div class="text">
                                    <strong class="number" data-number="30">30</strong>
                                    <span>Years of Experienced</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
                            <div class="block-18 p-5 bg-light">
                                <div class="text">
                                    <strong class="number" data-number="4500">4,500</strong>
                                    <span>Happy Patients</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
                            <div class="block-18 p-5 bg-light">
                                <div class="text">
                                    <strong class="number" data-number="84">84</strong>
                                    <span>Number of Doctors</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
                            <div class="block-18 p-5 bg-light">
                                <div class="text">
                                    <strong class="number" data-number="300">300</strong>
                                    <span>Number of Staffs</span>
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
                        <p class="copyLine">Copyright by GatikAi  2023. All rights reserved.</p>
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