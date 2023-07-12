@extends('master.master')
    <!-- Topbar Start -->
 @section('content')
<div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="far fa-clock"></i>
                                <h2>8:00 - 9:00</h2>
                                <p>Mon - Fri</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <h2>+123 456 7890</h2>
                                <p>For Appointment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="/index" class="navbar-brand">Confer</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="/index" class="nav-item nav-link">Home</a>
                        <a href="/about" class="nav-item nav-link">About</a>
                        <a href="/service" class="nav-item nav-link active">Service</a>
                        <a href="/feature" class="nav-item nav-link">Feature</a>
                        <a href="/advisor" class="nav-item nav-link">Advisor</a>
                        <a href="/review" class="nav-item nav-link">Review</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a href="blog" class="dropdown-item">Blog Page</a>
                                <a href="single" class="dropdown-item">Single Page</a>
                            </div>
                        </div>
                        <a href="contact" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        

        <!-- Service Start -->
        <div class="service mt-125">
            <div class="container">
                <div class="section-header">
                    <p>Consulting Services</p>
                    <h2>Our Best Consulting Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/icon-1.png" alt="Icon">
                            <h3>Business Strategy</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium ornare velit non
                            </p>
                            <a href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/icon-2.png" alt="Icon">
                            <h3>Project Management</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium ornare velit non
                            </p>
                            <a href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/icon-3.png" alt="Icon">
                            <h3>Market Research</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium ornare velit non
                            </p>
                            <a href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/icon-4.png" alt="Icon">
                            <h3>Human Resource</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium ornare velit non
                            </p>
                            <a href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/icon-5.png" alt="Icon">
                            <h3>Online Business</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium ornare velit non
                            </p>
                            <a href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/icon-6.png" alt="Icon">
                            <h3>Capital Management</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium ornare velit non
                            </p>
                            <a href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/icon-7.png" alt="Icon">
                            <h3>Business Insurance</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium ornare velit non
                            </p>
                            <a href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/icon-8.png" alt="Icon">
                            <h3>Online Marketing</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium ornare velit non
                            </p>
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Feature Start -->
        <div class="feature">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-md-6">
                        <div class="feature-img">
                            <img src="img/business-man.png" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-header">
                            <p>Our Feature</p>
                            <h2>Why Choose Us?</h2>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus 
                        </p>
                        <div class="row counters">
                            <div class="col-6">
                                <i class="fa fa-user"></i>
                                <div class="counters-text">
                                    <h2 data-toggle="counter-up">100</h2>
                                    <p>Our Staffs</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <i class="fa fa-users"></i>
                                <div class="counters-text">
                                    <h2 data-toggle="counter-up">200</h2>
                                    <p>Our Clients</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <i class="fa fa-check"></i>
                                <div class="counters-text">
                                    <h2 data-toggle="counter-up">300</h2>
                                    <p>Completed Projects</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <i class="fa fa-running"></i>
                                <div class="counters-text">
                                    <h2 data-toggle="counter-up">400</h2>
                                    <p>Running Projects</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->

@stop