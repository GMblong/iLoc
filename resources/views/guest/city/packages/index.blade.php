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
        <h1 class="page-banner_title">Eksplorasi Keindahan Alam Tersembunyi!</h1>
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

<!-- Tour Detail Two -->
<section class="tour-detail-two">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <h3>Overview</h3>
                <p>Jelajahi destinasi wisata terbaik di daerah pegunungan yang menawarkan pengalaman unik. Nikmati udara sejuk, pemandangan indah, serta aktivitas menarik seperti trekking, wisata sejarah, dan eksplorasi alam. Setiap lokasi dalam perjalanan ini dirancang untuk memberikan pengalaman berkesan bagi setiap wisatawan.</p>

                <div class="info_outer">
                    <div class="row clearfix">
                        <!-- Column -->
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <ul class="tour-detail-two_list">
                                <li><span class="icon fas fa-map-marker-alt fa-fw"></span>Semarang, Jawa Tengah</li>
                                <li><span class="icon fas fa-clock fa-fw"></span>Durasi: 3 Hari 2 Malam</li>
                            </ul>
                        </div>
                        <!-- Column -->
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <ul class="tour-detail-two_list">
                                <li><span class="icon fas fa-users fa-fw"></span>Maksimal 50 peserta</li>
                                <li><span class="icon fas fa-dollar-sign fa-fw"></span>Mulai dari Rp 2.500.000</li>
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
                                <li>Akomodasi di hotel/villa selama perjalanan</li>
                                <li>Transportasi antar lokasi wisata</li>
                                <li>Makan sesuai jadwal perjalanan</li>
                                <li>Tiket masuk ke tempat wisata</li>
                                <li>Pemandu wisata berpengalaman</li>
                            </ul>
                        </div>
                        <!-- Column -->
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <h4>NOT INCLUDED</h4>
                            <ul class="tour-detail-two_options cross">
                                <li>Pengeluaran pribadi</li>
                                <li>Asuransi perjalanan</li>
                                <li>Oleh-oleh dan belanja pribadi</li>
                                <li>Tips untuk pemandu wisata dan sopir</li>
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
                            'overview' => ['Menikmati udara sejuk di ketinggian', 'Mengunjungi candi Hindu bersejarah', 'Pemandian air panas alami'],
                            'schedule' => ['Perjalanan ke lokasi', 'Jelajah kompleks candi', 'Istirahat & foto-foto'],
                            'meals' => ['Sarapan di hotel', 'Makan siang khas Jawa', 'Camilan tradisional'],
                            'accommodation' => ['Hotel dekat Bandungan', 'Villa dengan pemandangan gunung']
                        ],
                        [
                            'name' => 'Agrowisata Kopeng Gunungsari',
                            'images' => 'assets/img/gallery/agrowisata.jpg',
                            'overview' => ['Petik buah segar langsung dari kebun', 'Menikmati keindahan pegunungan', 'Berinteraksi dengan petani lokal'],
                            'schedule' => ['Pagi: perjalanan ke lokasi', 'Siang: eksplorasi perkebunan', 'Sore: waktu bebas dan belanja oleh-oleh'],
                            'meals' => ['Sarapan khas pedesaan', 'Makan siang dengan sayur segar', 'Kopi lokal & camilan'],
                            'accommodation' => ['Homestay di area perkebunan', 'Resort dengan suasana alam']
                        ],
                        [
                            'name' => 'Umbul Sidomukti',
                            'images' => 'assets/img/gallery/umbul.jpeg',
                            'overview' => ['Kolam renang alami dengan pemandangan indah', 'Trekking ringan di perbukitan', 'Wahana outbound & flying fox'],
                            'schedule' => ['Pagi: perjalanan ke lokasi', 'Siang: berenang & menikmati panorama', 'Sore: aktivitas outbound & kembali'],
                            'meals' => ['Sarapan hotel', 'Makan siang di restoran alam', 'Jajanan khas Semarang'],
                            'accommodation' => ['Resort dengan view pegunungan', 'Camping area untuk pengalaman outdoor']
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
                                    <!-- Accordian Tabs -->
                                    <div class="accordian-tabs tabs-box">
                                    
                                        <!-- Tab Btns -->
                                        <ul class="tab-btns tab-buttons clearfix">
                                            <li data-tab="#overview-{{ $index }}" class="tab-btn active-btn">Overview</li>
                                            <li data-tab="#schedule-{{ $index }}" class="tab-btn">Schedule</li>
                                            <li data-tab="#meals-{{ $index }}" class="tab-btn">Meals</li>
                                            <li data-tab="#accommodation-{{ $index }}" class="tab-btn">Accommodation</li>
                                        </ul>
                                        
                                        <!-- Tabs Container -->
                                        <div class="tabs-content">
                                            
                                            <!-- Overview -->
                                            <div class="tab active-tab" id="overview-{{ $index }}">
                                                <ul class="accordian-list">
                                                    @foreach ($location['overview'] as $item)
                                                        <li>{{ $item }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                            <!-- Schedule -->
                                            <div class="tab" id="schedule-{{ $index }}">
                                                <ul class="accordian-list">
                                                    @foreach ($location['schedule'] as $item)
                                                        <li>{{ $item }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                            <!-- Meals -->
                                            <div class="tab" id="meals-{{ $index }}">
                                                <ul class="accordian-list">
                                                    @foreach ($location['meals'] as $item)
                                                        <li>{{ $item }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                            <!-- Accommodation -->
                                            <div class="tab" id="accommodation-{{ $index }}">
                                                <ul class="accordian-list">
                                                    @foreach ($location['accommodation'] as $item)
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
                                'image' => 'images/resource/author-1.jpg'
                            ],
                            [
                                'name' => 'Budi Santoso',
                                'date' => 'Februari 2, 2025',
                                'text' => 'Agrowisata Kopeng Gunungsari adalah tempat yang luar biasa! Kami bisa langsung memetik buah segar dan mencicipi hasil pertanian lokal. Panduan wisata sangat ramah dan informatif. Sungguh pengalaman yang menyenangkan bagi keluarga!',
                                'image' => 'images/resource/author-2.jpg'
                            ],
                            [
                                'name' => 'Rina Wijaya',
                                'date' => 'Maret 5, 2025',
                                'text' => 'Umbul Sidomukti benar-benar tempat yang sempurna untuk bersantai! Kolam renangnya yang berada di atas bukit memberikan pemandangan yang luar biasa. Ditambah lagi dengan flying fox yang memacu adrenalin. Seru banget!',
                                'image' => 'images/resource/author-3.jpg'
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
    </div>
</section>
<!-- End Tour Detail Two -->

@endsection