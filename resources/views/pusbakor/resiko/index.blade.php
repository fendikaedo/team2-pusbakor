@extends('dashboard.index')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="mt-2"><b>RESIKO PUSBAKOR</b></h1>
            <a href="/resiko/create" class="btn btn-primary btn-sm mb-1 mt-3">Tambah Resiko</a>
            <div class="card">
                <table class="table">
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
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $r ->resiko_proyek}}</td>
                                <td>
                                    <form action="{{route ('resiko.destroy',$r->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="resiko/{{$r['id']}}/edit" class="btn btn-success btn-sm">Edit</a>
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
