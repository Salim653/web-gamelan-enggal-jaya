@extends('layouts.main')

@section('title', 'Gamelan Kami - Gamelan Enggal Jaya Solo')

@section('content')
<section class="hero-banner" style="background-image: url('{{ asset('instruments-banner.jpg') }}');">
    <div class="hero-content">
        <h1 style="font-family: 'Times New Roman', serif; font-weight: 900;">Gamelan Kami</h1>
        <p>Jelajahi Koleksi Gamelan Kami, Temukan Variasi Setiap Gamelan.</p>
    </div>
</section>

<section class="section">
    <div class="content-container">
        <h2 class="section-title">Keanggunan Gamelan Enggal Jaya</h2>
        <div class="text-content">
            <p>Di Gamelan Enggal Jaya Solo, kami menghadirkan beragam instrumen gamelan tradisional yang menjadi inti dari musik klasik Indonesia. Setiap instrumen dibuat secara manual dengan ketelitian tinggi, menggunakan teknik turun-temurun dan bahan pilihan untuk memastikan kualitas suara yang unggul, daya tahan, serta keaslian budaya.</p>
                
            <p>Baik Anda seorang musisi profesional, lembaga pendidikan, maupun kelompok seni budaya, instrumen kami memberikan suara yang kaya dan beresonansi dalam, mencerminkan keindahan dan kedalaman tradisi gamelan Jawa maupun Bali.</p>
        </div>
    </div>
</section>

<section class="section bg-light">
    <div class="content-container">
        <div class="instruments-grid">
            <!-- Instrument 1 -->
            <div class="instrument-card">
                <div class="instrument-image">
                    <img src="{{ asset('saron.jpg') }}" alt="Saron">
                </div>
                <div class="instrument-details">
                    <h3>Saron</h3>
                    <p class="instrument-description">Saron merupakan salah satu instrumen utama dalam ensambel gamelan, terdiri dari bilah-bilah logam yang diletakkan di atas resonator kayu.</p>
                        <p class="instrument-price">Mulai dari Rp 1,6-14jt</p>
                        <a href="#" class="instrument-button">Lihat Lebih Lanjut</a>
                </div>
            </div>

            {{-- Instrument 2 --}}
            <div class="instrument-card">
                <div class="instrument-image">
                    <img src="{{ asset('gong.jpg') }}" alt="Gong Ageng - Large Gong">
                </div>
                <div class="instrument-details">
                    <h3>Gong Ageng</h3>
                    <p class="instrument-description">Gong merupakan salah satu instrumen paling penting dan dikenal dalam ansambel gamelan. Dibuat dari perunggu pilihan dan digantung dalam rangka kayu, gong menghasilkan suara yang dalam, bergetar panjang, dan penuh makna. </p>
                        <p class="instrument-price">Mulai dari Rp 2-37jt</p>
                        <a href="#" class="instrument-button">Lihat Lebih Lanjut</a>
                </div>
            </div>

            {{-- Instrument 3 --}}
            <div class="instrument-card">
                <div class="instrument-image">
                    <img src="{{ asset('kendang.jpg') }}" alt="Kendang - Drum">
                </div>
                <div class="instrument-details">
                    <h3>Kendang</h3>
                    <p class="instrument-description">Kendang merupakan salah satu instrumen perkusi yang memegang peran penting sebagai pengatur tempo dan dinamika dalam pertunjukan gamelan. Terbuat dari kayu berkualitas tinggi, seperti nangka atau jati, dan dilapisi dengan kulit kerbau atau kambing pada kedua sisinya, kendang menghasilkan suara yang tajam dan bulat.</p>
                        <p class="instrument-price">Mulai dari Rp 3.5jt</p>
                        <a href="#" class="instrument-button">Lihat Lebih Lanjut</a>
                </div>
            </div>

            {{-- Instrument 4 --}}
            <div class="instrument-card">
                <div class="instrument-image">
                    <img src="{{ asset('gender.jpg') }}" alt="Gender - Metallophone">
                </div>
                <div class="instrument-details">
                    <h3>Gender</h3>
                    <p class="instrument-description">Gender merupakan salah satu instrumen gamelan yang terdiri dari bilah logam yang disusun di atas resonator kayu dan dimainkan dengan pemukul kecil berlapis kain. Suara yang dihasilkan sangat lembut, melodis, dan memiliki resonansi yang khas, sering kali digunakan untuk memperkaya melodi atau sebagai pengisi antar bagian dalam komposisi gamelan.</p>
                        <p class="instrument-price">Mulai dari Rp 1,75-7,5jt</p>
                        <a href="#" class="instrument-button">Lihat Lebih Lanjut</a>
                </div>
            </div>

            {{-- Instrument 5 --}}
            <div class="instrument-card">
                <div class="instrument-image">
                    <img src="{{ asset('rebab.jpg') }}" alt="Rebab - String Instrument">
                </div>
                <div class="instrument-details">
                    <h3>Rebab</h3>
                    <p class="instrument-description">Rebab merupakan salah satu instrumen gesek tradisional yang memiliki dua senar dan dimainkan dengan menggunakan busur. Dengan tubuh terbuat dari kayu dan kulit, rebab menghasilkan suara yang mendalam</p>
                        <p class="instrument-price">Mulai dari 1,5jt</p>
                        <a href="#" class="instrument-button">Lihat Lebih Lanjut</a>
                </div>
            </div>

            {{-- Instrument 6 --}}
            <div class="instrument-card">
                <div class="instrument-image">
                    <img src="{{ asset('bonang.jpg') }}" alt="Bonang - Small Gong Set">
                </div>
                <div class="instrument-details">
                    <h3>Bonang</h3>
                    <p class="instrument-description">Bonang merupakan salah satu instrumen gamelan yang terdiri dari serangkaian bilah logam yang diletakkan di atas resonator kayu dan dimainkan dengan pemukul kecil. </p>
                    <p class="instrument-price">Mulai dari 3,75-21,5jt</p>
                    <a href="#" class="instrument-button">Lihat Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="content-container">
        <div class="custom-orders">
            <div class="custom-text">
                <h2 class="section-title-left">Custom Gamelan Instruments</h2>
                <p>Mencari Sesuatu yang Spesifik atau Set Gamelan Lengkap?
                    Kami menyediakan layanan pembuatan gamelan kustom yang disesuaikan dengan kebutuhan dan preferensi Anda. Dari instrumen tunggal hingga set gamelan lengkap, kami memastikan setiap detail dirancang dan dibuat sesuai dengan keinginan Anda, dengan kualitas suara dan keaslian yang tak tertandingi.</p>
                <ul class="custom-features">
                    <li>Set Gamelan Lengkap untuk Berbagai Kebutuhan (Jawa Tengah, Bali, dan Sunda)</li>
                    <li>Pilihan Penyetelan Khusus (pelog, slendro, atau bahkan skala modern)</li>
                    <li>Dekoratif dan Ukiran Khusus</li>
                    <li>Set Gamelan untuk Sekolah dan Institusi</li>
                </ul>
                <a href="{{ url('/contact') }}" class="custom-button">Request Custom Gamelan</a>
            </div>
            <div class="custom-image">
                <img src="{{ asset('custom-gamelan.jpg') }}" alt="Custom Gamelan Set">
            </div>
        </div>
    </div>
