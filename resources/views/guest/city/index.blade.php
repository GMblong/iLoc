@extends('layouts.app')

@section('css')

@endsection

@section('content')

<section class="banner-one">

    <div class="banner-one_image-layer" style="filter: grayscale(100%);">
        <video autoplay loop muted playsinline>
            <source src="{{ asset('assets/img/videos/semarang.mp4') }}" type="video/mp4">
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
                    The City of Content
                </div>
                <h1 class="banner-one_heading">
                    <span class="large-letter">S</span>emaran<span class="large-letter">g</span>
                </h1> 
                <div class="banner-one_text">
                    Discover the hidden gems of Semarang, a city rich in culture, history, and modern creativity. 
                    From vibrant street art to historical landmarks, Semarang is a melting pot of tradition and innovation. 
                    Explore, create, and experience the unique charm of this content-rich destination.
                </div>
                <div class="banner-one_x"></div>
            </div>
            
        </div>
    </div>
</section>
<!-- End Banner One -->

<!-- Tour Detail -->
<section class="tour-detail">
    <div class="auto-container">
        <!-- Itinerary One -->
        <div class="itinerary-one">
            <div class="title-box">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <h4>Destinations</h4>
                </div>
            </div>
            @php
            $destinations = [
                ['title' => 'Kota Lama', 'image' => 'assets/img/gallery/kotalama.jpg', 'filter' => 'Heritage Sites'],
                ['title' => 'Lawang Sewu', 'image' => 'assets/img/gallery/lawangsewu.jpg', 'filter' => 'Historical Buildings'],
                ['title' => 'Gereja Blenduk', 'image' => 'assets/img/gallery/gerejablenduk.jpg', 'filter' => 'Palaces & Castles'],
                ['title' => 'Sam Poo Kong', 'image' => 'assets/img/gallery/sampookong.jpg', 'filter' => 'Palaces & Castles'],
            ];
            @endphp  
            <div class="three-item-carousel owl-carousel owl-theme">
                @foreach ($destinations as $destination)
                <!-- Itinerary Block One -->
                <div class="itinerary-block_one">
                    <div class="itinerary-block_one-inner">
                        <div class="itinerary-block_one-image">
                            <img src="{{ $destination['image']}}" alt="" />
                            <div class="itinerary-block_one-content">
                                <h5 class="itinerary-block_one-heading"><a href="destinations">{{ $destination['title']}}</a></h5>
                                {{-- <div class="itinerary-block_one-date">Estimated time: 12-14 hours</div> --}}
                                
                                <div class="card filter-card mt-3" style="background-color: 
                                    @if($destination['filter'] == 'Hotel') #ff5733 
                                    @elseif($destination['filter'] == 'Cafe & Resto') #28a745 
                                    @elseif($destination['filter'] == 'Art') #FF00D4FF 
                                    @elseif($destination['filter'] == 'Heritage Sites') #A72828FF 
                                    @elseif($destination['filter'] == 'Museums') #007bff 
                                    @elseif($destination['filter'] == 'Palaces & Castles') #ffc107 
                                    @elseif($destination['filter'] == 'Historical Buildings') #6f42c1 
                                    @else #cccccc @endif; color: white; padding: 5px 10px; border-radius: 8px; font-weight: bold;">
                                    <a>{{ $destination['filter'] }}</a>
                                </div>
                                <div class="itinerary-block_one-text">Enjoy the cultural old ruins trip experienced tour guides.</div>
                                <a class="itinerary-block_one-arrow flaticon-next-2" href="destinations"></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End Itinerary Column -->

    </div>
</section>
<!-- End Tour Detail -->

