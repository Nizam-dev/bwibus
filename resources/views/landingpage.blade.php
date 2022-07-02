<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Courses | Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('public/landingpage/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/landingpage/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/landingpage/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('public/landingpage/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('public/landingpage/assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('public/landingpage/assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('public/landingpage/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/landingpage/assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('public/landingpage/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('public/landingpage/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/landingpage/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/landingpage/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('public/landingpage/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('public/landingpage/assets/css/style.css')}}">
    
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('public/landingpage/assets/img/logo/loder.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="{{asset('public/landingpage/assets/img/logo/logo.png')}}" alt="" style="height:27px;"></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li class="active" ><a href="#home">Home</a></li>
                                                <li><a href="#tracking">Courses</a></li>
                                                <li><a href="#about">About</a></li>
                                                <li class="button-header"><a href="{{url('login')}}" class="btn btn3">Log in</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
        <section class="slider-area " id="home">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-12">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">Selamat Datang Di Banyuwangi Bus</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">Kami adalah perusahaan yang melayani berbagai informasi bus di wilayah banyuwangi. Mulai dari tarif rute dan jadwal pemberangkatan bus</p>
                                    <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Layanan Whatsapp</a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- ? services-area -->
        <div class="services-area">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="{{asset('public/landingpage/assets/img/icon/icon1.svg')}}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>60+ UX courses</h3>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="{{asset('public/landingpage/assets/img/icon/icon2.svg')}}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Expert instructors</h3>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="{{asset('public/landingpage/assets/img/icon/icon3.svg')}}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Life time access</h3>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix" id="tracking">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Our featured courses</h2>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Courses area End -->

 
        <!--? About Area-3 Start -->
        <section class="about-area3 fix" id="about">
            <div class="support-wrapper align-items-center">
                <div class="right-content3">
                    <!-- img -->
                    <div class="right-img">
                        <img src="{{asset('public/landingpage/assets/img/logo/trackingbus.png')}}" alt="">
                    </div>
                </div>
                <div class="left-content3">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-20">
                        <div class="front-text">
                            <h2 class="">Learner outcomes on courses you will take</h2>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="{{asset('public/landingpage/assets/img/icon/right-icon.svg')}}" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Techniques to engage effectively with vulnerable children and young people.</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="{{asset('public/landingpage/assets/img/icon/right-icon.svg')}}" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Join millions of people from around the world
                            learning together.</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="{{asset('public/landingpage/assets/img/icon/right-icon.svg')}}" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Join millions of people from around the world learning together.
                            Online learning is as easy and natural.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer>
     <div class="footer-wrappper footer-bg">
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo mb-25">
                                    <a href="index.html"><img src="{{asset('public/landingpage/assets/img/logo/logo2_footer.png')}}" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>The automated process starts as soon as your clothes go into the machine.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Our solutions</h4>
                                <ul>
                                    <li><a href="#">Design & creatives</a></li>
                                    <li><a href="#">Telecommunication</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Programing</a></li>
                                    <li><a href="#">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Support</h4>
                                <ul>
                                    <li><a href="#">Design & creatives</a></li>
                                    <li><a href="#">Telecommunication</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Programing</a></li>
                                    <li><a href="#">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Company</h4>
                                <ul>
                                    <li><a href="#">Design & creatives</a></li>
                                    <li><a href="#">Telecommunication</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Programing</a></li>
                                    <li><a href="#">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Footer End-->
      </div>
  </footer> 
  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<script src="{{asset('public/landingpage/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('public/landingpage/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('public/landingpage/assets/js/popper.min.js')}}"></script>
<script src="{{asset('public/landingpage/assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('public/landingpage/assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('public/landingpage/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/landingpage/assets/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('public/landingpage/assets/js/wow.min.js')}}"></script>
<script src="{{asset('public/landingpage/assets/js/animated.headline.js')}}"></script>
<script src="{{asset('public/landingpage/assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Date Picker -->
<script src="{{asset('public/landingpage/assets/js/gijgo.min.js')}}"></script>
<!-- Nice-select, sticky -->
<script src="{{asset('public/landingpage/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('public/landingpage/assets/js/jquery.sticky.js')}}"></script>
<!-- Progress -->
<script src="{{asset('public/landingpage/assets/js/jquery.barfiller.js')}}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{asset('public/landingpage/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('public/landingpage/assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('public/landingpage/assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('public/landingpage/assets/js/hover-direction-snake.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('public/landingpage/assets/js/contact.js')}}"></script>
<script src="{{asset('public/landingpage/assets/js/jquery.form.js')}}"></script>
<script src="{{asset('public/landingpage/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('public/landingpage/assets/js/mail-script.js')}}"></script>
<script src="{{asset('public/landingpage/assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="{{asset('public/landingpage/assets/js/plugins.js')}}"></script>
<script src="{{asset('public/landingpage/assets/js/main.js')}}"></script>

</body>
</html>