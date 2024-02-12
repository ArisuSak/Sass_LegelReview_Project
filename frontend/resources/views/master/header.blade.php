
<meta charset="utf-8">
        <title>Confer - Consulting Website Template Free Download</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Consulting Website Template Free Download" name="keywords">
        <meta content="Consulting Website Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">


        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="/lib/animate/animate.min.css" rel="stylesheet">
        <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- <div class="top-bar d-none d-md-block">
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
                                <h2>+855 23 996 111</h2>
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
        </div>s -->
        
         <!-- Nav Bar Start -->
         <div class="navbar navbar-expand-lg bg-dark navbar-dark" style="top:0 !important">
    <div class="container-fluid">
        <a href="/" class="navbar-brand">Law Review</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

       <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
    <div class="navbar-nav ml-auto">
        @if(Auth::check() && (Auth::user()->hasRole('admin')))
            <a href="/firm-data" class="nav-item nav-link {{ request()->is('firm_data') ? 'active' : '' }}">Firm Data</a>
            <!-- <a href="/lawyer-data" class="nav-item nav-link {{ request()->is('lawyer_data') ? 'active' : '' }}">Lawyer Data</a> -->
        @elseif(Auth::check() && (Auth::user()->hasRole('firm_provider')))
            @if(!Auth::user()->has_submitted_form)
                <a href="/firm-form" class="nav-item nav-link {{ request()->is('firm_form') ? 'active' : '' }}">Firm Form</a>
                            <!-- <a href="/firm-data" class="nav-item nav-link {{ request()->is('firm_data') ? 'active' : '' }}">Firm Data</a>
            <a href="/lawyer-data" class="nav-item nav-link {{ request()->is('lawyer_data') ? 'active' : '' }}">Lawyer Data</a>
            @endif
            <!-- <a href="/lawyer-form" class="nav-item nav-link {{ request()->is('lawyer_form') ? 'active' : '' }}">Lawyer Form</a> -->
            <a href="{{ route('firm_profile', ['id' => Auth::id()]) }}" class="nav-item nav-link {{ request()->is('firm_profile') ? 'active' : '' }}">Firm Profile</a>
        @endif

        <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="/about" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
        <a href="/law-firm" class="nav-item nav-link {{ request()->is('law-firm') ? 'active' : '' }}">Law Firm</a>
        <a href="/contact-form" class="nav-item nav-link {{ request()->is('contact-form') ? 'active' : '' }}">Contact</a>

        @if(!Auth::check())
        <a href="/register" class="nav-item nav-link {{ request()->is('register') ? 'active' : '' }}">Sign Up</a>
            <a href="/login" class="nav-item nav-link {{ request()->is('login') ? 'active' : '' }}">Login</a>
        @endif
        @if(Auth::check())
            <a href="/profile" class="nav-item nav-link {{ request()->is('profile') ? 'active' : '' }}">Profile</a>
        @endif
    </div>
</div>

    </div>
</div>

            </div>
        </div>
    </div>
</div>



                     </div>
                </div>
            </div>
        </div>
        

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">