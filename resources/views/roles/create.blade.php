@extends('layouts.dashboard')
@section('content')
    <section class="content">
        <div class="container-fluid">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Aksi Gagal ! <br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- form -->
            <form action="{{ route('roles.store') }}" method="post">
                @csrf 
                <div class="mb-3 form-row">
                    <div class="col">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="col">
                        <label for="permission" class="form-label">Permission</label> <br>
                        @foreach ($permission as $value)
                        <label>{!! Form::checkbox('permission[]', $value->name, false, array('class' => 'form-check-label')) !!} {{ $value->name }}</label>
                        @endforeach
                    </div>
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-paper-plane"></i> Submit</button>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection