@extends('layouts.app')
@section('title', 'Our Doctors - CityCare Hospital')

@section('content')
<section class="position-relative w-100 shadow-sm overflow-hidden"
         style="background: #e2e8f0 url('{{ asset('assets/images/doctorbanner1.jpg') }}') no-repeat center center;
                background-size: cover;
                min-height: 420px;
                width: 100%;">
</section>



<!-- DOCTORS CAROUSEL SECTION -->
<section class="py-5 bg-white">
    <div class="container">

        <div id="doctorCarousel"
             class="carousel slide"
             data-bs-ride="carousel"
             data-bs-interval="3000"
             data-bs-pause="false">

            <!-- Indicators -->
            <div class="carousel-indicators">
                @foreach($doctors->chunk(4) as $slideIndex => $doctorChunk)
                    <button type="button"
                            data-bs-target="#doctorCarousel"
                            data-bs-slide-to="{{ $slideIndex }}"
                            class="{{ $slideIndex == 0 ? 'active' : '' }}">
                    </button>
                @endforeach
            </div>

            <!-- Carousel Items -->
            <div class="carousel-inner">

                @forelse($doctors->chunk(4) as $slideIndex => $doctorChunk)

                    <div class="carousel-item {{ $slideIndex == 0 ? 'active' : '' }}">
                        <div class="row g-4 justify-content-center">

                            @foreach($doctorChunk as $doctor)

                                <div class="col-12 col-sm-6 col-lg-3">
                                    <div class="card border-0 shadow-sm rounded-4 doctor-premium-card h-100">

                                        <!-- Doctor Image -->
                                        <div class="text-center pt-4">
                                            <img src="{{ asset('assets/images/doctors/doctors' . (($loop->iteration % 6) + 1) . '.jpg') }}"
                                                 alt="{{ $doctor->name }}"
                                                 class="doctor-avatar">
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body text-center d-flex flex-column">

                                            <span class="d-inline-block bg-primary bg-opacity-10 text-primary fw-bold px-3 py-2 rounded-pill mb-3 text-uppercase"
                                                  style="font-size:0.75rem;letter-spacing:0.5px;">
                                                {{ $doctor->department->name ?? 'Specialist' }}
                                            </span>

                                            <h5 class="fw-bold text-dark mb-2">
                                                {{ $doctor->name }}
                                            </h5>

                                            <p class="text-secondary small mb-3 flex-grow-1">
                                                {{ $doctor->specialization ?? 'Senior Consultant' }}
                                            </p>

                                            <div class="border-top pt-3">
                                                <a href="mailto:{{ $doctor->email }}"
                                                   class="text-decoration-none text-muted small">
                                                    <i class="bi bi-envelope-fill text-primary me-1"></i>
                                                    {{ $doctor->email }}
                                                </a>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>

                @empty

                    <div class="carousel-item active">
                        <div class="text-center py-5">
                            <h4>No Doctors Found</h4>
                        </div>
                    </div>

                @endforelse

            </div>

            <!-- Previous Button -->
            <button class="carousel-control-prev"
                    type="button"
                    data-bs-target="#doctorCarousel"
                    data-bs-slide="prev">

                <span class="carousel-control-prev-icon bg-primary rounded-circle p-3"></span>

            </button>

            <!-- Next Button -->
            <button class="carousel-control-next"
                    type="button"
                    data-bs-target="#doctorCarousel"
                    data-bs-slide="next">

                <span class="carousel-control-next-icon bg-primary rounded-circle p-3"></span>

            </button>

        </div>

    </div>
</section>

<style>
.doctor-premium-card{
    transition:all .35s ease;
    background:#fff;
}

.doctor-premium-card:hover{
    transform:translateY(-8px);
    box-shadow:0 15px 35px rgba(0,0,0,.12)!important;
}

.doctor-avatar{
    width:140px;
    height:140px;
    object-fit:cover;
    border-radius:50%;
    border:5px solid #fff;
    box-shadow:0 10px 25px rgba(13,110,253,.18);
    transition:.4s;
}

.doctor-premium-card:hover .doctor-avatar{
    transform:scale(1.08);
}

.carousel{
    padding-bottom:60px;
}

.carousel-indicators{
    bottom:-15px;
}

.carousel-indicators button{
    width:10px !important;
    height:10px !important;
    border-radius:50%;
    background-color:#0d6efd !important;
}

.carousel-control-prev,
.carousel-control-next{
    width:5%;
}

.carousel-control-prev-icon,
.carousel-control-next-icon{
    background-size:50%;
}

@media(max-width:991px){
    .doctor-avatar{
        width:120px;
        height:120px;
    }
}
</style>

