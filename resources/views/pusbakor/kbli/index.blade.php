@extends('dashboard.index')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="mt-2"><b>KBLI PUSBAKOR</b></h1>
            <a href="/kbli/create" class="btn btn-primary btn-sm mb-1 mt-3">Tambah KBLI</a>
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode KBLI</th>
                            <th>Judul KBLI</th>
                            <th>Pembina</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kbli as $k)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $k ->kode_kbli}}</td>
                                <td>{{ $k ->judul}}</td>
                                <td>{{ $k ->pembina}}</td>
                                <td>
                                    <form action="{{route ('kbli.destroy',$k->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="kbli/{{$k['id']}}/edit" class="btn btn-success btn-sm">Edit</a>
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
