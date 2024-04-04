@extends('layouts.pages')
@section('content')
    <section class="top-150" data-aos="fade-up" data-aos-duration="100">
        <div class="container">
            <h1 class="text-center fw-bold text-uppercase mb-3">Layanan Jasa Arsitek</h1>
            <p class="fw-bold fst-italic">Dokterrumah.com</p>
            <!-- table layanan -->
            <div class="container">
                <div class="row text-center mt-5">
                    <div class="col-lg-4 my-5">
                        <div class="border border-2 py-5 px-3 rounded shadow bg-hover-primary">
                            <img src="https://abrisgrup.com/wp-content/uploads/2023/09/home.png" alt="icon-desain-interior" class="img-fluid img-responsive mb-3">
                            <h5 class="text-uppercase mt-2">Desain Interior</h5>
                            <p class="mt-4">Mari buat desain interior sesuai keinginan untuk rumah mewah dan rumah minimalis.</p>
                            <a href="#" target="_blank">
                                <button class="btn btn-danger px-3 rounded-5 shadow-lg fw-bold"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 my-5">
                        <div class="border border-2 py-5 px-3 rounded shadow bg-hover-primary">
                            <img src="https://abrisgrup.com/wp-content/uploads/2023/09/house.png" alt="icon-desain-eksterior-desain-murah-id" class="img-fluid img-responsive mb-3">
                            <h5 class="text-uppercase mt-2">Desain Eksterior</h5>
                            <p class="mt-4">Wujudkan desain eksterior rumah sesuai keinginan untuk hidup yang lebih bermakna.</p>
                            <a href="#" target="_blank">
                                    <button class="btn btn-danger px-3 rounded-5 shadow-lg fw-bold"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 my-5">
                        <div class="border border-2 py-5 px-3 rounded shadow bg-hover-primary">
                            <img src="https://abrisgrup.com/wp-content/uploads/2023/09/green-construction.png" alt="denah-abris-group" class="img-fluid img-responsive mb-3">
                            <h5 class="text-uppercase mt-2">Gambar Rencana</h5> 
                            <p class="mt-4">gambar rancangan denah, gambar tapak, gambar pondasi, gambar potongan, dll.</p>
                            <a href="#" target="_blank">
                                <button class="btn btn-danger px-3 rounded-5 shadow-lg fw-bold"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
                            </a>
                        </div>
                    </div>
                </div> 
            
                <div class="row text-center">
                    <div class="col-lg-4 my-5">
                        <div class="border border-2 py-5 px-3 rounded shadow bg-hover-primary">
                            <img src="https://abrisgrup.com/wp-content/uploads/2023/09/3d-modeling.png" alt="icon-desain-murah-id" class="img-fluid img-responsive mb-3">
                            <h5 class="text-uppercase mt-2">Desain 2D & 3D</h5>
                            <p class="mt-4">Wujudkan model bangunan yang nampak lebih nyata dan lebih mudah dipahami.</p>
                            <a href="#" target="_blank">
                                <button class="btn btn-danger px-3 rounded-5 shadow-lg fw-bold"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 my-5">
                        <div class="border border-2 py-5 px-3 rounded shadow bg-hover-primary">
                            <img src="https://abrisgrup.com/wp-content/uploads/2023/09/estimate.png" alt="icon-abris-group" class="img-fluid img-responsive mb-3">
                            <h5 class="text-uppercase mt-2">Rencana Anggaran Biaya (RAB)</h5>
                            <p class="mt-4">Membuat Anggaran Pembangunan lebih maksimal, terarah dan terukur.</p>
                            <a href="#" target="_blank">
                                <button class="btn btn-danger px-3 rounded-5 shadow-lg fw-bold"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 my-5">
                        <div class="border border-2 py-5 px-3 rounded shadow bg-hover-primary">
                            <img src="https://abrisgrup.com/wp-content/uploads/2023/09/discussion.png" alt="icon-abris-group" class="img-fluid img-responsive mb-3">
                            <h5 class="text-uppercase mt-2">Custom</h5>
                            <p class="mt-4">Mari sampaikan keiginan Anda melalui WhatsApp dibawah ini</p>
                            <a href="#" target="_blank">
                                <button class="btn btn-danger px-3 rounded-5 shadow-lg fw-bold"> <i class="bi bi-whatsapp"></i> Konsultasi GRATIS !</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- video -->
    {{-- <div class="container"> --}}
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                {{-- <iframe src="https://drive.google.com/file/d/1Yk_QdQUR9W8IcRAWntr8Eo4iYJKOr0AS/preview"loading="lazy" class="card-img-top"></iframe> --}}
                <iframe src="https://drive.google.com/file/d/1Yk_QdQUR9W8IcRAWntr8Eo4iYJKOr0AS/preview" width="640" height="480" loading="lazy" class="card-img-top"></iframe>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>
    
            <div class="col">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
    
            <div class="col">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
        </div>
    {{-- </div> --}}
@endsection