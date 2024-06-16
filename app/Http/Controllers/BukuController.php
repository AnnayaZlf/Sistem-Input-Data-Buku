<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class BukuController extends Controller
{
    public function menu()
    {
        if (!Auth::check()) {
        
        return redirect('/')->with('alert', 'You must be logged in to access this page.');
    }
        return view("menu", ["key" => "menu"]);
    }
    public function Buku()
    {
        $buku= Buku::orderBy('id', 'desc')->get();
        return view("buku", ["key" => "buku", "bk" => $buku]);
    }

    public function addbuku()
    {
        return view('tambahbuku', ["key" => "buku"] );
    }

    public function savebuku(Request $request)
    {
        // Validate the request
        $request->validate([
            'namabuku' => 'required|string|max:255',
            'jenis_buku' => 'required|string|max:255',
            'tahun' => 'required|integer',
        ]);

        // Create a new Buku instance and save it
        $buku = new Buku();
        $buku->namabuku = $request->input('namabuku');
        $buku->jenis_buku = $request->input('jenis_buku');
        $buku->tahun = $request->input('tahun');
        $buku->save();

        // Redirect with a success message
        return redirect('/buku')->with('alert', 'Buku successfully added!');
    }


    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('formedit', ["key" => "buku", "em" => $buku]);
    }

    public function formedit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('formedit', ["key" => "buku", "em" => $buku]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'namabuku' => 'required|string|max:255',
            'jenis_buku' => 'required|string|max:255',
            'tahun' => 'required|integer',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->namabuku = $request->input('namabuku');
        $buku->jenis_buku = $request->input('jenis_buku');
        $buku->tahun = $request->input('tahun');
        $buku->save();

        return redirect('/buku')->with('alert', 'Buku successfully updated!');
    }

    public function delete($id)
    {
        $bk = Buku::find($id);

        //untuk hapus file public (storage->buku)
        if ($bk->Buku)
        {
            Storage::disk('public')->delete($bk->coverbuku);
        }

        $bk -> delete();
        return redirect('/buku')-> with('alert', 'Data Berhasil Di Hapus');
    }

    public function Login()
    {
        return view("login");
    }

    public function edituser()
    {
        return view("/edituser", ["key" => ""]);
    }

    public function updateuser(Request $request)
    {
        if($request->password_baru == $request->konfirmasi_password)
        {
            $user = Auth::user();

            $user->password = bcrypt($request->password_baru);

            $user->save();
            
            return redirect("/edituser")->with('info', 'Password Berhasil di Ubah');
        }
            else
        {
            return redirect("/edituser")-> with ('info', 'Password Gagal di Ubah');
        }
    }
    
    public function caribuku()
    {
        return view("caribuku");
    }

    public function actioncaribuku (Request $request)
    {
        $cari = $request->input('q');

        $bk= buku::where('namabuku', 'LIKE', "%$cari%")->get();

        return view("actioncaribuku", ['data' => $bk]);
    }
}
