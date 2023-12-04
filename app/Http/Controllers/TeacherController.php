<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Subject;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all()->paginate(6);
        return view('dashboard.teachers.index', [
            'title' => 'Teachers',
            'teachers' => $teachers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = Subject::all();
        return view('dashboard.teachers.create', [
            'title' => 'Create Teacher',
            'subjects' => $subjects,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:teachers',
            'gambar' => 'image|mimes:jpg,jpeg,png'
        ]);

        $validatedData['gambar'] = $request->file('gambar')->storePublicly('teachers', 'public');

        $teacher = new Teacher;
        $teacher->name = $validatedData['name'];
        $teacher->gambar = $validatedData['gambar'];
        $teacher->user_id = auth()->user()->id;
        $teacher->save();

        return redirect('/dashboard/teachers')->with('success', 'Guru baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return redirect('/dashboard/teachers')->with('success', 'Guru berhasil dihapus!');
    }
}
