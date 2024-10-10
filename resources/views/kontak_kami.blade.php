@extends('index')
@section('name', 'Kontak Kami')

@section('content')
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
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </form>
</div>

<!-- Contact and Image Section -->
<div class="container mt-5">
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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Google Maps with Bootstrap 5</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    
    
    <div class="ratio ratio-16x9">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.2748206219357!2d144.9537363159289!3d-37.81720997975171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf0727dbcae373c1d!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1645540321634!5m2!1sen!2sau" 
            width="600" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>
</div>
@endsection
