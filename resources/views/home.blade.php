@extends('layouts.main')

@section('container')

    {{-- Hero Section --}}
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    <h1>Membantu Temukan Jasa Live Streaming Terbaik.</h1>
                    <p><span class="fw-bold">Fz</span> hadir untuk temukan jasa live streaming terbaik untukmu sebagai sumber yang dapat dipercaya.</p>

                    <button class="button-lg-primary">Temukan Jasa</button>
                </div>
            </div>

            {{-- hero banner width:932.18 height:588.78 --}}
            <img src="/img/Hero Banner.png" alt="" class="position-absolute end-0 bottom-0 img-hero">
        </div>
    </section>

    {{-- Layanan Section --}}
    <section id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Layanan Kami</h2>
                    <span class="sub-title">Fz creative hadir menjadi solusi bagi kamu</span>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="/img/live.png" alt="gambar live streaming png" class="position-absolute top-50 start-50 translate-middle" style="width: 50px;">
                        </div>
                        <h3 class="mt-4">Jasa Live Streaming</h3> 
                        <p class="mt-3">Jasa video online seperti Youtube, Instagram, Zoom dan lain-lain.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="/img/drone.png" alt="gambar drone png" class="position-absolute top-50 start-50 translate-middle" style="width: 50px;">
                        </div>
                        <h3 class="mt-4">Jasa Video Drone</h3> 
                        <p class="mt-3">Jasa video drone adalah sebuah pesawat tanpa awak yang sering digunakan untuk videografi dan fotografi di udara</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="/img/sound.png" alt="gambar sound system png" class="position-absolute top-50 start-50 translate-middle" style="width: 50px;">
                        </div>
                        <h3 class="mt-4">Jasa Sound System</h3> 
                        <p class="mt-3">Jasa sound system untuk memberikan audio visual</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Galeri Section --}}
    <section id="galeri">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center mt-5 galeri-tagline">
                    <h2 class="mt-5">Galeri</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-3 d-flex justify-content-evenly">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="/img/galeri/UNCDF.png" alt="" >
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-3 d-flex justify-content-evenly">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="/img/galeri/WACC 1.png" alt="">
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-3 d-flex justify-content-evenly">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="/img/galeri/JW.png" alt="">
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-3 d-flex justify-content-evenly">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="/img/galeri/Rakornas.png" alt="">
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-3 d-flex justify-content-evenly">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="/img/galeri/Pre-Chrismas.png" alt="">
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-3 d-flex justify-content-evenly">
                    <div class="card p-2" style="width: 22rem;"> 
                        <img src="/img/galeri/drift.png" alt="" style="">
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection