@extends('dashboard.index')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="mt-2"><b>Kelurahan/Desa PUSBAKOR</b></h1>
            <a href="/desa/create" class="btn btn-primary btn-sm mb-1 mt-3">Tambah Kelurahan/Desa</a>
            <div class="card">
                <table class="table">
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
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $d ->nama_desa}}</td>
                                <td>
                                    <form action="{{route ('desa.destroy',$d->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="desa/{{$d['id']}}/edit" class="btn btn-success btn-sm">Edit</a>
                                        <button class="btn btn-danger btn-trash btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
<style>
    .card {
        margin-top: 20px
    }

    h1 {
        text-align: center
    }

    thead {
        text-align: center
    }

    tbody {
        text-align: center
    }

    .card {
        width: 100%;
    }
</style>
