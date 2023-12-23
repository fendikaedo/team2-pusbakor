<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Resiko;
use Illuminate\Http\Request;

class ResikoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pusbakor.resiko.index')->with([
            'resiko' => Resiko::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pusbakor.resiko.create')->with([
            'resiko' => Resiko::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'resiko_proyek' => 'required|min:5|max:30',
        ]);
        if ($request) {
            $resiko = new Resiko();
            $resiko->resiko_proyek = $request->resiko_proyek;
            if ($resiko->save()) {
                Alert::success('Success', 'Data Resiko Proyek Berhasil Ditambahkan!');
                return redirect()->route('resiko.index');
            } else {
                Alert::warning('Failed', 'Data Resiko Proyek Gagal Ditambahkan!');
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
        return view('pusbakor.resiko.edit')->with([
            'resiko' => Resiko::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'resiko_proyek' => 'required|min:5|max:30',
        ]);
        if ($request) {
            $resiko = Resiko::find($id);
            $resiko->resiko_proyek = $request->resiko_proyek;
            if ($resiko->save()) {
                Alert::success('Success', 'Data Resiko Proyek Berhasil Dirubah!');
                return redirect()->route('resiko.index');
            } else {
                Alert::warning('Failed', 'Data Resiko Proyek Gagal Dirubah!');
                return back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $resiko = Resiko::find($id);
        $resiko->delete();
        Alert::success('Success','Data Resiko Proyek Berhasil Dihapus!');
        return back();
    }
}
