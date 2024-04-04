@extends('layouts.pages')
@section('content')
    <section class="top-150" data-aos="fade-up" data-aos-duration="100">
        <div class="container">
            <h1 class="text-center fw-bold text-uppercase mb-3">Projek Palmerah</h1>
            <p class="fw-bold fst-italic text-center mb-5">Dokterrumah.com</p>

            <!-- tabs -->
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active fw-bold" id="nav-photo-tab" data-bs-toggle="tab" data-bs-target="#nav-photo" type="button" role="tab" aria-controls="nav-photo" aria-selected="true">Photo</button>
                  <button class="nav-link fw-bold" id="nav-video-tab" data-bs-toggle="tab" data-bs-target="#nav-video" type="button" role="tab" aria-controls="nav-video" aria-selected="false">Video</button>

                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <!-- foto -->
                <div class="tab-pane fade show active" id="nav-photo" role="tabpanel" aria-labelledby="nav-photo-tab" tabindex="0">
                    <div class="row row-cols-1 row-cols-md-3 g-4">

                        <div class="col">
                            <div class="card h-100">
                                <a href="https://abrisgrup.com/wp-content/uploads/2024/04/plm-1.jpg" class="gallery-testimoni-landing">
                                    <img src="https://abrisgrup.com/wp-content/uploads/2024/04/plm-1.jpg" alt="" class="card-img-top img-fluid">
                                </a>
                                <div class="card-footer">
                                <small class="text-body-secondary">Dokterrumah.com (official)</small>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                                <a href="https://abrisgrup.com/wp-content/uploads/2024/04/plm-2.jpg" class="gallery-testimoni-landing">
                                    <img src="https://abrisgrup.com/wp-content/uploads/2024/04/plm-2.jpg" alt="" class="card-img-top img-fluid">
                                </a>
                                <div class="card-footer">
                                <small class="text-body-secondary">Dokterrumah.com (official)</small>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                                <a href="https://abrisgrup.com/wp-content/uploads/2024/04/plm-3.jpg" class="gallery-testimoni-landing">
                                    <img src="https://abrisgrup.com/wp-content/uploads/2024/04/plm-3.jpg" alt="" class="card-img-top img-fluid">
                                </a>
                                <div class="card-footer">
                                <small class="text-body-secondary">Dokterrumah.com (official)</small>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                                <a href="https://abrisgrup.com/wp-content/uploads/2024/04/plm-4.jpg" class="gallery-testimoni-landing">
                                    <img src="https://abrisgrup.com/wp-content/uploads/2024/04/plm-4.jpg" alt="" class="card-img-top img-fluid">
                                </a>
                                <div class="card-footer">
                                <small class="text-body-secondary">Dokterrumah.com (official)</small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- video -->
                <div class="tab-pane fade" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab" tabindex="0">
                    <div class="tab-pane fade show active" id="nav-photo" role="tabpanel" aria-labelledby="nav-photo-tab" tabindex="0">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <p>tidak ada video</p>
                            </div>

                        </div>
                    </div>
                </div>
              </div>

        </div>
    </section>

@endsection