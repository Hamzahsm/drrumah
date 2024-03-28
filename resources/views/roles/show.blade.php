@extends('layouts.dashboard')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Permission</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>@if (!empty($rolePermissions))
                            @foreach ($rolePermissions as $v)
                                <label>{{ $v->name }}</label>
                            @endforeach
                        @endif</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection