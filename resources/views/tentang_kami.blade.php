@extends('index')
@section('name', 'Tentang Kami')

@section('content')
<!-- Section: Visi dan Misi -->
<section class="vision-mission-section background-pattern py-5">
    <div class="container">
        <div class="section-title text-center mb-4">
            <h2>Tentang Kami</h2>
        </div>
        <div class="row">
            <!-- Visi -->
            <div class="col-12">
                <h3>Visi</h3>
                <p>Menjadi Perusahaan yang dapat tumbuh dan berkembang dengan sehat dan selalu unggul dibidangnya.</p>
            </div>
            <!-- Misi -->
            <div class="col-12 mt-4">
                <h3>Misi</h3>
                <ul class="list-unstyled mission-list">
                    <li><i class="bi bi-check-circle-fill"></i> Meningkatkan dan mengembangkan bidang usaha utama (Core Business).</li>
                    <li><i class="bi bi-check-circle-fill"></i> Meningkatkan dan mengembangkan bidang usaha penunjang sebagai usaha untuk mendukung pendapatan dari kegiatan bidang usaha utama.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Meningkatkan kualitas pengelolaan sumber daya manusia yang berdaya saing tinggi guna mendukung penyediaan tenaga kerja yang profesional.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Menghasilkan laba yang wajar dan memberikan dividen yang memuaskan bagi Pemegang Saham.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Section: Timeline/Jejak Langkah -->
<section class="timeline-section background-light py-5">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h2>Jejak Langkah</h2>
        </div>
        <div class="row justify-content-center">
            <!-- Timeline Item 1 -->
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 text-center p-4 shadow-sm">
                    <div class="timeline-icon mb-4">
                        <img src="{{ asset('path/to/icon1.png') }}" alt="Icon 1" style="width: 60px;">
                    </div>
                    <h4 class="timeline-year">1998</h4>
                    <p class="card-text">SWA memulai sebagai jasa cleaning service untuk PT Semen Gresik dan berkembang menjadi perusahaan tenaga kerja serta pemborong, melayani berbagai industri di Indonesia dengan kualitas prima.</p>
                </div>
            </div>
            <!-- Timeline Item 2 -->
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 text-center p-4 shadow-sm">
                    <div class="timeline-icon mb-4">
                        <img src="{{ asset('path/to/icon2.png') }}" alt="Icon 2" style="width: 60px;">
                    </div>
                    <h4 class="timeline-year">2000</h4>
                    <p class="card-text">SWA memperluas bisnis dengan mendirikan Swabina Gatra Travel, kini dikenal sebagai SWA Tour & Event Organizer, yang terdaftar di ASITA dan terakreditasi IATA untuk layanan perjalanan.</p>
                </div>
            </div>
            <!-- Timeline Item 3 -->
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 text-center p-4 shadow-sm">
                    <div class="timeline-icon mb-4">
                        <img src="{{ asset('path/to/icon3.png') }}" alt="Icon 3" style="width: 60px;">
                    </div>
                    <h4 class="timeline-year">2009</h4>
                    <p class="card-text">SWA mengembangkan bisnis dengan memproduksi air minum dalam kemasan (AMDK) bermerek 'SWA', yang telah lolos akreditasi dan meraih sertifikasi ISO 900 untuk mutu.</p>
                </div>
            </div>
            <!-- Timeline Item 4 -->
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 text-center p-4 shadow-sm">
                    <div class="timeline-icon mb-4">
                        <img src="{{ asset('path/to/icon4.png') }}" alt="Icon 4" style="width: 60px;">
                    </div>
                    <h4 class="timeline-year">2021</h4>
                    <p class="card-text">Pada 2021, SWA melakukan transformasi bisnis menjadi perusahaan modern, meningkatkan efisiensi, dan daya saing menghadapi tantangan serta kompetisi yang semakin ketat.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Sertifikat dan Penghargaan -->
<section class="certificates-section py-5">
    <div class="container">
        <div class="section-title text-center mb-4">
            <h2>Sertifikat dan Penghargaan</h2>
            <p>Kepercayaan pelanggan adalah prioritas utama SWA. Untuk itu, SWA menjaga kualitas produk dan layanan, yang telah diakui dengan berbagai penghargaan. Kedepannya, SWA akan terus berinovasi dan menjaga mutu untuk meningkatkan kualitas produk dan layanan.</p>
        </div>

        <!-- Carousel Start -->
        <div id="certificatesCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Item 1 -->
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-md-4 mb-3">
                            <img src="{{ asset('assets/img/image 22.png') }}" class="d-block w-100" alt="Certificate 1">
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="{{ asset('assets/img/image 23.png') }}" class="d-block w-100" alt="Certificate 2">
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="{{ asset('assets/img/image 24.png') }}" class="d-block w-100" alt="Certificate 3">
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-4 mb-3">
                            <img src="{{ asset('assets/img/image 22.png') }}" class="d-block w-100" alt="Certificate 4">
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="{{ asset('assets/img/image 23.png') }}" class="d-block w-100" alt="Certificate 5">
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="{{ asset('assets/img/image 24.png') }}" class="d-block w-100" alt="Certificate 6">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#certificatesCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#certificatesCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Carousel End -->
    </div>
</section>

@endsection
