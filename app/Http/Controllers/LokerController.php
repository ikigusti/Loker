<?php

namespace App\Http\Controllers;

use App\Models\loker;
use Illuminate\Http\Request;

class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model loker
        $loker = loker::all();
        return view('admin.loker.index', compact('loker'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.loker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'lowongan' => 'required|unique:lokers',
            'keterangan' => 'required',
            'nama_team' => 'required',
            'role' => 'required',
            'rank' => 'required',
            'umur' => 'required',
            'nama_game' => 'required',
            'gambar' => 'required|image|max:2048',
        ]);

        $loker = new loker();
        $loker->lowongan = $request->lowongan;
        $loker->nama_team = $request->nama_team;
        $loker->role = $request->role;
        $loker->keterangan = $request->keterangan;
        $loker->rank = $request->rank;
        $loker->umur = $request->umur;
        $loker->nama_game = $request->nama_game;
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/loker/', $name);
            $loker->gambar = $name;
        }
        $loker->save();
        return redirect()->route('loker.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $loker = loker::findOrFail($id);
        return view('admin.loker.show', compact('loker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loker = loker::findOrFail($id);
        return view('admin.loker.edit', compact('loker'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi
        $validated = $request->validate([

            'lowongan' => 'required|max:255',
            'keterangan' => 'required',
            'nama_team' => 'required',
            'role' => 'required',
            'rank' => 'required',
            'umur' => 'required',
            'nama_game' => 'required',
            'gambar',
        ]);

        $loker = loker::findOrFail($id);
        $loker->lowongan = $request->lowongan;
        $loker->keterangan = $request->keterangan;
        $loker->nama_team = $request->nama_team;
        $loker->role = $request->role;
        $loker->rank = $request->rank;
        $loker->umur = $request->umur;
        $loker->nama_game = $request->nama_game;
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/loker/', $name);
            $loker->gambar = $name;
        }

        $loker->save();
        return redirect()->route('loker.index')
            ->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loker = loker::findOrFail($id);
        $loker->delete();
        return redirect()->route('admin.loker.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
