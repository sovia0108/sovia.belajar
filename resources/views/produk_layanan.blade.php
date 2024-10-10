@extends('index')
@section('name', 'Produk Layanan')

@section('content')
<br>
<br>
<br>
<!-- Produk & Layanan Section -->
<section id="products" class="products section light-background">

  <!-- Section Title -->
  <div class="container section-title text-center" data-aos="fade-up">
    <h2>Produk & Layanan</h2>
  </div>
  <!-- End Section Title -->

  <div class="container">
    <div class="row gy-4">

      <!-- Product 1 -->
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="card h-100 text-center p-3 shadow-sm">
          <div class="card-body">
            <img src="{{asset('assets/img/facility.png')}}" class="mb-4" alt="facility" style="max-width: 60px;">
            <h4 class="card-title">SWA Facility Management</h4>
            <p class="card-text">
            Sejak 1988, SWA Facility Management menyediakan tenaga kerja berkualitas yang mendukung kinerja bisnis mitra. Layanan mencakup cleaning service, driver, tenaga pengamanan, pemeliharaan, pengantongan, administrasi, operator, dan resepsionis. SWA memastikan kualitas melalui rekrutmen akurat, pelatihan komprehensif, serta evaluasi berkala. Mereka juga meraih sertifikasi ISO 9001:2015 (manajemen mutu), ISO 45001:2018 (kesehatan dan keselamatan kerja), serta ISO 14001:2015 (manajemen lingkungan), membuktikan komitmen terhadap layanan berkualitas.
            </p>
          </div>
        </div>
      </div>
      <!-- End Product 1 -->

      <!-- Product 2 -->
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="card h-100 text-center p-3 shadow-sm">
          <div class="card-body">
            <img src="{{asset('assets/img/swa1.png')}}" class="mb-4" alt="SWA Segar" style="max-width: 60px;">
            <h4 class="card-title">SWA Segar</h4>
            <p class="card-text">
            Untuk memenuhi kebutuhan air minum berkualitas tinggi, SWA memperkenalkan SWA Segar, air higienis dari mata air alami di Pandaan. Diproduksi dengan peralatan modern serta pengawasan mutu ketat, SWA Segar memastikan kualitas prima. Produk ini telah memperoleh sertifikasi Halal, ISO 9001:2005, serta memenuhi standar BPOM dan SNI. SWA Segar hadir dalam kemasan beragam: galon 19 liter, gelas 240 ml, botol 330 ml, 600 ml, serta 1500 ml, menawarkan pilihan praktis dan sehat bagi konsumen yang peduli akan kualitas air minum.
            </p>
          </div>
        </div>
      </div>
      <!-- End Product 2 -->

      <!-- Product 3 -->
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="card h-100 text-center p-3 shadow-sm">
          <div class="card-body">
            <img src="{{asset('assets/img/swa2.png')}}" class="mb-4" alt="SWA Facility Management" style="max-width: 60px;">
            <h4 class="card-title">SWA Facility Management</h4>
            <p class="card-text">
            Sejak 1988, SWA Facility Management menyediakan tenaga kerja berkualitas yang mendukung kinerja bisnis mitra. Layanan mencakup cleaning service, driver, tenaga pengamanan, pemeliharaan, pengantongan, administrasi, operator, dan resepsionis. SWA memastikan kualitas melalui rekrutmen akurat, pelatihan komprehensif, serta evaluasi berkala. Mereka juga meraih sertifikasi ISO 9001:2015 (manajemen mutu), ISO 45001:2018 (kesehatan dan keselamatan kerja), serta ISO 14001:2015 (manajemen lingkungan), membuktikan komitmen terhadap layanan berkualitas.
            </p>
          </div>
        </div>
      </div>
      <!-- End Product 3 -->

    </div>

    <!-- New Row for 2 Centered Products -->
    <div class="row justify-content-center gy-4 mt-4">

      <!-- Centered Product 1 -->
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="card h-100 text-center p-3 shadow-sm">
          <div class="card-body">
            <img src="{{asset('assets/img/swa3.png')}}" class="mb-4" alt="Centered Product 1" style="max-width: 60px;">
            <h4 class="card-title">Swa digital solution</h4>
            <p class="card-text">
            Perkembangan teknologi informasi mempengaruhi perilaku bisnis dan meningkatkan persaingan, sehingga pelaku bisnis perlu menerapkannya untuk efisiensi. SWA Digital Solution menyediakan solusi teknologi informasi inovatif dan aman, termasuk Human Resources Information System (HRIS) dan Enterprise Resource Planning (ERP). Dengan tim profesional, SWA Digital Solution siap menghadirkan hasil terbaik yang dapat diandalkan.
            </p>
          </div>
        </div>
      </div>
      <!-- End Centered Product 1 -->

      <!-- Centered Product 2 -->
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="card h-100 text-center p-3 shadow-sm">
          <div class="card-body">
            <img src="{{asset('assets/img/academy.png')}}" class="mb-4" alt="Centered Product 2" style="max-width: 60px;">
            <h4 class="card-title">SWA Academy </h4>
            <p class="card-text">
            Sertifikasi profesi memastikan kompetensi yang diperoleh dari pembelajaran, pelatihan, atau pengalaman kerja. SWA Academy menjawab kebutuhan ini dengan menyediakan program diklat dan pelatihan bersertifikat yang telah dilisensi oleh BNSP. Mereka menawarkan layanan diklat profesi, sertifikasi, dan psikologi korporasi, dikelola secara profesional oleh tenaga ahli, dan berkomitmen menjaga kualitas sertifikasi sesuai standar yang berlaku.
            </p>
          </div>
        </div>
      </div>
      <!-- End Centered Product 2 -->

    </div>
  </div>

</section>
<!-- End Produk & Layanan Section -->


@endsection
 