@extends('layouts.home')

@section('title', 'Skala Usaha PUSBAKOR')
@section('title1', 'Home')
@section('title2', 'Skala Usaha')
@section('content')
    <a href="/skalausaha/create" class="btn btn-primary btn-sm m-3">Tambah Skala Usaha</a>
    <thead>
        <tr>
            <th>No</th>
            <th>Skala Usaha</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($skala_usaha as $su)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $su->skala_usaha }}</td>
                <td>
                    <form action="{{ route('skalausaha.destroy', $su->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="skalausaha/{{ $su['id'] }}/edit" class="btn btn-success btn-sm">Edit</a>
                        <button class="btn btn-danger btn-trash btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
@endsection
@section('pagination')
    {{ $skala_usaha->links('pagination::bootstrap-5') }}
@endsection
<style>
    thead {
        text-align: center
    }

    tbody {
        text-align: center
    }
</style>
