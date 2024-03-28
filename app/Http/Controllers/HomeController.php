<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Spatie\Permission\Models\Role;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home'); 
    }

    /**
     * 
     * new-dashboard
     * 
     */
    public function dashboard(){
        $posts = Post::paginate(5);
        // $posts = Post::all();
        $users = User::all();
        $roles = Role::all();
        $categories = Category::all();
        $postUser = Post::where('user_id', auth()->user()->id)->paginate(10);
        // $postUser = Post::where('user_id', auth()->user()->id)->latest()->get();

        // we will fetch data by auth user id 
        return view('new-dashboard',[
            'breadcumb' => '',
        ], compact('posts', 'users', 'roles', 'categories', 'postUser'));
    }

    /**
     * 
     * check slug
     * 
     */
    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function categorySlug(Request $request) {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }

    /**
     * 
     * search feature
     * 
     */
    public function searchPost(Request $request) {
        // dd($request);
        $posts = Post::search($request->keyword)->get();
        return view('search.search-post',[
            'breadcumb' => 'Hasil Pencarian',
        ], compact('posts'));
    } 

    public function searchUser(Request $request) {
        // dd($request);
        $users = User::search($request->keyword)->get();
        return view('search.search-user',[
            'breadcumb' => 'Hasil Pencarian',
        ], compact('users'));
    } 

    /**
     * 
     * display user posts
     * 
     */
    public function tulisansaya(Request $request) 
    {
        // dd($request);
        $posts = Post::where('user_id', auth()->user()->id)->get();
        return view('users.tulisan-saya', [
            'breadcumb' => 'Tulisan Saya',
        ], compact('posts'));
    }

    /**
     * 
     * my profile
     * 
     */
    public function myProfile()
    {
        return view('profile.index');
    }

    public function updateProfile(Request $request) 
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'confirm_password' => 'required_with:password|same:password',
            'avatar' => 'image', 
        ]);
  
        $input = $request->all();
          
        if ($request->hasFile('avatar')) {
            $nameFolder = $request->name;
            $avatarName = time().'.'.$request->avatar->getClientOriginalExtension();
            // $request->avatar->move(public_path('users/avatars'), $avatarName);
            $request->avatar->move(public_path('avatars/' . $nameFolder . '/'), $avatarName); //menyimpan foto didalam username mereka
  
            $input['avatar'] = $avatarName;
        
        } else {
            unset($input['avatar']);
        }
  
        if ($request->filled('password')) {
            $input['password'] = Hash::make($input['password']);
        } else {
            unset($input['password']);
        }
  
        auth()->user()->update($input);
    
        return back()->with('success', 'Profile updated successfully.');
    }

}
