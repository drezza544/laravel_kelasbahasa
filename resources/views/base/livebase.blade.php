<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kelas Bahasa</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <!--Custom CSS Diginova-->
    <link rel="stylesheet" href="css/diginova.css">
    <!-- Swipper Slider -->
    <link rel="stylesheet" href="css/swiper.min.css">    
    <!-- SLICK SLIDER-->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <!-- FLICKY SLIDER BACKGROUND-->
    <link rel="stylesheet" href="css/flickity.min.css">

    <!-- CSS NPM CAROUSEL -->
    <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    @stack('styles')

</head>

<body>
    <!--Main Navigation-->
    <header>

      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark navbar-live fixed-top scrolling-navbar color-navbar">

          <div class="container">

              <!-- Navbar brand -->
              <a class="navbar-brand" href="index.html"><img src="img/Logo-Halloworld.png" alt="">
                
              </a>

              <!-- Collapse button -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars"></i>
              </button>

              <!-- Collapsible content -->
              <div class="collapse navbar-collapse" id="basicExampleNav">

                    <!-- Links -->
                    <ul class="navbar-nav ml-auto smooth-scroll livestream">
                        <li class="nav-item">
                            <a class="nav-link btn-services item-color custom_underline" href="services.html"><strong class="font-weight-bold">BERANDA</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-portfolio item-color custom_underline" href="portofolio.html"><strong class="font-weight-bold">CARI TUTOR</strong></a>
                        </li>
                        <li class="nav-item btn-team">
                            <a class="nav-link item-color custom_underline" href="team.html"><strong class="font-weight-bold">JADI TUTOR</strong></a>
                        </li>   
                        <li class="nav-item btn-blog">
                            <a class="nav-link item-color custom_underline" href="blog.html"><strong class="font-weight-bold">ENTERPRISE</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-contact font-weight-bold"  data-toggle="modal" data-target="#loginModal">MASUK</a>
                        </li>
                    </ul>
                    <!-- Links -->
  
                    <!-- Social Icon  -->
                    
                </div>
                <!-- Collapsible content -->

          </div>

      </nav>
      <!--/.Navbar-->

      <!-- Swiper -->
        @yield('img_header')
    
    </header>
  <!--Main Navigation-->

  <!--Main layout-->
    <main class="mt-5">
        @yield('content')
    </main>
  <!--Main layout-->

  <!--=========MODAL===============MODAL===========MODAL==========MODAL============MODAL======-->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" ria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="{{ asset('img/Logo-Halloworld.png') }}" alt="">
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="login_with__">     
                                <p>Log in with:</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn__with-login-facebook">     
                                    <button type="submit" class="btn btn-facebook"> 
                                        <i class="fab fa-facebook mr-3 fa-2x" style="margin-left: -20px;"></i>
                                        <small style="font-size: 16px;">Facebook</small>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="btn__with-login-google">     
                                    <button type="submit" class="btn btn-google"> 
                                        <i class="fab fa-google mr-3 fa-2x" style="margin-left: -20px;"></i>
                                        <small style="font-size: 16px;">Google</small>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row white-color">
                            <div class="col-md-5 pr-0">
                                <hr>
                            </div>
                            <div class="col-md-2 pr-0 pl-0">
                                <div class="d-flex justify-content-center or__">
                                    <p class="text-white">Or</p>
                                </div>
                            </div>
                            <div class="col-md-5 pl-0">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div id="background__login">
                                <input type="email" name="email" id="email" placeholder="Email" class="email__input form-control" style="padding-left: 15px;">
                                <input type="password" name="password" id="password" placeholder="Password" class="password__input form-control">

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-masuk" style="margin-top: 25px;">Masuk</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#">Lupa Password?</a>
                    
                </div>
            </div>
        </div>
    </div>
  <!--==========MODAL=======MODAL============MODAL===========MODAL================MODAL=======-->

  

