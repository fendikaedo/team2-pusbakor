@extends('layouts.home')
@section('title', 'Perusahaan PUSBAKOR')
@section('title1', 'Home')
@section('title2', 'Perusahaan')
@section('title3', 'Edit Perusahaan')
@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <a href="{{ route('perusahaan.index') }}" class="btn btn-primary btn-sm mb-3">Kembali</a>
        <div class="card">
            <div class="card-body p-3">
                <form action="{{ route('perusahaan.update',$perusahaan->id) }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="nib" class="form-label"><b>NIB</b></label>
                        <input class="form-control" type="text" placeholder="Masukkan NIB" aria-label="nib"
                            id="nib" value="{{$perusahaan->nib}}" name="nib" required>
                    </div>
                    <div class="mb-3">
                        <label for="npwp" class="form-label"><b>NPWP</b></label>
                        <input class="form-control" type="text" placeholder="Masukkan NPWP" aria-label="npwp"
                            id="npwp" value="{{$perusahaan->npwp}}" name="npwp" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_perusahaan" class="form-label"><b>Nama Perusahaan</b></label>
                        <input class="form-control" type="text" placeholder="Masukkan Nama Perusahaan"
                            aria-label="nama_perusahaan" id="nama_perusahaan" value="{{$perusahaan->nama_perusahaan}}"
                            name="nama_perusahaan" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_perusahaan" class="form-label"><b>Jenis Perusahaan</b></label>
                        <select class="custom-select" name="jenis_perusahaan_id" required>
                            <option selected>Pilih Jenis Perusahaan</option>
                            @foreach ($jenis_perusahaan_id as $jp)
                                <option value="{{ $jp['id'] }}"
                                    {{ old('jenis_perusahaan_id',$perusahaan['jenis_perusahaan_id']) == $jp['id'] ? 'selected' : '' }}>
                                    {{ $jp['jenis_perusahaan'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group pt-2">
                        <button type="submit" class="btn btn-success btn-sm float-end">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
