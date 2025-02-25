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
                    <span class="large-letter">A</span>bout u<span class="large-letter">s</span>
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
        
    <!-- Trip One -->
    <section class="trip-one">
        <div class="auto-container">
            <div class="inner-container">
                <!-- Trip Info Tabs -->
                <div class="trip-info-tabs">
                    <!-- Trip Tabs -->
                    <div class="trip-tabs tabs-box">
                    
                        <!-- Tab Btns -->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#trip-one" class="tab-btn flaticon-route active-btn"></li>
                            <li data-tab="#trip-two" class="tab-btn flaticon-calendar-3"></li>
                            <li data-tab="#trip-three" class="tab-btn flaticon-luggage"></li>
                            <li data-tab="#trip-four" class="tab-btn flaticon-airplane"></li>
                        </ul>
                        
                        <!-- Tabs Container -->
                        <div class="tabs-content">
                            
                            <!-- Tab / Active Tab -->
                            <div class="tab active-tab" id="trip-one">
                                <div class="content">
                                    <div class="image">
                                        <div class="overlay-box">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4><a href="#">HOW IT WORKS</a></h4>
                                                <div class="text">We book the necessary hotel, transport, <br> and unique tourist attraction for your trip.</div>
                                            </div>
                                            <h1><a href="tour-booking.html">Trip Planning</a></h1>
                                            <a href="https://www.pexels.com/video/l-2942803/" class="trip_play lightbox-video"><span class="flaticon-play"><i class="ripple"></i></span></a>
                                        </div>
                                        <img src="assets/img/resource/trip-6.jpg" alt="" />
                                    </div>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab" id="trip-two">
                                <div class="content">
                                    <div class="image">
                                        <div class="overlay-box">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4><a href="#">HOW IT WORKS</a></h4>
                                                <div class="text">We book the necessary hotel, transport, <br> and unique tourist attraction for your trip.</div>
                                            </div>
                                            <h1><a href="tour-booking.html">Trip Booking</a></h1>
                                            <a href="https://www.pexels.com/video/l-2942803/" class="trip_play lightbox-video"><span class="flaticon-play"><i class="ripple"></i></span></a>
                                        </div>
                                        <img src="assets/img/resource/trip-6.jpg" alt="" />
                                    </div>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab" id="trip-three">
                                <div class="content">
                                    <div class="image">
                                        <div class="overlay-box">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4><a href="#">HOW IT WORKS</a></h4>
                                                <div class="text">We book the necessary hotel, transport, <br> and unique tourist attraction for your trip.</div>
                                            </div>
                                            <h1><a href="tour-booking.html">Trip Preparation</a></h1>
                                            <a href="https://www.pexels.com/video/l-2942803/" class="trip_play lightbox-video"><span class="flaticon-play"><i class="ripple"></i></span></a>
                                        </div>
                                        <img src="assets/img/resource/trip-6.jpg" alt="" />
                                    </div>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab" id="trip-four">
                                <div class="content">
                                    <div class="image">
                                        <div class="overlay-box">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4><a href="#">HOW IT WORKS</a></h4>
                                                <div class="text">We book the necessary hotel, transport, <br> and unique tourist attraction for your trip.</div>
                                            </div>
                                            <h1><a href="tour-booking.html">Trip <br> Experience</a></h1>
                                            <a href="https://www.pexels.com/video/l-2942803/" class="trip_play lightbox-video"><span class="flaticon-play"><i class="ripple"></i></span></a>
                                        </div>
                                        <img src="assets/img/resource/trip-6.jpg" alt="" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Trip One -->

    {{-- <!-- Team One -->
    <section class="team-one">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2 class="sec-title_heading">MEET OUR TEAM</h2>
            </div>
            <div class="masonry-items-container_two row clearfix">

                <!-- Team Block One -->
                <div class="team-block_one masonry-item col-lg-4 col-md-6 col-sm-12">
                    <div class="team-block_one-inner">
                        <div class="team-block_one-image">
                            <img src="images/resource/team-1.jpg" alt="" />
                            <div class="team-block_one-content">
                                <h4 class="team-block_one-heading"><a href="tour-details-2.html">CEO</a></h4>
                                <div class="team-block_one-name">Paul Johnson</div>
                                <div class="team-block_one-text">“I believe in giving only the best quality travel service for our clients.”</div>
                                <a class="team-block_one-arrow flaticon-next-2" href="tour-details-2.html"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Block One -->
                <div class="team-block_one masonry-item col-lg-4 col-md-6 col-sm-12">
                    <div class="team-block_one-inner">
                        <div class="team-block_one-image">
                            <img src="images/resource/team-2.jpg" alt="" />
                            <div class="team-block_one-content">
                                <h4 class="team-block_one-heading"><a href="tour-details-2.html">MANAGER</a></h4>
                                <div class="team-block_one-name">Rowena Chen</div>
                                <div class="team-block_one-text">“I believe in giving only the best quality travel service for our clients.”</div>
                                <a class="team-block_one-arrow flaticon-next-2" href="tour-details-2.html"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Block One -->
                <div class="team-block_one masonry-item col-lg-4 col-md-6 col-sm-12">
                    <div class="team-block_one-inner">
                        <div class="team-block_one-image">
                            <img src="images/resource/team-3.jpg" alt="" />
                            <div class="team-block_one-content">
                                <h4 class="team-block_one-heading"><a href="tour-details-2.html">FINANCE</a></h4>
                                <div class="team-block_one-name">David Ronald</div>
                                <div class="team-block_one-text">“I believe in giving only the best quality travel service for our clients.”</div>
                                <a class="team-block_one-arrow flaticon-next-2" href="tour-details-2.html"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Block One -->
                <div class="team-block_one masonry-item col-lg-8 col-md-12 col-sm-12">
                    <div class="team-block_one-inner">
                        <div class="team-block_one-image">
                            <img src="images/resource/team-4.jpg" alt="" />
                            <div class="team-block_one-content">
                                <h4 class="team-block_one-heading"><a href="tour-details-2.html">SALES & MARKETING MANAGER</a></h4>
                                <div class="team-block_one-name">Miranda Shimmer & Tatiana Lee</div>
                                <div class="team-block_one-text">“I believe in giving only the best quality travel service for our clients.”</div>
                                <a class="team-block_one-arrow flaticon-next-2" href="tour-details-2.html"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Block One -->
                <div class="team-block_one masonry-item col-lg-8 col-md-12 col-sm-12">
                    <div class="team-block_one-inner">
                        <div class="team-block_one-image">
                            <img src="images/resource/team-5.jpg" alt="" />
                            <div class="team-block_one-content">
                                <h4 class="team-block_one-heading"><a href="tour-details-2.html">HEAD OF OPERATIONS</a></h4>
                                <div class="team-block_one-name">Eugene Kim & Joseph Thompson</div>
                                <div class="team-block_one-text">“I believe in giving only the best quality travel service for our clients.”</div>
                                <a class="team-block_one-arrow flaticon-next-2" href="tour-details-2.html"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Block One -->
                <div class="team-block_one masonry-item col-lg-4 col-md-6 col-sm-12">
                    <div class="team-block_one-inner">
                        <div class="team-block_one-image">
                            <img src="images/resource/team-6.jpg" alt="" />
                            <div class="team-block_one-content">
                                <h4 class="team-block_one-heading"><a href="tour-details-2.html">HRD</a></h4>
                                <div class="team-block_one-name">Olivia Barkley</div>
                                <div class="team-block_one-text">“I believe in giving only the best quality travel service for our clients.”</div>
                                <a class="team-block_one-arrow flaticon-next-2" href="tour-details-2.html"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Team One --> --}}

    <!-- Contact One -->
    <section class="contact-one">
        <div class="auto-container">
            <div class="contact-one_pattern" style="background-image: url(images/icons/pattern-1.png)"></div>
            <!-- Sec Title -->
            <div class="sec-title">
                <h2 class="sec-title_heading">CONTACT INFORMATION</h2>
            </div>
            <div class="row clearfix">
                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <div class="title">phone</div>
                    <a href="tel:+1-555-555-555">+1-555-555-555</a>
                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <div class="title">email</div>
                    <a href="mailto:info@vacasky.com">info@email.com</a>
                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <div class="title">address</div>
                    <div class="text">123 Anywhere Street, Any City</div>
                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <!-- Button Box -->
                    <div class="button-box text-right">
                        <a class="btn-style-two theme-btn" href="contact.html">
                            <div class="btn-wrap">
                                <span class="text-one">CONTACT US</span>
                                <span class="text-two">CONTACT US</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Map One -->
            <div class="map-one">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.224889036601!2d110.4813098!3d-7.0091602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708d5a976844ab%3A0x486af78bc4b1e940!2sRumah%20Risto!5e0!3m2!1sen!2s!4v1708845600000!5m2!1sen!2s" allowfullscreen=""></iframe>
            </div>        
            <!-- End Map One -->

        </div>
    </section>
    <!-- End Contact One -->

</div>
@endsection