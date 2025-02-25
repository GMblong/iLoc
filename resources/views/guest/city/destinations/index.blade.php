@extends('layouts.app')

@section('css')
@endsection

@section('content')

<!-- Page Banner -->
<section class="page-banner">
    <div class="banner-one_image-layer" style="background-image: url(assets/img/gallery/kotalama.jpg); filter: grayscale(100%);">
        <div class="background-one_overlay"></div>
        <div class="banner-one_overlay"></div>
        <img src="" alt="">
    </div>
    <div class="auto-container">
        <ul class="page-breadbrumbs">
            <li>Explore Semarang</li>
            <li><a href="city">Semarang</a></li>
            <li>Destinations</li>
        </ul>
        <h1 class="page-banner_title_destinations">KOTA LAMA SEMARANG</h1>
    </div>
</section>
<!-- End Page Banner -->

<div class="area">
    <!-- Gallery Seven -->
    <section class="gallery-seven">
        <div class="outer-container">
            @php
                $images = [
                    'assets/img/gallery/kotalama1.jpeg',
                    'assets/img/gallery/kotalama2.jpg',
                    'assets/img/gallery/kotalama3.jpg'
                ]
            @endphp
            <div class="gallery-carousel-three owl-carousel owl-theme">
                @foreach ($images as $img)
                <!-- Image -->
                <div class="image">
                    <a class="lightbox-image" href="{{ $img }}"><img src="{{ $img }}" alt="" /></a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Gallery Seven  -->

    <!-- Tour Detail -->
    <section class="tour-detail">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <div class="text">
                        Enjoy a historical journey to the Old Town of Semarang, a historic area that holds various Dutch colonial relics with well-preserved classical architecture. The Old Town is often dubbed as "Little Netherlands" due to its European-style buildings, featuring grand facades, large windows, and characteristic colonial-era ornaments. Walking through this area, you will be immersed in an old-time atmosphere, as if transported back to the golden age of Semarang as one of the major trading port cities in the archipelago.
                        <p></p>
                        Along the neatly arranged cobblestone streets, you can find various historical buildings, including Blenduk Church, one of the icons of the Old Town, which has stood since 1753 with its unique dome. Not far from the church, there is Srigunting Park, an open green space that is a favorite spot for tourists to relax and take pictures with classic building backgrounds. The Old Town also features several museums and art galleries that showcase the history of Semarang, such as the Old Town Museum and Semarang Gallery, which display art collections and historical artifacts from the colonial era.
                        <p></p>
                        In addition to admiring its architecture and history, a visit to the Old Town is incomplete without tasting Semarang’s signature culinary delights. Many classic cafes and unique restaurants offer a vintage atmosphere with local and European-Indonesian fusion menus. You can enjoy a cup of Semarang’s signature coffee in a retro-style cafe or taste legendary dishes such as lumpia, tahu gimbal, and Semarang’s special lekker. With a rich combination of history, culture, and culinary delights, the Old Town of Semarang is a perfect tourist destination for history enthusiasts and those who simply want to enjoy the charm of an old city.
                    </div>
                </div>
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <div class="tour-package">
                        <h2 class="tour-package_title">Tour Package Details</h2>
                        <div class="row clearfix">
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <ul class="tour-package_list">
                                    <li><span class="icon fas fa-map-marker-alt fa-fw"></span> Old Town, Semarang</li>
                                    <li><span class="icon fas fa-dollar-sign fa-fw"></span> Starting from Rp 200,000</li>
                                    <li><span class="icon fas fa-clock fa-fw"></span> 1 Day</li>
                                    <li><span class="icon fas fa-calendar fa-fw"></span> Available Daily</li>
                                </ul>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="tour-package_quote">Quota <br> 10 / <span>30</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Itinerary -->
            <div class="itinerary-one">
                <div class="title-box">
                    <h4>Nearby Destinations</h4>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme">
                    <div class="itinerary-block_one">
                        <div class="itinerary-block_one-inner">
                            <div class="itinerary-block_one-image">
                                <img src="assets/img/gallery/gerejablenduk.jpg" alt="" />
                                <div class="itinerary-block_one-content">
                                    <h5 class="itinerary-block_one-heading">Visit Blenduk Church</h5>
                                    <div class="itinerary-block_one-text">Explore the oldest church in Semarang, an icon of the Old Town.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="itinerary-block_one">
                        <div class="itinerary-block_one-inner">
                            <div class="itinerary-block_one-image">
                                <img src="assets/img/gallery/tamansrigunting.jpg" alt="" />
                                <div class="itinerary-block_one-content">
                                    <h5 class="itinerary-block_one-heading">Walk in Srigunting Park</h5>
                                    <div class="itinerary-block_one-text">Enjoy the green scenery and take photos with classic buildings.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="itinerary-block_one">
                        <div class="itinerary-block_one-inner">
                            <div class="itinerary-block_one-image">
                                <img src="assets/img/gallery/lunpia.jpg" alt="" />
                                <div class="itinerary-block_one-content">
                                    <h5 class="itinerary-block_one-heading">Culinary Experience</h5>
                                    <div class="itinerary-block_one-text">Taste Semarang’s famous lumpia and coffee at heritage cafes.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Itinerary -->

            <!-- Reviews -->
            <div class="reviews-one">
                <div class="title-box">
                    <h4>REVIEWS</h4>
                </div>
                <div class="testimonial-carousel-two owl-carousel owl-theme">
                    <div class="testimonial-block_one style-two">
                        <div class="testimonial-block_one-inner">
                            <div class="testimonial-block_one-text">An amazing journey! The Old Town is beautiful and full of history. Our guide was very friendly and informative.</div>
                            <div class="testimonial-block_one-author">
                                <img src="images/resource/author-1.png" alt="" />
                                <span>Rina Widiastuti</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Reviews -->
        </div>
    </section>
    <!-- End Tour Detail -->

</div>
@endsection