<?php

namespace App\Http\Controllers;

use App\Models\Resiko;
use Illuminate\Http\Request;

class ResikoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pusbakor.resiko.index')->with([
            'resiko' => Resiko::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pusbakor.resiko.create')->with([
            'resiko' => Resiko::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'resiko_proyek' => 'required|min:5|max:30',
        ]);
        if ($request) {
            $resiko = new Resiko();
            $resiko->resiko_proyek = $request->resiko_proyek;
            $resiko->save();
        }
        return redirect()->route('resiko.index')->with('success', 'Resiko Proyek Berhasil Ditambahkan');
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
        return view('pusbakor.resiko.edit')->with([
            'resiko' => Resiko::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'resiko_proyek' => 'required|min:5|max:30',
        ]);
        if ($request) {
            $resiko = Resiko::find($id);
            $resiko->resiko_proyek = $request->resiko_proyek;
            $resiko->save();
        }
        return redirect()->route('resiko.index')->with('success', 'Resiko Proyek Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $resiko = Resiko::find($id);
        $resiko->delete();

        return back()->with('success','Resiko Proyek Berhasil Dihapus');
    }
}
