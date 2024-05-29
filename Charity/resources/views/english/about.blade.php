@extends('english.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
    <!--================ Start top-section Area =================-->
    <style type="text/css">
        .banner-area{background:url('{{ asset(Setting()->HomePicture) }}') no-repeat;background-size:cover}
    </style>
    <!-- ===============================  About  ======================================== -->
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-lg-end align-items-center banner-content">
                <div class="col-lg-5">
                    <h1 class="text-white">About Us</h1>
                    <!-- ===============================  About  ======================================== -->
                    <p>InsanBerbagi adalah komunitas yang peduli dan berkomitmen untuk melakukan charity serta berbagi kebaikan kepada mereka yang membutuhkan. Bergabunglah dengan kami untuk memberikan dampak positif bagi sesama dan mewujudkan perubahan yang berarti dalam masyarakat.</p>
                    <!-- ===============================  About  ======================================== -->
                </div>
            </div>
        </div>
    </section>
    <!--================ End top-section Area =================-->
    <!--================ Start About Area =================-->
    <section class="about_area lite_bg">
        <style type="text/css">
            .about_area .about_bg{
                background:linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset(Setting()->AboutPicture) }}');background-repeat:no-repeat;background-size:cover;
                background-size:cover;
                position:absolute;right:0;top:0;height:100%;width:50%;z-index:-1}
        </style>
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-5">
                    <div class="about_details lite_bg">
                        <!-- ===============================  About  ======================================== -->
                        <h2>InsanBerbagi</h2>
                        <!-- ===============================  About  ======================================== -->
                        <p class="mb-0">
                        Dibuat oleh Dimas dan Zenith, web charity "Insan Berbagi" adalah sebuah platform yang mempersembahkan cahaya harapan bagi mereka yang membutuhkan. Dengan visi yang kuat dan hati yang penuh empati, mereka membangun sebuah ruang di mana kebaikan bisa disebarkan tanpa batas. Setiap klik, setiap sumbangan, setiap tindakan kecil memiliki dampak besar dalam membantu orang-orang yang kurang beruntung. Di sini, tiap kisah memiliki arti, dan setiap kontribusi adalah pilar yang kokoh bagi fondasi kebaikan. Melalui "Insan Berbagi", Dimas dan Zenith mewujudkan impian untuk menyentuh banyak hati, membawa sinar kehangatan, dan menciptakan perubahan positif yang bertahan dalam kehidupan mereka yang membutuhkan.
                        </p>
                        <!-- ===============================  About  ======================================== -->
                        <a href="{{ url('about') }}" class="primary-btn mt-5">
                            Read more
                            <i class="ti-angle-right ml-1"></i>
                        </a>
                        <!-- ===============================  About  ======================================== -->
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-3 col-md-6 offset-md-1 d-lg-block d-none">
                    <div class="about_right">
                        <div class="video-inner justify-content-center align-items-center d-flex">
                            <!-- ===============================  About  ======================================== -->
                            <a id="play-home-video" class="video-play-button" href="{!! Setting()->video !!}">
                                <span></span>
                            </a>
                            <!-- ===============================  About  ======================================== -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="about_bg d-lg-block d-none"></div>
        </div>
    </section>
    <!--================ End About Area =================-->
    <!--================ Start callto Area =================-->
    <section class="callto-area section-gap relative" data-parallax="scroll" data-image-src="{{ asset(Setting()->HomePicture) }}">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="top_text">Kami Membutuhkan Anda!</p>
                    <div class="call-wrap mx-auto">
                        <h1>Insan Berbagi</h1>
                        <p>"Kebaikan tidak pernah sia-sia. Setiap donasi, setiap bantuan, membawa sinar harapan bagi mereka yang membutuhkan. Mari kita jadikan kebaikan sebagai perhiasan hidup kita, dan berbagilah dengan sukacita."</p>
                            <!-- ===============================  About  ======================================== -->
                        <a href="{{ route('register') }}" class="primary-btn mt-5">
                            Sign up
                            <i class="ti-angle-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End callto Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection