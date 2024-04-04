@extends('layouts.pages')
@section('content')
<section class="top-150" data-aos="fade-up" data-aos-duration="100">
    <div class="container">
        <div class="row">
            <h1 class="text-uppercase mb-3">Blog</h1>
            <div class="col-lg-9">
                    @foreach ($posts as $item)
                    <div class="card mb-3" style="max-width: 540px;">
                        <a href="{{ route('guest.artikel.show', $item->id) }}" class="text-decoration-none text-dark">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{ asset(Storage::url($item->banner)) }}" class="img-fluid rounded-start" alt="{{ $item->title }}">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{ $item->title }}</h5>
                              <ul>
                                <li class="list-unstyled"><i class="bi bi-person"></i> : {{ $item->user->name }}</li>
                                <li class="list-unstyled"><i class="bi bi-calendar"></i> : {{ $item->created_at }}</li>
                                <li class="list-unstyled"><i class="bi bi-tag"></i> : {{ $item->category->name }}</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        </a>
                    </div>  
                    @endforeach
                {{ $posts->links() }}
            </div>

            <!-- widget sidebar -->
            <div class="col-lg-3">
                    <form action="{{ route('guest.artikel.search') }}" method="get" class="mb-5">
                        <input type="text" class="form-control" name="keyword" placeholder="Masukkan judul">
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
                            <img src="https://abrisgrup.com/wp-content/uploads/2023/09/Header-Jasa-Deasin-Arsitek-Baru.jpg" alt="" class="img-fluid rounded shadow">
                        </a>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection