@extends('layouts.app')

@section('content')
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
@stop