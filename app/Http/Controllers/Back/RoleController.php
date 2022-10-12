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
        ]);

        $role = Role::create($request->all());

        return redirect('role');
        
        // if ($role) {
        // } else {

        // }
    }

    public function show()
    {
        // return view('back.role.show');
    }

    public function edit($id)
    {
        $role = Role::where('id', $id)->first();
        return view('back.role.show', compact('role'));
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
