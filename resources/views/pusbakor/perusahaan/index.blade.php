@extends('layouts.home')

@section('title', 'Perusahaan PUSBAKOR')
@section('title1', 'Home')
@section('title2', 'Perusahaan')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="container font-weight-bold text-dark">
            <a href="/perusahaan/create" class="btn btn-success btn-sm m-3">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                    <path
                        d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                </svg>
            </a>
            <span class="text-white">Tambah Perusahaan</span>
        </div>
        <form action="/perusahaan" method="GET" class="col-4">
            <div class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input type="search" name="search" class="form-control" placeholder="Search Perusahaan">
            </div>
        </form>
    </div>
    <thead>
        <tr>
            <th>No</th>
            <th>NIB</th>
            <th>NPWP</th>
            <th class="nama_perusahaan">Nama Perusahaan</th>
            <th class="jenis_perusahaan">Jenis Perusahaan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($perusahaan as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->nib }}</td>
                <td>{{ $p->npwp }}</td>
                <td class="nama_perusahaan">{{ $p->nama_perusahaan }}</td>
                <td class="jenis_perusahaan">{{ $p->jenis_perusahaan->jenis_perusahaan }}</td>
                <td>
                    <form action="{{ route('perusahaan.destroy', $p->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="perusahaan/{{ $p['id'] }}/edit" class="btn btn-info btn-sm"><svg
                                xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path
                                    d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                            </svg></a>
                        <button class="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" height="16"
                                width="14"
                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path
                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                            </svg></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
@endsection
@section('pagination')
    {{ $perusahaan->links('pagination::bootstrap-5') }}
@endsection
<style>
    thead {
        text-align: center
    }

    tbody {
        text-align: center
    }
    .nama_perusahaan{
        text-align: center
    }
</style>
