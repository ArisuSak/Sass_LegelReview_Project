@extends('master.master')
    <!-- Topbar Start -->
    @section('content')
        <!-- Top Bar End -->


        
   <!-- Contact Start -->
   <div class="contact mt-125">
            <div class="container">
                <div class="section-header">
                    <p>Firm For</p>
                    <h2>Firm Request Requirement</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Our Head Office</h3>
                                <p>123 Street, New York, USA</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Call for Help</h3>
                                <p>+012 345 6789</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Email for Information</h3>
                                <p>info@example.com</p>
                            </div>
                        </div>
                    </div>

                    <!-- form -->
                    <div class="col-md-7">
                    <div class="contact-form">
    <div id="success"></div>

    <form name="sentMessage" action="{{ url('/contact-data') }}" method="post">
    @csrf
    <div class="control-group">
        <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
        <p class="help-block text-danger"></p>
    </div>
    <div class="control-group">
        <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
        <p class="help-block text-danger"></p>
    </div>
    <div class="control-group">
        <input type="text" class="form-control" id="contact_subject" name="contact_subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
        <p class="help-block text-danger"></p>
    </div>
    <div class="control-group">
        <textarea class="form-control" id="contact_message" name="contact_message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
        <p class="help-block text-danger"></p>
    </div>

    <button class="btn" type="submit" id="sendMessageButton">Send Message</button>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    @if(!Auth::check())
        <div class="alert alert-danger mt-3">
            Please log in to submit the form.
        </div>
    @endif
</form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
@stop