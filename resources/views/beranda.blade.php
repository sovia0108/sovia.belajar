@extends('index')
@section('name', 'Beranda')

@section('content')

  <main class="main">

    {{-- header start --}}
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-1 order-lg-1 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
          <div class="col-lg-6 order-2 order-lg-2 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>PT Swabina Gatra</h1>
            <p>Menjadi perusahaan yang dapat tumbuh
              dan berkembang dengan sehat dan selalu
              unggul di bidangnya </p>
            <div class="d-flex">
                <a href="#about" class="btn btn-outline-light btn-custom-radius">
                    <i class="bi bi-whatsapp"></i> Hubungi Kami
                </a>
            </div>
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
                    <a href="{{ route('klien_kami') }}" class="read-more" style="color : #26508F; font-weight: 600;">Lihat Layanan Selengkapnya<i class="bi bi-arrow-right"></i></a>
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

    {{-- berita start --}}
    <section id="Berita" class="services section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Berita</h2>
        <div class="container">
            <div class="row gy-4">
              <div class="row gy-4">
                <div class="col-lg-6 ms-lg-auto mb-2" data-aos="fade-up" data-aos-delay="200" style="text-align: right; font-size : 20px;"> <!-- Added mb-4 class -->
                  <a href="#" class="read-more" style="color : #26508F; font-weight: 600;">Lihat Layanan Selengkapnya<i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
                <!-- Anggota Tim Pertama -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member text-center">
                        <div class="why-us-img">
                            <img src="assets/img/satu.png" class="img-fluid" alt="Pelatihan Character Building" data-aos="zoom-in" data-aos-delay="100">
                        </div>
                        <div class="member-info mt-4">
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
                        <div class="member-info mt-4">
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
                        <div class="member-info mt-4">
                            <h4>Penerimaan Sertifikat ISO 450001 : 
                              2018 dan 140001 : 2015</h4>
                            <p>Penerimaan Sertifikat ISO 450001 : 2018 dan 140001 : 2015 yang di peroleh SWA merupakan hasil dari usaha terbaik SWA untuk meningkatkan standar mutu demi kepuasan pelanggan dan penyediaan produk serta layanan yang berkualitas.
                            </p>
                        </div>
                    </div>
                </div>

            </div><!-- End Row -->
        </div><!-- End Container -->
    </section>
@endsection