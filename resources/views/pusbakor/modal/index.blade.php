@extends('dashboard.index')

@section('title', 'Modal PUSBAKOR')
@section('content')
    <a href="/modal/create" class="btn btn-primary btn-sm m-3">Tambah Status Modal</a>
    <thead>
        <tr>
            <th>No</th>
            <th>Status Modal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($modal as $m)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $m->status_modal }}</td>
                <td>
                    <form action="{{ route('modal.destroy', $m->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="modal/{{ $m['id'] }}/edit" class="btn btn-success btn-sm">Edit</a>
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
