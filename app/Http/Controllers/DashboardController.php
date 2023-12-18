<?php

namespace App\Http\Controllers;
use App\Models\Proyek;
use App\Models\Perusahaan;
use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\Jenis_Perusahaan;
use App\Charts\PerusahaanChart;
use App\Charts\ProyekChart;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PerusahaanChart $PerusahaanChart,ProyekChart $ProyekChart)
    {
        $totalProyek = Proyek::count();
        $totalPerusahaan = Perusahaan::count();
        $totalKecamatan = Kecamatan::count();
        $totalDesa = Desa::count();

        //Chart Perusahaan
        $jenisPerusahaan = Jenis_Perusahaan::all();
        foreach ($jenisPerusahaan as $jenis) {
            $jumlahPerusahaan = Perusahaan::where('jenis_perusahaan_id', $jenis->id)->count();
            $data2[$jenis->jenis_perusahaan] = $jumlahPerusahaan;
        }
        $data2 = [];

        //$kecamatan = Kecamatan::all();
        //foreach ($kecamatan as $kec) {
            //$jumlahProyek = Proyek::where('kecamatan_id', $kec->id)->count();
       //     $data1[$kec->nama_kecamatan] = $jumlahPerusahaan;
        //}
        //$data1 = [];
        //$data1['ProyekChart'] = $ProyekChart->build();
        $data2['PerusahaanChart'] = $PerusahaanChart->build();
        return view("dashboard.index",$data2,compact('totalPerusahaan','totalKecamatan','totalDesa','totalProyek'));
    }
    private function createProyekChart(){

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
