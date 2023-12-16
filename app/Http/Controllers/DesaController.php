<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pusbakor.desa.index')->with([
            'Desa' => Desa::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pusbakor.desa.create')->with([
            'Desa' => Desa::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_desa' => 'required|min:4|max:30',
        ]);
        if ($request) {
            $desa = new Desa();
            $desa->nama_desa = $request->nama_desa;
            $desa->save();
        }
        return redirect()->route('desa.index')->with('success', 'Kelurahan/Desa Berhasil Ditambahkan');
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
        return view('pusbakor.desa.edit')->with([
            'desa' => Desa::find($id),
        ]);;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_desa' => 'required|min:4|max:30',
        ]);
        if ($request) {
            $desa = Desa::find($id);
            $desa->nama_desa = $request->nama_desa;
            $desa->save();
        }
        return redirect()->route('desa.index')->with('success', 'Kelurahan/Desa Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $desa = Desa::find($id);
        $desa->delete();

        return back()->with('success','Kelurahan/Desa Berhasil Dihapus');
    }
}
