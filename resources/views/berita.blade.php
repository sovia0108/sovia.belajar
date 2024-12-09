@extends('index')
@section('name', 'Berita')

@section('content')
<br>
<br>
<br>
<section class="news-section text-center">
    <div class="container">
        <h2 class="mb-5" style="color: #0056b3;">BERITA</h2>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="news-card position-relative">
                    <img src="{{ asset('assets/img/berita.png') }}" alt="Berita Image" class="news-image img-fluid mx-auto d-block" style="width: 100%; max-height: 600px; object-fit: cover; border-radius: 10px;">
                    <div class="news-overlay position-absolute bottom-0 start-0 w-100 d-flex flex-column justify-content-end align-items-start" style="border-radius: 10px; padding: 20px;">
                        <h3 class="news-title text-white text-start">Pelatihan Character Building di Kantor SWA</h3>
                        <p class="news-description text-white text-start" style="max-width: 80%;">
                            Pelatihan Character Building di SWA bertujuan mengembangkan karakter unik setiap karyawan,
                            meningkatkan prestasi, dan semangat kerja untuk hasil yang membanggakan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container my-5">
    <!-- Row 1 -->
    <div class="row">
        <!-- Card 1 -->
               <div class="col-md-4 mb-4">
            <div class="card">
                <div class="position-relative">
                    <img src="{{ asset('assets/img/image.png') }}" class="card-img-top custom-shadow" alt="Pelatihan Evaluasi & Kalibrasi Kinerja SWA di PJB Tuban">
                </div>
                <div class="card-body position-relative" style="z-index: 2;">
    <h5 class="card-title">Pelatihan Evaluasi & Kalibrasi </h5>
    <p class="card-text" style="text-align: justify;">SWA mengadakan pelatihan evaluasi dan kalibrasi kinerja di PJ Tuban untuk mengevaluasi kinerja karyawan serta memahami cara penilaian kinerja, sebagai bagian dari komitmen untuk menjamin kepuasan pelanggan.</p>
</div>

            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
    <div class="card">
        <img src="{{ asset('assets/img/image2.png') }}" class="card-img-top" alt="Kegiatan Penilaian 5 R SWA">
        <div class="card-body position-relative" style="z-index: 2;">
            <h5 class="card-title">Kegiatan Penilaian 5 R SWA</h5>
            <p class="card-text" style="text-align: justify;">SWA melaksanakan penilaian 5R melalui metode penataan dan pemeliharaan area kerja untuk menjaga ketertiban, efisiensi, disiplin, serta meningkatkan produktivitas dan kinerja perusahaan guna mencapai hasil optimal.</p>
        </div>
    </div>
</div>


        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/image3.png') }}" class="card-img-top" alt="Kegiatan Keagamaan Rutin SWA">
                <div class="card-body position-relative" style="z-index: 2;">
                    <h5 class="card-title">Kegiatan Keagamaan Rutin SWA</h5>
                    <p class="card-text"style="text-align: justify;">SWA mengadakan kegiatan keagamaan sebagai ladang ibadah, diikuti karyawan muslim dan non-muslim, dengan menjalankan ibadah sesuai kepercayaan masing-masing, selain dari kegiatan bekerja.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 2 -->
<div class="row">
    <!-- Card 4 -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('assets/img/image.png') }}" class="card-img-top" alt="Pelatihan Manajemen Waktu">
            <div class="card-body">
                <h5 class="card-title">Pelatihan Manajemen Waktu</h5>
                <p class="card-text" style="text-align: justify;">
                    SWA menyelenggarakan pelatihan manajemen waktu bagi karyawan untuk meningkatkan efisiensi, produktivitas, pengelolaan prioritas, serta kemampuan menyelesaikan tugas tepat waktu demi keberhasilan kerja optimal.
                </p>
            </div>
        </div>
    </div>

    <!-- Card 5 -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('assets/img/image2.png') }}" class="card-img-top" alt="Kegiatan Bakti Sosial">
            <div class="card-body">
                <h5 class="card-title">Kegiatan Bakti Sosial</h5>
                <p class="card-text" style="text-align: justify;">
                SWA menyelenggarakan bakti sosial sebagai wujud tanggung jawab sosial perusahaan, dengan memberikan bantuan untuk mendukung kesejahteraan masyarakat dan meningkatkan kualitas hidup mereka secara berkelanjutan.

            </div>
        </div>
    </div>
    <!-- Card 5 -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('assets/img/image2.png') }}" class="card-img-top" alt="Kegiatan Bakti Sosial">
            <div class="card-body">
                <h5 class="card-title">Workshop kepemimpinan</h5>
                <p class="card-text" style="text-align: justify;">
                Workshop Kepemimpinan SWA bertujuan mengembangkan keterampilan manajemen, komunikasi, dan pengambilan keputusan, agar karyawan menjadi pemimpin efektif yang meningkatkan produktivitas keberhasilan perusahaan.
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection