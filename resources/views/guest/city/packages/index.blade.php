@extends('layouts.app')

@section('css')

@endsection

@section('content')

<!-- Page Banner -->
<section class="page-banner">
    <div class="banner-one_image-layer" style="background-image: url(assets/img/gallery/gedungsongo.jpg); filter: grayscale(100%);"></div>
    <div class="background-one_overlay"></div>
    <div class="banner-one_overlay"></div>
    <div class="auto-container">
        <ul class="page-breadbrumbs">
            <li>The City of Content</li>
            <li>Semarang</li>
        </ul>
        <h1 class="page-banner_title">Explore the Hidden Beauty of Nature!</h1>
    </div>
</section>
<!-- End Page Banner -->

<!-- Gallery Seven -->
<section class="gallery-seven">
    <div class="outer-container">
        @php
            $images = [
                'assets/img/gallery/umbul.jpeg',
                'assets/img/gallery/agrowisata.jpg',
                'assets/img/gallery/gedungsongo.jpg'
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

<div class="area">
    <!-- Tour Detail Two -->
    <section class="tour-detail-two">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <h3>Overview</h3>
                    <p>Explore the best tourist destinations in the mountainous region that offer a unique experience. Enjoy the cool air, beautiful scenery, and exciting activities such as trekking, historical tours, and nature exploration. Each location on this trip is designed to provide an unforgettable experience for every traveler.</p>

                    <div class="info_outer">
                        <div class="row clearfix">
                            <!-- Column -->
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <ul class="tour-detail-two_list">
                                    <li><span class="icon fas fa-map-marker-alt fa-fw"></span>Semarang, Central Java</li>
                                    <li><span class="icon fas fa-clock fa-fw"></span>Duration: 3 Days 2 Nights</li>
                                </ul>
                            </div>
                            <!-- Column -->
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <ul class="tour-detail-two_list">
                                    <li><span class="icon fas fa-users fa-fw"></span>Maximum 50 participants</li>
                                    <li><span class="icon fas fa-dollar-sign fa-fw"></span>Starting from Rp 2,500,000</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="options_outer">
                        <div class="row clearfix">
                            <!-- Column -->
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <h4>INCLUDED</h4>
                                <ul class="tour-detail-two_options">
                                    <li>Accommodation in hotel/villa during the trip</li>
                                    <li>Transportation between tourist locations</li>
                                    <li>Meals according to the itinerary</li>
                                    <li>Entrance tickets to attractions</li>
                                    <li>Experienced tour guide</li>
                                </ul>
                            </div>
                            <!-- Column -->
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <h4>NOT INCLUDED</h4>
                                <ul class="tour-detail-two_options cross">
                                    <li>Personal expenses</li>
                                    <li>Travel insurance</li>
                                    <li>Souvenirs and personal shopping</li>
                                    <li>Tips for tour guides and drivers</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <h4>ITINERARY</h4>

                    <!-- Accordion Box / Style Two -->
                    @php
                        $locations = [
                            [
                                'name' => 'Candi Gedong Songo',
                                'images' => 'assets/img/gallery/gedungsongo.jpg',
                                'overview' => ['Enjoy the cool air at high altitudes', 'Visit historical Hindu temples', 'Natural hot spring bath'],
                                'schedule' => ['Travel to location', 'Explore the temple complex', 'Rest & take photos'],
                                'meals' => ['Breakfast at the hotel', 'Traditional Javanese lunch', 'Traditional snacks'],
                                'accommodation' => ['Hotel near Bandungan', 'Villa with mountain views']
                            ],
                            [
                                'name' => 'Agro Tourism Kopeng Gunungsari',
                                'images' => 'assets/img/gallery/agrowisata.jpg',
                                'overview' => ['Pick fresh fruits directly from the farm', 'Enjoy the beauty of the mountains', 'Interact with local farmers'],
                                'schedule' => ['Morning: travel to location', 'Afternoon: explore the plantations', 'Evening: free time and souvenir shopping'],
                                'meals' => ['Traditional village breakfast', 'Lunch with fresh vegetables', 'Local coffee & snacks'],
                                'accommodation' => ['Homestay in the plantation area', 'Resort with natural ambiance']
                            ],
                            [
                                'name' => 'Umbul Sidomukti',
                                'images' => 'assets/img/gallery/umbul.jpeg',
                                'overview' => ['Natural swimming pool with stunning views', 'Light trekking in the hills', 'Outbound activities & flying fox'],
                                'schedule' => ['Morning: travel to location', 'Afternoon: swimming & enjoying the scenery', 'Evening: outbound activities & return'],
                                'meals' => ['Hotel breakfast', 'Lunch at a nature restaurant', 'Semarang’s traditional snacks'],
                                'accommodation' => ['Resort with mountain views', 'Camping area for outdoor experience']
                            ]
                        ];
                    @endphp

                    <ul class="accordion-box style-two">
                        @foreach ($locations as $index => $location)
                        <!-- Block -->
                        <li class="accordion block @if($index == 0) active-block @endif">
                            <div class="acc-btn">
                                <div class="icon-outer">
                                    <span class="icon fa-solid fa-angle-down fa-fw"></span>
                                </div>
                                <span class="accordion_number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span> {{ $location['name'] }}
                            </div>
                            <div class="acc-content @if($index == 0) current @endif">
                                <div class="content">
                                    <div class="image">
                                        <img src="{{ $location['images'] }}" alt="{{ $location['name'] }}" />
                                    </div>

                                    <!-- Accordian Info Tabs -->
                                    <div class="accordian-info-tabs">
                                        <div class="accordian-tabs tabs-box">
                                            <ul class="tab-btns tab-buttons clearfix">
                                                <li data-tab="#overview-{{ $index }}" class="tab-btn active-btn">Overview</li>
                                                <li data-tab="#schedule-{{ $index }}" class="tab-btn">Schedule</li>
                                                <li data-tab="#meals-{{ $index }}" class="tab-btn">Meals</li>
                                                <li data-tab="#accommodation-{{ $index }}" class="tab-btn">Accommodation</li>
                                            </ul>
                                            <div class="tabs-content">
                                                <div class="tab active-tab" id="overview-{{ $index }}">
                                                    <ul class="accordian-list">
                                                        @foreach ($location['overview'] as $item)
                                                            <li>{{ $item }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                    <!-- Comments Area -->
                    <div class="comments-area">
                        <div class="comments-area_pattern" style="background-image: url(images/icons/pattern-1.png)"></div>
                        <div class="comments-area_pattern-two" style="background-image: url(images/icons/pattern-1.png)"></div>
                        <div class="group-title">
                            <h4>REVIEWS</h4>
                        </div>
                        
                        @php
                            $reviews = [
                                [
                                    'name' => 'Amanda Putri',
                                    'date' => 'Januari 15, 2025',
                                    'text' => 'Perjalanan yang luar biasa! Mengunjungi Candi Gedong Songo dengan pemandangan pegunungan yang indah adalah pengalaman yang tak terlupakan. Udara sejuk dan suasana tenang membuat perjalanan ini sangat menyenangkan. Sangat direkomendasikan!',
                                    'image' => 'assets/img/resource/bali.jpg'
                                ],
                                [
                                    'name' => 'Budi Santoso',
                                    'date' => 'Februari 2, 2025',
                                    'text' => 'Agrowisata Kopeng Gunungsari adalah tempat yang luar biasa! Kami bisa langsung memetik buah segar dan mencicipi hasil pertanian lokal. Panduan wisata sangat ramah dan informatif. Sungguh pengalaman yang menyenangkan bagi keluarga!',
                                    'image' => 'assets/img/resource/semarang.jpg'
                                ],
                                [
                                    'name' => 'Rina Wijaya',
                                    'date' => 'Maret 5, 2025',
                                    'text' => 'Umbul Sidomukti benar-benar tempat yang sempurna untuk bersantai! Kolam renangnya yang berada di atas bukit memberikan pemandangan yang luar biasa. Ditambah lagi dengan flying fox yang memacu adrenalin. Seru banget!',
                                    'image' => 'assets/img/resource/bandung.jpg'
                                ]
                            ];
                        @endphp

                        <div class="comment-box">
                            @foreach ($reviews as $review)
                                <!-- Comment -->
                                <div class="comment">
                                    <div class="text">“{{ $review['text'] }}”</div>
                                    <div class="news-block_four-author">
                                        <div class="news-block_four-author_image">
                                            <img src="{{ $review['image'] }}" alt="{{ $review['name'] }}" />
                                        </div>
                                        {{ $review['name'] }}
                                        <span>{{ $review['date'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>


                </div>
                
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="tour_plans position-sticky">
                        <div class="title-box">
                            <h4>JOIN THIS TOUR</h4>
                            <div class="text">No extra hassle, just fill the form and let us contact you for more informations.</div>
                        </div>

                        <!-- Booking Form -->
                        <div class="booking-form">
                            <form method="post" action="contact.html">
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label>first name*</label>
                                    <select name="currency" class="custom-select-box">
                                        <option>Mrs</option>
                                        <option>Mr</option>
                                    </select>
                                </div>
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label>Starting Date*</label>
                                    <input class="datepicker" type="text" name="text" placeholder="March 23, 2023" required="">
                                </div>
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label>Guests*</label>
                                    <select name="currency" class="custom-select-box">
                                        <option>02 Adults, 01 Kids</option>
                                        <option>03 Adults, 03 Kids</option>
                                        <option>04 Adults, 05 Kids</option>
                                        <option>05 Adults, 07 Kids</option>
                                        <option>06 Adults, 09 Kids</option>
                                        <option>07 Adults, 10 Kids</option>
                                    </select>
                                </div>
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label>Extra Facilities</label>
                                    <select name="currency" class="custom-select-box">
                                        <option>Travel (Rp. 150.000)</option>
                                        <option>Bus (Rp 75.000)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="total-payment">
                                            Total Payment
                                            <span>Rp. 700.000</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mt-4">
                                        <button class="btn-style-two theme-btn">
                                            <span class="btn-wrap">
                                                <span class="text-one">Book This Tour</span>
                                                <span class="text-two">Book This Tour</span>
                                            </span>
                                        </button>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Tour Detail Two -->

</div>
@endsection