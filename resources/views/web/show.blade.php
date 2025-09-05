@extends('layouts.web')
@section('content')


<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>News HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/demo/img/favicon.ico')}}">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{asset('assets/demo/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/demo/css/owl.carousel.min.css')}}">

            <link rel="stylesheet" href="{{asset('assets/demo/css/ticker-style.css')}}">

            <link rel="stylesheet" href="{{asset('assets/demo/css/flaticon.css')}}">

            <link rel="stylesheet" href="{{asset('assets/demo/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{asset('assets/demo/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/demo/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('assets/demo/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/demo/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{asset('assets/demo/css/slick.css')}}">
            <link rel="stylesheet" href="{{asset('assets/demo/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{asset('assets/demo/css/style.css')}}">
            <link rel="stylesheet" href="{{asset('assets/demo/css/responsive.css')}}">
   </head>

   <body>
       
    

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                   <div class="container">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <li><i class="far fa-calendar-alt"></i>{{ $berita->created_at->format('d M Y') }} | <p>Penulis: {{ optional($berita->user)->name ?? 'Tidak diketahui' }}</p></li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
                <div class="header-mid d-none d-md-block">
                   <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="assets/img/hero/header_card.jpg" alt="">
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
               <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                    <div class="sticky-logo">
                                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                    </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <main>
        <!-- About US Start -->
        <div class="about-area">
            <div class="container">
                   
                   <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Tittle -->
                            <div class="about-right mb-90">
                                <div class="about-img">
                                     <img src="{{ asset('storage/' . $berita->gambar) }}" class="img-fluid mb-4" alt="{{ $berita->judul }}">
                                </div>
                                <div class="section-tittle mb-30 pt-30">
                                    <h2 class="mb-2">{{ $berita->judul }}</h2>
                                <div class="news-views"><i class="far fa-eye"></i> {{ $berita->views}}x dilihat</div>
                                </div>
                                <div class="about-prea">
                                   <p class="about-pera1 mb-25">
                                    {!! $berita->isi !!}
                                </div> 
                            </div>

                           <h3>Komentar</h3>

                            <form action="{{ route('komentar.store', $berita->id) }}" method="POST">
                                @csrf
                                <textarea name="isi" class="form-control mb-2" rows="3" placeholder="Tulis komentar..."></textarea>
                                <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                            </form>

                            @foreach($berita->komentars as $komen)
                                <div class="mt-3 p-2 border rounded mb-2">
                                    <strong>{{ $komen->user->name ?? 'Anonim' }}</strong>
                                    <p class="mb-0">{{ $komen->isi }}</p>
                                    <small class="text-muted">{{ $komen->created_at->diffForHumans() }}</small>
                                </div>
                            @endforeach

                        </div>  
                            <div class="news-poster d-none d-lg-block">
                                <img src="assets/img/news/news_card.jpg" alt="">
                            </div>
                        </div>
                   </div>
            </div>
        </div>
        <!-- About US End -->
    </main>

   <footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding fix">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="single-footer-caption">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida sodales  Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida sodales  Suscipit mauris pede for sectetuer.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <p>Heaven fruitful doesn't over les idays appear creeping</p>
                                <!-- Form -->
                                <div class="footer-form" >
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                        method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                            class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit"
                                            class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.png" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50 mt-60">
                            <div class="footer-tittle">
                                <h4>Instagram Feed</h4>
                            </div>
                            <div class="instagram-gellay">
                                <ul class="insta-feed">
                                    <li><a href="#"><img src="assets/img/post/instra1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra6.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>                             
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{asset('./assets/demo/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{asset('./assets/demo/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('./assets/demo/js/popper.min.js')}}"></script>
        <script src="{{asset('./assets/demo/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{asset('./assets/demo/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('./assets/demo/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('./assets/demo/js/slick.min.js')}}"></script>
        <!-- Date Picker -->
        <script src="{{asset('./assets/demo/js/gijgo.min.js')}}"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{asset('./assets/demo/js/wow.min.js')}}"></script>
		<script src="{{asset('./assets/demo/js/animated.headline.js')}}"></script>
        <script src="{{asset('./assets/demo/js/jquery.magnific-popup.js')}}"></script>

        <!-- Breaking New Pluging -->
        <script src="{{asset('./assets/demo/js/jquery.ticker.js')}}"></script>
        <script src="{{asset('./assets/demo/js/site.js')}}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{asset('./assets/demo/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('./assets/demo/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('./assets/demo/js/jquery.sticky.js')}}"></script>
        
        <!-- contact js -->
        <script src="{{asset('./assets/demo/js/contact.js')}}"></script>
        <script src="{{asset('./assets/demo/js/jquery.form.js')}}"></script>
        <script src="{{asset('./assets/demo/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('./assets/demo/js/mail-script.js')}}"></script>
        <script src="{{asset('./assets/demo/js/jquery.ajaxchimp.min.js')}}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{asset('./assets/demo/js/plugins.js')}}"></script>
        <script src="{{asset('./assets/demo/js/main.js')}}"></script>
        
    </body>
</html>

@endsection