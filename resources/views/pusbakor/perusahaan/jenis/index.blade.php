@extends('dashboard.index')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="mt-2"><b>Jenis Perusahaan PUSBAKOR</b></h1>
            <a href="/jenisperusahaan/create" class="btn btn-primary btn-sm mb-1 mt-3">Tambah Jenis Perusahaan</a>
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Perusahaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jenis_perusahaan as $jp)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $jp ->jenis_perusahaan}}</td>
                                <td>
                                    <form action="{{route ('jenisperusahaan.destroy',$jp->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="jenisperusahaan/{{$jp['id']}}/edit" class="btn btn-success btn-sm">Edit</a>
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
