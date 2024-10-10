@extends('index')
@section('name', 'Kontak Kami')

@section('content')
<br>
<br>
<br>
<div class="container my-5">
    <!-- Title Section -->
    <div class="text-center">
        <h1 class="fw-bold">Hubungi Kami</h1>
        <p class="mb-4">Diskusikan Kebutuhan Digital Perusahaan Anda dengan Swa. Wujudkan Platform Anda Sekarang.</p>
    </div>

    <!-- Subtitle Section -->
    <div class="text-center mb-4">
        <h4 class="fw-bold">Bagaimana Kami Menghubungi Anda?</h4>
    </div>

    <!-- Form Section -->
    <form>
        <div class="row">
            <!-- Nama -->
            <div class="col-md-6 mb-3">
                <label for="name" class="form-label">Nama*</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Anda" required>
            </div>

            <!-- Jenis Usaha -->
            <div class="col-md-6 mb-3">
                <label for="jenis-usaha" class="form-label">Jenis Usaha</label>
                <input type="text" class="form-control" id="jenis-usaha" placeholder="Masukkan Jenis Usaha Anda">
            </div>

            <!-- Email -->
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Email*</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan Email Anda" required>
            </div>

            <!-- Nama Usaha / Perusahaan -->
            <div class="col-md-6 mb-3">
                <label for="nama-perusahaan" class="form-label">Nama Usaha / Perusahaan</label>
                <input type="text" class="form-control" id="nama-perusahaan" placeholder="Masukkan Nama Usaha / Perusahaan Anda">
            </div>

            <!-- Nomor HP -->
            <div class="col-md-6 mb-3">
                <label for="phone" class="form-label">No. HP*</label>
                <div class="input-group">
                    <span class="input-group-text">+62</span>
                    <input type="text" class="form-control" id="phone" placeholder="85123456789" required>
                </div>
            </div>
        </div>

        <!-- Button Section -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Contact and Image Section -->
<div class="container mt-5 mb-5">
    <div class="row align-items-center">
        <!-- Contact Section -->
        <div class="col-md-6">
            <h3 class="fw-bold" style="color: black;">Kontak</h3>
            <div>
                <h6>Kantor Pusat & Pabrik AMDK:</h6>
                <p>
                    Jl. R.A. Kartini No.21 A Gresik 61122, Jawa Timur<br>
                    Tel. 62 31 3984719<br>
                    Fax. 62 31 3985794<br>
                    Email. <a href="mailto:marketing@swabina.id">marketing@swabina.id</a>
                </p>
                <button class="btn btn-primary">Lokasi</button>
            </div>
            <div class="mt-4">
                <h6>Kantor Perwakilan:</h6>
                <p>
                    Desa Sumberarum, Kec. Kerek - Tuban, 62356 Jawa Timur<br>
                    Tel. 62 356 711992<br>
                    Fax. 62 356 711966<br>
                    Email. -
                </p>
                <button class="btn btn-primary">Lokasi</button>
            </div>
        </div>

        <!-- Image Section -->
        <div class="col-md-6">
            <div class="card">
                <img src="{{ asset('assets/img/kantor.png') }}" class="card-img-top" alt="Kantor">
            </div>
        </div>
    </div>
</div>

<!-- Google Maps Section -->
<div class="container mt-5 mb-5">
    <div class="ratio ratio-16x9">
        <iframe 
            src="https://maps.google.com/maps?q=pt+swabina+gatra&t=&z=13&ie=UTF8&iwloc=&output=embed" 
            width="600" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>
</div>
@endsection