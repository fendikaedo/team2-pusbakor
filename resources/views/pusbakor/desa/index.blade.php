@extends('dashboard.index')

@section('title', 'Kelurahan/Desa PUSBAKOR')
@section('content')
    <a href="/desa/create" class="btn btn-primary btn-sm m-3">Tambah Kelurahan/Desa</a>
    <thead>
        <tr>
            <th>No</th>
            <th>Kelurahan/Desa</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Desa as $d)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $d->nama_desa }}</td>
                <td>
                    <form action="{{ route('desa.destroy', $d->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="desa/{{ $d['id'] }}/edit" class="btn btn-success btn-sm">Edit</a>
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
