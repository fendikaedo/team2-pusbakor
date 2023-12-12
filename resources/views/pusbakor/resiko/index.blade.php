@extends('dashboard.index')

@section('title','Resiko Proyek PUSBAKOR')
@section('content')
    <a href="/resiko/create" class="btn btn-primary btn-sm m-3">Tambah Resiko</a>
    <thead>
        <tr>
            <th>No</th>
            <th>Resiko Proyek</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($resiko as $r)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $r->resiko_proyek }}</td>
                <td>
                    <form action="{{ route('resiko.destroy', $r->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="resiko/{{ $r['id'] }}/edit" class="btn btn-success btn-sm">Edit</a>
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
