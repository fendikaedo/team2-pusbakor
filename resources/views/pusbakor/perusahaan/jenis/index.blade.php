@extends('dashboard.index')

@section('title','Jenis Perusahaan PUSBAKOR')
@section('content')
    <a href="/jenis_perusahaan/create" class="btn btn-primary btn-sm m-3">Tambah Jenis Perusahaan</a>
    <thead>
        <tr>
            <th>No</th>
            <th class="jenis">Jenis Perusahaan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jenis_perusahaan as $jp)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td class="jenis">{{ $jp->jenis_perusahaan }}</td>
                <td>
                    <form action="{{ route('jenis_perusahaan.destroy', $jp->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="jenis_perusahaan/{{ $jp['id'] }}/edit" class="btn btn-success btn-sm">Edit</a>
                        <button class="btn btn-danger btn-trash btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
@endsection
<style>
    thead {
        text-align: center
    }

    tbody {
        text-align: center
    }
</style>
