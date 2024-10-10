@extends('index')
@section('name', 'Karir')

@section('content')
<br>
<br>
<br>
<div class="container my-5">
    <!-- Hero Section -->
    <div class="section-title text-center">
        <h2>Karir</h2>
    </div>
    <p class="hero-text text-right">
        Mari bergabung dan berkarir bersama SWABINA. Untuk melamar silahkan 
        <a href="#" class="job-link">klik lowongan</a> yang tersedia.
    </p>

    <!-- Image Section -->
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 text-center">
            <img src="{{ asset('assets/img/karir.png') }}" class="img-fluid hero-image" alt="Karir SWABINA">
        </div>
    </div>
</div>
@endsection
