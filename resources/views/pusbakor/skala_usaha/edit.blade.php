@extends('layouts.home')

@section('content')
<div class="container">
    <h1 style="text-align: center" class="mt-3 mb-3">Tambah Skala Usaha</h1>
    <a href="{{ route('skala_usaha.index') }}" class="btn btn-primary btn-sm mb-3">Kembali</a>
    <div class="card">
        <div class="card-body p-3">
            <form action="{{ route('skala_usaha.update', $skala_usaha->id) }}" method="POST">
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
