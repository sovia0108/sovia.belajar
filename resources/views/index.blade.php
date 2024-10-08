<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Arsha Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">PT Swabina Gatra</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda</a></li>
          <li><a href="{{route('produk_layanan')}}">Produk & Layanan </a></li>
          <li><a href="#services">Tentang Kami</a></li>
          <li><a href="#portfolio">Mengapa Memilih Kami</a></li>
          <li><a href="{{ Route('beranda')}}">Berita</a></li>
          <li><a href="{{ Route('sovia')}}">Karir</a></li>
          <li><a href="#pricing">Kontak Kami</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      
    </div>
  </header>

  <main class="main">

    {{-- header start --}}
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>PT Swabina Gatra</h1>
            <p>Menjadi perusahaan yang dapat tumbuh
              dan berkembang dengan sehat dan selalu
              unggul di bidangnya </p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Selengkapnya</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->
    {{-- header end --}}
 
    {{-- produk & layanan start --}}
    <section id="about" class="about section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Produk & Layanan</h2>
        </div><!-- End Section Title -->
        <div class="container">

          <div class="row gy-4"> </div>
          <!-- New Service Boxes Section -->
          <div class="row">
            <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <div class="row">
                          <div class="col-12 col-md-4 text-center mb-4" data-aos="fade-up" data-aos-delay="300">
                              <div class="service-box py-5 px-4 border rounded custom-service-box d-flex flex-column align-items-center justify-content-center" style="width: 100%; height: 385px;"> <!-- Set fixed height -->
                                  <div class="icon mb-3">
                                      <img src="{{ asset('assets/img/facility.png') }}" alt="Facility" class="img-fluid" style="max-width: 100%; height: auto;">
                                  </div>
                                  <h4 class="text-center">SWA Facility Management</h4>
                              </div>
                          </div>
                          <div class="col-12 col-md-4 text-center mb-4" data-aos="fade-up" data-aos-delay="400">
                              <div class="service-box py-5 px-4 border rounded custom-service-box d-flex flex-column align-items-center justify-content-center" style="width: 100%; height: 385px;"> <!-- Set fixed height -->
                                  <div class="icon mb-3">
                                      <img src="{{ asset('assets/img/digital.png') }}" alt="Digital" class="img-fluid" style="max-width: 100%; height: auto;">
                                  </div>
                                  <h4>SWA Digital Solution</h4>
                              </div>
                          </div>
                          <div class="col-12 col-md-4 text-center mb-4" data-aos="fade-up" data-aos-delay="500">
                              <div class="service-box py-5 px-4 border rounded custom-service-box d-flex flex-column align-items-center justify-content-center" style="width: 100%; height: 385px;"> <!-- Set fixed height -->
                                  <div class="icon mb-3">
                                      <img src="{{ asset('assets/img/swasegar.png') }}" alt="Swasegar" class="img-fluid" style="max-width: 100%; height: auto;">
                                  </div>
                                  <h4>SWA Segar</h4>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="row">
                          <div class="col-12 col-md-4 text-center mb-4" data-aos="fade-up" data-aos-delay="600">
                              <div class="service-box py-5 px-4 border rounded custom-service-box d-flex flex-column align-items-center justify-content-center" style="width: 100%; height: 385px;"> <!-- Set fixed height -->
                                  <div class="icon mb-3">
                                      <img src="{{ asset('assets/img/academy.png') }}" alt="Academy" class="img-fluid" style="max-width: 100%; height: auto;">
                                  </div>
                                  <h4>SWA Academy</h4>
                              </div>
                          </div>
                          <div class="col-12 col-md-4 text-center mb-4" data-aos="fade-up" data-aos-delay="700">
                              <div class="service-box py-5 px-4 border rounded custom-service-box d-flex flex-column align-items-center justify-content-center" style="width: 100%; height: 385px;"> <!-- Set fixed height -->
                                  <div class="icon mb-3">
                                      <img src="{{ asset('assets/img/tour.png') }}" alt="Tour" class="img-fluid" style="max-width: 100%; height: auto;">
                                  </div>
                                  <h4>SWA Facility Management</h4>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>
            
            </div>
          </div>
          </div>
          <!-- End of Service Boxes Section -->

        </div>

    </section><!-- /About Section -->
    {{-- produk & layanan end --}}


    {{-- <!-- Why Us Section -->
    <section id="why-us" class="section why-us light-background" data-builder="section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Tentang Kami</h2>
    </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
          <div class="container">
  <div class="row gy-4">
    <div class="col-lg-5 order-1 order-lg-1 why-us-img">
      <img src="assets/img/foto.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
    </div>
    <div class="col-lg-7 order-2 order-lg-2 content px-xl-2" data-aos="fade-up" data-aos-delay="100">
      <h3><span>PT Swabina Gatra</span></h3>
      <p>
        PT Swabina Gatra atau yang lebih dikenal dengan nama SWA adalah perusahaan swasta nasional dan merupakan bagian dari Semen Indonesia Group. Berdiri sejak tahun 1988, SWA memiliki kisah sukses yang panjang dan terus tumbuh menjadi perusahaan modern, profesional dan bereputasi prima. SWA memiliki 5 lini bisnis utama yaitu Penyediaan Tenaga Kerja, produksi Air Minum Dalam Kemasan, Jasa Agen Perjalanan, Solusi Teknologi Informasi serta Lembaga Diklat & Sertifikasi.
      </p>
    </div>
  </div>
</div>

            

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              
            </div>

          </div>

        
        </div>

      </div>

    </section><!-- /Why Us Section --> --}}
     <!-- Skills Section -->
     <section id="about" class="skills section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
                <div class="container section-title" data-aos="fade-up">
                    <h2>Tentang Kami</h2>
                </div><!-- End Section Title -->
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-6 d-flex align-items-center">
                            <div id="carouselExampleSlidesOnly" class="carousel slide custom-carousel" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/img/manager.jpg" class="d-block w-100 img-fluid" alt="Manager">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/manager1.jpg" class="d-block w-100 img-fluid" alt="Manager 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/manager2.jpg" class="d-block w-100 img-fluid" alt="Manager 2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3>PT Swabina Gatra</h3>
                            <p style="color: #002359">
                                PT Swabina Gatra atau yang lebih dikenal dengan nama SWA adalah perusahaan swasta 
                                nasional dan merupakan bagian dari Semen Indonesia Group. Berdiri sejak tahun 1988, 
                                SWA memiliki kisah sukses yang panjang dan terus tumbuh menjadi perusahaan modern, 
                                profesional dan bereputasi prima. SWA memiliki 5 lini bisnis utama yaitu Penyediaan 
                                Tenaga Kerja, produksi Air Minum Dalam Kemasan, Jasa Agen Perjalanan, Solusi Teknologi 
                                Informasi serta Lembaga Diklat & Sertifikasi.
                            </p>
                            <button type="button" class="btn btn-outline-custom">
                                Selengkapnya <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>

     {{-- layanan area kami start --}}
    <!-- Skills Section -->
    <section id="skills" class="skills section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">      
                    <!-- Title Section -->
            <div class="container">
              <div class="section-title" data-aos="fade-up">
                <h2>Layanan Area kami</h2>
              </div>
            </div><!-- End Section Title -->
            <div class="container">
                <div class="row gy-4">
                  <div class="col-lg-6 ms-lg-auto mb-4" data-aos="fade-up" data-aos-delay="200" style="text-align: right; font-size : 20px;"> <!-- Added mb-4 class -->
                    <a href="#" class="read-more" style="color : #26508F; font-weight: 600;">Lihat Layanan Selengkapnya<i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
                <!-- Image Section -->
                <div class="row">
                    <div class="col-lg-12 hero-img full-width" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/peta.png" class="img-fluid animated" alt="Peta">
                    </div>
                </div>
            </div>
    </section><!-- /Skills Section -->
    {{-- layanan area kami end --}}

    <!-- Services Section -->
    <section id="Berita" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Berita</h2>
        <div class="container">
                <div class="row gy-4">
                  <div class="col-lg-6 ms-lg-auto mb-4" data-aos="fade-up" data-aos-delay="200" style="text-align: right; font-size : 20px;"> <!-- Added mb-4 class -->
                    <a href="#" class="read-more" style="color : #26508F; font-weight: 600;">Lihat Layanan Selengkapnya<i class="bi bi-arrow-right"></i></a>
                  </div>
        <div class="container">

    <div class="row gy-4">

        <!-- Anggota Tim Pertama -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member text-center">
                <div class="why-us-img">
                    <img src="assets/img/satu.png" class="img-fluid" alt="Pelatihan Character Building" data-aos="zoom-in" data-aos-delay="100">
                </div>
                <div class="member-info">
                    <h4>Pelatihan Character Building di Kantor SWA</h4>
                    <p>Pelatihan Character Building di SWA bertujuan membentuk karakter individu yang unik. Karyawan dapat mengembangkan diri, mencapai prestasi, dan menunjukkan semangat yang membanggakan.</p>
                </div>
            </div>
        </div>

        <!-- Anggota Tim Kedua -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member text-center">
                <div class="why-us-img">
                    <img src="assets/img/dua.png" class="img-fluid" alt="Sarah Johnson" data-aos="zoom-in" data-aos-delay="100">
                </div>
                <div class="member-info">
                    <h4>SWA Gresik Cup Ajang Bulutangki Bergengsi</h4>
                    <p>Turnamen Bulu Tangkis SWA Gresik Cup sukses mendukung olahraga usia dini, mempererat silaturahmi, dan mempromosikan brand SWA dengan antusiasme tinggi.</p>
                </div>
            </div>
        </div>

        <!-- Anggota Tim Ketiga -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member text-center">
                <div class="why-us-img">
                    <img src="assets/img/tiga.png" class="img-fluid" alt="William Anderson" data-aos="zoom-in" data-aos-delay="100">
                </div>
                <div class="member-info">
                    <h4>Penerimaan Sertifikat ISO 450001 : 
                      2018 dan 140001 : 2015</h4>
                    <p>Penerimaan Sertifikat ISO 450001 : 2018 dan 140001 : 2015 yang di peroleh SWA merupakan hasil dari usaha terbaik SWA untuk meningkatkan standar mutu demi kepuasan pelanggan dan penyediaan produk serta layanan yang berkualitas.
                    </p>
                </div>
            </div>
        </div>

    </div><!-- End Row -->
