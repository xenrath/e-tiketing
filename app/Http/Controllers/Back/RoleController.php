<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::get();
        return view('back.role.index', compact('roles'));
    }

    public function create()
    {
        return view('back.role.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'role' => 'required'
        ], [
            'role.required' => 'Role tidak boleh kosong!'
        ]);

        Role::create($request->all());

        return redirect('role')->with('status', 'Berhasil menambahkan Role');
    }

    public function show()
    {
        // return view('back.role.show');
    }

    public function edit($id)
    {
        $role = Role::where('id', $id)->first();
        return view('back.role.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'role' => 'required'
        ], [
            'role.required' => 'Role tidak boleh kosong!'
        ]);

        Role::where('id', $id)->update([
            'role' => $request->role
        ]);

        return redirect('role')->with('status', 'Berhasil mengubah Role');
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect('role')->with('status', 'Berhasil menghapus Role');
    }
}