</section>

<section class="section bg-light">
    <div class="content-container">
        <h2 class="section-title">Perawatan & Pemeliharaan</h2>
        <div class="care-container">
            <div class="care-item">
                <div class="care-icon">
                    <i class="fas fa-tools"></i>
                </div>
                <h3>Layanan Penyetelan</h3>
                <p>Kami menyediakan layanan penyetelan profesional untuk memastikan instrumen gamelan Anda tetap mempertahankan kualitas suara autentiknya. Penyetelan secara rutin disarankan setiap 2-3 tahun untuk instrumen yang sering digunakan, memastikan suara tetap optimal dan sesuai dengan tradisi gamelan. Tim ahli kami akan melakukan penyetelan dengan ketelitian tinggi, baik untuk skala pelog, slendro, maupun skala lainnya, menjaga agar setiap instrumen tetap harmonis dalam ansambel gamelan.</p>
            </div>
            
            <div class="care-item">
                <div class="care-icon">
                    <i class="fas fa-broom"></i>
                </div>
                <h3>Pembersihan & Pemolesan</h3>
                <p>Pembersihan dan pemolesan rutin tidak hanya menjaga agar instrumen gamelan Anda tetap terlihat indah, tetapi juga melindungi bahan-bahan dari kerusakan akibat faktor lingkungan. Layanan ini membantu mempertahankan kilau logam, keindahan ukiran kayu, serta memastikan kulit pada instrumen tetap dalam kondisi terbaik. Dengan perawatan yang tepat, instrumen Anda akan tetap awet dan suaranya tetap memukau untuk waktu yang lama.</p>
            </div>
            
            <div class="care-item">
                <div class="care-icon">
                    <i class="fas fa-hammer"></i>
                </div>
                <h3>Perbaikan & Restorasi</h3>
                <p>Para pengrajin ahli kami dapat melakukan perbaikan dan restorasi pada instrumen gamelan lama, mengembalikannya ke kondisi semula tanpa mengurangi karakter uniknya. Dengan keterampilan dan perhatian terhadap detail, kami memastikan setiap instrumen yang dipulihkan tetap mempertahankan kualitas suara autentik dan keindahan estetika tradisionalnya, siap untuk digunakan kembali dalam pertunjukan atau koleksi.</p>
            </div>
        </div>
        
        <div class="care-note">
            <p>Dengan perawatan yang tepat, Gamelan kami dirancang untuk bertahan sepanjang generasi, semakin seiring berjalannya waktu. Keindahan setiap instrumen akan semakin terasa, mencerminkan perjalanan dan sejarah yang hidup dalam setiap dentingan dan ukiran.</p>
        </div>
    </div>
</section>
@endsection