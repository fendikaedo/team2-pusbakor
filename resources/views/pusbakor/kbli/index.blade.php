@extends('layouts.home')

@section('title', 'KBLI PUSBAKOR')
@section('content')
    <a href="/kbli/create" class="btn btn-primary btn-sm m-3">Tambah KBLI</a>
    <thead>
        <tr>
            <th>No</th>
            <th>Kode KBLI</th>
            <th class="judul">Judul KBLI</th>
            <th>Pembina</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kbli as $k)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $k->kode_kbli }}</td>
                <td class="judul">{{ $k->judul }}</td>
                <td>{{ $k->pembina }}</td>
                <td>
                    <form action="{{ route('kbli.destroy', $k->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="kbli/{{ $k['id'] }}/edit" class="btn btn-success btn-sm">Edit</a>
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
    .judul{
        text-align: left
    }
</style>
