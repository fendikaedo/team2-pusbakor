@extends('layouts.home')
@section('title', 'Skala Usaha PUSBAKOR')
@section('title1', 'Home')
@section('title2', 'Skala Usaha')
@section('title3', 'Edit Skala Usaha')
@section('content')
<div class="container">
    <a href="{{ route('skalausaha.index') }}" class="btn btn-primary btn-sm mb-3">Kembali</a>
    <div class="card">
        <div class="card-body p-3">
            <form action="{{ route('skalausaha.update', $skala_usaha->id) }}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="skala_usaha" class="form-label"><b>Skala Usaha</b></label>
                    <input class="form-control" type="text" placeholder="Masukkan Skala Usaha" aria-label="skala_usaha"
                        id="skala_usaha" value="{{$skala_usaha->skala_usaha}}" name="skala_usaha" required>
                </div>
                <button type="submit" class="btn btn-success btn-sm float-end">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
