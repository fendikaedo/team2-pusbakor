@extends('dashboard.index')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="mt-2"><b>SKALA USAHA PUSBAKOR</b></h1>
            <a href="/skalausaha/create" class="btn btn-primary btn-sm mb-1 mt-3">Tambah Skala Usaha</a>
            <div class="card">
                <table class="table">
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
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $su ->skala_usaha}}</td>
                                <td>
                                    <form action="{{route ('skalausaha.destroy',$su->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="skalausaha/{{$su['id']}}/edit" class="btn btn-success btn-sm">Edit</a>
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
