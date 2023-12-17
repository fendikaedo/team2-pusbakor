@extends('layouts.home')
@section('title', 'Resiko Proyek PUSBAKOR')
@section('title1', 'Home')
@section('title2', 'Resiko')
@section('title3', 'Edit Resiko')
@section('content')
<div class="container">
    <h1 style="text-align: center" class="mt-3 mb-3">Tambah Resiko Proyek</h1>
    <a href="{{ route('resiko.index') }}" class="btn btn-primary btn-sm mb-3">Kembali</a>
    <div class="card">
        <div class="card-body p-3">
            <form action="{{ route('resiko.update', $resiko->id) }}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="resiko_proyek" class="form-label"><b>Resiko Proyek</b></label>
                    <input class="form-control" type="text" placeholder="Masukkan Resiko Proyek" aria-label="resiko_proyek"
                        id="resiko_proyek" value="{{$resiko->resiko_proyek}}" name="resiko_proyek" required>
                </div>
                <button type="submit" class="btn btn-success btn-sm float-end">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
