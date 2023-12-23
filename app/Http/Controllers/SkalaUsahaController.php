<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Skala_Usaha;
use Illuminate\Http\Request;

class SkalaUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pusbakor.skala_usaha.index')->with([
            'skala_usaha' => Skala_Usaha::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pusbakor.skala_usaha.create')->with([
            'skala_usaha' => Skala_Usaha::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'skala_usaha' => 'required|min:3|max:20',
        ]);
        if ($request) {
            $skala_usaha = new Skala_Usaha();
            $skala_usaha->skala_usaha = $request->skala_usaha;
            if ($skala_usaha->save()) {
                Alert::success('Success', 'Data Skala Usaha Berhasil Ditambahkan!');
                return redirect()->route('skalausaha.index');
            } else {
                Alert::warning('Failed', 'Data Skala Usaha Gagal Ditambahkan!');
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
        return view('pusbakor.skala_usaha.edit')->with([
            'skala_usaha' => Skala_Usaha::find($id),
        ]);;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'skala_usaha' => 'required|min:3|max:20',
        ]);
        if ($request) {
            $skala_usaha = Skala_Usaha::find($id);
            $skala_usaha->skala_usaha = $request->skala_usaha;
            if ($skala_usaha->save()) {
                Alert::success('Success', 'Data Skala Usaha Berhasil Dirubah!');
                return redirect()->route('skalausaha.index');
            } else {
                Alert::warning('Failed', 'Data Skala Usaha Gagal Dirubah!');
                return back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skala_usaha = Skala_Usaha::find($id);
        $skala_usaha->delete();
        Alert::success('Success', 'Data Skala Usaha Berhasil Dihapus!');
        return back();
    }
}
