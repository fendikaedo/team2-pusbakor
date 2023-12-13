@extends('layouts.home')

@section('content')
<div class="container">
    <h1 style="text-align: center" class="mt-3 mb-3">Tambah Perusahaan</h1>
    <a href="{{ route('perusahaan.index') }}" class="btn btn-primary btn-sm mb-3">Kembali</a>
    <div class="card">
        <div class="card-body p-3">
            <form action="{{ route('perusahaan.update') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nib" class="form-label"><b>NIB</b></label>
                    <input class="form-control" type="number" placeholder="Masukkan NIB" aria-label="nib"
                        id="nib" value="{{$perusahaan->nib}}" name="nib" required>
                </div>
                <div class="mb-3">
                    <label for="npwp" class="form-label"><b>NPWP</b></label>
                    <input class="form-control" type="number" placeholder="Masukkan NPWP" aria-label="npwp"
                        id="npwp" value="{{$perusahaan->npwp}}" name="npwp" required>
                </div>
                <div class="mb-3">
                    <label for="nama_perusahaan" class="form-label"><b>Nama Perusahaan</b></label>
                    <input class="form-control" type="text" placeholder="Masukkan Nama Perusahaan" aria-label="nama_perusahaan"
                        id="nama_perusahaan" value="{{$perusahaan->nama_perusahaan}}" name="nama_perusahaan" required>
                </div>
                <div class="mb-3">
                    <label for="jenis_perusahaan_id" class="form-label"><b>Jenis Perusahaan</b></label>
                    <input class="form-control" type="text" placeholder="Masukkan Jenis Perusahaan" aria-label="jenis_perusahaan_id"
                        id="jenis_perusahaan_id" value="{{$perusahaan->jenis_perusahaan_id}}" name="jenis_perusahaan_id" required>
                </div>
                <button type="submit" class="btn btn-success btn-sm float-end">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
