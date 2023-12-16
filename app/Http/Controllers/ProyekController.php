<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kbli;
use App\Models\Kecamatan;
use App\Models\Proyek;
use App\Models\Modal;
use App\Models\Resiko;
use App\Models\Perusahaan;
use App\Models\Skala_Usaha;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pusbakor.proyek.index')->with([
            'proyek' => Proyek::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proyek = Proyek::all();
        $perusahaan_id = Perusahaan::all();
        $modal_id = Modal::all();
        $resiko_id = Resiko::all();
        $skala_usaha_id = Skala_Usaha::all();
        $kecamatan_id = Kecamatan::all();
        $desa_id = Resiko::all();
        $desa_id = Desa::all();
        $kbli_id = Kbli::all();
        return view('pusbakor.proyek.create', [
            'proyek_id' => $proyek,
            'perusahaan_id' => $perusahaan_id,
            'modal_id' => $modal_id,
            'resiko_id' => $resiko_id,
            'skala_usaha_id' => $skala_usaha_id,
            'kecamatan_id' => $kecamatan_id,
            'desa_id' => $desa_id,
            'kbli_id' => $kbli_id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',
            'alamat' => 'required|min:5|max:100',
            'investasi' => 'required|min:5|max:50',
            'perusahaan_id' => 'required',
            'modal_id' => 'required',
            'resiko_id' => 'required',
            'skala_usaha_id' => 'required',
            'kecamatan_id' => 'required',
            'desa_id' => 'required',
            'kbli_id' => 'required',
        ]);
        if ($request) {
            $proyek = new Proyek();
            $proyek->longitude = (float)$request->longitude;
            $proyek->latitude = (float)$request->latitude;
            $proyek->alamat = $request->alamat;
            $proyek->investasi = $request->investasi;
            $proyek->perusahaan_id = $request->perusahaan_id;
            $proyek->modal_id = $request->modal_id;
            $proyek->resiko_id = $request->resiko_id;
            $proyek->skala_usaha_id = $request->skala_usaha_id;
            $proyek->kecamatan_id = $request->kecamatan_id;
            $proyek->desa_id = $request->desa_id;
            $proyek->kbli_id = $request->kbli_id;
            if ($proyek->save()) {
                return redirect()->route('proyek.index')->with('success', 'Proyek Berhasil Ditambahkan');
            } else {
                return back()->with('error', 'Gagal Menambahkan Proyek');
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
        $proyek = Proyek::find($id);
        $perusahaan_id = Perusahaan::all();
        $modal_id = Modal::all();
        $resiko_id = Resiko::all();
        $skala_usaha_id = Skala_Usaha::all();
        $kecamatan_id = Kecamatan::all();
        $desa_id = Resiko::all();
        $desa_id = Desa::all();
        $kbli_id = Kbli::all();
        return view('pusbakor.proyek.edit', [
            'proyek' => $proyek,
            'perusahaan_id' => $perusahaan_id,
            'modal_id' => $modal_id,
            'resiko_id' => $resiko_id,
            'skala_usaha_id' => $skala_usaha_id,
            'kecamatan_id' => $kecamatan_id,
            'desa_id' => $desa_id,
            'kbli_id' => $kbli_id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',
            'alamat' => 'required|min:5|max:100',
            'investasi' => 'required|min:5|max:50',
            'perusahaan_id' => 'required',
            'modal_id' => 'required',
            'resiko_id' => 'required',
            'skala_usaha_id' => 'required',
            'kecamatan_id' => 'required',
            'desa_id' => 'required',
            'kbli_id' => 'required',
        ]);
        if ($request) {
            $proyek = Proyek::find($id);
            $proyek->longitude = (float)$request->longitude;
            $proyek->latitude = (float)$request->latitude;
            $proyek->alamat = $request->alamat;
            $proyek->investasi = $request->investasi;
            $proyek->perusahaan_id = $request->perusahaan_id;
            $proyek->modal_id = $request->modal_id;
            $proyek->resiko_id = $request->resiko_id;
            $proyek->skala_usaha_id = $request->skala_usaha_id;
            $proyek->kecamatan_id = $request->kecamatan_id;
            $proyek->desa_id = $request->desa_id;
            $proyek->kbli_id = $request->kbli_id;
            if ($proyek->save()) {
                return redirect()->route('proyek.index')->with('success', 'Proyek Berhasil Dirubah');
            } else {
                return back()->with('error', 'Gagal Menambahkan Proyek');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $proyek = Proyek::find($id);
        $proyek->delete();

        return back()->with('success', 'Proyek Berhasil Dihapus');
    }
}
