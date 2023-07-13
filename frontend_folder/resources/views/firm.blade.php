<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

@extends('master.master')
    <!-- Topbar Start -->
 @section('content')

        <!-- Nav Bar End -->
        

        <!-- Single Page Start -->
        <div class="single mt-125">
            <div class="container">
                <div class="section-header">
     
                    <h2> Smith & Associates Law Firm</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <img src="img/single.jpg" alt="Image">
                        <h2>Our Company Overview</h2>
                        <h4></h4>
                        {{$firm->firm_address }}
                      
                    </p>
                    <h4>Contact Information </h4>
                    <p>Address: {{ $firm->firm_address }}</p>
                    <p>Phone Number: {{ $firm->firm_phonenumber }}</p>
                    <p>Email: {{ $firm->firm_email }}</p>

             
                        <h2>This is Our Lawyer</h2>
                        
                        At Smith & Associates Law Firm, our team of highly skilled lawyers is dedicated to providing exceptional legal services to our clients. With years of experience and a deep understanding of various areas of law, we are committed to delivering personalized and effective solutions. We pride ourselves on our professionalism, integrity, and unwavering commitment to our clients' best interests.
                        </p>


<!-- service -->
<div class="service">
    <div class="container">
        <div class="section-header">
            <h2>The Best Consulting Services</h2>
        </div>
        <div class="row">
            @if ($services && $services->count() > 0)
                @foreach ($services as $service)
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <h3>{{ $service->service_name }}</h3>
                            <p>{{ $service->service_detail }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No services available.</p>
            @endif
        </div>
    </div>
</div>

        <!-- service -->
                        <!-- lawyer layout -->
                        <!-- <div class="blog blog-page mt-125">
            <div class="container">
                <div class="section-header">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" alt="Blog">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">Corporate and Commercial Law</h2>
                                <div class="blog-meta">
                                    <i class="fa fa-list-alt"></i>
                                    <a href="">Category</a>
                                    <i class="fa fa-calendar-alt"></i>
                                    <p>01-Jan-2045</p>
                                </div>
                                <div class="blog-text">
                                <h6>John Smith</h6>
                                <p>Contact Information</p>
                                <p>Address: 123 Main Street, City, State, ZIP</p>
                                <p>Phone: +1 (123) 456-7890</p>
                                <p>Email: john.smith@lawfirm.com</p>
                                    <a class="btn" href="/review">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-2.jpg" alt="Blog">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">Corporate and Commercial Law</h2>
                                <div class="blog-meta">
                                    <i class="fa fa-list-alt"></i>
                                    <a href="">Category</a>
                                    <i class="fa fa-calendar-alt"></i>
                                    <p>01-Jan-2045</p>
                                </div>
                                <div class="blog-text">
                                <h6>John Smith</h6>
                           
                                <p>Contact Information</p>
                                <p>Address: 123 Main Street, City, State, ZIP</p>
                                <p>Phone: +1 (123) 456-7890</p>
                                <p>Email: john.smith@lawfirm.com</p>
                                    <a class="btn" href="/review">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-3.jpg" alt="Blog">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">Corporate and Commercial Law</h2>
                                <div class="blog-meta">
                                    <i class="fa fa-list-alt"></i>
                                    <a href="">Category</a>
                                    <i class="fa fa-calendar-alt"></i>
                                    <p>01-Jan-2045</p>
                                </div>
                                <div class="blog-text">
                                <h6>John Smith</h6>
                               
                                <p>Contact Information</p>
                                <p>Address: 123 Main Street, City, State, ZIP</p>
                                <p>Phone: +1 (123) 456-7890</p>
                                <p>Email: john.smith@lawfirm.com</p>
                                    <a class="btn" href="/review">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-4.jpg" alt="Blog">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">Corporate and Commercial Law</h2>
                                <div class="blog-meta">
                                    <i class="fa fa-list-alt"></i>
                                    <a href="">Category</a>
                                    <i class="fa fa-calendar-alt"></i>
                                    <p>01-Jan-2045</p>
                                </div>
                                <div class="blog-text">
                                    <h6>John Smith</h6>
                            
                                <p>Contact Information</p>
                                <p>Address: 123 Main Street, City, State, ZIP</p>
                                <p>Phone: +1 (123) 456-7890</p>
                                <p>Email: john.smith@lawfirm.com</p>
                                    <a class="btn" href="/review">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- lawyer End -->

        <!-- Single Page End -->
<!-- <style>
    body{
    background:white;    
    }
    .total-like-user-main a {
        display: inline-block;
        margin: 0 -17px 0 0;
    }
    .total-like {
        border: 1px solid;
        border-radius: 50px;
        display: inline-block;
        font-weight: 500;
        height: 34px;
        line-height: 33px;
        padding: 0 13px;
        vertical-align: top;
    }
    .restaurant-detailed-ratings-and-reviews hr {
        margin: 0 -24px;
    }
    .graph-star-rating-header .star-rating {
        font-size: 17px;
    }
    .progress {
        background: #f2f4f8 none repeat scroll 0 0;
        border-radius: 0;
        height: 30px;
    }
    .rating-list {
        display: inline-flex;
        margin-bottom: 15px;
        width: 100%;
    }
    .rating-list-left {
        height: 16px;
        line-height: 29px;
        width: 10%;
    }
    .rating-list-center {
        width: 80%;
    }
    .rating-list-right {
        line-height: 29px;
        text-align: right;
        width: 10%;
    }
    .restaurant-slider-pics {
        bottom: 0;
        font-size: 12px;
        left: 0;
        z-index: 999;
        padding: 0 10px;
    }
    .restaurant-slider-view-all {
        bottom: 15px;
        right: 15px;
        z-index: 999;
    }
    .offer-dedicated-nav .nav-link.active,
    .offer-dedicated-nav .nav-link:hover,
    .offer-dedicated-nav .nav-link:focus {
        border-color: #3868fb;
        color: #3868fb;
    }
    .offer-dedicated-nav .nav-link {
        border-bottom: 2px solid #fff;
        color: #000000;
        padding: 16px 0;
        font-weight: 600;
    }
    .offer-dedicated-nav .nav-item {
        margin: 0 37px 0 0;
    }
    .restaurant-detailed-action-btn {
        margin-top: 12px;
    }
    .restaurant-detailed-header-right .btn-success {
        border-radius: 3px;
        height: 45px;
        margin: -18px 0 18px;
        min-width: 130px;
        padding: 7px;
    }
    .text-black {
        color: #000000;
    }
    .icon-overlap {
        bottom: -23px;
        font-size: 74px;
        opacity: 0.23;
        position: absolute;
        right: -32px;
    }
    .menu-list img {
        width: 41px;
        height: 41px;
        object-fit: cover;
    }
    .restaurant-detailed-header-left img {
        width: 88px;
        height: 88px;
        border-radius: 3px;
        object-fit: cover;
        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075)!important;
    }
    .reviews-members .media .mr-3 {
        width: 56px;
        height: 56px;
        object-fit: cover;
    }
    .rounded-pill {
        border-radius: 50rem!important;
    }
    .total-like-user {
        border: 2px solid #fff;
        height: 34px;
        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075)!important;
        width: 34px;
    }
    .total-like-user-main a {
        display: inline-block;
        margin: 0 -17px 0 0;
    }
    .total-like {
        border: 1px solid;
        border-radius: 50px;
        display: inline-block;
        font-weight: 500;
        height: 34px;
        line-height: 33px;
        padding: 0 13px;
        vertical-align: top;
    }
    .restaurant-detailed-ratings-and-reviews hr {
        margin: 0 -24px;
    }
    .graph-star-rating-header .star-rating {
        font-size: 17px;
    }
    .progress {
        background: #f2f4f8 none repeat scroll 0 0;
        border-radius: 0;
        height: 30px;
    }
    .rating-list {
        display: inline-flex;
        margin-bottom: 15px;
        width: 100%;
    }
    .rating-list-left {
        height: 16px;
        line-height: 29px;
        width: 10%;
    }
    .rating-list-center {
        width: 80%;
    }
    .rating-list-right {
        line-height: 29px;
        text-align: right;
        width: 10%;
    }
    .restaurant-slider-pics {
        bottom: 0;
        font-size: 12px;
        left: 0;
        z-index: 999;
        padding: 0 10px;
    }
    .restaurant-slider-view-all {
        bottom: 15px;
        right: 15px;
        z-index: 999;
    }

    .progress {
        background: #f2f4f8 none repeat scroll 0 0;
        border-radius: 0;
        height: 30px;
    }


    .rating {
    display: inline-block;
    }

    .rating input {
    display: none;
    }

    .rating label {
    float: right;
    cursor: pointer;
    color: #ddd;
    }

    .rating label:before {
    content: '\2605';
    font-size: 24px;
    }

    .rating input:checked ~ label {
    color: #ffc107;
    }

    .rating label:hover,
    .rating label:hover ~ label {
    color: #ffc107;
    }

    .star-rating .fa-star.star-filled {
        color: orange;
    }
    .star-rating .fa-star.star-empty {
        color: black;
    }
