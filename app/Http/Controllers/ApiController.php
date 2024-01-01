<?php

namespace App\Http\Controllers;

use App\Models\Jenis_Perusahaan;
use App\Models\Resiko;
use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\Kbli;
use App\Models\Modal;
use App\Models\Perusahaan;
use App\Models\Proyek;
use App\Models\Skala_Usaha;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        $perusahaan = Perusahaan::all();
        $skala_usaha = Skala_Usaha::all();
        $kecamatan = Kecamatan::all();
        $skala_usaha = Skala_Usaha::all();
        $kbli = Kbli::all();
        $desa = Desa::all();
        $resiko = Resiko::all();
        $modal = Modal::all();
        $jenis_perusahaan = Jenis_Perusahaan::all();
        $proyek = Proyek::all();
        $table_data_perusahaan = Perusahaan::with('jenis_perusahaan')->get();
        $table_data_proyek = Proyek::with('perusahaan','modal','resiko','skala_usaha','kbli','kecamatan','desa')->get();
        return response()->json([
            'skala_usaha' => $skala_usaha,
            'perusahaan' => $perusahaan,
            'kecamatan' => $kecamatan,
            'skala_usaha' => $skala_usaha,
            'kbli' => $kbli,
            'desa' => $desa,
            'resiko' => $resiko,
            'modal' => $modal,
            'proyek' => $proyek,
            'jenis_perusahaan' => $jenis_perusahaan,
            'table_data_perusahaan' => $table_data_perusahaan,
            'table_data_proyek' => $table_data_proyek,
        ]);
    }
    public function store(Request $request){
        //
    }
    public function update(Request $request, string $id)
    {
        //
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
