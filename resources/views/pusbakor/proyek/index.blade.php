@extends('dashboard.index')
@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="mt-2"><b>PROYEK PUSBAKOR</b></h1>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <a href="/proyek/create" class="btn btn-primary btn-sm mb-1 mt-3">Tambah Proyek</a>
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Perusahaan</th>
                            <th>Modal</th>
                            <th>Resiko</th>
                            <th>Skala Usaha</th>
                            <th>Kecamatan</th>
                            <th>Desa</th>
                            <th>KBLI</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                              <td>
                                <form action="" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="" class="btn btn-success btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-trash btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
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
    .card{
        width: 100%;
    }
</style>