</style> -->
<link rel ="stylesheet" href ="\css\firmstyle.css">
<link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css" integrity="sha384-jbCTJB16Q17718YM9U22iJkhuGbS0Gd2LjaWb4YJEZToOPmnKDjySVa323U+W7Fv" crossorigin="anonymous">
<div class="container">
                <div class="bg-white rounded shadow-sm p-4 mb-4 clearfix graph-star-rating">
                    <h5 class="mb-0 mb-4">Ratings and Reviews</h5>
                    <div class="graph-star-rating-header">
                        <div class="star-rating">
                            <a href="#"><i class="icofont-ui-rating active"></i></a>
                            <a href="#"><i class="icofont-ui-rating active"></i></a>
                            <a href="#"><i class="icofont-ui-rating active"></i></a>
                            <a href="#"><i class="icofont-ui-rating active"></i></a>
                            <a href="#"><i class="icofont-ui-rating"></i></a> <b class="text-black ml-2"  ></b>
                            <div class="container">
                            <div>
    {{ $ratingCount }} Rating
</div>


@php
    $totalRatings = $ratingCount ?: 1; // To avoid division by zero error
    $averageRating = $ratings->avg('rating');
@endphp

<p class="text-black mb-4 mt-2">Rated {{ number_format($averageRating, 1) }} out of 5</p>

