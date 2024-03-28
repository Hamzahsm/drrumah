@extends('layouts.dashboard')
@section('content')
    <section class="content">
        <div class="container-fluid">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoopss!</strong> Aksi Gagal ! <br><br>
                    <ul>
                        @foreach ($errors as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul> 
                </div>
            @endif

            <!-- form -->
            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf 
            <div class="mb-3 form-row">
                <div class="col">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title"> 
                </div>
                <div class="col">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" disabled readonly>
                </div>
            </div>

            <div class="mb-3 form-row">
                <div class="col">
                    <label for="banner" class="form-label">Title Image</label>
                    <input type="file" class="form-control-file" id="banner" name="banner">
                </div>
                <div class="col">
                    <label for="category_id" class="form-label">Category</label>
                    <select name="category_id" id="category_id" class="custom-select">
                        @foreach ($categories as $category)
                            @if (old('category_id') == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select> 
                </div>
            </div>

            <div class="mb-3">
                <label for="content-block" class="form-label">Content</label>
                {{-- <div class=""></div> --}}
                <textarea name="content" id="content-block" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="tags" class="form-label">Tags</label>
                <input type="text" data-role="tagsinput" name="tags" class="form-control">
            </div>

            <div class="mb-3">
                <button class="btn-primary btn btn-block" type="submit"><i class="fas fa-paper-plane"></i> Submit</button>
            </div>
            </form>
        </div>
    </section>
</div>

<!-- script to check slug -->
<script>
    const title = document.getElementById('title');
    const slug = document.getElementById('slug');

    title.addEventListener('change', function(){
        fetch('/post/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script>
@endsection