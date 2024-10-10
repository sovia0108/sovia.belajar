@extends('index')
@section('name', 'Mengapa Memilih Kami')

@section('content')
<br>
<br>
<br>
<section class="why-choose-us">
    <div class="container">
        <div class="section-title text-center">
            <h2>Mengapa Memilih Kami</h2>
        </div>
        <div class="row text-center">
            <!-- Competence Section -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="icon mb-3">
                    <img src="{{ asset('assets/img/frame 83.png') }}" alt="Competence Icon" style="width: 50px;">
                </div>
                <h4>Competence</h4>
                <p class="text-start">
                    SWA memperkuat kompetensi dan keunggulan karyawan untuk bersaing di era kompetitif. Setiap karyawan harus memahami 5 Kompetensi Dasar: 
                    religius dan nasionalis, budaya SWA, K3, 5R, serta Service Excellent. 
                    SWA meningkatkan kualitas melalui sertifikasi untuk memperkuat kepercayaan pelanggan.
                </p>
            </div>

            <!-- Integrity Section -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="icon mb-3">
                    <img src="{{ asset('assets/img/frame 85.png') }}" alt="Integrity Icon" style="width: 50px;">
                </div>
                <h4>Integrity</h4>
                <p class="text-start">
                    SWA selalu memiliki keteguhan dalam menjunjung tinggi nilai-nilai integritas dan telah menjadi budaya kerja sehari-hari. 
                    Dengan integritas, SWA secara konsisten mampu menjaga kredibilitas Perusahaan melalui pelayanan prima yang terpercaya.
                </p>
            </div>

            <!-- Excellent Section -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="icon mb-3">
                    <img src="{{ asset('assets/img/frame 86.png') }}" alt="Excellent Icon" style="width: 50px;">
                </div>
                <h4>Excellent</h4>
                <p class="text-start">
                    Menjaga produk dan layanan berada pada kualitas yang excellent adalah prioritas utama bagi SWA. 
                    Melalui pengawasan mutu yang dilakukan secara berkala, SWA memastikan Pelanggan mendapatkan produk dan layanan terbaik 
                    melebihi ekspektasi mereka.
                </p>
            </div>
        </div>

        <!-- Two boxes below with same size as above -->
        <div class="row mt-5 text-center">
            <!-- First Box with Icon -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="icon mb-3">
                    <img src="{{ asset('assets/img/frame 84.png') }}" alt="Inovasi Icon" style="width: 50px;">
                </div>
                <div class="box text-start">
                    <h4>Inovasi</h4>
                    <p>
                        SWA terus berinovasi untuk memenuhi kebutuhan pelanggan dan pasar yang terus berkembang. 
                        Inovasi menjadi elemen kunci dalam memastikan SWA tetap menjadi yang terbaik dalam industri yang 
                        semakin kompetitif. Dengan investasi yang berkelanjutan dalam teknologi dan sumber daya manusia, 
                        SWA berupaya memberikan solusi terbaik.
                    </p>
                </div>
            </div>

            <!-- Second Box with image on the right -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="box text-start d-flex align-items-start">
                    <div class="icon mb-3">
                        <img src="{{ asset('assets/img/frame 87.png') }}" alt="Keberlanjutan Icon" style="width: 50px;">
                    </div>
                    <div class="flex-grow-1">
                        <h4>Keberlanjutan</h4>
                        <p>
                            Keberlanjutan adalah bagian dari komitmen SWA dalam menjaga lingkungan dan memberikan dampak positif 
                            kepada masyarakat. Melalui program tanggung jawab sosial perusahaan, SWA berkontribusi dalam menciptakan 
                            lingkungan yang lebih baik untuk generasi masa depan.
                        </p>
                    </div>
                </div>
                <div class="text-center">
                    <img src="{{ asset('assets/img/orang.png') }}" class="img-fluid" alt="Keberlanjutan" style="width: 250px;">
                </div>
            </div>

            <!-- Add a third empty column for alignment -->
            <div class="col-lg-4 col-md-6 mb-4"></div>
        </div>
    </div>
</section>
@endsection
