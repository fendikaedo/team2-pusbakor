@extends('layouts.home')

@section('title', 'Proyek PUSBAKOR')
@section('title1', 'Home')
@section('title2', 'Proyek')
@section('content')
    <a href="/proyek/create" class="btn btn-primary btn-sm m-3">Tambah Proyek</a>
    <thead>
        <tr>
            <th>No</th>
            <th>Longitude</th>
            <th>Latitude</th>
            <th>Alamat</th>
            <th>Investasi</th>
            <th>Perusahaan</th>
            <th>Status Modal</th>
            <th>Resiko Proyek</th>
            <th>Skala Usaha</th>
            <th>Kecamatan</th>
            <th>Kelurahan/Desa</th>
            <th>KBLI</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($proyek as $pro)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pro->longitude }}</td>
                <td>{{ $pro->latitude }}</td>
                <td>{{ $pro->alamat }}</td>
                <td>{{ $pro->investasi }}</td>
                <td>{{ $pro->perusahaan->nama_perusahaan }}</td>
                <td>{{ $pro->modal->status_modal }}</td>
                <td>{{ $pro->resiko->resiko_proyek }}</td>
                <td>{{ $pro->skala_usaha->skala_usaha }}</td>
                <td>{{ $pro->kecamatan->nama_kecamatan }}</td>
                <td>{{ $pro->desa->nama_desa }}</td>
                <td>{{ $pro->kbli->judul }}</td>
                <td>
                    <form action="{{ route('proyek.destroy', $pro->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="proyek/{{ $pro['id'] }}/edit" class="btn btn-success btn-sm">Edit</a>
                        <button class="btn btn-danger btn-trash btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
@endsection
@section('pagination')
    {{ $proyek->links('pagination::bootstrap-5') }}
@endsection
<style>
    thead {
        text-align: center
    }

    tbody {
        text-align: center
    }
</style>
