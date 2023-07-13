@extends('master.master')
    <!-- Topbar Start -->
    @section('content')
      
        <!-- Top Bar End -->

       
        <!-- Nav Bar End -->


        <div class="blog blog-page mt-125">
            <div class="container">
                <div class="section-header">
                </div>
                <h2>Law Firm</h2>
                <div class="row">
                @foreach($rankedFirms as $index => $firm)
    <div class="col-md-6">
        <div class="blog-item">
            <div class="blog-img">
                <img src="img/blog-1.jpg" alt="Blog">
            </div>
            <div class="blog-content">
                <h2 class="blog-title">{{ $firm->firm_name }}</h2>
                <div class="blog-meta">
                    <i class="fa fa-list-alt"></i>
                    <a href="">Category</a>
                    <i class="fa fa-calendar-alt"></i>
                    <p>{{ $firm->created_at->format('d-M-Y') }}</p>
                </div>
                <div class="blog-text">
                    <h6>{{ $firm->contact_person }}</h6>
                    <p>Contact Information</p>
                    <p>Address: {{ $firm->firm_address }}</p>
                    <p>Phone: {{ $firm->firm_phonenumber }}</p>
                    <p>Email: {{ $firm->firm_email }}</p>
                    <p>Number of Rankings: {{ $firm->ratings_count }}</p>
                    <p>Rank: {{ $index + 1 }}</p>
                    <a class="btn" href="/firm/{{ $firm->id }}">Read More</a>
                </div>
            </div>
        </div>
    </div>
@endforeach





                </div>
            </div>
        </div>
        <!-- Blog End -->

        
       @stop