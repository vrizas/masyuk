<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $reseps = Resep::with('user', 'photos')->get();
        return view('home.home', ['reseps' => $reseps]);
    }
}
