@extends('layouts.dashboard')
@section('content')
<section class="content">
    <div class="container-fluid">
        {{-- <p>show the result of : {{ request('keyword')}}</p> --}}
        <p>Ditemukan data : {{ $posts->count() }}</p>

        @if (count($posts) > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th><i class="fas fa-image"></i> Banner</th>
                    <th><i class="fas fa-link"></i> Title</th>
                    <th><i class="fas fa-tags"></i> Category</th>
                    <th><i class="fas fa-hashtag"></i> Tags</th>
                    <th><i class="fas fa-user-edit"></i> Writer</th>
                    <th><i class="fas fa-calendar-alt"></i> Created_at</th>
                    <th><i class="fas fa-edit"></i> Edit</th>
                    <th><i class="fas fa-trash"></i> Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset(Storage::url($item->banner)) }}" alt="{{ $item->title }}" class="img-fluid" width="100" height="100"></td>
                    <td><a href="{{ route('posts.show', $item->id) }}">{{ $item->title }}</a></td>
                    <td>{{ $item->category->name }}</td> 
                    <td>
                        @foreach ($item->tags as $tag)
                        <a href="#">
                          <label class="label label-info ms-2">{{ $tag->name }}</label>
                        </a>
                      @endforeach
                    </td>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y H:i') }} WIB</td>
                    <td><a href="{{ route('posts.edit', $item->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('posts.destroy', $item->id) }}" data-confirm-delete="true" class="btn btn-danger"><i class="bi bi-trash text-danger"></i> Hapus</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
            
        @else
        <p>Post nihil, create new post first!</p>
        @endif

    </div>
</section>
</div>
@endsection