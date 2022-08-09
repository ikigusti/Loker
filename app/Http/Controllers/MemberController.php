<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\loker;

class MemberController extends Controller
{
    public function index()
    {
        //menampilkan semua data dari model loker
        $loker = loker::all();
        $informasi = informasi::all();
        return view('welcome', compact('loker', 'informasi'));
    }
    // public function detail(Loker $loker)
    // {
    //     $loker = loker::find($loker->id);
    //     return view('detail', [
    //         'loker' => $loker,
    //     ]);

    // }
    public function detail($id)
    {
        $loker = Loker::find($id);
        return view('detail', ['loker' => $loker]);
    }
    public function artikel(informasi $informasi)
    {

        $informasi = informasi::find($informasi->id);
        return view('artikel', [
            'informasi' => $informasi,
        ]);

    }
}
