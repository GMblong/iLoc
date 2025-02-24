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
                    Nikmati perjalanan sejarah ke Kota Lama Semarang, kawasan bersejarah yang menyimpan berbagai peninggalan kolonial Belanda dengan arsitektur klasik yang masih terjaga keasliannya. Kota Lama sering dijuluki sebagai "Little Netherlands" karena bangunan-bangunan bersejarahnya yang bergaya Eropa, dengan detail fasad yang megah, jendela besar, serta ornamen khas zaman kolonial. Saat melangkah di kawasan ini, Anda akan disuguhkan suasana tempo dulu yang begitu kental, seolah membawa Anda kembali ke masa kejayaan perdagangan Semarang sebagai salah satu kota pelabuhan utama di Nusantara.
                    <p></p>
                    Di sepanjang jalan berbatu yang tertata rapi, Anda dapat menemukan berbagai bangunan bersejarah, termasuk Gereja Blenduk, salah satu ikon Kota Lama yang telah berdiri sejak tahun 1753 dengan kubah khasnya yang unik. Tak jauh dari gereja ini, terdapat Taman Srigunting, sebuah ruang terbuka hijau yang menjadi tempat favorit wisatawan untuk bersantai dan berfoto dengan latar bangunan klasik. Kota Lama juga memiliki berbagai museum dan galeri seni yang menyajikan kisah perjalanan sejarah Semarang, seperti Museum Kota Lama dan Galeri Semarang, yang menampilkan koleksi seni serta benda-benda bersejarah dari masa kolonial.
                    <p></p>
                    Selain menikmati keindahan arsitektur dan sejarahnya, kunjungan ke Kota Lama juga tak lengkap tanpa mencicipi kuliner khas Semarang. Banyak kafe klasik dan restoran unik yang menawarkan suasana vintage dengan menu khas lokal maupun perpaduan rasa Eropa-Indonesia. Anda bisa menikmati secangkir kopi khas Semarang di kafe bergaya retro atau mencicipi makanan legendaris seperti lumpia, tahu gimbal, dan lekker khas Semarang. Dengan kombinasi sejarah, budaya, dan kuliner yang kaya, Kota Lama Semarang menjadi destinasi wisata yang sempurna bagi pecinta sejarah maupun mereka yang ingin sekadar menikmati atmosfer kota tua yang menawan.
                </div>
            </div>
            <div class="column col-lg-6 col-md-12 col-sm-12">
                <div class="tour-package">
                    <h2 class="tour-package_title">Detail Paket Wisata</h2>
                    <div class="row clearfix">
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <ul class="tour-package_list">
                                <li><span class="icon fas fa-map-marker-alt fa-fw"></span> Kota Lama, Semarang</li>
                                <li><span class="icon fas fa-dollar-sign fa-fw"></span> Mulai dari Rp 200.000</li>
                                <li><span class="icon fas fa-clock fa-fw"></span> 1 Hari</li>
                                <li><span class="icon fas fa-calendar fa-fw"></span> Setiap Hari</li>
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
                <h4>Nearby Destination</h4>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme">
                <div class="itinerary-block_one">
                    <div class="itinerary-block_one-inner">
                        <div class="itinerary-block_one-image">
                            <img src="assets/img/gallery/gerejablenduk.jpg" alt="" />
                            <div class="itinerary-block_one-content">
                                <h5 class="itinerary-block_one-heading">Mengunjungi Gereja Blenduk</h5>
                                <div class="itinerary-block_one-text">Jelajahi gereja tertua di Semarang yang menjadi ikon Kota Lama.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="itinerary-block_one">
                    <div class="itinerary-block_one-inner">
                        <div class="itinerary-block_one-image">
                            <img src="assets/img/gallery/tamansrigunting.jpg" alt="" />
                            <div class="itinerary-block_one-content">
                                <h5 class="itinerary-block_one-heading">Berjalan di Taman Srigunting</h5>
                                <div class="itinerary-block_one-text">Menikmati suasana hijau dan berfoto dengan latar bangunan klasik.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="itinerary-block_one">
                    <div class="itinerary-block_one-inner">
                        <div class="itinerary-block_one-image">
                            <img src="assets/img/gallery/lunpia.jpg" alt="" />
                            <div class="itinerary-block_one-content">
                                <h5 class="itinerary-block_one-heading">Wisata Kuliner</h5>
                                <div class="itinerary-block_one-text">Mencicipi lumpia khas Semarang dan kopi di kafe heritage.</div>
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
                <h4>ULASAN</h4>
            </div>
            <div class="testimonial-carousel-two owl-carousel owl-theme">
                <div class="testimonial-block_one style-two">
                    <div class="testimonial-block_one-inner">
                        <div class="testimonial-block_one-text">Perjalanan yang luar biasa! Kota Lama sangat indah dan penuh sejarah. Guide kami sangat ramah dan informatif.</div>
                        <div class="testimonial-block_one-author">
                            <img src="images/resource/author-1.png" alt="" />
                            <span>Rina Widiastuti</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block_one style-two">
                    <div class="testimonial-block_one-inner">
                        <div class="testimonial-block_one-text">Tempat ini benar-benar membawa kita ke masa lalu. Sangat direkomendasikan bagi pecinta sejarah!</div>
                        <div class="testimonial-block_one-author">
                            <img src="images/resource/author-2.png" alt="" />
                            <span>Fajar Prasetyo</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Reviews -->
    </div>
</section>
<!-- End Tour Detail -->

@endsection
