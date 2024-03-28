<!-- layanan jasa -->
<section class="tb-150-color">
    <div class="container tb-70">
        <h2 class="fw-bold text-center text-uppercase mb-5">BERITA</h2>
            <div class="blog-section"> 
                <!-- layanan jasa desain interior -->
                @foreach ($posts as $item)
                <div class="border p-3 rounded bg-hover-primary ms-2 me-2" >
                    <a href="{{ route('guest.artikel.show', $item->id) }}" class="text-decoration-none text-dark">
                        <img src="{{ asset(Storage::url($item->banner)) }}" alt="{{ $item->title }}" class="img-fluid mb-3">
                        {{-- <img src="{{ asset('images/layanan/home.png') }}" alt="" class="img-fluid mb-3"> --}}
                        <h6 class="mb-2 fw-bold text-uppercase">{{ $item->title }}</h6>
                        <p class="mb-3"><i class="bi bi-person"></i> {{ $item->user->name }}, <i class="bi bi-tags"></i> {{ $item->category->name }}</p>
                    </a>
                </div> 
                @endforeach
            </div>
    </div>
</section>