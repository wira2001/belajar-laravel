<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function create()
    {
        return view('admin.lecturer.create');
    }   
    
    public function index ()
    {
        $lecturers = Lecturer::all();
        return view('admin.lecturer.index');
      
    }
    public function store(Request $request)
    {
        Lecturer::create($request->all());
    }
}

