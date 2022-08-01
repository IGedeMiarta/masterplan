<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MiroGold | Semua orang bisa punya emas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/new')}}/img/fav.png" rel="icon">
  <link href="{{asset('assets/new')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  {{--
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet"> --}}

  {{--
  <link href="http://db.onlinewebfonts.com/c/060e116a70e3096c52db16f61aaab194?family=Sofia+Pro+Regular" rel="stylesheet"
    type="text/css" /> --}}

  <style>
    @font-face {
      font-family: "Sofia Pro Regular";
      src: url("{{asset('assets/new')}}/font/@font-face/060e116a70e3096c52db16f61aaab194.eot");
      /* IE9*/
      src: url("{{asset('assets/new')}}/font/@font-face/060e116a70e3096c52db16f61aaab194.eot?#iefix") format("embedded-opentype"),
      /* IE6-IE8 */
      url("{{asset('assets/new')}}/font/@font-face/060e116a70e3096c52db16f61aaab194.woff2") format("woff2"),
      /* chrome、firefox */
      url("{{asset('assets/new')}}/font/@font-face/060e116a70e3096c52db16f61aaab194.woff") format("woff"),
      /* chrome、firefox */
      url("{{asset('assets/new')}}/font/@font-face/060e116a70e3096c52db16f61aaab194.ttf") format("truetype"),
      /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
      url("{{asset('assets/new')}}/font/@font-face/060e116a70e3096c52db16f61aaab194.svg#Sofia Pro Regular") format("svg");
      /* iOS 4.1- */
    }
  </style>
  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/new')}}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('assets/new')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('assets/new')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('assets/new')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('assets/new')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('assets/new')}}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('assets/new')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="{{asset('assets/new')}}/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

  <!-- =======================================================
  * Template Name: Bootslander - v4.7.2
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    @media screen and (max-width: 900px) {
      #tagline {
        padding-top: 50px
      }
    }

    .owl-prev {
      width: 15px;
      height: 100px;
      position: absolute;
      top: 40%;
      margin-left: -20px;
      display: block !important;
      border: 0px solid black;
    }

    .owl-next {
      width: 15px;
      height: 100px;
      position: absolute;
      top: 40%;
      right: -25px;
      display: block !important;
      border: 0px solid black;
    }

    .owl-prev i,
    .owl-next i {
      transform: scale(1, 6);
      color: #ccc;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        {{-- <h1><a href="index.html"><span>microgold</span></a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="{{asset('assets/new')}}/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          {{-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#features">Pricing</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          @if (!Auth::check())
          <li><a class="nav-link scrollto" href="{{route('user.login')}}">Login | Register</a></li>
          @else

          <li><a class="nav-link scrollto" href="{{url('/user/dashboard')}}">Dashboard</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-8 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>INDONESIA EMAS <span>2045</span></h1>
            {{-- <h1>Semua orang bisa punya <span>Emas</span></h1> --}}
            <h2>Semua orang bisa punya emas <br>
              SIMPAN EMAS | JUAL EMAS | NETWORK EMAS | BISNIS EMAS</h2>
            {{-- <h2>Microgold menyediakan emas bersertifikat dengan ukuran 0.01 gram, 0,02 gram, 0,05 gram dan 0,1
              gram.</h2> --}}
            <div class="text-center text-lg-start row col-12 col-md-6">
              <div class="col-6 col-md-6">
                <a href="{{url('/login')}}" class="btn-get-started w-100 text-center scrollto">Login</a>
              </div>
              <div class="col-6 col-md-6">
                <a href="{{url('/register')}}" class="btn-get-started w-100 text-center scrollto">Register</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="{{asset('assets/new')}}/img/hero-img4.png" class="img-fluid animated" alt="">
          {{-- <img src="{{asset('assets/new')}}/img/brosure-01.jpg" class="img-fluid animated" alt=""> --}}
          {{-- <img src="{{asset('assets/new')}}/img/brosure-01-cutout.png" class="img-fluid animated" alt=""> --}}
        </div>
      </div>
      <div data-aos="zoom-out">

        <p style="color: black;" id="tagline">Tabung dan tukarkan dengan emas Antam 3 gram, 5 gram, 10 gram.</p>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <section id="produk" class="team">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Produk</h2>
        <p>Produk Kami</p>
        <h5>Microgold menyediakan emas bersertifikat dengan ukuran 0.01 gram, 0,02 gram, 0,05 gram dan 0,1 gram.</h5>
      </div>
      <div class="row">
        <div class="owl-carousel">
          <div class="item" style="padding: 20px;">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="{{asset('assets/new')}}/img/prod.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>BRO 1</h4>
                <p>0.001 gram</p>
                <p>Rp. 14.000</p>

              </div>
            </div>
          </div>
          <div class="item" style="padding: 20px;">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="{{asset('assets/new')}}/img/prod.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>BRO 2</h4>
                <p>0.002 gram</p>
                <p>Rp. 27.000</p>

              </div>
            </div>
          </div>
          <div class="item" style="padding: 20px;">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="{{asset('assets/new')}}/img/prod.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>BRO 3</h4>
                <p>0.005 gram</p>
                <p>Rp. 65.000</p>

              </div>
            </div>
          </div>
          <div class="item" style="padding: 20px;">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="{{asset('assets/new')}}/img/prod.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>BRO 4</h4>
                <p>0.01 gram</p>
                <p>Rp. 128.000</p>

              </div>
            </div>
          </div>
        </div>


      </div>

    </div>
  </section><!-- End Team Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-color: #3d312a">

    <div class="container">
      <div class="copyright" style="    border-top: white;">
        Copyright &copy; 2022 <strong><span>MicroGold</span></strong>. All Rights Reserved
      </div>
      {{-- <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> --}}
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/new')}}/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{asset('assets/new')}}/vendor/aos/aos.js"></script>
  <script src="{{asset('assets/new')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('assets/new')}}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('assets/new')}}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('assets/new')}}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/new')}}/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
  <script>
    $(document).ready(function() {
 
 $(".owl-carousel").owlCarousel({

     autoPlay: 3000,
     items : 3,
     itemsDesktop : [1199,3],
     itemsDesktopSmall : [979,3],
     center: true,
     nav:true,
     navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
     loop:true,
     responsive: {
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:3,
            nav:true,
        }
     }
    
    
     
     
     

 });

});
  </script>
</body>

</html>