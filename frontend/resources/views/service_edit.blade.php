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
    
    <form name="editServiceForm" action="{{ route('service.update', $service->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="control-group">
        <input type="text" class="form-control" id="service_name" name="service_name" placeholder="Service Name" value="{{ $service->name }}" />
        <p class="help-block text-danger"></p>
    </div>
    <div class="control-group">
        <textarea class="form-control" id="service_detail" name="service_detail" placeholder="Service Detail">{{ $service->detail }}</textarea>
        <p class="help-block text-danger"></p>
    </div>
    <button class="btn" type="submit" id="updateServiceButton">Update Service</button>
</form>




</div>
<!-- endform -->

                </div>
            </div>
        </div>
        <!-- Contact End -->
@stop