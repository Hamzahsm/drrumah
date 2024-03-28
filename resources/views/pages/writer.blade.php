@extends('layouts.pages')
@section('content')
<section class="top-150" data-aos="fade-up" data-aos-duration="100">
    <div class="container">

        <div class="card mb-3 shadow" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                @if ($user->avatar)
                  <div class="p-3">
                    <img src="../avatars/{{ $user->name }}/{{ $user->avatar }}" class="img-fluid rounded-start" width="130px" height="130px">   
                  </div>
                @else
                  <div class="p-3">
                    <img src="{{ asset('images/avatar.jpg') }}" alt="" class="img-fluid" width="130px" height="130px">
                  </div>
                @endif
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title mb-5 text-uppercase">Penulis</h5>
                  <p class="card-title"><small class="text-body-secondary">Nama : {{ $user->name }}</small></p>
                  <p class="card-text"><small class="text-body-secondary">Keanggotaan : {{ Carbon\Carbon::parse($user->created_at)->translatedFormat('d F Y') }}</small></p>
                </div>
              </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <h5 class="fw-bold text-uppercase mt-5 mb-3">Artikel : {{ $user->name }}</h5>
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
        </div>

        {{-- <h5>Table User</h5>
        <table class="table table-border">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            </tbody>
        </table> --}}
    </div>
</section>
    
@endsection