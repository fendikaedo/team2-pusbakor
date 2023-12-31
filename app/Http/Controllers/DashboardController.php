<?php

namespace App\Http\Controllers;
use App\Models\User;
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
    public function index(Request $request,PerusahaanChart $PerusahaanChart,ProyekChart $ProyekChart)
    {
        $totalProyek = Proyek::count();
        $totalPerusahaan = Perusahaan::count();
        $totalKecamatan = Kecamatan::count();
        $totalDesa = Desa::count();
        $totalUser = User::count();

        $data1['ProyekChart'] = $ProyekChart->build();
        $data2['PerusahaanChart'] = $PerusahaanChart->build();
        return view("dashboard.index",compact('data1','data2','totalPerusahaan','totalKecamatan','totalDesa','totalProyek','totalUser'));
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
    public function show(Request $request,string $id,ProyekChart $ProyekChart)
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

//Chart Perusahaan
        //$jenisPerusahaan = Jenis_Perusahaan::all();
        //$data2 = [];
        //foreach ($jenisPerusahaan as $jenis) {
        //    $jumlahPerusahaan = Perusahaan::where('jenis_perusahaan_id', $jenis->nama_perusahaan)->count();
        //    $data2[$jenis->jenis_perusahaan] = $jumlahPerusahaan;
        //}
        //Chart Proyek
        //$proyek = Kecamatan::all();
        //$data1 = [];
        //foreach ($proyek as $pro) {
        //    $jumlahProyek = Proyek::where('kecamatan_id', $pro->id)->count();
        //    $data1[$pro->id] = $jumlahProyek;
        //}
