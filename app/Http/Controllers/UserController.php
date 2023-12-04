<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('dashboard.users.index', [
            'title' => 'Account',
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.users.create', [
            'title' => 'Create Account'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'is_admin'=> 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = strtolower($request->email);
        $user->is_admin = $request->is_admin;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/dashboard/users')->with('success', 'User has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.users.edit', [
            'title' => 'Edit Account',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'is_admin'=> 'required',
        ];

        if ($request->email != User::findOrFail($id)->email) {
            $rules['email'] = 'required|string|email|unique:users';
        }

        $validatedData = $request->validate($rules);

        User::findOrFail($id)->update($validatedData);
        return redirect('/dashboard/users')->with('success', 'Akun berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('/dashboard/users')->with('success', 'User has been deleted!');
    }
}
