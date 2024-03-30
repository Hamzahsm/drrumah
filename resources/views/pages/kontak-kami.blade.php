@extends('layouts.pages')
@section('content')
<section class="top-150" data-aos="fade-up" data-aos-duration="100">
    <div class="container">
        <h1 class="text-center fw-bold text-uppercase mb-3">Kontak Kami</h1>
        <p><span class="fw-bold fst-italic">Dear Customer, </span>kami tidak bertanggung jawab atas informasi yang diberikan tentang desainmurah.id selain menggunakan kontak yang ada dibawah ini!</p>
        <div class="row tb-70">
            <div class="col-lg-6 p-3">
                <form action="#" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="number" class="form-control" id="telepon" name="telepon" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subjek</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea name="pesan" id="pesan" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>

            <div class="col-lg-6 p-3">
                <!-- telepon -->
                <div class="d-flex mb-3">
                    <div class="flex-shrink-0">
                      <i class="bi bi-telephone fs-4"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5>Telepon</h5>
                        <p>0823-xxxx-xxxx</p>
                    </div>
                </div>

                <!-- mail -->
                <div class="d-flex mb-3">
                    <div class="flex-shrink-0">
                      <i class="bi bi-envelope fs-4"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5>Email</h5>
                        <p>xxxx@gmail.com</p>
                    </div>
                </div>

                <!-- lokasi -->
                <div class="d-flex mb-3">
                    <div class="flex-shrink-0">
                      <i class="bi bi-geo-alt fs-4"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5>Lokasi</h5>
                        <p>Jl.xxx</p>
                    </div>
                </div>

                <!-- Jam Kerja -->
                <div class="d-flex mb-3">
                    <div class="flex-shrink-0">
                      <i class="bi bi-clock fs-4"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5>Jam Kerja</h5>
                        <p>Senin - Sabtu (08 : 00 - 16 : 00 WIB)</p>
                    </div>
                </div>

                <!-- Sosial Media -->
                <div class="d-flex mb-3">
                    <div class="flex-shrink-0">
                      <i class="bi bi-hand-thumbs-up fs-4"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5>Sosial Media</h5>
                        <p>
                            <span>
                                <a href="#" class="text-decoration-none ">
                                    <i class="bi bi-facebook fs-5"></i>
                                </a>
                            </span>
                            <span>
                                <a href="#" class="text-decoration-none ms-3">
                                    <i class="bi bi-instagram fs-5 text-danger"></i>
                                </a>
                            </span>
                            <span>
                                <a href="#" class="text-decoration-none ms-3">
                                    <i class="bi bi-youtube fs-5 text-danger"></i>
                                </a>
                            </span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection