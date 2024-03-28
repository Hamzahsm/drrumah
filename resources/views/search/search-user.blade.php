@extends('layouts.dashboard')
@section('content')
    <section class="content">
        <div class="container-fluid">
             <!-- search form -->
             <form action="{{ route('search.user') }}" method="get">
                <input type="text" name="keyword" class="form-control" placeholder="Masukkan nama">
            </form>  

            <p>Ditemukan data : {{ $users->count() }}</p>

            @if (count($users) > 0)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th><i class="fas fa-user"></i> Nama</th>
                            <th><i class="fas fa-envelope"></i> Email</th>
                            <th><i class="fas fa-calendar-alt"></i> Created_at</th>
                            <th><i class="fas fa-user-tag"></i> Roles</th>
                            <th><i class="fas fa-edit"></i> Edit</th>
                            <th><i class="fas fa-trash"></i> Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="{{ route('users.show', $item->id) }}">{{ $item->name }}</a></td>
                            <td>{{ $item->email }}</td>
                            <td>{{ Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y H:i') }} WIB</td>
                            <td>
                                @if (!empty($item->getRoleNames()))
                                    @foreach ($item->getRoleNames() as $v)
                                        <p>{{ $v }}</p>
                                    @endforeach
                                @endif
                            </td>
                            <td><a href="{{ route('users.edit', $item->id) }}" class="btn btn-warning">Edit</a></td>
                            <td><a href="{{ route('users.destroy', $item->id) }}" class="btn btn-danger" data-confirm-delete="true">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
              <p>user nihil</p>  
            @endif
        </div>
    </section>
</div>
@endsection