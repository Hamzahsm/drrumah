@extends('layouts.dashboard')
@section('content')
    <section class="content">
        <div class="container-fluid">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            @if (count($roles) > 0)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th><i class="fas fa-user"></i> Name</th>
                            <th><i class="fas fa-calendar-alt"></i> Created At</th>
                            <th><i class="fas fa-edit"></i> Edit</th>
                            <th><i class="fas fa-trash"></i> Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $key => $role)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="{{ route('roles.show', $role->id) }}">{{ $role->name }}</a></td>
                            <td>{{ Carbon\Carbon::parse($role->created_at)->translatedFormat('d F Y H:i') }} WIB</td>
                            <td><a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary">Edit</a></td>
                            <td><a href="{{ route('roles.destroy', $role->id) }}" class="btn btn-danger" data-confirm-delete="true">Hapus </a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
               <p>rolesh nihil, tambahkan terlebih dahulu</p> 
            @endif
        </div> 
    </section>
</div>
@endsection