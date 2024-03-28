@extends('layouts.dashboard')
@section('content')
<section class="content">
    <div class="container-fluid">
        <a href="{{ route('categories.create') }}">
            <button class="btn btn-primary mb-3">Tambah Kategori</button>
        </a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Created_at</th>
                    <th>Pembuat</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y H:i') }} WIB</td>
                        <td>{{ $item->user->name }}</td>
                        <td><a href="{{ route('categories.destroy', $item->id) }}" class="btn btn-danger" data-confirm-delete="true">Hapus </a></td>
                    </tr>
                @endforeach
            </tbody>
        </table> 
    </div>
</section>
</div>
@endsection