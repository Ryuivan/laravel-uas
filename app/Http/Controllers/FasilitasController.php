<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fasilitass = Fasilitas::latest()->filter(request(['search']))->paginate(6)->withQueryString();

        return view('dashboard.Fasilitas.index', [
            'title' => 'Fasilitas',
            'fasilitass' => $fasilitass,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fasilitass = Fasilitas::all();
        return view('dashboard.Fasilitas.create', [
            'title' => 'Create Fasilitas',
            'fasilitass' => $fasilitass,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'gambar' => 'image|mimes:jpg,jpeg,png|file|max:1024'
        ]);

        if ($request->file('gambar'))
            $validatedData['gambar'] = $request->file('gambar')->storePublicly('fasilitass', 'public');
        
        $fasilitas = new Fasilitas;
        $fasilitas->name = $validatedData['name'];
        if ($request->file('gambar')) $fasilitas->gambar = $validatedData['gambar'];
        $fasilitas->user_id = auth()->user()->id;
        $fasilitas->save();

        return redirect('/dashboard/fasilitas')->with('success', 'Fasilitas baru berhasil ditambahkan!');
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
        return view('dashboard.fasilitass.edit', [
            'title' => 'Edit Fasilitas',
            'fasilitas' => Fasilitas::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'gambar' => 'image|mimes:jpg,jpeg,png|file|max:1024'
        ]);

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->storePublicly('fasilitass', 'public');
        }

        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->name = $validatedData['name'];
        $fasilitas->gambar = $validatedData['gambar'];
        $fasilitas->user_id = auth()->user()->id;
        $fasilitas->save();

        return redirect('/dashboard/fasilitas')->with('success', 'Fasilitas berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        if ($fasilitas->gambar) {
            Storage::delete($fasilitas->gambar);
        }
        Fasilitas::destroy($id);
        return redirect('/dashboard/fasilitas')->with('success', 'Fasilitas berhasil dihapus!');
    }
}
