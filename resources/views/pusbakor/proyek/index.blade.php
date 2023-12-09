@extends('dashboard.index')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="mt-2"><b>Proyek PUSBAKOR</b></h1>
            <a href="/proyek/create" class="btn btn-primary btn-sm mb-1 mt-3">Tambah Proyek</a>
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Longitude</th>
                            <th>Latitude</th>
                            <th>Alamat</th>
                            <th>Investasi</th>
                            <th>Perusahaan</th>
                            <th>Status Modal</th>
                            <th>Resiko Proyek</th>
                            <th>Skala Usaha</th>
                            <th>Kecamatan</th>
                            <th>Kelurahan/Desa</th>
                            <th>KBLI</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proyek as $pro)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $pro ->longitude}}</td>
                                <td>{{ $pro ->latitude}}</td>
                                <td>{{ $pro ->alamat}}</td>
                                <td>{{ $pro ->investasi}}</td>
                                <td>{{ $pro['perusahaan']['nama_perusahaan'] }}</td>
                                <td>{{ $pro['modal']['status_modal'] }}</td>
                                <td>{{ $pro['resiko']['resiko_proyek'] }}</td>
                                <td>{{ $pro['skala_usaha']['skala_usaha'] }}</td>
                                <td>{{ $pro['kecamatan']['nama_kecamatan'] }}</td>
                                <td>{{ $pro['desa']['nama_desa'] }}</td>
                                <td>{{ $pro['kbli']['judul'] }}</td>
                                <td>
                                    <form action="{{route ('proyek.destroy',$pro->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="proyek/{{$pro['id']}}/edit" class="btn btn-success btn-sm">Edit</a>
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

