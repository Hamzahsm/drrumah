@extends('layouts.dashboard')
@section('content')
<section class="content">
    <div class="container-fluid">
        <p>Berita : {{ $post->title }}</p>
        <div class="row">
            <div class="col">
                <div class="border p-3 shadow-sm rounded mb-3">
                    <h5>Title</h5>
                    <p>{{ $post->title }}</p>
                </div>
                <div class="border p-3 shadow-sm rounded">
                    <h5>Banner</h5>
                    <img src="{{ asset(Storage::url($post->banner)) }}" alt="{{ $post->title }}" class="img-fluid">
                </div>
            </div>
            <div class="col">
                <div class="border p-3 shadow-sm rounded mb-3">
                    <h5>Penulis</h5>
                    {{ $post->user->name }}
                </div>
                <div class="border p-3 shadow-sm rounded mb-3">
                    <h5>Konten</h5>
                    {!! $post->content !!}
                </div>
                <div class="border p-3 shadow-sm rounded mb-3">
                    <h5>Kategori</h5>
                    {{ $post->category->name }}
                </div>
                <div class="border p-3 shadow-sm rounded mb-3">
                    <h5>Tags</h5>
                    @foreach ($post->tags as $tag)
                        <a href="#">
                            <label class="label label-info ms-2">{{ $tag->name }}</label>
                        </a>
                    @endforeach
                </div>

                <div class="border p-3 shadow-sm rounded">
                    <h5>Tayangan</h5>
                    {{-- <p>{{ views($post)->period(\CyrildeWit\EloquentViewable\Support\Period::since(today()))->count() }}</p> --}}
                    {{-- <p>{{ views($post)->unique()->count() }}</p> --}}
                    <p>{{ views($post)->count(); }}</p>
                </div>
            </div>
        </div>   
        {{-- <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>Title</th>
                    <td>{{ $post->title }}</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>{{ $post->category->name }}</td>
                </tr>
                <tr>
                    <th>Content</th>
                    <td>{!! $post->content !!}</td>
                </tr>
            </tbody>
        </table> --}}
    </div>
</section>
</div>
@endsection