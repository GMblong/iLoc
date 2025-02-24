@extends('layouts.app')

@section('css')

@endsection

@section('content')

<!-- Banner One / Style Three -->
<section class="banner-one style-three">
    <div class="banner-one_image-layer" style="background-image: url(assets/img/videos/footage.mp4)"></div>
    <div class="banner-one_image-layer">
        <video autoplay loop muted playsinline>
            <source src="{{ asset('assets/img/videos/footage.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    
    <div class="auto-container">
        <!-- Content Column -->
        <div class="banner-one_content">
            <div class="banner-one_content-inner">
                <div class="banner-one_title">
                    The Land of Content
                </div>
                <h1 class="banner-one_heading">Indonesia</h1>
                <div class="banner-one_text">iLoC (Indonesia Land of Content) is a super app that empowers content creators and tourists with exclusive insights, promotes hidden gems, and nurtures talent in the creative industry.</div>
                <!-- Form Box -->
                <div class="banner-one_form-box">
                    <!-- Travel Form -->
                    <div class="travel-form">
                        <form method="post" action="#">
                            <div class="row clearfix">
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <div class="form-group_inner">
                                        <label>Destination</label>
                                        @php
                                            $destinations = [
                                                'Semarang, Jawa Tengah',
                                                'Bandung, Jawa Barat',
                                                'Jakarta, DKI Jakarta',
                                                'Bali, Bali',
                                                'Labuan Bajo, Manggarai Barat',
                                            ]   
                                        @endphp
                                        <select class="select-location" required="">
                                            @foreach ($destinations as $destination)
                                                <option value="{{ $destination }}">{{ $destination }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            
                            </div>
                            <!-- Button Box -->
                            <div class="button-box">
                                <button class="btn-style-two theme-btn">
                                    <span class="btn-wrap">
                                        <span class="text-one">Search</span>
                                        <span class="text-two">Search</span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- End Travel Form -->
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Banner One -->

<!-- Feature One -->
<section class="feature-one style-two">
    <div class="auto-container">
        @php
            $features = [
                'Customer Delight',
                'Authentic Adventure',
                'Creative Community',
                'Unforgettable Experiences',
        ];
            $icons = [
                'flaticon-smile-1',
                'flaticon-mountain',
                'flaticon-flags',
                'flaticon-clock',
        ];
            $texts = [
                'We deliver the best service and experience for our customer.',
                'We deliver the real adventure experience for our dear customer.',
                'We deliver the best service and experience for our customer.',
                'We deliver the best service and experience for our customer.',
        ];
        @endphp
        <div class="row clearfix">
            @for ($i = 0; $i < count($features); $i++)
                <div class="feature-block_one style-two col-lg-3 col-md-6 col-sm-12">
                    <div class="feature-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="feature-block_one-icon {{ $icons[$i] }}"></div>
                        <h5 class="feature-block_one-title">{{ $features[$i] }}</h5>
                        <div class="feature-block_one-text">{{ $texts[$i] }}</div>
                    </div>
                </div>
            @endfor

        </div>
    </div>
</section>
<!-- End Feature One -->

<!-- Gallery One -->
<section class="gallery-one">
    <div class="auto-container">
        <!-- Sec Title Two -->
        <div class="sec-title_two">
            <div class="bid-title">DESTINATION</div>
            <div class="title">popular destinations</div>
        </div>
        <!-- MixitUp Galery -->
        <div class="mixitup-gallery">
            <!-- Filter -->
            <div class="projects-one_filters items-center justify-center align-center">
                <ul class="filter-tabs">
                    <li class="active filter" data-role="button" data-filter="all">all</li>
                    <li class="filter" data-role="button" data-filter=".city">The City of Content</li>
                    <li class="filter" data-role="button" data-filter=".island">The Island of Content</li>
                    <li class="filter" data-role="button" data-filter=".province">The Beutifull Province of Content</li>
                </ul>
            </div>

            @php
                $destinations = [
                    ['city' => 'Semarang', 'packages' => '12', 'image' => 'assets/img/resource/semarang.jpg', 'filter' => ['city']],
                    ['city' => 'Bandung', 'packages' => '10', 'image' => 'assets/img/resource/bandung.jpg', 'filter' => ['city']],
                    ['city' => 'Labuan Bajo', 'packages' => '8', 'image' => 'assets/img/resource/labuan.jpg', 'filter' => ['island']],
                    ['city' => 'Jakarta', 'packages' => '6', 'image' => 'assets/img/resource/jakarta.jpg', 'filter' => ['city']],
                    ['city' => 'Yogyakarta', 'packages' => '5', 'image' => 'assets/img/resource/yogya.jpg', 'filter' => ['city','province']],
                    ['city' => 'Bali', 'packages' => '4', 'image' => 'assets/img/resource/bali.jpg', 'filter' => ['city','province']],
                ];
            @endphp
            <div class="filter-list row clearfix">

                @foreach ($destinations as $destination)
                    <div class="location-block_one mix all {{ implode(' ', $destination['filter']) }} col-lg-3 col-md-6 col-sm-6">
                        <div class="location-block_one-inner">
                            <div class="location-block_one-image">
                                <a href="city"><img src="{{ $destination['image'] }}" alt="" /></a>
                            </div>
                            <div class="location-block_one-content">
                                <h5 class="location-block_one-heading"><a href="hotel-details.html">{{ $destination['city'] }}</a></h5>
                                <div class="location-block_one-location">{{ $destination['packages'] }} Packages</div>
                                <a class="location-block_one-arrow flaticon-next-2" href="city"></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Button Box -->
            <div class="button-box text-center">
                <a class="btn-style-three theme-btn" href="#">
                    <div class="btn-wrap">
                        <span class="text-one">Load More Destinations</span>
                        <span class="text-two">Load More Destinations</span>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>
<!-- End Gallery One -->

<!-- Faq Two -->
<section class="faq-two style-two">
    <div class="auto-container">
        <div class="faq-two_inner-container">
            <div class="faq-two_pattern" style="background-image: url(images/icons/pattern-2.png)"></div>
            <div class="row clearfix">

                <!-- Title Column -->
                <div class="faq-two_title-column col-lg-4 col-md-12 col-sm-12">
                    <div class="faq-two_title-inner">
                        <div class="sec-title_three-title">faq</div>
                        <h2 class="sec-title_three-heading">Frequently Asked Questions</h2>
                        <div class="faq-two_text">What our clients usually asked about our services and tours.</div>
                    </div>
                </div>

                <!-- Accordian Column -->
                <div class="faq-two_accordian-column col-lg-8 col-md-12 col-sm-12">
                    <!-- Accordion Box -->

                    @php
                        $faqs = [
                            ['question' => 'What type of travel packages does Vacasky offer?', 'answer' => 'Vacasky offers a wide range of travel packages to destinations around the world, including customized tours, group tours, luxury travel, adventure travel, and more. Our travel specialists work with you to create an itinerary that meets your specific needs and preferences.'],
                            ['question' => 'How do I book a trip with Vacasky?', 'answer' => 'Vacasky offers a wide range of travel packages to destinations around the world, including customized tours, group tours, luxury travel, adventure travel, and more. Our travel specialists work with you to create an itinerary that meets your specific needs and preferences.'],
                        ]
                    @endphp
                    <ul class="accordion-box">
                        
                        @foreach ($faqs as $faq)
                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>{{ $faq['question'] }}</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <p>{{ $faq['answer'] }}</p>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- End Faq Two -->

<!-- Achivements One -->
<section class="achivements-one">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2 class="sec-title_heading">ACHIEVEMENTS</h2>
            <div class="sec-title-text">We are recognized for exceptional travel services.</div>
        </div>
        @php
            $achivements = [
                ['icon' => 'flaticon-award', 'title' => 'Travel + Leisure', 'text' => 'World\'s Best Tour Operator 2022 United States of America'],
                ['icon' => 'flaticon-trophy', 'title' => 'World Travel Award', 'text' => 'Best Travel Agency 2023 United Kingdom'],
                ['icon' => 'flaticon-badge', 'title' => 'TripAdvisor', 'text' => 'Certificate of Excellence 2021 Australia'],
            ];
        @endphp
        <div class="achivement-carousel owl-carousel owl-theme">
            
            @foreach ($achivements as $achivement)
                <!-- Achivement Block One -->
                <div class="achivement-block_one">
                    <div class="achivement-block_one-inner">
                        <div class="achivement-block_one-icon {{ $achivement['icon'] }}"></div>
                        <h3 class="achivement-block_one-title">{{ $achivement['title'] }}</h3>
                        <div class="achivement-block_one-text">{{ $achivement['text'] }}</div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End Achivements One -->

<!-- News Three -->
<section class="news-three">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title_three">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div class="title-content">
                    <div class="sec-title_three-title">blog</div>
                    <h1 class="sec-title_three-heading">TRAVEL BLOG</h1>
                </div>
                <a class="news-one_more" href="blog.html">See More Articles</a>
            </div>
        </div>
        @php
            $blogs = [
                ['title' => '10 Must-See Attractions in Greece', 'images' => 'assets/img/resource/news-7.jpg', 'author' => 'Andi Arif'],
                ['title' => 'Our Beginner’s Guide to Hiking in Alps', 'images' => 'assets/img/resource/news-6.jpg', 'author' => 'Andi Arif'],

            ]
        @endphp
        <div class="row clearfix">

        @foreach ($blogs as $blog)
            <!-- News Block Two -->
            <div class="news-block_three col-lg-6 col-md-12 col-sm-12">
                <div class="news-block_three-inner">
                    <div class="news-block_three-image">
                        <a href="blog-detail.html"><img src="{{ $blog['images'] }}" alt="" /></a>
                        <div class="news-block_three-overlay">
                            <div class="news-block_three-title">travel</div>
                            <h3 class="news-block_three-heading"><a href="blog-detail.html">{{ $blog['title'] }}</a></h3>
                            <div class="news-block_three-author_outer">
                                <div class="news-block_three-author">
                                    <div class="news-block_three-author_image">
                                        <img src="{{ $blog['images'] }}" alt="" />
                                    </div>
                                    {{ $blog['author'] }}
                                    <span>August 15, 2025</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End News Three -->

@endsection