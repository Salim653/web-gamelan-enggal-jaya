@extends('layouts.main')

@section('content')

    <header class="text-center py-5 bg-light">
        <h1 class="display-4">Mizuro Tech</h1>
        <p class="lead">Butuh apa aja kita kerjakan</p>
    </header>

    <section id="services" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Our Services</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Desain PCB</h3>
                            <p class="card-text">Mulai dari 25k IDR, tergantung pada kompleksitas dan jumlah komponen.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Rakit PCB</h3>
                            <p class="card-text">Mulai dari 5k IDR, 300 IDR per komponen.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Desain 3D</h3>
                            <p class="card-text">Mulai dari 10k IDR, tergantung pada kompleksitas desain.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Print 3D</h3>
                            <p class="card-text">500 IDR per gram (PLA/PETG/ABS warna putih), termasuk support.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Print 3D Bawa Filament Sendiri</h3>
                            <p class="card-text">3000 IDR per jam, dengan material yang sama.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Desain Alat/Device</h3>
                            <p class="card-text">Konsultasi gratis. Mulai dari 150k IDR untuk desain diagram kerja + PCB + rakit + program.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
