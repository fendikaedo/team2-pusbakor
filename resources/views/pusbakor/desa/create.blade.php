@extends('layouts.home')

@section('content')
<div class="container">
    <h1 style="text-align: center" class="mt-3 mb-3">Tambah Kelurahan/Desa</h1>
    <a href="{{ route('desa.index') }}" class="btn btn-primary btn-sm mb-3">Kembali</a>
    <div class="card">
        <div class="card-body p-3">
            <form action="{{ route('desa.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_desa" class="form-label"><b>Kelurahan/Desa</b></label>
                    <input class="form-control" type="text" placeholder="Masukkan Nama Kelurahan/Desa" aria-label="nama_desa"
                        id="nama_desa" value="{{old('nama_desa')}}" name="nama_desa" required>
                </div>
                <button type="submit" class="btn btn-success btn-sm float-end">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
