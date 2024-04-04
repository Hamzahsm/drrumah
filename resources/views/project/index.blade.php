@extends('layouts.pages')
@section('content')
    <section class="top-150" data-aos="fade-up" data-aos-duration="100">
        <div class="container">
            <h1 class="text-center fw-bold text-uppercase mb-3">Projek</h1>
            <!-- table layanan -->
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-4 my-5">
                        <a href="{{ route('guest.projek.user.agung') }}" class="text-decoration-none text-dark">
                            <div class="border border-2 py-3 px-3 rounded shadow bg-hover-primary">
                                    <img src="https://abrisgrup.com/wp-content/uploads/2023/09/green-construction.png" alt="" class="img-fluid mb-3">
                                    <p class="fw-bold mt-2"><i class="bi bi-person"></i> Pak Agung</p>
                                    <p><i class="bi bi-geo-alt"></i> Dau, Kabupaten Malang</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 my-5">
                        <a href="{{ route('husni.malang') }}" class="text-decoration-none text-dark">
                            <div class="border border-2 py-3 px-3 rounded shadow bg-hover-primary">
                                <img src="https://abrisgrup.com/wp-content/uploads/2023/09/green-construction.png" alt="" class="img-fluid mb-3">
                                <p class="fw-bold mt-2"><i class="bi bi-person"></i> Pak Husni</p>
                                <p><i class="bi bi-geo-alt"></i> Merjosari, Kota Malang</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 my-5">
                        <a href="{{ route('user.projek.palmerah') }}" class="text-decoration-none text-dark">
                            <div class="border border-2 py-3 px-3 rounded shadow bg-hover-primary">
                                <img src="https://abrisgrup.com/wp-content/uploads/2023/09/green-construction.png" alt="" class="img-fluid mb-3">
                                <p><i class="bi bi-geo-alt"></i> Palmerah</p>
                            </div>
                        </a>
                    </div>


                </div> 
            
                <div class="row">
                    <div class="col-lg-4 my-5">
                        <a href="{{ route('projek.temas.batu') }}" class="text-decoration-none text-dark">
                            <div class="border border-2 py-3 px-3 rounded shadow bg-hover-primary">
                                <img src="https://abrisgrup.com/wp-content/uploads/2023/09/green-construction.png" alt="" class="img-fluid mb-3">
                                <p><i class="bi bi-geo-alt"></i> Temas, Batu</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 my-5">
                        <a href="{{ route('projek.wajak.kabupaten.malang') }}" class="text-decoration-none text-dark">
                            <div class="border border-2 py-3 px-3 rounded shadow bg-hover-primary">
                                <img src="https://abrisgrup.com/wp-content/uploads/2023/09/green-construction.png" alt="" class="img-fluid mb-3">
                                <p><i class="bi bi-geo-alt"></i> Wajak, Kabupaten Malang</p>
                            </div>
                        </a>
                    </div>

                    {{-- <div class="col-lg-4 my-5">
                        <div class="border border-2 py-3 px-3 rounded shadow bg-hover-primary">
                            <a href="#" class="text-decoration-none text-dark">
                                <img src="https://abrisgrup.com/wp-content/uploads/2023/09/green-construction.png" alt="" class="img-fluid mb-3">
                                <p class="fw-bold mt-2"><i class="bi bi-person"></i> Pak Agung</p>
                                <p><i class="bi bi-geo-alt"></i> Dau, Kabupaten Malang</p>
                            </a>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </section>
@endsection