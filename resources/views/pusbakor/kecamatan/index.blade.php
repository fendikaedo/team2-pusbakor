@extends('layouts.home')

@section('title', 'Kecamatan PUSBAKOR')
@section('title1', 'Home')
@section('title2', 'Kecamatan')
@section('content')
    <a href="/kecamatan/create" class="btn btn-primary btn-sm m-3">Tambah Kecamatan</a>
    <thead>
        <tr>
            <th>No</th>
            <th>Kecamatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kecamatan as $kec)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kec->nama_kecamatan }}</td>
                <td>
                    <form action="{{ route('kecamatan.destroy', $kec->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="kecamatan/{{ $kec['id'] }}/edit" class="btn btn-success btn-sm">Edit</a>
                        <button class="btn btn-danger btn-trash btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
@endsection
@section('pagination')
    {{ $kecamatan->links('pagination::bootstrap-5') }}
@endsection
<style>
    thead {
        text-align: center
    }

    tbody {
        text-align: center
    }
</style>
