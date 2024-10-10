@extends('index')
@section('name', 'Karir')

@section('content')
<div class="container my-5">
    <!-- Hero Section -->
    <div class="section-title text-center">
            <h2>Karir</h2>
        </div>
            <p class="hero-text">
                Mari bergabung dan berkarir bersama SWABINA. Untuk melamar silahkan 
                <a href="#" class="job-link">klik lowongan</a> yang tersedia.
            </p>
        </div>
    </div>

    <!-- Image Section -->
    <div class="row">
        <div class="col-12">
            <img src="{{ asset('assets/img/karir.png') }}" class="img-fluid hero-image" alt="Karir SWABINA">
        </div>
    </div>
</div>

@endsection