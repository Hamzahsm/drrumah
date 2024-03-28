<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use App\Models\Category;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Modles\Permission;
use App\Http\Requests\Post\StoreRequest; //request
use App\Http\Requests\Post\UpdateRequest; //request
use Alert; // sweet alert

class PostController extends Controller
{
    /**
     * olny user has permission these below can access this controller
     */
    function __construct()
    {
        $this->middleware('permission:post-list|post-create|post-edit|post-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:post-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:post-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:post-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $titleDelete = 'Hapus Berita !';
        $textDelete = 'Apakah Anda Yakin ?';
        confirmDelete($titleDelete, $textDelete);

        $posts = Post::with('views')->paginate(5); //(views) -> eloquent viewable
        $category = Category::all();
        return view('posts.index',[
            'breadcumb' => 'Semua Berita',
        ], compact('posts', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('posts.create',[
            'breadcumb' => 'Buat Berita Baru',
        ], compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        // dd($request); 
        $validated = $request->validated();

        //upload image
        if($request->hasFile('banner')) {
            $filePath = Storage::disk('public')->put('artikel/banner', request()->file('banner'));
            $validated['banner'] = $filePath;
        } 

        $validated['user_id'] = auth()->user()->id;
        $tags = explode(",", $request->tags);

        $create = Post::create($validated);
        $create->tag($tags);

        if($create) {
            Alert::success('Success', 'Berhasil memuat berita');
            return redirect()->route('dashboard'); 
            // return redirect()->route('posts.index'); 
        } 

        return abort(500); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $post = Post::findOrFail($id);
        views($post)->record(); //eloquent-viewable
  
        return view('posts.show',[
            'breadcumb' => 'Detail Berita',
        ], compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('posts.edit',[
            'breadcumb' => 'Edit Berita',
        ], compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        //
        $post = Post::findOrFail($id);
        $validated = $request->validated();

        if ($request->hasFile('banner')) {
            // delete image
            Storage::disk('public')->delete($post->banner);
            $filePath = Storage::disk('public')->put('artikel/banner', request()->file('banner'), 'public');
            $validated['banner'] = $filePath;
        }

        $update = $post->update($validated);

        if($update) {
            Alert::success('Hore!', 'Post Update Succeffully');
            return redirect()->route('posts.index');
        }
        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $post = Post::findOrFail($id);
        Storage::disk('public')->delete($post->banner);
        $delete = $post->delete($id);
        

        if($delete) {
            Alert::success('Success!', 'Berita berhasil dihapus !');
            return redirect()->route('posts.index');
        }

        return abort(500);
    }
}
