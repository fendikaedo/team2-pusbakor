@extends('layouts.home')

@section('content')
<div class="container">
    <h1 style="text-align: center" class="mt-3 mb-3">Tambah Jenis Perusahaan</h1>
    <a href="{{ route('jenis_perusahaan.index') }}" class="btn btn-primary btn-sm mb-3">Kembali</a>
    <div class="card">
        <div class="card-body p-3">
            <form action="{{ route('jenis_perusahaan.update', $jenis_perusahaan->id) }}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="jenis_perusahaan" class="form-label"><b>Jenis Perusahaan</b></label>
                    <input class="form-control" type="text" placeholder="Masukkan Jenis Perusahaan" aria-label="jenis_perusahaan"
                        id="jenis_perusahaan" value="{{$jenis_perusahaan->jenis_perusahaan}}" name="jenis_perusahaan" required>
                </div>
                <button type="submit" class="btn btn-success btn-sm float-end">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
