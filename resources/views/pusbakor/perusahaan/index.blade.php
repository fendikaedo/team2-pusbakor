@extends('layouts.home')

@section('title', 'Perusahaan PUSBAKOR')
@section('title1', 'Home')
@section('title2', 'Perusahaan')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <a href="/perusahaan/create" class="btn btn-primary btn-sm m-3">Tambah Perusahaan</a>
    <thead>
        <tr>
            <th>No</th>
            <th>NIB</th>
            <th>NPWP</th>
            <th class="nama_perusahaan">Nama Perusahaan</th>
            <th class="jenis_perusahaan">Jenis Perusahaan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($perusahaan as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->nib }}</td>
                <td>{{ $p->npwp }}</td>
                <td class="nama_perusahaan">{{ $p->nama_perusahaan }}</td>
                <td class="jenis_perusahaan">{{ $p->jenis_perusahaan->jenis_perusahaan }}</td>
                <td>
                    <form action="{{ route('perusahaan.destroy', $p->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="perusahaan/{{ $p['id'] }}/edit" class="btn btn-success btn-sm">Edit</a>
                        <button class="btn btn-danger btn-trash btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
@endsection
@section('pagination')
    {{ $perusahaan->links('pagination::bootstrap-5') }}
@endsection
<style>
    thead {
        text-align: center
    }

    tbody {
        text-align: center
    }
    .nama_perusahaan{
        text-align: center
    }
</style>
