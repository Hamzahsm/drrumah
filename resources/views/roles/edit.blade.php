@extends('layouts.dashboard')
@section('content')
    <section class="content">
        <div class="container-fluid">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoopss!</strong> Aksi Gagal ! <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {!! Form::model($role, ['method' => 'PATCH', 'route' => ['roles.update', $role->id]]) !!}
                @method('patch')
                <div class="mb-3 form-row">
                    <div class="col">
                        <label id="name" class="form-label" >Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}">
                    </div>
                    <div class="col">
                        <label for="permission" class="form-label">Permission</label> <br>
                        @foreach ($permission as $value)
                            <label>{!! Form::checkbox('permission[]', $value->name, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) !!} {{ $value->name }}</label>
                        @endforeach
                    </div>
                </div>

                {{-- <div class="mb-3">
                    <label for="permission" class="form-label">Permission</label>
                    @foreach ($permission as $value)
                        <label>{!! Form::checkbox('permission[]', $value->name, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) !!} {{ $value->name }}</label>
                    @endforeach
                </div> --}}

                <div class="mb-3">
                    <button class="btn-primary btn btn-block" type="submit"><i class="fas fa-paper-plane"></i> Submit</button>
                </div>
            {!! Form::close() !!}
        </div>
    </section>
</div>
@endsection