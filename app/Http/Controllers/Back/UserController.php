<?php

namespace App\Http\Controllers\Back;
use App\Models\User;
use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(3);
        return view('back.user.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view( 'back.user.create', compact('roles'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'role_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'password' => ''
        ]);

        User::create($request->all());

        return redirect('user');
    
    }

    public function edit(User $user)
    {
        return view('.back.user.edit', compact('user'));
    }


    public function update(Request $request, User $user)
    {

        $request->validate([
            'role_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('id', $user->id)
                ->update([
                    'role_id' => $request->role_id,
                    'name' => $request->jenis_pembuatan,
                    'phone' => $request->phone,
                    'password' => $request->password,
            ]);
        return redirect('user');
    }

    public function show(User $user)
    {
        return view('.back.user.detail', compact('user'));
    }

    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('user');
    }
}
