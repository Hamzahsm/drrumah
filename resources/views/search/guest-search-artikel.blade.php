@extends('layouts.pages')
@section('content')
<section class="top-150" data-aos="fade-up" data-aos-duration="100">
    <div class="container">
        @if (count($posts) > 0)
        <!-- hasil penelusuran jika berhasil -->
        <div class="row">
            <div class="col-lg-8">
                <h5 class="fw-bold text-uppercase mb-3">Hasil Penelusuran</h5>
                <p>Ditemukan <span class="fst-italic"> {{ $posts->count() }} data</span> mengandung kata <span class="fst-italic">"{{ request()->keyword }}"</span></p>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($posts as $item)
                    <div class="col">
                      <div class="card">
                        <a href="{{ route('guest.artikel.show', $item->id) }}" class="text-decoration-none text-dark">
                            <img src="{{ asset(Storage::url($item->banner)) }}" alt="{{ $item->title }}" class="img-fluid mb-3 rounded card-img-top">
                            <div class="card-body">
                              <h6 class="card-title"> {{ $item->title }}</h6>
                              <p class="mb-3">
                                <span><i class="bi bi-person"></i> {{ $item->user->name }} </span>
                                <span class="ms-2"><i class="bi bi-tags"></i> {{ $item->category->name }} </span>
                              </p>
                            </div>
                        </a>
                      </div>
                    </div> 
                    @endforeach
                </div>
            </div>

            <!-- widget -->
            <div class="col-lg-4">
                <form action="{{ route('guest.artikel.search') }}" method="get" class="mb-3">
                    <input type="text" class="form-control" name="keyword" placeholder="Masukkan judul" value="{{ request()->keyword }}">
                </form>
                <!-- ads 1 -->
                <div class="mb-3">
                    <a href="#">
                        <img src="https://abrisgrup.com/wp-content/uploads/2023/09/Header-Jasa-Renovasi-Baru-Abris-Group.jpg" alt="" class="img-fluid rounded">
                    </a>
                </div>

                <!-- ads 2 -->
                <div class="mb-3">
                    <a href="#">
                        <img src="https://abrisgrup.com/wp-content/uploads/2023/09/Header-Jasa-Kontraktor-Baru.jpg" alt="" class="img-fluid rounded">
                    </a>
                </div>

                <!-- ads 3 -->
                <div class="mb-3">
                    <a href="#">
                        <img src="https://abrisgrup.com/wp-content/uploads/2023/09/Header-Jasa-Deasin-Arsitek-Baru.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
            
        @else
        <!-- hasil penelusuran jika berhasil -->
        <div class="row">
            <div class="col-lg-8">
                <p>Pencarian tidak ditemukan. Coba gunakan keyword lain</p>
            </div>
            
            <!-- widget -->
            <div class="col-lg-4">
                <form action="{{ route('guest.artikel.search') }}" method="get" class="mb-5">
                    <input type="text" class="form-control" name="keyword" placeholder="Masukkan judul" value="{{ request()->keyword }}">
                </form>
                <!-- ads 1 -->
                <div class="mb-5">
                    <a href="#">
                        <img src="https://abrisgrup.com/wp-content/uploads/2023/09/Header-Jasa-Renovasi-Baru-Abris-Group.jpg" alt="" class="img-fluid rounded shadow">
                    </a>
                </div>

                <!-- ads 2 -->
                <div class="mb-5">
                    <a href="#">
                        <img src="https://abrisgrup.com/wp-content/uploads/2023/09/Header-Jasa-Kontraktor-Baru.jpg" alt="" class="img-fluid rounded shadow">
                    </a>
                </div>

                <!-- ads 3 -->
                <div class="mb-5">
                    <a href="#">
                        <img src="https://abrisgrup.com/wp-content/uploads/2023/09/Header-Jasa-Deasin-Arsitek-Baru.jpg" alt="" class="img-fluid shadow rounded">
                    </a>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
    
@endsection