<!-- Gallery Five -->
<section class="gallery-five">
    <div class="auto-container">
        <div class="page-header d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap gap-2 gap-md-5">
            <!-- Gallery Five Title Box -->
            <div class="gallery-five_title-box">
                <h4>Discover Semarang</h4>
            </div>

            {{-- <!-- Gallery Search Box -->
            <div class="gallery-search_box">
                <!-- Search Box -->
                <div class="search-box">
                    <form method="post" action="contact.html">
                        <div class="form-group">
                            <input type="search" name="search-field" value="" placeholder="Search..." required>
                            <button type="submit"><span class="icon fa fa-search"></span></button>
                        </div>
                    </form>
                </div>

            </div> --}}
        </div>

        <!-- Filter -->
        <div class="projects-one_filters d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap gap-2 gap-md-5">
            <ul class="filter-tabs">
                <li class="active filter" data-role="button" data-filter="*">All</li>
                <li class="filter" data-role="button" data-filter=".Nature">Nature</li>
                <li class="filter" data-role="button" data-filter=".Culinery">Culinery</li>
                <li class="filter" data-role="button" data-filter=".Culture">Culture</li>
                <li class="filter" data-role="button" data-filter=".City">City</li>
                <li class="filter" data-role="button" data-filter=".Seasonal">Seasonal</li>
                <li class="filter" data-role="button" data-filter=".Historical">Historical</li>
            </ul>
        </div>

        <!-- MixitUp Galery -->
        <div class="mixitup-gallery">
            
            @php
                $tourPackages = [
                    ['title' => 'Eksplorasi Keindahan Tersembunyi Alam!', 'count' => '12', 'image' => 'assets/img/gallery/terjun.jpg', 'filter' => 'Nature'],
                    ['title' => 'Warisan Sejarah & Tradisi yang Masih Hidup!', 'count' => '15', 'image' => 'assets/img/gallery/warak.jpg', 'filter' => 'Culture'],
                    ['title' => 'Landmark, Kuliner, & Spot Foto Kekinian!', 'count' => '10', 'image' => 'assets/img/gallery/kotalama.jpg', 'filter' => 'City'],
                    ['title' => 'Lumpia Semarang: Camilan Legendaris.', 'count' => '20', 'image' => 'assets/img/gallery/lunpia.jpg', 'filter' => 'Culinery'],
                    ['title' => 'Event Spesial & Keindahan yang Wajib Dinikmati!', 'count' => '8', 'image' => 'assets/img/gallery/tugu.jpg', 'filter' => 'Seasonal'],
                    ['title' => 'Destinasi Bersejarah & Kisah Masa Lalu yang Memukau!', 'count' => '6', 'image' => 'assets/img/gallery/historical.jpg', 'filter' => 'Historical'],
                ];
            @endphp

            <div class="filter-list row clearfix">

                @foreach ($tourPackages as $tour)
                <!-- Gallery Block Two -->
                <div class="gallery-block_two style-two mix {{ $tour['filter'] }} col-lg-4 col-md-6 col-sm-12">
                    <div class="gallery-block_two-inner">
                        <div class="gallery-block_two-image">
                            <img src="{{ $tour['image'] }}" alt="" />
                            <div class="overlay-box_two">
                                <div class="overlay-box_two-inner">
                                    <h4><a href="destination-details.html">{{ $tour['title'] }}</a></h4>
                                    <div class="d-flex align-items-center flex-wrap justify-content-center">
                                        <div class="gallery-block_two-location">{{ $tour['count'] }} Packages</div>
                                        <div class="gallery-block_two-price">2,000 - 2,500</div>
                                    </div>
                                    <div class="gallery-block_two-text-two">With long ancient history, Greece has so many beautiful landscapes and historical places to offer.</div>
                                    <div class="gallery-block_two-button">
                                        <a class="theme-btn learn-btn" href="tour">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-box">
                                <div class="overlay-content">
                                    <h3 class="gallery-block_two-title"><a href="destination-details.html">{{ $tour['title'] }}</a></h3>
                                    
                                    <div class="card filter-card" style="background-color: 
                                        @if($tour['filter'] == 'Best Seller') #ff5733 
                                        @elseif($tour['filter'] == 'Nature') #28a745 
                                        @elseif($tour['filter'] == 'Culinery') #FF00D4FF 
                                        @elseif($tour['filter'] == 'Culture') #A72828FF 
                                        @elseif($tour['filter'] == 'City') #007bff 
                                        @elseif($tour['filter'] == 'Seasonal') #ffc107 
                                        @elseif($tour['filter'] == 'Historical') #6f42c1 
                                        @else #cccccc @endif; color: white; padding: 5px 10px; border-radius: 8px; font-weight: bold;">
                                        <a>{{ $tour['filter'] }}</a>
                                    </div>
                                   

                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="gallery-block_two-location">{{ $tour['count'] }} Packages</div>
                                        <div class="gallery-block_two-price">2,000 - 2,500</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <!-- Pagination Outer -->
            <div class="pagination-outer text-center">
                <ul class="paginations">
                    <li><a href="#"><span class="flaticon-left-arrow-2"></span></a></li>
                    <li class="active"><a href="#">01</a></li>
                    <li><a href="#">02</a></li>
                    <li><a href="#">03</a></li>
                    <li>...</li>
                    <li><a href="#">10</a></li>
                    <li><a href="#"><span class="flaticon-next-2"></span></a></li>
                </ul>
            </div>

        </div>
    </div>
</section>
<!-- End Gallery Five -->

@endsection