<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Modal;
use Illuminate\Http\Request;

class ModalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pusbakor.modal.index')->with([
            'modal' => Modal::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pusbakor.modal.create')->with([
            'modal' => Modal::all(),
        ]);;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'status_modal' => 'required|min:3|max:20',
        ]);
        if ($request) {
            $modal = new Modal();
            $modal->status_modal = $request->status_modal;
            if ($modal->save()) {
                Alert::success('Success', 'Data Modal Berhasil Ditambahkan!');
                return redirect()->route('modal.index');
            } else {
                Alert::warning('Failed', 'Data Modal Gagal Ditambahkan!');
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
        return view('pusbakor.modal.edit')->with([
            'modal' => Modal::find($id),
        ]);;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'status_modal' => 'required|min:3|max:20',
        ]);
        if ($request) {
            $modal = Modal::find($id);
            $modal->status_modal = $request->status_modal;
            if ($modal->save()) {
                Alert::success('Success', 'Data Modal Berhasil Dirubah!');
                return redirect()->route('modal.index');
            } else {
                Alert::warning('Failed', 'Data Modal Gagal Dirubah!');
                return back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $modal = Modal::find($id);
        $modal->delete();
        Alert::success('Success', 'Data Modal Berhasil Dihapus');
        return back();
    }
}
