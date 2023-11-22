<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');

    }

    // In app/Http/Controllers/HomeController.php

    public function dashboard()
    {
        // Your logic for the dashboard
        return view('index', [
        "title" => "Login",
    ]);
    }

}
