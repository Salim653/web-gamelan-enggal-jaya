@extends('layouts.main')

@section('title', 'Home - Gamelan Enggal Jaya Solo')

@section('content')
<!-- Hero Section -->
<section class="hero" style="background-image: url('{{ asset('background.jpg') }}'); background-size: cover; background-position: center;">
    <div class="hero-content">
        <h1 style="font-family: 'Times New Roman', Times, serif !important; font-weight: 900 !important;">Experience the Magic of Gamelan</h1>
        <p>Merangkai warisan budaya lewat nada – Gamelan buatan pengrajin Solo yang penuh presisi, jiwa, dan tradisi. Sejak tahun 2006</p>
        <div class="hero-buttons">
            <a href="{{ url('/contact') }}" class="btn">Contact Us</a>
            <a href="{{ url('/gamelan') }}" class="btn btn-outline">Explore Instruments</a>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section">
    <h2 class="section-title" style="font-family: 'Times New Roman', Times, serif !important; font-weight: 900 !important;">Tentang Gamelan Enggal Jaya Solo</h2>
    <div class="about-container">
        <div class="about-image">
            <img src="enggaljaya.jpg" alt="Gamelan Enggal Jaya Workshop">
        </div>
        <div class="about-content">
            <h2 style="font-family: 'Times New Roman', Times, serif !important; font-weight: 900 !important; color: #8B4513; text-align: center;">"Dari Solo, kami merawat gema budaya."</h2>
            
            <p style="text-indent: 2em;">Gamelan Enggal Jaya Solo didirikan dengan semangat untuk melestarikan dan mengembangkan warisan budaya Indonesia melalui pembuatan instrumen gamelan berkualitas tinggi. Berawal dari keterlibatan keluarga dalam kerajinan dudukan gamelan kayu, kami mulai merintis produksi gamelan logam secara mandiri pada tahun 2006. Dengan menggabungkan keahlian teknik dan pemahaman mendalam terhadap tradisi, kami membangun fondasi usaha yang bertumpu pada nilai ketelitian, kualitas, dan penghormatan terhadap budaya leluhur.</p>
            
            <p style="text-indent: 2em;">Seluruh proses produksi dilakukan secara manual di workshop kami di Solo, oleh tim pengrajin berpengalaman. Setiap instrumen dikerjakan dengan presisi dan kepekaan seni, menggunakan bahan pilihan seperti besi, kuningan, dan perunggu. Kami meyakini bahwa gamelan bukan sekadar alat musik, melainkan representasi dari kekayaan budaya yang perlu dijaga dengan sepenuh hati. Oleh karena itu, setiap produk yang dihasilkan tidak hanya memenuhi standar suara, tetapi juga mencerminkan nilai estetika dan filosofi yang terkandung dalam budaya Jawa.</p>
            
            <p style="text-indent: 2em;">Selama lebih dari satu dekade, Gamelan Enggal Jaya Solo telah melayani berbagai institusi, komunitas seni, dan pelanggan individu di seluruh Indonesia maupun mancanegara. Karya kami telah dipercaya hingga ke Malaysia, Amerika Serikat, dan sejumlah negara Eropa. Komitmen kami adalah menghadirkan gamelan sebagai warisan hidup yang relevan di masa kini dan masa depan—dengan menjaga kualitas, mempertahankan tradisi, dan terus memperkenalkan suara Indonesia ke dunia.</p>
            
            <div class="features">
                <div class="feature">
                    <div class="feature-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <span>Kerajinan Tradisional</span>
                </div>
                <div class="feature">
                    <div class="feature-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <span>Material Berkualitas Tinggi</span>
                </div>
                <div class="feature">
                    <div class="feature-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <span>Pelestarian Budaya</span>
                </div>
                <div class="feature">
                    <div class="feature-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <span>Pengiriman Internasional</span>
                </div>
            </div>
            
            <!-- Tombol Selengkapnya tentang kami di bawah fitur-fitur -->
            <div class="about-button-container" style="margin-top: 25px; text-align: right;">
                <a href="{{ url('/about') }}" class="btn" style="background-color: #8B4513; color: white;">Selengkapnya tentang kami</a>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="section newsletter-section">
    <h2 class="section-title" style="font-family: 'Times New Roman', Times, serif !important; font-weight: 900 !important;">Stay Connected</h2>

    <div class="newsletter-container">
        <p class="newsletter-description">
            Jangan lewatkan informasi seputar produk baru, dan penawaran menarik dari kami.
     </p>
    
     <form class="newsletter-form" method="POST" action="{{ route('newsletter.store') }}">
        @csrf
        <input type="email" name="email" placeholder="Your email address" class="newsletter-input" required>
        <button type="submit" class="newsletter-button">Subscribe</button>
    </form>    
    
        <p class="privacy-note">Kami menghargai privasi Anda dan tidak akan membagikan informasi Anda kepada pihak lain. Anda dapat berhenti berlangganan kapan saja.</p>
    </div>
</section>

<!-- Social Media -->
<section class="section social-container">
    <h2 class="section-title">Connect With Us</h2>
    
    <div class="social-icons">
        <a href="#" class="social-icon">
            <div class="icon-circle">
                <i class="fab fa-instagram"></i>
            </div>
            <span>@enggaljayasolo</span>
        </a>
        
        <a href="#" class="social-icon">
            <div class="icon-circle">
                <i class="fab fa-facebook-f"></i>
            </div>
            <span>Gamelan Enggal Jaya Solo</span>
        </a>
        
        <a href="#" class="social-icon">
            <div class="icon-circle">
                <i class="fab fa-youtube"></i>
            </div>
            <span>Gamelan Enggal Jaya Solo</span>
        </a>
        
    </div>
</section>
@endsection