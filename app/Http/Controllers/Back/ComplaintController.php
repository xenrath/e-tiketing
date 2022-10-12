<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index()
    {
        // $complaints = Complaint::get();
        return view('back.complaint.index');
    }

    public function create()
    {
        return view('back.complaint.create');
    }

    public function store(Request $request)
    {
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
