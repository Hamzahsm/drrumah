@extends('layouts.pages')
@section('content')
<section class="top-150" data-aos="fade-up" data-aos-duration="100">
    <div class="container tb-70">
        <div class="row">
            <!-- artikel content -->
            <div class="col-lg-8">
                <div class="border p-3 shadow rounded">
                    <h4 class="mb-3"> {{ $post->title }}</h4>
                    <p class="mb-3">
                        <span><a href="{{ route('guest.writer.artikel', $post->user->id) }}"><i class="bi bi-person"></i> {{ $post->user->name }}</a></span> 
                        <span class="ms-2"><i class="bi bi-tags"></i> {{ $post->category->name }}</span> 
                        <span class="ms-2"><i class="bi bi-calendar"></i> {{ Carbon\Carbon::parse($post->created_at)->translatedFormat('d F Y') }} WIB</span> 
                        <span class="ms-2"><i class="bi bi-eye"></i> {{ views($post)->count(); }}</span>
                    </p>
                    <img src="{{ asset(Storage::url($post->banner)) }}" alt="{{ $post->title }}" class="img-fluid rounded mb-3">
                    <p class="mb-3">
                        @foreach ($post->tags as $tag)
                        <a href="#">
                            <button class="btn btn-primary text-white">{{ $tag->name }}</button>
                            {{-- <label class="label label-info ms-2">{{ $tag->name }}</label> --}}
                        </a>
                        @endforeach
                    </p>
                    <p>{!! $post->content !!}</p>
                </div>
            </div>

            <!-- widget sidebar -->
            <div class="col-lg-4">
                <div class="border p-3 shadow rounded">
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

        <!-- rekomendasi artikel -->
        <div class="row">
            <div class="col-lg-8">
                <h5 class="fw-bold text-uppercase mt-5 mb-3">Artikel Terbaru</h5>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($postRecommendation as $item)
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
        
                    {{-- <div class="col">
                      <div class="card"> 
                        <a href="https://abrisgrup.com/wp-content/uploads/2024/03/2.jpg" class="gallery-portofolio text-decoration-none">
                            <img src="https://abrisgrup.com/wp-content/uploads/2024/03/2.jpg" class="card-img-top img-fluid" alt="...">
                        </a>
                        <div class="card-body">
                          <h5 class="card-title"><i class="bi bi-tag"></i> Desain Rumah</h5>
                          <p class="card-text"><i class="bi bi-geo-alt"></i> Merjosari, Malang</p>
                        </div>
                      </div>
                    </div> --}}
        
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection