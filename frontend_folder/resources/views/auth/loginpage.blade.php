<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Legal Review</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="/" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                </a>
                <p class="text-center">Legal Admin</p>
                <form action="{{ route('login') }}" method ="post">
                @if(Session::has('sucess'))
                  <div class="alert alert-sucess">{{Session::get('sucess')}}</div>
                  @endif
                  @if(Session::has('fail'))
                  <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  @endif
                  @csrf
                  <div class="mb-3">
                    <label for="email" :value="__('Email')">email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                  </div>
                 
                  <div class="mb-4">
                    <label for="password" :value="__('Password')">Password</label>
                    <input class="form-control" id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" > 
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                  </div>
                   <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input id="remember_me" type="checkbox" class="form-check-input primary"   name="remember">
                      <label class="form-check-label text-dark" for="remember_me">
                        Remeber this Device
                      </label>
                    </div>
                    <a href="{{ route('password.request') }}" class="text-primary fw-bold" href="/">Forgot Password ?</a>
                  </div> 
                  <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit">Log in</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Not Yet have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="/register">Sign Up</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>