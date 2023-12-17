@extends('layouts.home')
@section('title', 'Resiko Proyek PUSBAKOR')
@section('title1', 'Home')
@section('title2', 'Resiko')
@section('title3', 'Tambah Resiko')
@section('content')
<div class="container">
    <a href="{{ route('resiko.index') }}" class="btn btn-primary btn-sm mb-3">Kembali</a>
    <div class="card">
        <div class="card-body p-3">
            <form action="{{ route('resiko.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="resiko_proyek" class="form-label"><b>Resiko Proyek</b></label>
                    <input class="form-control" type="text" placeholder="Masukkan Resiko Proyek" aria-label="resiko_proyek"
                        id="resiko_proyek" value="{{old('resiko_proyek')}}" name="resiko_proyek" required>
                </div>
                <button type="submit" class="btn btn-success btn-sm float-end">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
