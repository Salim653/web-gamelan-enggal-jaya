@extends('layouts.app')

@section('content')
<div class="layout-container">
    <!-- Header Navigation -->
    <header>
      <div class="logo-container">
        <div class="logo-icon">
            <img src="{{ asset('logo.jpg') }}" alt="Gambar Gamelan" width="40" height="40">
        </div>
        <h2 class="site-title">Gamelan Enggal Jaya Solo</h2>
      </div>

      <!-- Mobile Menu Button -->
      <button class="mobile-menu-btn" aria-label="Open menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 256 256">
          <path d="M224 128a8 8 0 0 1-8 8H40a8 8 0 0 1 0-16h176a8 8 0 0 1 8 8Zm-8-56H40a8 8 0 0 0 0 16h176a8 8 0 0 0 0-16Zm0 112H40a8 8 0 0 0 0 16h176a8 8 0 0 0 0-16Z"></path>
        </svg>
      </button>
      
      <!-- Desktop Navigation -->
      <div class="desktop-nav">
        <nav class="nav-links">
          <a class="nav-link" href="#">About</a>
          <a class="nav-link" href="#">Shop</a>
          <a class="nav-link" href="#">Gamelan Studio</a>
        </nav>
        <div class="utility-buttons">
          <button class="icon-button" aria-label="Shopping Cart">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
              <path d="M222.14,58.87A8,8,0,0,0,216,56H54.68L49.79,29.14A16,16,0,0,0,34.05,16H16a8,8,0,0,0,0,16h18L59.56,172.29a24,24,0,0,0,5.33,11.27,28,28,0,1,0,44.4,8.44h45.42A27.75,27.75,0,0,0,152,204a28,28,0,1,0,28-28H83.17a8,8,0,0,1-7.87-6.57L72.13,152h116a24,24,0,0,0,23.61-19.71l12.16-66.86A8,8,0,0,0,222.14,58.87ZM96,204a12,12,0,1,1-12-12A12,12,0,0,1,96,204Zm96,0a12,12,0,1,1-12-12A12,12,0,0,1,192,204Zm4-74.57A8,8,0,0,1,188.1,136H69.22L57.59,72H206.41Z"></path>
            </svg>
          </button>
          <button class="icon-button" aria-label="User Account">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
              <path d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"></path>
            </svg>
          </button>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <main>
      <div class="main-container">
        <!-- Hero Section -->
        <section class="hero-section">
          <div class="hero-container">
            <div class="hero-content">
              <h1 class="hero-title">Crafted with tradition and innovation</h1>
              <p class="hero-description">
                Gamelan Enggal Jaya Solo didirikan pada tahun 2013, Gamelan Enggal Jaya Solo merupakan perajin yang berdedikasi untuk melestarikan tradisi gamelan Jawa dan mengembangkan musik gamelan. Perusahaan kami berlokasi di Solo, Jawa Tengah.
              </p>
            </div>
            <button class="primary-button">
              <span class="button-text">Our Story</span>
            </button>
          </div>
        </section>

        <!-- Mission Section -->
        <section class="mission-section">
          <h2 class="section-title">Our Mission</h2>
          <p class="section-text">
            Gamelan Enggal Jaya berkomitmen untuk melestarikan dan mengembangkan seni budaya Jawa melalui pembuatan gamelan berkualitas tinggi. Dengan menggabungkan keterampilan teknik dan pengelasan, kami menciptakan instrumen gamelan dari besi, kuningan, dan perunggu yang tidak hanya memenuhi standar estetika, tetapi juga kualitas suara yang optimal. Kami berupaya untuk menjangkau pasar domestik dan internasional, serta berkontribusi dalam pelestarian warisan budaya Indonesia, Kami percaya bahwa tradisi musik gamelan merupakan bentuk ekspresi budaya yang vital. Kami berkomitmen untuk terus mempelajari dan mempraktikkan bentuk-bentuk seni ini, serta menciptakan karya baru yang membangun dan memperluas warisan mereka yang kaya.
          </p>
        </section>

        <!-- Core Values Section -->
        <section>
          <h2 class="section-title">Our Core Values</h2>
          <div class="values-grid">
            <!-- Tradition Card -->
            <div class="value-card">
              <div class="value-icon tradition-icon" aria-label="Tradition icon"></div>
              <div class="value-content">
                <h3 class="value-title">Tradition</h3>
                <p class="value-text">
                  Kami menghormati ilmu pengetahuan, keterampilan, dan prestasi artistik generasi terdahulu, dan menyadari bahwa semuanya membentuk fondasi yang kami bangun.
                </p>
              </div>
            </div>
            
            <!-- Innovation Card -->
            <div class="value-card">
              <div class="value-icon innovation-icon" aria-label="Innovation icon"></div>
              <div class="value-content">
                <h3 class="value-title">Innovation</h3>
                <p class="value-text">
                  Kami berupaya mengembangkan teknik, repertoar, dan mode presentasi baru yang menanggapi konteks sosial, budaya, dan teknologi kontemporer.
                </p>
              </div>
            </div>
            
            <!-- Community Card -->
            <div class="value-card">
              <div class="value-icon community-icon" aria-label="Community icon"></div>
              <div class="value-content">
                <h3 class="value-title">Community</h3>
                <p class="value-text">
                  Kami berkomitmen untuk membuat bentuk-bentuk seni kami mudah diakses, inklusif, dan relevan bagi beragam komunitas, serta membina hubungan yang bermakna antara seniman, pelajar, dan penonton.
                </p>
              </div>
            </div>
          </div>
        </section>

        <!-- Newsletter Section -->
        <section class="newsletter-section">
          <div class="newsletter-container">
            <h2 class="newsletter-title">Stay Connected</h2>
            <p class="newsletter-description">Bergabunglah dengan buletin kami untuk menerima pembaruan tentang koleksi instrumen baru kami</p>
            <form class="newsletter-form">
              <input type="email" placeholder="Enter your email" class="email-input" />
              <button type="submit" class="submit-button">Subscribe</button>
            </form>
          </div>
        </section>
      </div>
    </main>

    <!-- footer -->
    <footer>
      <div class="footer-container">
        <div>
          <div class="footer-logo-container">
            <div class="footer-logo-icon">
                <img src="{{ asset('logo.jpg') }}" alt="Gambar Gamelan" width="24" height="24">
            </div>
            <h3 class="footer-title">Gamelan Enggal Jaya Solo</h3>
          </div>
          <p class="footer-description">Pengrajin Gamelan yang didedikasikan untuk pelestarian dan evolusi musik gamelan.</p>
          <div class="social-links">
            <a href="#" aria-label="Facebook" class="social-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
                <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm8,191.63V152h24a8,8,0,0,0,0-16H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,0-16H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0,0,16h24v63.63a88,88,0,1,1,16,0Z"></path>
              </svg>
            </a>
            <a href="#" aria-label="Instagram" class="social-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
                <path d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"></path>
              </svg>
            </a>
            <a href="#" aria-label="YouTube" class="social-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
                <path d="M234.33,69.52a24,24,0,0,0-14.49-16.4C185.56,39.88,131,40,128,40s-57.56-.12-91.84,13.12a24,24,0,0,0-14.49,16.4C19.08,79.5,16,97.74,16,128s3.08,48.5,5.67,58.48a24,24,0,0,0,14.49,16.4C69,215.56,124.56,216,128,216h0c3.44,0,59-.44,91.84-13.12a24,24,0,0,0,14.49-16.4c2.59-10,5.67-28.22,5.67-58.48S236.92,79.5,234.33,69.52Zm-72.11,61.81-48,32A4,4,0,0,1,108,160V96a4,4,0,0,1,6.22-3.33l48,32a4,4,0,0,1,0,6.66Z"></path>
              </svg>
            </a>
          </div>
        </div>
        <div>
          <h3 class="footer-nav-title">Quick Links</h3>
          <ul class="footer-nav-links">
            <li class="footer-nav-item"><a href="#" class="footer-nav-link">About Us</a></li>
            <li class="footer-nav-item"><a href="#" class="footer-nav-link">Shop</a></li>
            <li class="footer-nav-item"><a href="#" class="footer-nav-link">Contact</a></li>
          </ul>
        </div>
        <div>
          <h3 class="footer-nav-title">Contact Us</h3>
          <address class="contact-info">
            <p class="contact-line">Jl. Karandan</p>
            <p class="contact-line">Serengan, Surakarta, Central Java</p>
            <p class="contact-line">Indonesia</p>
            <p class="contact-line">Email: gamelanenggaljayasolo@gmail.com</p>
            <p class="contact-line">Phone: +62 813-2971-9010</p>
          </address>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2025 Gamelan Enggal Jaya Solo. All rights reserved.</p>
      </div>
    </footer>
  </div>
@endsection