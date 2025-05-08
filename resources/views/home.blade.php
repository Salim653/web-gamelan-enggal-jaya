@extends('layouts.main')

@section('content')

    <header class="text-center py-5 bg-light">
        <h1 class="display-4">Mizuro Tech</h1>
        <p class="lead">Solusi Engineering Tanpa Perlu Pusing</p>
    </header>

    <section id="services" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Our Services</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <img src="images\desain-pcb-home.jpg" class="img-fluid" alt="Desain PCB" style="object-fit: cover; height: 500px; width: 100%;">
                            <h3 class="card-title">Desain PCB</h3>
                            <p class="card-text">Bikin PCB tanpa ribet routing sendiri</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <img src="images\rakit-pcb-home.jpg" class="img-fluid" alt="Rakit PCB" style="object-fit: cover; height: 500px; width: 100%;">
                            <h3 class="card-title">Rakit PCB</h3>
                            <p class="card-text">Susah rakit sendiri? kita yang kerjakan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <img src="images\desain-3d-home.jpg" class="img-fluid" alt="Desain 3D" style="object-fit: cover; height: 500px; width: 100%;">
                            <h3 class="card-title">Desain 3D</h3>
                            <p class="card-text">Rancang part atau barang apapun biar idemu punya bentuk 3D</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <img src="images\print-3d-home.jpg" class="img-fluid" alt="Print 3D" style="object-fit: cover; height: 500px; width: 100%;">
                            <h3 class="card-title">Print 3D</h3>
                            <p class="card-text">Print komponen presisi atau hiasan kompleks semudah print kertas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <img src="images\print-3d-filament-home.jpg" class="img-fluid" alt="Print 3D Bawa Filament Sendiri" style="object-fit: cover; height: 500px; width: 100%;">
                            <h3 class="card-title">Print 3D Bawa Filament Sendiri</h3>
                            <p class="card-text">Pengen print 3D tapi gak punya printer, titip sini aja</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <img src="images\desain-alat-home.jpg" class="img-fluid" alt="Desain Alat/Device" style="object-fit: cover; height: 500px; width: 100%;">
                            <h3 class="card-title">Desain Alat/Device</h3>
                            <p class="card-text">Tanya-tanya dulu bisa kok, nanti kalau cocok kita bantu bikin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
