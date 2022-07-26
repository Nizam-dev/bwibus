<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BWI BUS</title>
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
    <link rel="stylesheet" href="{{asset('public/landingpage/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/landingpage/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('public/landingpage/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('public/landingpage/assets/css/style.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('public/landingpage/assets/css/fontawesome-all.min.css')}}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        html {
            scroll-behavior: smooth;
        }

        .features-icon i {
            font-size: 7rem;
        }
    </style>
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
                                    <a href="{{url('/')}}"><img
                                            src="{{asset('public/landingpage/assets/img/logo/logo.png')}}" alt=""
                                            style="height:50px;"><b class="text-white">BWIBUS</b></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li class="active"><a href="{{url('/')}}">Home</a></li>
                                                <li><a href="{{url('/#track')}}">Tracking</a></li>
                                                <li><a href="{{url('/#tracking')}}">Layanan</a></li>
                                                <li><a href="{{url('/#about')}}">About</a></li>
                                                <li class="button-header"><a href="{{url('login')}}"
                                                        class="btn btn3">Log in</a></li>
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
        <section class="slider-area py-5" id="home">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container mt-3">
                        <div class="card">
                            <div class="card-body">
                                @if($bus)
            <p class="mb-0 mt-0">PT/PO <span class="fw-bold">{{$bus->pt_po}}</span></p>
            <p class="mb-0 mt-0">Nomor Plat <span class="fw-bold">{{$bus->plat_nomor}}</span></p>
            <p class="mb-0 mt-0">Jalur <span class="fw-bold">{{$bus->jalur}}</span></p>
            <p class="mb-2 mt-0">Lokasi Terakhir : <span class="fw-bold lokasiterakhir"></span></p>
            @else
            <span class="badge badge-warning mb-3">Bus Belum Terkonfirmasi</span>
            @endif

                                <div id="googleMap" style="height:450px;"></div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- ? services-area -->



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
                                        <a href="{{url('/')}}"><img style="width:50px;"
                                                src="{{asset('public/landingpage/assets/img/logo/logo.png')}}" alt="">
                                            BWI BUS</a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>Kami adalah perusahaan yang melayani berbagai informasi bus di wilayah
                                                banyuwangi. Mulai dari tarif rute dan jadwal pemberangkatan bus.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Our solutions</h4>
                                    <ul>
                                        <li><a href="#">Lihat Traking Bus</a></li>
                                        <li><a href="#">Informasi Tarif</a></li>
                                        <li><a href="#">Lihat Daftar Bus</a></li>
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
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | This template is made with <i
                                            class="fa fa-heart" aria-hidden="true"></i> by <a href="{{url('/')}}"
                                            target="_blank">BWIBUS</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
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
    <div id="back-top">
        <i class="fa fa-level-up" aria-hidden="true"></i>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js"
        integrity="sha512-xIPqqrfvUAc/Cspuj7Bq0UtHNo/5qkdyngx6Vwt+tmbvTLDszzXM0G6c91LXmGrRx8KEPulT+AfOOez+TeVylg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkdyai5-p_kXTroX-gSz_mz-xeQ8Ht1iY&callback=initialize"
        type="text/javascript"></script>
    <script type="text/javascript">
        function initialize() {
            var propertiPeta = {
                center: new google.maps.LatLng(-8.222135981047273, 114.35222273652148),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

            // membuat Marker
            var marker = new google.maps.Marker({
                map: peta,
                icon: "{{asset('public/image/iconbuss.png')}}",
                title: "Bus BWI-SURABAYA 001"
            });

            @if($bus)

            axios.get("{{url('lokasibus/'.$bus->id)}}")
                .then(res => {
                    if (res.data.status == "belum ada") {

                    } else {
                        let latlng = new google.maps.LatLng(res.data.lokasi.latitude, res.data.lokasi.longitude)
                        marker.setPosition(latlng);
                        peta.setCenter(latlng);
                        codeLatLng(latlng)
                    }
                })
            @endif

            $("#updatelokasibus").on('click', () => {
                navigator.geolocation.getCurrentPosition(showPosition);
            })

            function showPosition(position) {
                lat = position.coords.latitude;
                lng = position.coords.longitude;
                let latlng = new google.maps.LatLng(lat, lng);
                marker.setPosition(latlng);
                peta.setCenter(latlng);
                codeLatLng(latlng)
                @if($bus)
                axios.post("{{url('lokasibus/'.$bus->id)}}", {
                        latitude: lat,
                        longitude: lng
                    })
                    .then(res => {
                        alertToast({
                            judul: "Sukses",
                            deskripsi: "Lokasi Berhasil diupdate",
                        })
                    })
                @endif
            }

            function codeLatLng(latlng) {
                const geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    'latLng': latlng
                }, function (results, status) {
                    if (status === google.maps.GeocoderStatus.OK) {
                        if (results[1]) {
                            $(".lokasiterakhir").html(results[1].formatted_address)
                            console.log(results[1].formatted_address)
                        } else {
                            alert('No results found');
                        }
                    } else {
                        alert('Geocoder failed due to: ' + status);
                    }
                });
            }

        }
    </script>


</body>

</html>