@extends('layouts.app')

@section('css')
@endsection

@section('content')
<section class="banner-one">

    <div class="banner-one_image-layer" style="filter: grayscale(100%);">
        <video autoplay loop muted playsinline>
            <source src="{{ asset('assets/img/videos/footage.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="background-one_overlay"></div>

    <div class="banner-one_overlay"></div>
    <div class="auto-container">
        <!-- Content Column -->
        <div class="banner-one_content">
            <div class="banner-one_content-inner">
                <div class="banner-one_title">
                    
                </div>
                <h1 class="banner-one_heading">
                    <span class="large-letter">C</span>ontac<span class="large-letter">t</span>
                </h1> 
                <div class="banner-one_text">
                    Indonesian The Land of Content
                </div>
                <div class="banner-one_x"></div>
            </div>
            
        </div>
    </div>
</section>

<div class="area">
        
    <!-- Gallery Five -->
    <section class="booking-one">
        <div class="auto-container">

            <div class="row clearfix">

                <!-- Contact Column -->
                <div class="contact-column col-lg-8 col-md-7 col-sm-12">
                    <div class="title-box">
                        <h4>Send Us Mail</h4>
                        <p>Your email address will not be published. Required fields are marked *</p>
                    </div>

                    <!-- Contact Form -->
                    <div class="booking-form">
                        <form method="post" action="contact.html">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" name="f-name" placeholder="First Name" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" name="l-name" placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" name="email" placeholder="Email Address" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="form-label">Phone Number</label>
                                        <input type="number" name="phone" placeholder="Phone Number">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="form-label">Enter Text</label>
                                        <textarea name="text" placeholder="Enter Text"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="btn-style-two theme-btn">
                                        <span class="btn-wrap">
                                            <span class="text-one">Send Message</span>
                                            <span class="text-two">Send Message</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Map Column -->
                <div class="map-column col-lg-4 col-md-5 col-sm-12">
                    <!-- Map Four -->
                    <div class="map-four">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.224889036601!2d110.4813098!3d-7.0091602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708d5a976844ab%3A0x486af78bc4b1e940!2sRumah%20Risto!5e0!3m2!1sen!2s!4v1708845600000!5m2!1sen!2s" allowfullscreen=""></iframe>
                    </div>
                    
                    <!-- End Map Two -->
                </div>

            </div>
        </div>
    </section>
    <!-- End Gallery Five -->

</div>
@endsection