@extends('index')
@section('name', 'Mengapa Memilih Kami')

@section('content')
<div class="container mt-5 container-custom">
    <div class="row align-items-center"> <!-- Align vertically centered -->
        <div class="col-md-6 text-section">
            <h2>Klien Kami</h2>
            <p>
                SWA dengan bangga melayani berbagai perusahaan terkemuka di Indonesia dari sektor teknologi,
                keuangan, manufaktur, ritel, kesehatan, dan pendidikan. Keberagaman klien kami adalah bukti kemampuan kami
                dalam memberikan solusi yang efektif dan tepat sasaran. Terima kasih atas kepercayaan Anda.
            </p>
        </div>
        <div class="col-md-6 image-section d-flex justify-content-center"> <!-- Center image horizontally -->
            <img src="{{ asset('assets/img/icon.png') }}" alt="Peta Indonesia dan Wanita" class="img-fluid" style="max-width: 80%; height: auto;">
        </div>
    </div>
</div>
<div class="container mt-5 container-custom">
    <div class="row justify-content-between">
        <!-- Dropdown Kategori -->
        <div class="col-md-4">
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle w-100" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Cari Kategori...
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="max-height: 200px; overflow-y: auto;">
                    <li><a class="dropdown-item" href="#">Industri Semen</a></li>
                    <li><a class="dropdown-item" href="#">Logistik, Transportasi & Distribusi</a></li>
                    <li><a class="dropdown-item" href="#">Keuangan & Perbankan</a></li>
                    <li><a class="dropdown-item" href="#">Packaging Industries</a></li>
                    <li><a class="dropdown-item" href="#">Kesehatan</a></li>
                    <li><a class="dropdown-item" href="#">Industrial</a></li>
                    <li><a class="dropdown-item" href="#">Consumer Goods</a></li>
                    <li><a class="dropdown-item" href="#">Energy</a></li>
                    <li><a class="dropdown-item" href="#">Pertambangan</a></li>
                    <li><a class="dropdown-item" href="#">Retail</a></li>
                    <li><a class="dropdown-item" href="#">Fabrikasi</a></li>
                    <li><a class="dropdown-item" href="#">Informasi Teknologi & Komunikasi</a></li>
                    <li><a class="dropdown-item" href="#">Developer</a></li>
                    <li><a class="dropdown-item" href="#">University</a></li>
                    <li><a class="dropdown-item" href="#">Dealer</a></li>
                    <li><a class="dropdown-item" href="#">Oil & Gas</a></li>
                    <li><a class="dropdown-item" href="#">Lain Lain</a></li>
                </ul>
            </div>
        </div>

        <!-- Input Pencarian -->
        <div class="col-md-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari..." aria-label="Cari...">
                <button class="btn btn-outline-primary" type="button">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
    </div>
</div>




@endsection
