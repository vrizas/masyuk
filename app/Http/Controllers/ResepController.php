<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\Resep;
use App\Models\ResepStep;
use Auth;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resep.create-resep');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->listLangkah);
        $resep = Resep::create([
            'title' => $request->judul,
            'user_id' => Auth::user()->id,
            'description' => $request->deskripsi,
            'duration' => 200,
            'imageUrl' => "https://via.placeholder.com/640x480.png/005544?text=omnis",
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
                    'description' => $step['text'],
                ]
            );
            
            $resep->steps()->save($resepStep);
        }

        return redirect('/profile/ekotyoo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('resep.detail-resep', ['resep' => Resep::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function edit(Resep $resep)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resep $resep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resep $resep)
    {
        //
    }

    // public function getResepHome() {
    //     $resep = Resep::with('user')->get();
    //     return view('home.home', ['reseps' => $resep]);
    // }
}
