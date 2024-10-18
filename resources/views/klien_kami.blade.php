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
                    <li><a class="dropdown-item" href="#" data-category="industri-semen">Industri Semen</a></li>
                    <li><a class="dropdown-item" href="#" data-category="logistik">Logistik, Transportasi & Distribusi</a></li>
                    <li><a class="dropdown-item" href="#" data-category="keuangan">Keuangan & Perbankan</a></li>
                    <li><a class="dropdown-item" href="#" data-category="packaging">Packaging Industries</a></li>
                    <li><a class="dropdown-item" href="#" data-category="kesehatan">Kesehatan</a></li>
                    <li><a class="dropdown-item" href="#" data-category="industrial">Industrial</a></li>
                    <li><a class="dropdown-item" href="#" data-category="consumer-goods">Consumer Goods</a></li>
                    <li><a class="dropdown-item" href="#" data-category="energy">Energy</a></li>
                    <li><a class="dropdown-item" href="#" data-category="pertambangan">Pertambangan</a></li>
                    <li><a class="dropdown-item" href="#" data-category="retail">Retail</a></li>
                    <li><a class="dropdown-item" href="#" data-category="fabrikasi">Fabrikasi</a></li>
                    <li><a class="dropdown-item" href="#" data-category="it-komunikasi">Informasi Teknologi & Komunikasi</a></li>
                    <li><a class="dropdown-item" href="#" data-category="developer">Developer</a></li>
                    <li><a class="dropdown-item" href="#" data-category="university">University</a></li>
                    <li><a class="dropdown-item" href="#" data-category="dealer">Dealer</a></li>
                    <li><a class="dropdown-item" href="#" data-category="oil-gas">Oil & Gas</a></li>
                    <li><a class="dropdown-item" href="#" data-category="lain-lain">Lain Lain</a></li>
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

    <!-- Image Grid -->
    <div class="row mt-5 justify-content-center mb-5"> <!-- Added mb-5 class for bottom margin -->
        <div class="col-12">
            <div class="box bg-light p-4">
                <div class="row d-flex justify-content-center" id="image-grid">
                    <!-- Images will be dynamically inserted here -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imageGrid = document.getElementById('image-grid');
        const images = {
            'industri-semen': ['semen_indonesia.png', 'semen1.png', 'semen2.png', 'semen3.png', 'semen4.png', 'semen5.png'],
            'logistik': ['logistik1.png', 'logistik2.png', 'logistik3.png', 'logistik4.png', 'logistik5.png', 'logistik6.png'],
            'keuangan': ['swa.png', 'swa.png', 'swa.png', 'swa.png', 'swa.png'],
            'packaging': ['swa.png', 'swa.png', 'swa.png', 'swa.png', 'swa.png'],
            'kesehatan': ['swa.png', 'swa.png', 'swa.png', 'swa.png', 'swa.png'],
            'industrial': ['swa.png', 'swa.png', 'swa.png', 'swa.png', 'swa.png'],
            'consumer-goods': ['swa.png', 'swa.png', 'swa.png', 'swa.png', 'swa.png'],
            'energy': ['swa.png', 'swa.png', 'swa.png', 'swa.png', 'swa.png'],
            'pertambangan': ['swa.png', 'swa.png', 'swa.png', 'swa.png', 'swa.png'],
            'retail': ['swa.png', 'swa.png', 'swa.png', 'swa.png', 'swa.png'],
            'fabrikasi': ['swa.png', 'swa.png', 'swa.png', 'swa.png', 'swa.png'],
            'it-komunikasi': ['swa.png', 'swa.png', 'swa.png', 'swa.png', 'swa.png'],
            'developer': ['swa.png', 'swa.png', 'swa.png', 'swa.png', 'swa.png'],
            'university': ['swa.png', 'swa.png', 'swa.png', 'swa.png', 'swa.png'],
            'dealer': ['swa.png', 'swa.png', 'swa.png', 'swa.png', 'swa.png'],
            'oil-gas': ['swa.png', 'swa.png', 'swa.png', 'swa.png', 'swa.png'],
            'lain-lain': ['swa.png', 'swa.png', 'swa.png', 'swa.png', 'swa.png']
        };

        document.querySelectorAll('.dropdown-item').forEach(item => {
            item.addEventListener('click', function(event) {
                event.preventDefault();
                const category = this.getAttribute('data-category');
                const categoryImages = images[category] || [];
                imageGrid.innerHTML = ''; // Clear current images

                categoryImages.forEach(image => {
                    const col = document.createElement('div');
                    col.className = 'col-md-2 mb-3';
                    const img = document.createElement('img');
                    img.src = `{{ asset('assets/img/${image}') }}`;
                    img.className = 'img-fluid';
                    img.alt = category;
                    col.appendChild(img);
                    imageGrid.appendChild(col);
                });
            });
        });
    });
</script>
@endsection
