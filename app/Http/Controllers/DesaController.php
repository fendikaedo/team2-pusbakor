<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Desa;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $Desa = Desa::where('nama_desa','LIKE','%' .$request->search.'%')->paginate(10);
        }else{
            $Desa = Desa::paginate(10);
        }
        return view('pusbakor.desa.index',compact('Desa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pusbakor.desa.create')->with([
            'Desa' => Desa::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_desa' => 'required|min:4|max:30',
        ]);
        if ($request) {
            $desa = new Desa();
            $desa->nama_desa = $request->nama_desa;
            if ($desa->save()) {
                Alert::success('Success', 'Data Kelurahan/Desa Berhasil Ditambahkan!');
                return redirect()->route('desa.index');
            } else {
                Alert::warning('Failed', 'Data Kelurahan/Desa Gagal Ditambahkan!');
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
        return view('pusbakor.desa.edit')->with([
            'desa' => Desa::find($id),
        ]);;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_desa' => 'required|min:4|max:30',
        ]);
        if ($request) {
            $desa = Desa::find($id);
            $desa->nama_desa = $request->nama_desa;
            if ($desa->save()) {
                Alert::success('Success', 'Data Kelurahan/Desa Berhasil Dirubah!');
                return redirect()->route('desa.index');
            } else {
                Alert::warning('Failed', 'Data Kelurahan/Desa Gagal Dirubah!');
                return back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $desa = Desa::find($id);
        $desa->delete();
        Alert::success('Success', 'Data Kelurahan/Desa Berhasil Dihapus!');
        return back();
    }
}
