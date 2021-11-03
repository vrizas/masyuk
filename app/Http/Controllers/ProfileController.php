<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use Illuminate\Http\Request;

class ProfileController extends Controller
{   
    public function getBahans() {
        $bahans = Bahan::all();
    }
}
