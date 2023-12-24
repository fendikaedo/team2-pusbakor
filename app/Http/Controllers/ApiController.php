<?php

namespace App\Http\Controllers;

use App\Models\Jenis_Perusahaan;
use App\Models\Proyek;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        $jenis_perusahaan = Jenis_Perusahaan::all();
        $proyek = Proyek::all();
        return response()->json([
            'proyek' => $proyek,
            'jenis_perusahaan' => $jenis_perusahaan,
        ]);
    }
    public function store(Request $request){
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
                Alert::success('Success', 'Data Proyek Berhasil Ditambahkan');
                return response()->json([
                    'proyek' => $proyek,
                ]);
            } else {
                Alert::warning('Failed', 'Data Proyek Gagal Ditambahkan');
                return back();
            }
        }

    }
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
                Alert::success('Success', 'Data Proyek Berhasil Dirubah');
                return response()->json([
                    'proyek' => $proyek,
                ]);
            } else {
                Alert::warning('Failed', 'Data Proyek Gagal Dirubah');
                return back();
            }
        }
    }
    public function destroy(string $id)
    {
        $proyek = Proyek::find($id);
        $proyek->delete();
        Alert::success('Success', 'Data Proyek Berhasil Dihapus!');
        return response()->json([
            'proyek' => $proyek,
        ]);
    }
}