<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left" style="padding-top:25px;">
        <div class="row mt-3">

            <!--First column-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4 halloworld">
                <img src="{{ asset('img/Logo-Halloworld.png') }}" alt="">
                <!-- <h6 class="text-uppercase font-weight-bold">
                    <strong>Company name</strong>
                </h6> -->
                <div class="link__halloworld-footer">
                    <p class="mb_3 mt_2">
                        <a href="#!">Fakultas Ilmu Budaya</a>
                    </p>
                    <p class="mb_3 mt_2">
                        <a href="#!">Universitas Indonesia</a>
                    </p>
                    <p class="mb_3 mt_2">
                        <a href="#!">Kampus UI Depok</a>
                    </p>
                    <p class="mt_2">
                        <a href="#!">Jawa Barat 16424</a>
                    </p>

                    <p class="mt-4 mb_3 mt_2">
                        <a href="#!">Bantuan</a>
                    </p>
                    <p class="mb_3 mt_2">
                        <a href="#!">Mon-Fri, 10AM-5PM</a>
                    </p>
                    <p class="mt_2">
                        <a href="#!">Sat-Sun, 10AM-1PM</a>
                    </p>

                    <p class="mt-4 mb_3">Phone/WA: +62 858 9002 2945</p>
                    <p class="mt_2">Email: info@halloworld.com</p>
                   
                </div>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- <h6 class="text-uppercase font-weight-bold">
                    <strong>Products</strong>
                </h6> -->
                <!-- <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->
                <p class="mt-5" style="padding-top: 10px;">
                    <a href="#!">Belajar</a>
                </p>
                <p class="mb_3 mt_2">
                    <a href="#!">English(British)</a>
                </p>
                <p class="mb_3 mt_2">
                    <a href="#!">English(American)</a>
                </p>
                <p class="mb_3 mt_2">
                    <a href="#!">Chinese(Mandarin)</a>
                </p>
                <p class="mb_3 mt_2">
                    <a href="#!">Jepanese</a>
                </p>
                <p class="mb_3 mt_2">
                    <a href="#!">Korean</a>
                </p>
                <p class="mb_3 mt_2">
                    <a href="#!">French</a>
                </p>
                <p class="mb_3 mt_2">
                    <a href="#!">German</a>
                </p class="mb_3 mt_2">
                <p class="mt_2">
                    <a href="#!">Russian</a>
                </p>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- <h6 class="text-uppercase font-weight-bold">
                    <strong>Useful links</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->
                <p class="mt-5" style="padding-top: 10px;">
                    <a href="#!">Menjadi Tutor</a>
                </p>
                <p class="mb_3 mt_2">
                    <a href="#!">Tentang Kami</a>
                </p>
                <p class="mb_3 mt_2">
                    <a href="#!">Cara Memesan</a>
                </p>
                <p class="mb_3 mt_2">
                    <a href="#!">Kelas Enterprise</a>
                </p>
                <p class="mb_3 mt_2">
                    <a href="#!">Kebijakan dan Ketentuan</a>
                </p>
                <p class="mt_2">
                    <a href="#!">Syarat dan Ketentuan</a>
                </p>
            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3">
                <!-- <h6 class="text-uppercase font-weight-bold">
                    <strong>Contact</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->
                <p class="mt-5" style="padding-top: 10px;">
                    <a href="#!">Ikuti Kami</a>
                </p>
                <p>
                    <i class="fab fa-instagram mr-3 fa-lg"></i> halloworld</p>
                <p>
                    <i class="fab fa-facebook mr-3 fa-lg"></i>facebook</p>
                <p>
                <i class="fab fa-youtube mr-3 fa-lg"></i></i>youtube</p>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://mdbootstrap.com/bootstrap-tutorial/"> Halloworld.id</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    <!-- CAROUSEL SLICK -->
    <script src="js/slick.js" type="text/javascript"></script>
    <script src="js/slick.min.js" type="text/javascript"></script>
    <!--Javascript Custom-->
    <script type="text/javascript" src="js/diginova.js"></script>
    <!-- CAROUSEL -->
    <script type="text/javascript" src="js/swiper.min.js"></script>
    <!-- FLICKY JAVASCRIPT SLIDER BACKGROUND -->
    <script src="js/flickity.pkgd.min.js" type="text/javascript"></script>
    <!-- JS NPM CAROUSEL -->
    <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    
    <!-- JS STISLA -->
    <script src="js/modules-slide.js" type="text/javascript"></script>

    @stack('scripts')
 
</body>

</html>
