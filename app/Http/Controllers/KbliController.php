<?php

namespace App\Http\Controllers;

use App\Models\Kbli;
use Illuminate\Http\Request;

class KbliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $kbli = Kbli::where('judul','LIKE','%' .$request->search.'%')->paginate(10);
        }else{
            $kbli = Kbli::paginate(10);
        }
        return view('pusbakor.kbli.index',compact('kbli'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pusbakor.kbli.create')->with([
            'kbli' => Kbli::all(),
        ]);;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_kbli' => 'required|min:4|max:10',
            'judul' => 'required|min:4|max:50',
            'pembina' => 'required|min:4|max:50',
        ]);
        if ($request) {
            $kbli = new Kbli();
            $kbli->kode_kbli = $request->kode_kbli;
            $kbli->judul = $request->judul;
            $kbli->pembina = $request->pembina;
            $kbli->save();
        }
        return redirect()->route('kbli.index')->with('success', 'KBLI Berhasil Ditambahkan');
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
        return view('pusbakor.kbli.edit')->with([
            'kbli' => Kbli::find($id),
        ]);;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_kbli' => 'required|min:4|max:10',
            'judul' => 'required|min:4|max:50',
            'pembina' => 'required|min:4|max:50',
        ]);
        if ($request) {
            $kbli = Kbli::find($id);
            $kbli->kode_kbli = $request->kode_kbli;
            $kbli->judul = $request->judul;
            $kbli->pembina = $request->pembina;
            $kbli->save();
        }
        return redirect()->route('kbli.index')->with('success', 'KBLI Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kbli = Kbli::find($id);
        $kbli->delete();

        return back()->with('success','KBLI Berhasil Dihapus');
    }
}
