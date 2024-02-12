@extends('master.master')

@section('content')



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

                        <h2>This is Our Lawyer</h2>
                        
                        At Smith & Associates Law Firm, our team of highly skilled lawyers is dedicated to providing exceptional legal services to our clients. With years of experience and a deep understanding of various areas of law, we are committed to delivering personalized and effective solutions. We pride ourselves on our professionalism, integrity, and unwavering commitment to our clients' best interests.
                        </p>


<!-- service --> <a class="btn" href="{{ route('service-form', ['firmId' => $firm->id]) }}">Add service</a>

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
        </div>
    </div>
    @endforeach
</div>
   @stop




 