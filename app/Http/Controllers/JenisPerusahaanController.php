<?php

namespace App\Http\Controllers;

use App\Models\Jenis_Perusahaan;
use Illuminate\Http\Request;

class JenisPerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pusbakor.perusahaan.jenis.index')->with([
            'jenis_perusahaan' => Jenis_Perusahaan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pusbakor.perusahaan.jenis.create')->with([
            'jenis_perusahaan' => Jenis_Perusahaan::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_perusahaan' => 'required|min:4|max:30',
        ]);
        if ($request) {
            $jenis_perusahaan = new Jenis_Perusahaan();
            $jenis_perusahaan->jenis_perusahaan = $request->jenis_perusahaan;
            $jenis_perusahaan->save();
        }
        return redirect()->route('jenisperusahaan.index')->with('success', 'Jenis Perusahaan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('pusbakor.perusahaan.jenis.edit')->with([
            'jenis_perusahaan' => Jenis_Perusahaan::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'jenis_perusahaan' => 'required|min:4|max:30',
        ]);
        if ($request) {
            $jenis_perusahaan = Jenis_Perusahaan::find($id);
            $jenis_perusahaan->jenis_perusahaan = $request->jenis_perusahaan;
            $jenis_perusahaan->save();
        }
        return redirect()->route('jenisperusahaan.index')->with('success', 'Jenis Perusahaan Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jenis_perusahaan = Jenis_Perusahaan::find($id);
        $jenis_perusahaan->delete();

        return back()->with('success','Jenis Perusahaan Berhasil Dihapus');
    }
}