</div><!-- End Container -->

  <footer id="footer" class="footer">

  
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
  <div class="row gy-4">

    <!-- Bagian Tentang Perusahaan -->
    <div class="col-lg-4 col-md-6 footer-about d-flex align-items-start">
      <div class="why-us-img me-3">
        <img src="assets/img/swabina.png" class="img-fluid" alt="PT Swabina Gatra" style="max-width: 80px;">
      </div>
      <div>
        <h4 class="sitename">PT Swabina Gatra</h4>
        <p>PT Swabina Gatra, atau SWA, adalah perusahaan swasta nasional yang bagian dari Semen Indonesia Group. Berdiri sejak 1988, SWA terus berkembang menjadi perusahaan modern dan profesional. SWA memiliki lima bidang utama: penyediaan tenaga kerja, produksi air minum kemasan, jasa agen perjalanan, solusi teknologi informasi, dan lembaga pelatihan serta sertifikasi.</p>
      </div>
    </div>

    <!-- Bagian Informasi Kontak -->
    <div class="col-lg-4 col-md-6 footer-contact">
      <h4>Informasi Kontak</h4>
      <p>
        <i class="bi bi-geo-alt"></i> Kantor Pusat & Pabrik AMDK: <br> Jl. R.A. Kartini No.21 A Gresik 61122, <br> Jawa Timur
      </p>
      <div class="d-flex justify-content-between">
        <p><i class="bi bi-envelope"></i> Email: Marketing@swabina.id</p>
        <p><i class="bi bi-phone"></i> Phone: +62 31 12345678</p>
      </div>
    </div>

    <!-- Bagian Stay Connected -->
    <div class="col-lg-4 col-md-12">
      <h4>Stay Connected</h4>
      <div class="social-links d-flex justify-content-start">
        <a href="#" class="me-2"><i class="bi bi-instagram"></i></a>
        <a href="#" class="me-2"><i class="bi bi-facebook"></i></a>
        <a href="#" class="me-2"><i class="bi bi-twitter"></i></a>
        <a href="#"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </div>

  <!-- Stay Update With Us -->
  <div class="row mt-4">
    <div class="col-lg-6">
      <h5>Stay Update With Us</h5>
      <form action="#" method="post" class="d-flex">
  <input type="email" class="form-control" placeholder="Enter your e-mail here">
  <button type="submit" class="btn btn-primary ms-2 w-auto" style="padding: 0.25rem 0.75rem;">
    <i class="bi bi-send"></i>
  </button>
</form>

    </div>
  </div>
</div>



    
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>