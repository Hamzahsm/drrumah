<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role; //spatie laravel
use DB;
use Hash;
use Illuminate\Support\Arr;
use Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = 'Hapus User !';
        $text = 'Apakah Anda Yakin ?';
        confirmDelete($title, $text);

        $data = User::all();
        return view('users.index',[
            'breadcumb' => 'Daftar User',
        ], compact('data')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $roles = Role::pluck('name', 'name')->all();
        return view('users.create',[
            'breadcumb' => 'Create New User',
        ], compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // catch all user input
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        //hass password
        $input['password'] = Hash::make($input['password']); 

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        if($user) {
            Alert::success('Success', 'Create Profil Successfully!');
            return redirect()->route('users.index')->with('success', 'User Created Successfully!');
        }

        return abort(500);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user = User::findOrFail($id);
        return view('users.show',[
            'breadcumb' => 'Detail User',
        ], compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('users.edit',[
            'breadcumb' => 'Edit User',
        ], compact('user', 'roles', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if(!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $user = User::findOrFail($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $user->assignRole($request->input('roles'));

        if($user) {
            Alert::success('Success', 'User Has Been Updated!');
            return redirect()->route('users.index')->with('success', 'Berhasil memperbarui data!');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $delete = User::findOrFail($id)->delete();
        if($delete) {
            Alert::success('Success', 'User berhasil dihapus!');
            return redirect()->route('users.index');
        }
    }
}
