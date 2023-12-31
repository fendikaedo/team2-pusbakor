@extends('layouts.home')
@section('title', 'KBLI PUSBAKOR')
@section('title1', 'Home')
@section('title2', 'KBLI')
@section('title3', 'Tambah KBLI')
@section('content')
<div class="container">
    <a href="{{ route('kbli.index') }}" class="btn btn-primary btn-sm mb-3">Kembali</a>
    <div class="card">
        <div class="card-body p-3">
            <form action="{{ route('kbli.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="kode_kbli" class="form-label"><b>Kode KBLI</b></label>
                    <input class="form-control" type="text" placeholder="Masukkan Kode KBLI" aria-label="kode_kbli"
                        id="kode_kbli" value="{{old('kode_kbli')}}" name="kode_kbli" required>
                </div>
                <div class="mb-3">
                    <label for="judul" class="form-label"><b>Judul</b></label>
                    <input class="form-control" type="text" placeholder="Masukkan Judul KBLI" aria-label="judul"
                        id="judul" value="{{old('judul')}}" name="judul" required>
                </div>
                <div class="mb-3">
                    <label for="pembina" class="form-label"><b>Pembina</b></label>
                    <input class="form-control" type="text" placeholder="Masukkan Nama Pembina" aria-label="pembina"
                        id="pembina" value="{{old('pembina')}}" name="pembina" required>
                </div>
                <button type="submit" class="btn btn-success btn-sm float-end">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
