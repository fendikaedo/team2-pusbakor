@extends('layouts.home')

@section('title', 'Kecamatan PUSBAKOR')
@section('title1', 'Home')
@section('title2', 'Kecamatan')
@section('content')

    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="container font-weight-bold text-dark">
            <a href="/kecamatan/create" class="btn btn-success btn-sm m-3">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                    <path
                        d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                </svg>
            </a>
            <span class="text-white">Tambah Kecamatan</span>
        </div>
        <form action="/kecamatan" method="GET" class="col-4">
            <div class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input type="search" name="search" class="form-control" placeholder="Search Kecamatan">
            </div>
        </form>
    </div>



    <thead>
        <tr>
            <th>No</th>
            <th>Kecamatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kecamatan as $kec)
            <tr>
                <td>{{ $kec->id }}</td>
                <td>{{ $kec->nama_kecamatan }}</td>
                <td>
                    <form action="{{ route('kecamatan.destroy', $kec->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="kecamatan/{{ $kec['id'] }}/edit" class="btn btn-success btn-sm">Edit</a>
                        <button class="btn btn-danger btn-trash btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
@endsection
@section('pagination')
    {{ $kecamatan->links('pagination::bootstrap-5') }}
@endsection
<style>
    thead {
        text-align: center
    }

    tbody {
        text-align: center
    }
</style>
