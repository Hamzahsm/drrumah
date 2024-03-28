@extends('layouts.dashboard')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf 
                <div class="mb-3 form-row">
                    <div class="col">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="col">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" disabled readonly>
                    </div>
                </div>

                <div class="mb-3">
                    <button class="btn btn-block btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
</div>

<!-- script to check slug -->
<script>
    const name = document.getElementById('name');
    const slug = document.getElementById('slug');

    name.addEventListener('change', function(){
        fetch('/category/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script>
@endsection