@extends('layouts.home')
@section('title', 'Kecamatan PUSBAKOR')
@section('title1', 'Home')
@section('title2', 'Kecamatan')
@section('title3', 'Edit Kecamatan')
@section('content')
<div class="container">
    <a href="{{ route('kecamatan.index') }}" class="btn btn-primary btn-sm mb-3">Kembali</a>
    <div class="card">
        <div class="card-body p-3">
            <form action="{{ route('kecamatan.update', $kecamatan->id) }}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="nama_kecamatan" class="form-label"><b>Kecamatan</b></label>
                    <input class="form-control" type="text" placeholder="Masukkan Nama Kecamatan" aria-label="nama_kecamatan"
                        id="nama_kecamatan" value="{{$kecamatan->nama_kecamatan}}" name="nama_kecamatan" required>
                </div>
                <button type="submit" class="btn btn-success btn-sm float-end">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
