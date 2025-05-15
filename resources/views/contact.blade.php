@extends('layouts.main')

@section('title', 'Contact Us - Gamelan Enggal Jaya Solo')

@section('content')
<!-- Hero Banner -->
<section class="contact-hero">
    <div class="hero-content">
        <h1 style="font-family: 'Times New Roman', Times, serif; font-weight: 900;">Hubungi Kami</h1>
        <p>Ada Pertanyaan tentang Instrumen Gamelan Kami? Kami dengan senang hati akan menjawab segala pertanyaan Anda.</p>
    </div>
</section>

<!-- Contact Cards -->
<section class="contact-cards-section">
    <div class="container">
        <div class="cards-container">
            <!-- Kartu Alamat -->
            <div class="contact-card">
                <div class="card-icon">
                    <div class="icon-circle"><i class="fas fa-map-marker-alt"></i></div>
                </div>
                <h2 class="card-title">Visit Bengkel Kami</h2>
                <div class="card-content">
                    <p>Jl. Karandan, Serengan</p>
                    <p>Surakarta, Jawa Tengah</p>
                    <p>Indonesia 57157</p>
                </div>
            </div>

            <!-- Kartu Telepon -->
            <div class="contact-card">
                <div class="card-icon">
                    <div class="icon-circle"><i class="fas fa-phone-alt"></i></div>
                </div>
                <h2 class="card-title">Call Us</h2>
                <div class="card-content">
                    <p>Telepon: +62 813 2971 9010</p>
                    <p>Sales: +62 813 2971 9010</p>
                    <p>Workshop: +62 813 2971 9010</p>
                </div>
            </div>

            <!-- Kartu Email -->
            <div class="contact-card">
                <div class="card-icon">
                    <div class="icon-circle"><i class="fas fa-envelope"></i></div>
                </div>
                <h2 class="card-title">Email Us</h2>
                <div class="card-content">
                    <p>General: <a href="mailto:gamelanenggaljayasolo@gmail.com">gamelanenggaljayasolo@gmail.com</a></p>
                    <p>Sales: <a href="mailto:gamelanenggaljayasolo@gmail.com">gamelanenggaljayasolo@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Hours -->
<section class="business-hours">
    <div class="container">
        <h2 class="section-title">Jam Buka</h2>
        <div class="hours-content">
            <div class="hours-item"><span class="day">Senin - Jumat:</span><span class="time">9:00 - 17:00</span></div>
            <div class="hours-item"><span class="day">Sabtu:</span><span class="time">10:00 - 16:00</span></div>
            <div class="hours-item"><span class="day">Minggu:</span><span class="time">Tutup</span></div>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="contact-form-section">
    <div class="container">
        <h2 class="section-title">Kirim Kami Pesan</h2>
        <p class="section-description">Isi formulir di bawah ini dan tim kami akan segera menghubungi Anda.</p>
        <form class="contact-form" method="POST" action="{{ route('contact.store') }}">
            @csrf        
            <div class="form-row">
                <div class="form-group">
                    <label for="firstName">Nama Depan</label>
                    <input type="text" id="firstName" name="firstName" required>
                </div>
                <div class="form-group">
                    <label for="lastName">Nama Belakang</label>
                    <input type="text" id="lastName" name="lastName" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Nomor Telepon</label>
                    <input type="tel" id="phone" name="phone">
                </div>
            </div>
            <div class="form-group">
                <label for="subject">Subjek</label>
                <select id="subject" name="subject" required>
                    <option disabled selected>Silakan pilih subjek</option>
                    <option value="general">Pertanyaan Umum</option>
                    <option value="order">Pesanan Gamelan</option>
                    <option value="custom">Permintaan Kustom</option>
                    <option value="support">Dukungan Teknis</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Pesan Anda</label>
                <textarea id="message" name="message" rows="6" required></textarea>
            </div>
            <div class="form-group checkbox-group">
                <input type="checkbox" id="consent" name="consent" required>
                <label for="consent">Saya setuju data saya disimpan. <a href="#" class="privacy-link">Privacy Policy</a>.</label>
            </div>
            <div class="form-action">
                <button type="submit" class="submit-btn">Send Message</button>
            </div>
        </form>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <h2 class="section-title">Pertanyaan yang Sering Diajukan</h2>
        <p class="section-description">Temukan jawaban atas pertanyaan paling umum.</p>
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Apakah Anda mengirimkan gamelan secara internasional?</h3>
                    <span class="toggle-icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="faq-answer" style="display: none;">
                    <p>Ya, kami mengirim ke seluruh dunia. Biaya pengiriman internasional bervariasi tergantung pada ukuran dan berat instrumen, serta negara tujuan. Kami mengemas semua instrumen dengan hati-hati untuk memastikannya tiba dengan aman. Silakan hubungi kami untuk mendapatkan penawaran harga pengiriman untuk pesanan khusus Anda.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Berapa lama waktu yang dibutuhkan untuk membuat satu set gamelan lengkap?</h3>
                    <span class="toggle-icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="faq-answer" style="display: none;">
                    <p>Membuat satu set gamelan lengkap biasanya memakan waktu 6-12 bulan, tergantung ukuran dan kerumitan. Setiap instrumen dibuat dengan tangan menggunakan teknik tradisional. Kami mengutamakan kualitas daripada kecepatan.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Bisakah saya mengunjungi bengkel Anda untuk melihat proses pembuatannya?</h3>
                    <span class="toggle-icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="faq-answer" style="display: none;">
                    <p>Tentu saja! Kami menyambut pengunjung ke bengkel kami di Surakarta. Anda bisa melihat langsung proses pembuatan gamelan. Disarankan melakukan reservasi terlebih dahulu untuk kunjungan rombongan.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Apakah Anda menawarkan lokakarya atau kelas untuk belajar gamelan?</h3>
                    <span class="toggle-icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="faq-answer" style="display: none;">
                    <p>Ya, kami menawarkan lokakarya dan kelas gamelan untuk semua tingkat kemampuan. Silakan hubungi kami untuk info jadwal terbaru dan pendaftaran.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Bagaimana cara merawat alat musik gamelan saya?</h3>
                    <span class="toggle-icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="faq-answer" style="display: none;">
                    <p>Perawatan gamelan meliputi pembersihan rutin, penyimpanan di tempat kering, dan penyetelan berkala setiap 2-3 tahun. Hubungi kami untuk panduan lengkap.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.faq-question').forEach(function (q) {
            q.addEventListener('click', function () {
                const answer = this.nextElementSibling;
                const icon = this.querySelector('.toggle-icon i');
                if (answer.style.display === 'block') {
                    answer.style.display = 'none';
                    icon.classList.remove('fa-chevron-up');
                    icon.classList.add('fa-chevron-down');
                } else {
                    answer.style.display = 'block';
                    icon.classList.remove('fa-chevron-down');
                    icon.classList.add('fa-chevron-up');
                }
            });
        });
    });
</script>
@endpush
