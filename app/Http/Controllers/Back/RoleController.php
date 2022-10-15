<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $roles = Role::paginate(3);
=======
        $roles = Role::get();
>>>>>>> 2ecd2eb624ba6570d725818e301a2fc861945d9e
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
<<<<<<< HEAD
        ]);

        $role = Role::create($request->all());

        return redirect('role');
        
        // if ($role) {
        // } else {

        // }
=======
        ], [
            'role.required' => 'Role tidak boleh kosong!'
        ]);

        Role::create($request->all());

        return redirect('role')->with('status', 'Berhasil menambahkan Role');
>>>>>>> 2ecd2eb624ba6570d725818e301a2fc861945d9e
    }

    public function show()
    {
        // return view('back.role.show');
    }

    public function edit($id)
    {
        $role = Role::where('id', $id)->first();
<<<<<<< HEAD
        return view('back.role.show', compact('role'));
    }

    public function update()
    {
=======
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
>>>>>>> 2ecd2eb624ba6570d725818e301a2fc861945d9e
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
<<<<<<< HEAD
        return redirect('role');
=======
        return redirect('role')->with('status', 'Berhasil menghapus Role');
>>>>>>> 2ecd2eb624ba6570d725818e301a2fc861945d9e
    }
}
