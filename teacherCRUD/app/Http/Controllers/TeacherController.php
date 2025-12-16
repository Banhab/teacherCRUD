<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

public function index()
{
    $teachers = Teacher::orderBy('tid', 'asc')->paginate(10);

    return view('teacher.index', compact('teachers'));
}


    public function create()
    {
        return view('teacher.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'tel' => 'required',
        ]);

        Teacher::create($request->all());

        return redirect()->route('teacher.index');
    }

    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teacher.show', compact('teacher'));
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teacher.edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

        $teacher->update($request->all());

        return redirect()->route('teacher.index');
    }

    public function destroy($id)
    {
        Teacher::destroy($id);
        return redirect()->route('teacher.index');
    }
    
}
