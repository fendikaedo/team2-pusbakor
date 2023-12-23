<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $kecamatan = Kecamatan::where('nama_kecamatan','LIKE','%' .$request->search.'%')->paginate(10);
        }else{
            $kecamatan = Kecamatan::paginate(10);
        }
        return view('pusbakor.kecamatan.index',compact('kecamatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pusbakor.kecamatan.create')->with([
            'kecamatan' => Kecamatan::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kecamatan' => 'required|min:4|max:30',
        ]);
        if ($request) {
            $kecamatan = new Kecamatan();
            $kecamatan->nama_kecamatan = $request->nama_kecamatan;
            if ($kecamatan->save()) {
                Alert::success('Success', 'Data Kecamatan Berhasil Ditambahkan!');
                return redirect()->route('kecamatan.index');
            } else {
                Alert::warning('Failed', 'Data Kecamatan Gagal Ditambahkan!');
                return back();
            }
        }
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
        return view('pusbakor.kecamatan.edit')->with([
            'kecamatan' => Kecamatan::find($id),
        ]);;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kecamatan' => 'required|min:4|max:30',
        ]);
        if ($request) {
            $kecamatan = Kecamatan::find($id);
            $kecamatan->nama_kecamatan = $request->nama_kecamatan;
            if ($kecamatan->save()) {
                Alert::success('Success', 'Data Kecamatan Berhasil Dirubah!');
                return redirect()->route('kecamatan.index');
            } else {
                Alert::warning('Failed', 'Data Kecamatan Gagal Dirubah!');
                return back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kecamatan = Kecamatan::find($id);
        $kecamatan->delete();
        Alert::success('Success', 'Data Kecamatan Berhasil Dihapus!');
        return back();
    }
}
