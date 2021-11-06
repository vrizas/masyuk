<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $resep = Resep::with('user')->get();
        return view('home.home', ['reseps' => $resep]);
    }
}
