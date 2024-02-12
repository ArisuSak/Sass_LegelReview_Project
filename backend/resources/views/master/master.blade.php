<!DOCTYPE html>
<html lang="en">
@php
	echo gethostname();
@endphp
<body>
  <head class="sidebar">
      @include ('master.header') 
  </head>
  <div class="content-body">
    @yield('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    @yield('dyncontent')
  </div>
    @include('master.footer')
   
</body>
</html>
