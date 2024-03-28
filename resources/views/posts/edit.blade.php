@extends('layouts.dashboard')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <h2 class="fw-bold">Edit Post : {{ $post->title }}</h2>
            <p><a href="{{ route('posts.index') }}">List Post</a></p>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoopss!</strong> Aksi gagal. <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- form -->
            {!! Form::model($post, ['method' => 'PATCH', 'enctype' => 'multipart/form-data', 'route' => ['posts.update', $post->id]]) !!}
                <div class="mb-3 form-row">
                    <div class="col">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
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
                    <label for="banner" class="form-label">Title Image</label>
                    <br>
                    <img src="{{ Storage::url($post->banner) }}" class="img-fluid mb-3" width="100" height="100">
                    <input type="file" id="banner" name="banner" class="form-control-file">
                </div>
                
                <div class="mb-3">
                    <label for="content-block" class="form-label">Content</label>
                    <textarea name="content" id="content-block" cols="30" rows="10" class="form-control">{{ $post->content }}</textarea>
                </div> 

                <div class="mb-3">
                    <label for="tags" class="form-label">Tags</label>
                        @foreach ($post->tags as $tag)
                            <span class="label label-info ms-2">{{ $tag->name }}</span>
                        @endforeach
                </div>

                <div class="mb-3">
                    <button class="btn-primary btn" type="submit">Submit</button>
                </div>
            {!! Form::close() !!}
        </div>
    </section>
</div>
@endsection