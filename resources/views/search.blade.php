@extends('layouts.dashboard')
@section('content')
<section class="content">
    <div class="container-fluid">
        <p>show the result of : {{ request('keyword')}}</p>
        @if (count($posts) > 0)
            <table class="table borderd">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Writer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->user->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Oppss, trying to search another query</p>
        @endif

        <p><a href="{{ route('dashboard') }}">back to posts</a></p>
    </div>
</section>
</div>
@endsection