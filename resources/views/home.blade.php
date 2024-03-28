@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="bordered p-3 shadow">
                <p><a href="{{ route('posts.index') }}">Manage Posts</a></p>
            </div>   
        </div>
        <div class="col-lg-4">
            <div class="bordered p-3 shadow">
                <p><a href="{{ route('users.index') }}">Manage Users</a></p>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="bordered p-3 shadow">
                <p><a href="{{ route('roles.index') }}">Manage Roles</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
