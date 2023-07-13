<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>egal Review</title>
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
                <x-guest-layout>
               <x-auth-card>
               <x-slot name="logo">
            <a href="/">
            </a>
        </x-slot>
                <p class="text-center">Legal Admin</p>
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form action=method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="mb-3">
                    <label  for="name" :value="__('Name')" >Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}"  required autofocus>
                    <span class="text-danger">@error('name') {{$message}} @enderror</span>
                  </div>
                  <div class="mb-3">
                    <label for="email" :value="__('Email')">Email Address</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" required >
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                  </div>
                  <!-- role -->
                  <div>
                  <label for="role_id" :value="__('Register as:')">Role</label>
                    <select type="text" class="form-control" id="role_id" name="role_id" value="{{old('email')}}" aria-describedby="emailHelp">
            
                      <option value="admin">Admin</option>
                      <option value="admin">Super Admin</option>
                  </div>
                  <!-- role -->

                  <div class="mb-4">
                    <label for="password" :value="__('Password')" >Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" required autocomplete="new-password" >
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                  </div>
                  <div class="mb-4">
                    <label for="password_confirmation" :value="__('Confirm Password')" >Confirm Password</label>
                    <input class="form-control" id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required >
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                  </div>
                  <x-button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit">{{ __('Register') }}</x-button>
                  
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="{{ route('login') }}"">{{ __('Already registered?') }}</a>
                  </div>
                </form>
                </x-auth-card>
             </x-guest-layout>
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