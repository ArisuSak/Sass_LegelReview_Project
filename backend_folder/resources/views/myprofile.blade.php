@extends('master.master')

@section('dyncontent')
<div class="container-fluid">
        <div class="card">
          <div class="card-body">
         
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
           <ul>

           </ul>
           <div>
            <h6>Username</h6>
    @if(isset($data->name))
        {{$data->name}}
    @else
        Name not available
    @endif
</div>
<div><h6>Email</h6>
    @if(isset($data->email))
        {{$data->email}}
    @else
        Email not available
    @endif
</div>
<div>
  <div><h6>Occupation</h6></div>
    <p>WEB DEVELOPER</p>
</div>
            
            <p class="mb-0">As a manager, introducing yourself properly to your new team can help gain their respect and establish you as a leader. In some cases, you may find it more appropriate to give a longer introduction. Example: "Hi everybody, my name is Jack Chou, your new event marketing manager.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
@stop