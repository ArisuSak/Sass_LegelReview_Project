@extends('master.master')

@section('content')
<style>
    .btn {
  display: inline-block;
  padding: 10px 20px;
  background-color: #092a49;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  border: none;
  cursor: pointer;
}

.btn:hover {
  background-color: #0056b3;
}

.service .service-item a {
    color:white;
    text-decoration: none;
    position: static;
    
}




</style>


        <div class="single mt-125">
            <div class="container">
                <div class="section-header">
     
                    <h2> </h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h1>  {{$firm->firm_name }}</h1>
                        <img src="img/single.jpg" alt="Image">
                        <h2>Our Company Overview</h2>
                        <h4></h4>
                        <p>{{$firm->firm_information }}</p>           
                    <h4>Contact Information </h4>
                    <p>Address: {{ $firm->firm_address }}</p>
                    <p>Phone Number: {{ $firm->firm_phonenumber }}</p>
                    <p>Email: {{ $firm->firm_email }}</p>
                    <p>Website: www.smithlawfirm.com</p>
                    <a class="btn btn-primary" href="{{ route('firm.edit', $firm->id) }}">Edit Firm</a>



                        <h2>Service Overview</h2>
                        
                        we are committed to providing exceptional legal services to individuals, businesses, and organizations. With our team of experienced and dedicated attorneys, we offer a comprehensive range of legal solutions tailored to meet the unique needs of our clients. Whether you require assistance with personal legal matters or complex corporate issues, we are here to guide and represent you with the utmost professionalism and expertise.

Areas of Practice.
                        </p>
                                               


<!-- service --> <a class="btn btn-primary" href="{{ route('service-form', ['firmId' => $firm->id]) }}">Add service</a>

                        <div class="service">
            <div class="container">
                <div class="section-header">
                   <p>
                    <h2>The Best Consulting Services</h2>
                </div>
                <div class="row">
                    <!-- start service -->
    @foreach ($services as $service)
    <div class="col-lg-3 col-md-6">
        <div class="service-item">
            <h3>{{ $service->service_name }}</h3>
            <p>
                {{ $service->service_detail }}
            </p>
            <a class="btn btn-primary" href="{{ route('service.edit', $service->id) }}">Edit Service</a>
        </div>
    </div>
    @endforeach
</div>
   @stop




 