<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Jenis_Perusahaan;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $perusahaan = Perusahaan::where('nama_perusahaan', 'LIKE', '%' . $request->search . '%')->paginate(10);
        } else {
            $perusahaan = Perusahaan::paginate(10);
        }
        return view('pusbakor.perusahaan.index', compact('perusahaan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $perusahaan = Perusahaan::all();
        $jenis_perusahaan_id = Jenis_Perusahaan::all();
        return view('pusbakor.perusahaan.create', ['jenis_perusahaan_id' => $jenis_perusahaan_id, 'perusahaan' => $perusahaan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nib' => 'required',
            'npwp' => 'required',
            'nama_perusahaan' => 'required|min:5|max:255',
            'jenis_perusahaan_id' => 'required',

        ]);
        if ($request) {
            $perusahaan = new Perusahaan();
            $perusahaan->nib = $request->nib;
            $perusahaan->npwp = $request->npwp;
            $perusahaan->nama_perusahaan = $request->nama_perusahaan;
            $perusahaan->jenis_perusahaan_id = $request->jenis_perusahaan_id;
            if ($perusahaan->save()) {
                Alert::success('Success', 'Data Perusahaan Berhasil Ditambahkan!');
                return redirect()->route('perusahaan.index');
            } else {
                Alert::warning('Failed', 'Data Perusahaan Gagal Ditambahkan!');
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
        $perusahaan = Perusahaan::find($id);
        $jenis_perusahaan_id = Jenis_Perusahaan::all();
        return view('pusbakor.perusahaan.edit', ['jenis_perusahaan_id' => $jenis_perusahaan_id, 'perusahaan' => $perusahaan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nib' => 'required|min:5|max:50',
            'npwp' => 'required|min:5|max:50',
            'nama_perusahaan' => 'required|min:5|max:255',
            'jenis_perusahaan_id' => 'required',

        ]);
        if ($request) {
            $perusahaan = Perusahaan::find($id);
            $perusahaan->nib = $request->nib;
            $perusahaan->npwp = $request->npwp;
            $perusahaan->nama_perusahaan = $request->nama_perusahaan;
            $perusahaan->jenis_perusahaan_id = $request->jenis_perusahaan_id;
            $perusahaan->save();
            if ($perusahaan->save()) {
                Alert::success('Success', 'Data Perusahaan Berhasil Dirubah!');
                return redirect()->route('perusahaan.index');
            } else {
                Alert::warning('Failed', 'Data Perusahaan Gagal Dirubah!');
                return back();
            }
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $perusahaan = Perusahaan::find($id);
        $perusahaan->delete();
        Alert::success('Success', 'Data Perusahaan Berhasil Dihapus!');

        return back();
    }
}
