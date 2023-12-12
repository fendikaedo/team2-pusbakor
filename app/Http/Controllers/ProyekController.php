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
            'proyek' => Proyek::all(),
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
        $resiko_id = Skala_Usaha::all();
        $skala_usaha_id = Skala_Usaha::all();
        $kecamatan_id = Kecamatan::all();
        $desa_id = Desa::all();
        $kbli_id = Kbli::all();
        return view('pusbakor.proyek.create', [
            'proyek' => $proyek,
            'perusahaan' => $perusahaan_id,
            'modal' => $modal_id,
            'resiko' => $resiko_id,
            'skala_usaha' => $skala_usaha_id,
            'kecamatan' => $kecamatan_id,
            'desa' => $desa_id,
            'kbli' => $kbli_id,
            ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'longitude' => 'required|min:5|max:50',
            'latitude' => 'required|min:5|max:50',
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
            $proyek->longitude = $request->longitude;
            $proyek->latitude = $request->latitude;
            $proyek->alamat = $request->alamat;
            $proyek->investasi = $request->investasi;
            $proyek->perusahaan_id = $request->nama_perusahaan;
            $proyek->modal_id = $request->status_modal;
            $proyek->resiko_id = $request->resiko_proyek;
            $proyek->skala_usaha_id = $request->skala_usaha;
            $proyek->kecamatan_id = $request->nama_kecamatan;
            $proyek->desa_id = $request->nama_desa;
            $proyek->kbli_id = $request->judul;
            $proyek->save();

            return redirect()->route('proyek.index')->with('success', 'Perusahaan Berhasil Ditambahkan');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
