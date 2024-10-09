@extends('index')
@section('name', 'Mengapa Memilih Kami')

@section('content')
<section class="why-choose-us mt-5">
    <div class="container">
        <div class="section-title text-center">
            <h2>Mengapa Memilih Kami</h2>
        </div>
        <div class="row text-center">
            <!-- Competence Section -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="icon mb-3">
                    <img src="path/to/competence-icon.png" alt="Competence Icon" style="width: 50px;">
                </div>
                <h4>Competence</h4>
                <p class="text-justify-custom">
                    SWA memperkuat kompetensi dan keunggulan karyawan untuk bersaing di era kompetitif. Setiap karyawan harus memahami 5 Kompetensi Dasar: 
                    religius dan nasionalis, budaya SWA, K3, 5R, serta Service Excellent. 
                    SWA meningkatkan kualitas melalui sertifikasi untuk memperkuat kepercayaan pelanggan.
                </p>
            </div>

            <!-- Integrity Section -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="icon mb-3">
                    <img src="path/to/integrity-icon.png" alt="Integrity Icon" style="width: 50px;">
                </div>
                <h4>Integrity</h4>
                <p class="text-justify-custom">
                    SWA selalu memiliki keteguhan dalam menjunjung tinggi nilai-nilai integritas dan telah menjadi budaya kerja sehari-hari. 
                    Dengan integritas, SWA secara konsisten mampu menjaga kredibilitas Perusahaan melalui pelayanan prima yang terpercaya.
                </p>
            </div>

            <!-- Excellent Section -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="icon mb-3">
                    <img src="path/to/excellent-icon.png" alt="Excellent Icon" style="width: 50px;">
                </div>
                <h4>Excellent</h4>
                <p class="text-justify-custom">
                    Menjaga produk dan layanan berada pada kualitas yang excellent adalah prioritas utama bagi SWA. 
                    Melalui pengawasan mutu yang dilakukan secara berkala, SWA memastikan Pelanggan mendapatkan produk dan layanan terbaik 
                    melebihi ekspektasi mereka.
                </p>
            </div>
        </div>

        <!-- Two boxes below with same size as above -->
        <div class="row mt-5 text-center">
            <!-- First Box -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="box text-justify-custom">
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
                <div class="d-flex align-items-center box" style="margin-left: 15px;">
                    <div class="text-justify-custom flex-grow-1">
                        <h4>Keberlanjutan</h4>
                        <p>
                            Keberlanjutan adalah bagian dari komitmen SWA dalam menjaga lingkungan dan memberikan dampak positif 
                            kepada masyarakat. Melalui program tanggung jawab sosial perusahaan, SWA berkontribusi dalam menciptakan 
                            lingkungan yang lebih baik untuk generasi masa depan.
                        </p>
                    </div>
                    <div class="ml-auto" style="margin-left: 30px;">
                        <img src="{{asset('assets/img/orang.png')}}" alt="Keberlanjutan" style="width: 300px; height: 300px;">
                    </div>
                </div>
            </div>

            <!-- Add a third empty column for alignment -->
            <div class="col-lg-4 col-md-6 mb-4"></div>
        </div>
    </div>
</section>



@endsection