<!-- percentage of rating -->
<div class="graph-star-rating-body">
    @php
        $totalRatings = $ratingCount ?: 1; // To avoid division by zero error
    @endphp

    @for($i = 5; $i >= 1; $i--)
        @php
            $ratingPercentage = ($ratings->where('rating', $i)->count() / $totalRatings) * 100;
        @endphp
        <div class="rating-list">
            <div class="rating-list-left text-black">
                {{ $i }} Star
            </div>
            <div class="rating-list-center">
                <div class="progress">
                    <div style="width: {{ $ratingPercentage }}%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="{{ $ratingPercentage }}" role="progressbar" class="progress-bar bg-primary">
                        <span class="sr-only">{{ $ratingPercentage }}% Complete</span>
                    </div>
                </div>
            </div>
            <div class="rating-list-right text-black">{{ $ratingPercentage }}%</div>
        </div>
    @endfor
</div>


<!-- the review -->
@foreach($ratings as $rating)
    <div class="bg-white rounded shadow-sm p-4 mb-4 restaurant-detailed-ratings-and-reviews">
        <div class="reviews-members pt-4 pb-4">
            <div class="media">
                <div class="media-body">
                    <div class="reviews-members-header">
                        <span class="star-rating float-right">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $rating->rating)
                                    <i class="fas fa-star star-filled"></i>
                                @else
                                    <i class="far fa-star star-empty"></i>
                                @endif
                            @endfor
                        </span>
                        <span class="rating-value">({{ $rating->rating }} out of 5)</span>
                    </div>
                    <div class="reviews-members-body">
                        <p>{{ $rating->comment }}</p>
                    </div>
                    <div class="reviews-members-footer">
                        <p class="text-gray">Rated by <strong>{{ $rating->user->name ?? 'Unknown User' }}</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
@endforeach







    <a class="text-center w-100 d-block mt-4 font-weight-bold" href="#">See All Reviews</a>

    <!-- <div class="bg-white rounded shadow-sm p-4 mb-5 rating-review-select-page"> -->
                    
    <h5 class="mb-4">Leave Comment</h5>
    <p class="mb-2">Rate the Place</p>
<div class="rating">
    @if(auth()->check()) {{-- Check if user is logged in --}}
    <form method="POST" action="{{ route('ratings.submit', $firm->id) }}">
        @csrf
        <div class="rating">
            <input type="radio" id="star5" name="rating" value="5">
            <label for="star5" title="5 stars"></label>
            <input type="radio" id="star4" name="rating" value="4">
            <label for="star4" title="4 stars"></label>
            <input type="radio" id="star3" name="rating" value="3">
            <label for="star3" title="3 stars"></label>
            <input type="radio" id="star2" name="rating" value="2">
            <label for="star2" title="2 stars"></label>
            <input type="radio" id="star1" name="rating" value="1">
            <label for="star1" title="1 star"></label>
        </div>

        <div class="form-group">
            <div>Your Comment</div>
            <textarea id="comment" class="form-control" name="comment"></textarea>
        </div>

        <input type="hidden" name="firm_id" value="{{ $firm->id }}">

        <div class="form-group">
            <button class="btn btn-primary btn-sm" type="submit">Submit Comment</button>
        </div>
    </form>
    @else
    <p>Please <a href="{{ route('login') }}" class="btn btn-primary">Login</a> to submit a rating and comment.</p>

    @endif
</div>



<script>
    // Get all the rating inputs
    var ratingInputs = document.querySelectorAll('.rating input');

    // Attach event listeners to rating inputs
    ratingInputs.forEach(function(input) {
    input.addEventListener('change', handleRatingChange);
    });

    // Handle rating change event
    function handleRatingChange(event) {
    var ratingValue = event.target.value;
    console.log('Selected rating:', ratingValue);
    }

</script>
@stop

