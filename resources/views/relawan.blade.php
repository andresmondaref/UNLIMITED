<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <title>Home</title>
  <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>
</head>


<body id="top">
    <!-- header
    ================================================== -->
    <header class="s-header">


        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                  <h3>STARK</h3>
                      @if(session('key'))
<h3>Selamat datang {{session('key')}}</h3>
    @endif
  
                
                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a>
                    <li><a  href="/relawanAktivitas">Cari Aktivitas</a></li>
                    <li><a  href="/relawanBencana" title="services">Cari Bencana</a></li>
                    <li><a  href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log Out</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </ul>
    

            </div> <!-- end header-nav__content -->

        </nav> <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->

        <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=top>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">
                <h1>
                STARK
                </h1>
          
                <p>
                Ubah <b>niat baikmu</b> <br>
                Jadi <b>aksi baikmu</b> hari ini.
                </p>
            </div> <!-- end home-content__main -->

        </div> <!-- end home-content -->

        <ul class="home-sidelinks">
            <li><a class="smoothscroll" href="#about">Apa itu?<span>STARK</span></a></li>
            <li><a class="smoothscroll" href="#services">Tentang kami<span>UNLIMIT</span></a></li>
            <li><a class="smoothscroll" href="#works">Dokumentasi<span>Relawan STARK</span></a></li>
            <li><a  class="smoothscroll" href="#contact">Kontak<span>Hubungi kami</span></a></li>
        </ul> <!-- end home-sidelinks -->

        <a href="#about" class="home-scroll smoothscroll">
            <span class="home-scroll__text">Scroll Down</span>
            <span class="home-scroll__icon"></span>
        </a> <!-- end home-scroll -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Apa itu STARK</h3>
                <h1 class="display-1">Sistem Pendataan Relawan Berkompetensi.</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">
                Suatu sistem perangkat lunak yang dapat mempermudah Badan Nasional Penanggulangan Bencana (BNPB) dalam mendata para relawan yang memiliki kompetensi tertentu. Melalui sistem ini BNPB juga dapat memberikan informasi kepada relawan yang sudah terdaftar ketika ada bencana yang terjadi atau ketika mereka ingin melaksanakan kegiatan tentang kebencanaan. Fungsi utama STARK adalah sebagai sarana BNPB dalam mendata relawan berkompetensi ke dalam sebuah sistem. 
                </p>
            </div>
        </div> <!-- end about-desc -->

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id='services' class="s-services light-gray">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Tentang Kami</h3>
                <h1 class="display-1">UNLIMITED. Terdiri dari 3 orang hebat yang hobi dengan coding dan membantu sesama manusia.</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">
                Dipertemukan di mata kuliah Pengembangan Aplikasi Berbasis Web dan Sistem Jaringan Komputer. Anggota kami terdiri dari Rizal Dewangga, Trenaldy Adi Sucipto, dan Andres Mondaref Jon. Mempunyai misi yang sama yaitu menyelesaikan tugas besar ini dengan "Zero Mistake". 
                </p>
            </div>
        </div> <!-- end about-desc -->
        <div class="testimonials-wrap" data-aos="fade-up">

            <div class="row">
                <div class="col-full testimonials-header">
                    <h2 class="h1">Biodata Singkat</h2>
                </div>
            </div>

            <div class="row testimonials">

                <div class="col-full testimonials__slider">

                    <div class="testimonials__slide">
                        <img src="images/avatars/user-01.jpg" alt="Author image" class="testimonials__avatar">
                        <p>Lahir disebuah kota kecil bernama Pati, Jawa Tengah. Tinggal dan besar disana. Sekarang menjadi mahasiswa di sebuah Universitas di kota Yogyakarta, yaitu Universitas Islam Indonesia. </p>
                        <div class="testimonials__author">
                            Rizal Dewangga
                            <span>Front-end</span>
                        </div>
                    </div> <!-- end testimonials__slide -->

                    <div class="testimonials__slide">
                        <img src="images/avatars/user-02.jpg" alt="Author image" class="testimonials__avatar">
                        <p>Lahir di kota bernama Banjarmasin. Tinggal dan besar dikota Kuala Kapuas, Kalimantan tengah. Sekarang menjadi mahasiswa di sebuah Universitas di kota Yogyakarta, yaitu Universitas Islam Indonesia.</p>
                        <div class="testimonials__author">
                            Trenaldy Adi Sucipto
                            <span>Back-end</span>
                        </div>
                    </div> <!-- end testimonials__slide -->

                    <div class="testimonials__slide">
                        <img src="images/avatars/user-05.jpg" alt="Author image" class="testimonials__avatar">
                        <p>Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.  
                        Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.</p>
                        <div class="testimonials__author">
                            Satya Nadella
                            <span>CEO, Microsoft</span>
                        </div>
                    </div> <!-- end testimonials__slide -->
                    
                </div> <!-- end testimonials__slider -->

            </div> <!-- end testimonials -->

        </div>

        

    </section> <!-- end s-services -->


    <!-- works
    ================================================== -->
    <section id='works' class="s-works">
                
        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Dokumentasi</h3>
                <h1 class="display-1">Inilah sedikit foto-foto relawan yang memiliki jiwa kemanusiaan yang tinggi.</h1>
            </div>
        </div> <!-- end section-header -->

    </section> <!-- end s-works -->

    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--light">Hubungi Kami</h3>
                <h1 class="display-1 display-1--light">Silakan jika ada kendala atau pertanyaan tentang website ini, bisa menghubungi kami di:</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row">

            <div class="col-full contact-main" data-aos="fade-up">
                <p>
                <a href="mailto:#0" class="contact-email">17523208@students.uii.ac.id</a>
                <span class="contact-number">0812345678</span>
                </p>
            </div> <!-- end contact-main -->

        </div> <!-- end row -->

        <div class="row">

            <div class="col-five tab-full contact-secondary" data-aos="fade-up">
                <h3 class="subhead subhead--light">Lokasi Kami:</h3>

                <p class="contact-address">
                    Jl. Kaliurang KM 14,5<br>
                    Sleman, Yogyakarta<br>
                    Indonesia
                </p>
            </div> <!-- end contact-secondary -->

        </div> <!-- end row -->

        <div class="row">
            <div class="col-full cl-copyright">
                <span>Copyright &copy; 2018 UNLIMITED</span> 
            </div>
        </div>

        <div class="cl-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
        </div>

    </section> <!-- end s-contact -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">            
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>