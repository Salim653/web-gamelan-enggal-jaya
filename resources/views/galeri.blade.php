@extends('layouts.main')

@section('title', 'Galeri - Gamelan Enggal Jaya Solo')

@section('content')
<section class="section performances-section">
    <h2 class="section-title">Galeri Kami</h2>
    <p class="section-description">Jelajahi Galeri Kami, Temukan koleksi keindahan musik gamelan serta keahlian kerajinan tangan kami. Setiap momen yang terekam menggambarkan harmonisasi gamelan yang kami ciptakan, menonjolkan keunikan dan kekayaan tradisi yang kami pelihara dengan penuh dedikasi.</p>

    <h3 class="sub-section-title">Video Unggulan</h3>
    <div class="videos-container">
        {{-- Video 1 --}}
        <div class="video-card">
            <div class="video-thumbnail">
                <div class="play-button"><i class="fas fa-play"></i></div>
                <img src="{{ asset('video1.mp4') }}" class="video-img" alt="Traditional Javanese Gamelan Concert">
            </div>
            <div class="video-info">
                <h4>Tradisional Gamelan Jawa</h4>
                <p>Gamelan Set, Juni 2017</p>
            </div>
        </div>

        {{-- Video 2 --}}
        <div class="video-card">
            <div class="video-thumbnail">
                <div class="play-button"><i class="fas fa-play"></i></div>
                <img src="{{ asset('video2.mp4') }}" class="video-img" alt="Instrument Crafting Workshop">
            </div>
            <div class="video-info">
                <h4 class="video-title">Proses Pembuatan Gamelan</h4>
                <p class="video-description">Pengrajin, September 2019</p>
            </div>
        </div>

        {{-- Video 3 --}}
        <div class="video-card">
            <div class="video-thumbnail">
                <div class="play-button"><i class="fas fa-play"></i></div>
                <img src="{{ asset('video3.mp4') }}" class="video-img" alt="Contemporary Fusion Performance">
            </div>
            <div class="video-info">
                <h4 class="video-title">Set Gamelan</h4>
                <p class="video-description">July 2021</p>
            </div>
        </div>
    </div>

    <h3 class="sub-section-title">Photo Unggulan</h3>
    {{-- Photo 1 --}}
    <div class="gallery-container">
        <div class="gallery-item">
            <img src="{{ asset('gallery1.jpg') }}" class="gallery-img" alt="Gamelan Gong">
        </div>

    {{-- Photo 2 --}}
    <div class="gallery-container">
        <div class="gallery-item">
            <img src="{{ asset('gallery2.jpg') }}" class="gallery-img" alt="Instrument Crafting Process">
        </div>

    {{-- Photo 3 --}}
    <div class="gallery-container">
        <div class="gallery-item">
            <img src="{{ asset('gallery3.jpg') }}" class="gallery-img" alt="Gamelan Instruments">
        </div>

    {{-- Photo 4 --}}
    <div class="gallery-container">
        <div class="gallery-item">
            <img src="{{ asset('gallery4.jpg') }}" class="gallery-img" alt="Outdoor Performance">
        </div>

    {{-- Photo 5 --}}
    <div class="gallery-container">
        <div class="gallery-item">
            <img src="{{ asset('gallery5.jpg') }}" class="gallery-img" alt="Gamelan Ensemble">
        </div>

    {{-- Photo 6 --}}
    <div class="gallery-container">
        <div class="gallery-item">
            <img src="{{ asset('gallery6.jpg') }}" class="gallery-img" alt="Gamelan Instruments Collection">
        </div>

    {{-- Photo 7 --}}
    <div class="gallery-container">
        <div class="gallery-item">
            <img src="{{ asset('gallery7.jpg') }}" class="gallery-img" alt="Performance Silhouette">
        </div>

    {{-- Photo 8 --}}
    <div class="gallery-container">
        <div class="gallery-item">
            <img src="{{ asset('gallery8.jpg') }}" class="gallery-img" alt="Performance Silhouette">
        </div>
    </div>
</section>
@endsection
