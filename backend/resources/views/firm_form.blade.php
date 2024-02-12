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
    <form name="sentMessage"  action="{{ url('/firm-data') }}" method="post">
        @csrf
        <div class="control-group">
            <input type="text" class="form-control" id="firm_name" name="firm_name" placeholder="Company Name" required="required" data-validation-required-message="Please enter your name" />
            <p class="help-block text-danger"></p>
        </div>
        <div class="control-group">
            <input type="email" class="form-control" id="firm_email" name="firm_email" placeholder="Email" required="required" data-validation-required-message="Please enter your email" />
            <p class="help-block text-danger"></p>
        </div>
        <div class="control-group">
            <input type="tel" class="form-control" id="firm_phonenumber" name="firm_phonenumber" placeholder="Phone number" required="required" data-validation-required-message="Please enter a phone number" />
            <p class="help-block text-danger"></p>
        </div>
        <div class="control-group">
            <input type="tel" class="form-control" id="firm_address" name="firm_address" placeholder="Address" required="required" data-validation-required-message="Please enter a phone number" />
            <p class="help-block text-danger"></p>
        </div>
        <div><p>Original Document</p></div>
        <div class="control-group">
            <input type="file" class="form-control-file" id="firm_file" name="firm_file" required="required" data-validation-required-message="Please select a file" />
            <p class="help-block text-danger"></p>
        </div>
        <div class="control-group">
            <textarea class="form-control" id="firm_information"" name="firm_information" placeholder="Information" required="required" data-validation-required-message="Please enter your message"></textarea>
            <p class="help-block text-danger"></p>
        </div>
        <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
    </form>
</div>
<!-- endform -->

<!-- <form action="{{ url('firm-data') }}" method="post">
    {!! csrf_field() !!}
    <label>Name</label></br>
    <input type="text" name="firm_name" id="firm_name" class="form-control"></br>
    <label>Email</label></br>
    <input type="text" name="firm_email" id="firm_email" class="form-control"></br>
    <label>Phone Number</label></br>
    <input type="text" name="firm_phonenumber" id="firm_phonenumber" class="form-control"></br>
    <label>Address</label></br>
    <input type="text" name="firm_address" id="firm_address" class="form-control"></br>
    <label>File</label></br>
    <input type="file" name="firm_file" id="firm_file" class="form-control"></br>
    <label>Information</label></br>
    <textarea name="firm_information" id="firm_information" class="form-control"></textarea></br>
    <input type="submit" value="Save" class="btn btn-success"></br>
</form> -->



                </div>
            </div>
        </div>
        <!-- Contact End -->
@stop