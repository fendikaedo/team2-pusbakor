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
        return view('pusbakor.proyek.create')->with([
            'proyek' => Proyek::all(),
            'perusahaan' => Perusahaan::all(),
            'modal' => Modal::all(),
            'resiko' => Resiko::all(),
            'skala_usaha' => Skala_Usaha::all(),
            'kecamatan' => Kecamatan::all(),
            'desa' => Desa::all(),
            'kbli' => Kbli::all(),


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
            'perusahaan_id' => 'required|min:5|max:30',
            'modal_id' => 'required|min:5|max:30',
            'resiko_id' => 'required|min:5|max:30',
            'skala_usaha_id' => 'required|min:5|max:30',
            'kecamatan_id' => 'required|min:5|max:30',
            'desa_id' => 'required|min:5|max:30',
            'kbli_id' => 'required|min:5|max:30',
        ]);
        if ($request) {
            $perusahaan = new Proyek();
            $perusahaan->longitude = $request['longitude'];
            $perusahaan->latitude = $request['latitude'];
            $perusahaan->alamat = $request['alamat'];
            $perusahaan->investasi = $request['investasi'];
            $perusahaan->perusahaan_id = $request['nama_perusahaan'];
            $perusahaan->modal_id = $request['status_modal'];
            $perusahaan->resiko_id = $request['resiko_proyek'];
            $perusahaan->skala_usaha_id = $request['skala_usaha'];
            $perusahaan->kecamatan_id = $request['nama_kecamatan'];
            $perusahaan->desa_id = $request['nama_desa'];
            $perusahaan->kbli_id = $request['judul'];
            $perusahaan->save();

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
