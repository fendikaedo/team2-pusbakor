@extends('dashboard.index')

@section('content')
    <div class="container">
        <h1 style="text-align: center" class="mt-3 mb-3">Tambah Perusahaan</h1>
        <a href="{{ route('perusahaan.index') }}" class="btn btn-primary btn-sm mb-3">Kembali</a>
        <div class="card">
            <div class="card-body p-3">
                <form action="{{ route('perusahaan.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nib" class="form-label"><b>NIB</b></label>
                        <input class="form-control" type="text" placeholder="Masukkan NIB" aria-label="nib"
                            id="nib" value="{{ old('nib') }}" name="nib" required>
                    </div>
                    <div class="mb-3">
                        <label for="npwp" class="form-label"><b>NPWP</b></label>
                        <input class="form-control" type="text" placeholder="Masukkan NPWP" aria-label="npwp"
                            id="npwp" value="{{ old('npwp') }}" name="npwp" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_perusahaan" class="form-label"><b>Nama Perusahaan</b></label>
                        <input class="form-control" type="text" placeholder="Masukkan Nama Perusahaan"
                            aria-label="nama_perusahaan" id="nama_perusahaan" value="{{ old('nama_perusahaan') }}"
                            name="nama_perusahaan" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_perusahaan" class="form-label"><b>Jenis Perusahaan</b></label>
                        <select class="custom-select" name="jenis_perusahaan" required>
                            <option selected>Jenis Perusahaan</option>
                            @foreach ($jenis_perusahaan as $jp)
                                @if (old('jenis_perusahaan') == $jp['id'])
                                    <option value="{{ $jp['id'] }}" selected> {{ $jp['jenis_perusahaan'] }}</option>
                                @else
                                    <option value="{{ $jp['id'] }}"> {{ $jp['jenis_perusahaan'] }}</option>
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
