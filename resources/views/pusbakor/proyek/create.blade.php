@extends('layouts.home')
@section('title', 'Proyek PUSBAKOR')
@section('title1', 'Home')
@section('title2', 'Proyek')
@section('title3', 'Tambah Proyek')
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
        <div class="container">
            <a href="{{ route('proyek.index') }}" class="btn btn-primary btn-sm mb-3">Kembali</a>
            <div class="card">
                <div class="card-body p-3">
                    <form action="{{ route('proyek.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="longitude" class="form-label"><b>Longitude</b></label>
                            <input class="form-control" type="number" placeholder="Masukkan Longitude"
                                aria-label="longitude" id="longitude" value="{{ old('longitude') }}" name="longitude"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="latitude" class="form-label"><b>Latitude</b></label>
                            <input class="form-control" type="number" placeholder="Masukkan Latitude" aria-label="latitude"
                                id="latitude" value="{{ old('latitude') }}" name="latitude" required>
                        </div>
                        <div class="mb-3">
                            <label for="Alamat" class="form-label"><b>Alamat</b></label>
                            <input class="form-control" type="text" placeholder="Masukkan Alamat" aria-label="alamat"
                                id="alamat" value="{{ old('alamat') }}" name="alamat" required>
                        </div>
                        <div class="mb-3">
                            <label for="investasi" class="form-label"><b>Investasi</b></label>
                            <input class="form-control" type="text" placeholder="Masukkan Investasi"
                                aria-label="investasi" id="investasi" value="{{ old('investasi') }}" name="investasi"
                                required>
                        </div>
                        <div class="mb-3">
                            <div class="col-md-12">
                                <label for="perusahaan" class="form-label"><b>Perusahaan</b></label>
                            </div>
                            <select class="custom-select" name="perusahaan_id"required>
                                <option selected>Perusahaan</option>
                                @foreach ($perusahaan_id as $p)
                                    @if (old('perusahaan') == $p['id'])
                                        <option value="{{ $p['id'] }}" selected> {{ $p['nama_perusahaan'] }}</option>
                                    @else
                                        <option value="{{ $p['id'] }}"> {{ $p['nama_perusahaan'] }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="col-md-12">
                                <label for="modal" class="form-label"><b>Status Modal</b></label>
                            </div>
                            <select class="custom-select" name="modal_id" required>
                                <option selected>Status Modal</option>
                                @foreach ($modal_id as $m)
                                    @if (old('modal') == $m['id'])
                                        <option value="{{ $m['id'] }}" selected> {{ $m['status_modal'] }}</option>
                                    @else
                                        <option value="{{ $m['id'] }}"> {{ $m['status_modal'] }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="col-md-12">
                                <label for="resiko" class="form-label"><b>Resiko Proyek</b></label>
                            </div>
                            <select class="custom-select" name="resiko_id" required>
                                <option selected>Resiko Proyek</option>
                                @foreach ($resiko_id as $r)
                                    @if (old('resiko') == $r['id'])
                                        <option value="{{ $r['id'] }}" selected> {{ $r['resiko_proyek'] }}</option>
                                    @else
                                        <option value="{{ $r['id'] }}"> {{ $r['resiko_proyek'] }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="col-md-12">
                                <label for="skala_usaha class="form-label"><b>Skala Usaha</b></label>
                            </div>
                            <select class="custom-select" name="skala_usaha_id" required>
                                <option selected>Skala Usaha</option>
                                @foreach ($skala_usaha_id as $su)
                                    @if (old('skala_usaha') == $su['id'])
                                        <option value="{{ $su['id'] }}" selected> {{ $su['skala_usaha'] }}</option>
                                    @else
                                        <option value="{{ $su['id'] }}"> {{ $su['skala_usaha'] }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="col-md-12">
                                <label for="kecamatan" class="form-label"><b>Kecamatan</b></label>
                            </div>
                            <select class="custom-select" name="kecamatan_id" required>
                                <option selected>Kecamatan</option>
                                @foreach ($kecamatan_id as $kec)
                                    @if (old('kecamatan') == $kec['id'])
                                        <option value="{{ $kec['id'] }}" selected> {{ $kec['nama_kecamatans'] }}
                                        </option>
                                    @else
                                        <option value="{{ $kec['id'] }}"> {{ $kec['nama_kecamatan'] }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="col-md-12">
                                <label for="desa" class="form-label"><b>Kelurahan/Desa</b></label>
                            </div>
                            <select class="custom-select" name="desa_id" required>
                                <option selected>Kelurahan/Desa</option>
                                @foreach ($desa_id as $d)
                                    @if (old('desa') == $d['id'])
                                        <option value="{{ $d['id'] }}" selected> {{ $d['nama_desa'] }}</option>
                                    @else
                                        <option value="{{ $d['id'] }}"> {{ $d['nama_desa'] }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="col-md-12">
                                <label for="kbli" class="form-label"><b>KBLI</b></label>
                            </div>
                            <select class="custom-select" name="kbli_id" required>
                                <option selected>Judul KBLI</option>
                                @foreach ($kbli_id as $k)
                                    @if (old('kbli') == $k['id'])
                                        <option value="{{ $k['id'] }}" selected> {{ $k['judul'] }}</option>
                                    @else
                                        <option value="{{ $k['id'] }}"> {{ $k['judul'] }}</option>
                                    @endif
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
