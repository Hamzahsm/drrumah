<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
use Alert;//sweet Alert

class RoleController extends Controller
{
    /**
     * only user have these access below can use all method
     */
    function __construct()
    {
        $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:role-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:role-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
        $title = 'Hapus Role!';
        $text = 'Apakah Anda Yakin ?';

        confirmDelete($title, $text);
        $roles = Role::all();
        return view('roles.index',[
            'breadcumb' => 'All Roles',
        ], compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $permission = Permission::get();
        return view('roles.create',[
            'breadcumb' => 'Create New Role',
        ], compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));

        if($role) {
            Alert::success('Congratulation!', 'Role has been create !');
            return redirect()->route('roles.index');
        }

        return abort(500);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
        ->where("role_has_permissions.role_id", $id)
        ->get();

        return view('roles.show',[
            'breadcumb' => 'Detail Role',
        ], compact('role', 'rolePermissions'));
    } 

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $role = Role::findOrFail($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")
                            ->where("role_has_permissions.role_id",$id)
                            ->pluck("role_has_permissions.permission_id", "role_has_permissions.permission_id")
                            ->all();
        
        return view('roles.edit',[
            'breadcumb' => 'Edit Role',
        ], compact('role', 'permission', 'rolePermissions')); 

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // this is part 2 of multirole user 
        $this->validate($request,[
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::findOrFail($id);
        $role->name = $request->input('name');
        $role->save();
        $role->syncPermissions($request->input('permission'));
        if($role) {
            Alert::success('Done', 'Update Successfully !');
            return redirect()->route('roles.index')->with('success', 'Aksi Berhasil');
        }

        return abort(500);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $delete = DB::table("roles")->where('id', $id)->delete();
        if($delete) {
            Alert::success('Success', 'Role berhasil dihapus !');
            return redirect()->route('roles.index');
        }

        return abort(500);

    }
}
