@extends('dashboard.index')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="mt-2"><b>Perusahaan PUSBAKOR</b></h1>
            <a href="/jenisperusahaan/create" class="btn btn-primary btn-sm mb-1 mt-3">Tambah Jenis Perusahaan</a>
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIB</th>
                            <th>NPWP</th>
                            <th>Nama Perusahaan</th>
                            <th>Jenis Perusahaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perusahaan as $p)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $p ->nib}}</td>
                                <td>{{ $p ->npwp}}</td>
                                <td>{{ $p ->nama_perusahaan}}</td>
                                <td>{{ $p ->jenis_perusahaan_id}}</td>
                                <td>
                                    <form action="{{route ('perusahaan.destroy',$p->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="perusahaan/{{$p['id']}}/edit" class="btn btn-success btn-sm">Edit</a>
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

