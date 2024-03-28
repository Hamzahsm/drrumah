@extends('layouts.dashboard')
@section('content')
    <section class="content">
        <div class="container-fluid">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoopss!</strong> Gagal Memperbarui Data ! <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- form -->
            {{-- <form action="{{ route('users.update', $user->id) }}" method="patch"> --}}
            {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id]]) !!}
            
                <div class="mb-3 form-row">
                    <div class="col">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                    </div>
                    <div class="col">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">  
                    </div>
                </div>

                <div class="mb-3 form-row">
                    <div class="col">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="col">
                        <label for="confirm-password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm-password" name="confirm-password">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="roles" class="form-label">Roles</label>
                    {!! Form::select('roles[]', $roles, [], array('class' => 'form-control', 'multiple')) !!}
                </div>

                <div class="mb-3">
                    <button class="btn-primary btn btn-block" type="submit"><i class="fas fa-paper-plane"></i> Update Now</button>
                </div>
            {{-- </form> --}}
            {!! Form::close() !!}
        </div>
    </section>
</div>
@endsection