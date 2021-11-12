<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\Photo;
use App\Models\Resep;
use App\Models\ResepStep;
use Auth;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    
    // GET SEMUA RESEP
    public function index()
    {
        $resep = Resep::all();
        return view('resep.index', ['reseps' => $resep]);
    }

     public function search()
    {
        $resep = Resep::all();
        return view('resep.search-list', ['reseps' => $resep]);
    }

    public function create()
    {
        return view('resep.create-resep');
    }

    public function store(Request $request)
    {
        $resep = Resep::create([
            'title' => $request->judul,
            'user_id' => Auth::user()->id,
            'description' => $request->deskripsi,
            'duration' => 200,
        ]);

        foreach ($request->listBahans as $bahan) {
            $resep->bahans()->attach(
                $bahan['bahan_id'],
                [
                    'quantity' => $bahan['quantity'],
                ]
            );
        }

        foreach ($request->listLangkah as $index => $step) {
            $resepStep = ResepStep::create(
                [
                    'resep_id' => $resep->id,
                    'nomor_step' => $index + 1,
                    'description' => $step['text'] ?? ' ',
                ]
            );

            $resep->steps()->save($resepStep);
        }

        foreach ($request->images as $index => $imageUrl) {
            $filename = explode("/", $imageUrl['path']);
            $photo = Photo::create(
                [
                    'resep_id' => $resep->id,
                    'filename' => $filename[1],
                ]
            );
            $resep->photos()->save($photo);
        }

        return redirect('/profile/'. auth()->user->username);
    }

    public function show($id)
    {
        $resep = Resep::with('user', 'bahans', 'photos', 'steps')->where('id', $id)->first();
        return view('resep.detail-resep', ['resep' => $resep]);
    }

    public function edit(Resep $resep)
    {
    }


    public function update(Request $request, Resep $resep)
    {
        //
    }


    public function destroy(Resep $resep)
    {
        //
    }

}
