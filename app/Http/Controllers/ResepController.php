<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\Bookmark;
use App\Models\Category;
use App\Models\Photo;
use App\Models\Resep;
use App\Models\ResepStep;
use Auth;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    
    // GET SEMUA RESEP
    public function showAllResep()
    {
        $resep = Resep::all();
        return view('resep.index', ['reseps' => $resep]);
    }

     public function searchResep()
    {
        $resep = Resep::all();
        return view('resep.search-list', ['reseps' => $resep]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('resep.create-resep', ['categories' => $categories]);
    }

    public function createResep(Request $request)
    {   
        $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'listBahans' => 'required',
            'listLangkah' => 'required',
            'categories' => 'required'
        ]);

        $resep = Resep::create([
            'title' => $request->judul,
            'user_id' => Auth::user()->id,
            'description' => $request->deskripsi,
            'duration' => 200,
            'youtube_id' => $request->youtubeId,
            'youtube_url' => $request->youtubeUrl
        ]);

        foreach ($request->listBahans as $bahan) {
            $resep->bahans()->attach(
                $bahan['bahan_id'],
                [
                    'quantity' => $bahan['quantity'],
                ]
            );
        }

        foreach ($request->categories as $category) {
            $resep->categories()->attach($category);
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

        return redirect('/profile/'. auth()->user()->username);
    }

    public function showResep($id)
    {
        $resep = Resep::with('user', 'bahans', 'photos', 'steps', 'categories')->withCount('komentars')->where('id', $id)->first();
        $bookmarkCount = Bookmark::where('resep_id', $resep->id)->count();
        return view('resep.detail-resep', ['resep' => $resep, 'bookmarkCount' => $bookmarkCount]);
    }

    public function edit(Resep $resep)
    {
    }


    public function update(Request $request, Resep $resep)
    {
        //
    }


    public function deleteResep($id)
    {
        $result = Resep::find($id)->delete();
        if($result == null)
        {
            return redirect()->back()->with('error', 'Terdapat kesalahan sistem.'); 
        }
        return redirect()->back()->with('success', 'Resep berhasil dihapus.'); 
        
    }

}
