<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use Alert; // sweet alert

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $titleDelete = 'Hapus Kategori !';
        $textDelete = 'Apakah Anda Yakin ?';
        confirmDelete($titleDelete, $textDelete);

        $categories = Category::all();
        return view('category.index',[
            'breadcumb' => 'Tabel Kategori'
        ], compact('categories')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('category.create',[
            'breadcumb' => 'Buat Kategori Baru',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
        // dd($request);
        $validate = $request->validated();
        $validate['user_id'] = auth()->user()->id;

        $create = Category::create($validate);

        if($create) {
            // Alert::success('Hore!', 'Post Created Succeffully');
            return redirect()->route('categories.index'); 
        } 

        return abort(500); 


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $category = Category::findOrFail($id)->delete();
        // $category->delete();

        if($category) {
            Alert::success('Success!', 'Kategori berhasil dihapus !');
            return redirect()->route('categories.index');
        }

        return abort(500);
        
    }
}
