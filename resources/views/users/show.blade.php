@extends('layouts.dashboard')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- table -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Created_at</th>
                        <th>Verified_at</th>
                    </tr>
                </thead>
                <tbody>
                    <td>{{ $user->name }}</td>
                    <td>{{ Carbon\Carbon::parse($user->created_at)->translatedFormat('d F Y H:i') }} WIB</td>
                    <td>{{ Carbon\Carbon::parse($user->email_verified_at)->translatedFormat('d F Y H:i') }} WIB</td>
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection