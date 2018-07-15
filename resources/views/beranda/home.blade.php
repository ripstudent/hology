<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>HOLOGY</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('homepage/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('homepage/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('homepage/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('homepage/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('homepage/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('homepage/css/timeline.css') }}">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('homepage/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <script src="https://use.typekit.net/bkt6ydm.js"></script>
  <script>try { Typekit.load({ async: true }); } catch (e) { }</script>
  <div id="particles-js"></div>
  <script src="{{ asset('homepage/particle/particles.js') }}"></script>
  <script src="{{ asset('homepage/particle/app.js') }}"></script>
  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero">
          <img src="{{ asset('homepage/img/logo.png') }}" alt="" title="" style="width:0%;height:0%;" /></img>
        </a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active">
            <a href="#hero">Home</a>
          </li>
          <li>
            <a href="#lomba">Lomba</a>
          </li>
          <li>
              <a href="#pameran-produk">Pameran</a>
            </li>
          <li>
            <a href="#seminar">Seminar</a>
          </li>
          <li>
            <a href="#jadwal">Jadwal</a>
          </li>
          <li>
            <a href="#berita">Berita</a>
          </li>
          <li>
            <a href="#faq">FAQ</a>
          </li>
          <li>
            <a href="">Login</a>
          </li>

        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>HOLOGY</h1>
      <h2>Deskripsi singkat hology</h2>
      <a href="#about" class="btn-get-started">v</a>
    </div>
  </section>
  <!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container" style="justify-content: center;justify-items: center;align-content: center;align-items: center;">
        <div class="about-container">
          <iframe width="1140" height="500" src="https://www.youtube.com/embed/9X1yX2QIO3g" frameborder="0" allow="autoplay; encrypted-media"
            allowfullscreen></iframe>
        </div>

      </div>
    </section>
    <!-- #about -->

    <!--==========================
      Facts Section
    ============================-->

    <!--==========================
      Lomba 
    ============================-->
    <section id="lomba">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Bidang yang Dilombakan</h3>
          <p class="section-description">Berikut merupakan bidang yang dilombakan di HOLOGY</p>
        </div>
        <div class="row" style="justify-content: center;">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon">
                <a href="">
                  <img src="{{ asset('homepage/img/comp/app-inovation.png') }}" style="width: 60%;height: 60%;">
                </a>
              </div>
              APP INNOVATION
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon">
                <a href="">
                  <img src="{{ asset('homepage/img/comp/business-it-case.png') }}" style="width: 60%;height: 60%;">
                </a>
              </div>
              BUSINESS IT CASE
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon">
                <a href="">
                  <img src="{{ asset('homepage/img/comp/business-plan.png') }}" style="width: 60%;height: 60%;">
                </a>
              </div>
              BUSINESS PLAN
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon">
                <a href="">
                  <img src="{{ asset('homepage/img/comp/smart-device.png') }}" style="width: 60%;height: 60%;">
                </a>
              </div>
              SMART DEVICE
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon">
                <a href="">
                  <img src="{{ asset('homepage/img/comp/games.png') }}" style="width: 60%;height: 60%;">
                </a>
              </div>
              GAME
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon">
                <a href="">
                  <img src="{{ asset('homepage/img/comp/ctf.png') }}" style="width: 60%;height: 60%;">
                </a>
              </div>
              CAPTURE THE FLAG
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon">
                <a href="">
                  <img src="{{ asset('homepage/img/comp/programming.png') }}" style="width: 60%;height: 60%;">
                </a>
              </div>
              PROGRAMMING
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- #services -->

    <!--==========================
    Pameran Produk
    ============================-->
    <section id="pameran-produk">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Pameran Produk</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
              sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Lihat selengkapnya</a>
          </div>
        </div>

      </div>
    </section>
    <!-- #pameran-produk -->


    <!--==========================
      Seminar
    ============================-->
    <section id="seminar" style="margin-bottom: 90px;">
      <div class="container wow fadeInUp">
        <div class="section-header" style="padding: 80px 0px 60px 0px">
          <h3 class="section-title">Seminar</h3>
          <p class="section-description">Seminar yang akan diadakan di HOLOGY</p>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="container-fluid" id="wkwk">
                <img src="{{ asset('homepage/img/seminar1.jpg') }}" class="image">
                <div class="overlay">
                  <div class="text">Better life with IT</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-sm-12">
                <div class="container-fluid" id="wkwk">
                    <img src="{{ asset('homepage/img/seminar2.jpg') }}" class="image" style="height: 110%;">
                    <div class="overlay">
                      <div class="text">Get to know more about IT</div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- #seminar -->




    <!--==========================
      Jadwal
    ============================-->
    <section id="jadwal">
      <div class="container wow fadeInUp">
        <div class="container-fluid">
          <div class="row example-split" style="justify-content: center">
            <div class="row example-centered">
              <div class="col-md-12 example-title">
                <h2>Jadwal</h2>
                <p>Jadwal lomba</p>
              </div>
              <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
                <ul class="timeline timeline-centered">
                  <li class="timeline-item">
                    <div class="timeline-info">
                      <span>30 Agustus 2017</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                      <h3 class="timeline-title">Pendaftaran Dibuka</h3>
                    </div>
                  </li>
                  <li class="timeline-item">
                    <div class="timeline-info">
                      <span>30 September 2017</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                      <h3 class="timeline-title">Batas Pendaftaran</h3>
                    </div>
                  </li>
                  <li class="timeline-item">
                    <div class="timeline-info">
                      <span>01 Agustus 2017</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                      <h3 class="timeline-title">Batas Babak Penyisihan 1</h3>
                    </div>
                  </li>
                  <li class="timeline-item">
                    <div class="timeline-info">
                      <span>15 Oktober 2017</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                      <h3 class="timeline-title">Warming Up</h3>
                    </div>
                  </li>
                  <li class="timeline-item">
                    <div class="timeline-info">
                      <span>30 Oktober 2017</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                      <h3 class="timeline-title">Pengumuman Lolos Babak 2</h3>
                    </div>
                  </li>
                  <li class="timeline-item">
                    <div class="timeline-info">
                      <span>15 Oktober 2017</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                      <h3 class="timeline-title">Batas Babak Penyisihan 2</h3>
                    </div>
                  </li>
                  <li class="timeline-item">
                    <div class="timeline-info">
                      <span>30 Oktober 2017</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                      <h3 class="timeline-title">Pengumuman Lolos Final</h3>
                    </div>
                  </li>
                  <li class="timeline-item">
                    <div class="timeline-info">
                      <span>15 November 2017</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                      <h3 class="timeline-title">Babak Final dan Puncak Acara</h3>
                    </div>
                  </li>
                  <li class="timeline-item period">
                    <div class="timeline-info"></div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                    </div>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>


      </div>
    </section>
    <!-- #jadwal -->

    <!--==========================
      Berita
    ============================-->
    <section id="berita">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Berita</h3>
          <p class="section-description"></p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6 portfolio-item" style="background: transparent">
            <div class="card h-100">
              <a href="#">
                <img class="card-img-top" src="{{ asset('homepage/img/news1.jpg') }}" alt="">
              </a>
              <div class="card-body" style="background: transparent">
                <h4 class="card-title" style="background: transparent">
                  <a href="#">Pemenang Lomba HOLOGY</a>
                </h4>
                <p class="card-text">Posted on 09 June 2018</p>
                <button type="button" class="btn btn-primary">Lihat selengkapnya</button>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 portfolio-item" style="background: transparent">
            <div class="card h-100">
              <a href="#">
                <img class="card-img-top" src="{{ asset('homepage/img/news1.jpg') }}" alt="">
              </a>
              <div class="card-body" style="background: transparent">
                <h4 class="card-title" style="background: transparent">
                  <a href="#">Pemenang Lomba HOLOGY</a>
                </h4>
                <p class="card-text">Posted on 09 June 2018</p>
                <button type="button" class="btn btn-primary">Lihat selengkapnya</button>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 portfolio-item" style="background: transparent">
            <div class="card h-100">
              <a href="#">
                <img class="card-img-top" src="{{ asset('homepage/img/news1.jpg') }}" alt="">
              </a>
              <div class="card-body" style="background: transparent">
                <h4 class="card-title" style="background: transparent">
                  <a href="#">Pemenang Lomba HOLOGY</a>
                </h4>
                <p class="card-text">Posted on 09 June 2018</p>
                <button type="button" class="btn btn-primary">Lihat selengkapnya</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- #berita -->



  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-6">
            <div class="container-fluid">
              <h4 style="color: white">Sponsor</h4>
              <div class="row" style="background-color: #05122b">
                <div class="col-lg-12 col-sm 12">
                </div>
                <div class="col-lg-6 col-sm-12">
                  <img src="{{ asset('homepage/img/sponsorlogo2.png') }}" style="width: 50%;height: 100%;">

                </div>
                <div class="col-lg-6 col-sm-12">
                  <img src="{{ asset('homepage/img/sponsorlogo3.png') }}" style="width: 100%;">

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="container-fluid">
              <h4 style="color: white">Media Partner</h4>
              <div class="row" style="background-color: #05122b">
                <div class="col-lg-12 col-sm 12">
                </div>
                <div class="col-lg-6 col-sm-12">
                  <img src="{{ asset('homepage/img/medpar1.png') }}" style="width: 80%;height: 100%;">

                </div>
                <div class="col-lg-6 col-sm-12">
                  <img src="{{ asset('homepage/img/medpar2.png') }}" style="width: 100%;">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-2 col-md-6">
            <div class="container-fluid" style="justify-content: center">
              <img src="{{ asset('homepage/img/icon/004-email.png') }}" class="center-img">
            </div>
          </div>
          <div class="col-lg-2 col-md-6">
            <div class="container-fluid" style="justify-content: center">
              <img src="{{ asset('homepage/img/icon/006-facebook.png') }}" class="center-img">
            </div>
          </div>
          <div class="col-lg-2 col-md-6">
            <div class="container-fluid" style="justify-content: center">
              <img src="{{ asset('homepage/img/icon/007-instagram-2.png') }}" class="center-img">
            </div>
          </div>
          <div class="col-lg-2 col-md-6">
            <div class="container-fluid" style="justify-content: center">
              <img src="{{ asset('homepage/img/icon/008-youtube.png') }}" class="center-img">
            </div>
          </div>
          <div class="col-lg-2 col-md-6">
            <div class="container-fluid" style="justify-content: center">
              <img src="{{ asset('homepage/img/icon/013-line-1.png') }}" class="center-img">
            </div>
          </div>
          <div class="col-lg-2 col-md-6">
            <div class="container-fluid" style="justify-content: center">
              <img src="{{ asset('homepage/img/icon/002-twitter.png') }}" class="center-img">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container" style="margin-top: 3em;">

      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Made with ♥ by IT HOLOGY 2018</a>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top">
    <i class="fa fa-chevron-up"></i>
  </a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('homepage/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('homepage/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('homepage/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('homepage/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('homepage/lib/wow/wow.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <script src="{{ asset('homepage/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('homepage/lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('homepage/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('homepage/lib/superfish/superfish.min.js') }}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('homepage/contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('homepage/js/main.js') }}"></script>

</body>

</html>