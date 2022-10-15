<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use App\Models\User;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index()
    {
        $complaints = Complaint::paginate(3);
        return view( 'back.complaint.index', compact('complaints'));
    }

    public function create()
    {
        $users = User::all();
        return view('back.complaint.create', compact('users'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'description' => 'required',
            'code' => '',
            'product_id' => '',
            'status' => 'Menunggu'
        ]);

        Complaint::create($request->all());

        return redirect('complaint');
    
    }

    public function show()
    {
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
