@extends('layouts.home')

@section('title', 'Dashboard')
@section('title1', 'Home')
@section('title2', 'Dashboard')
@section('content')

    <div class="container-fluid py-4">
        <div class="card bg-gradient-dark shadow">
            <div class="card-header bg-transparent">
                <h4 class="text-white">PUSBAKOR DETAIL</h4>
            </div>
            <div class="row m-1 mt-0">
                {{-- <div class="row mx-1 mb-2">
                    <div class="card bg-gradient-dark mt-0">
                        <div class="card-body bg-transparent p-3">
                            <div class="row">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold text-white">Terdaftar PUSBAKOR
                                    </p>
                                    <h5 class="font-weight-bolder mb-0 text-white">
                                        {{ $totalUser }} <span class="text-success">User</span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="row mx-1 mb-1">
                        <div class="card bg-gradient-dark">
                            <div class="card-body bg-transparent p-3">
                                <div class="row">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold text-white">Data Proyek</p>
                                        <h5 class="font-weight-bolder mb-0 text-white">
                                            {{ $totalProyek }} <span class="text-success">Update</span>
                                        </h5>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card bg-gradient-dark mt-3">
                            <div class="card-body bg-transparent p-3">
                                <div class="row">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold text-white">Data Perusahaan
                                        </p>
                                        <h5 class="font-weight-bolder mb-0 text-white">
                                            {{ $totalPerusahaan }} <span class="text-success">Update</span>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="row mx-1 mb-1">
                        <div class="card bg-gradient-dark">
                            <div class="card-body bg-transparent p-3">
                                <div class="row">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold text-white">Data Kecamatan
                                        </p>
                                        <h5 class="font-weight-bolder mb-0 text-white">
                                            {{ $totalKecamatan }} <span class="text-success">Update</span>
                                        </h5>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card bg-gradient-dark mt-3">
                            <div class="card-body bg-transparent p-3">
                                <div class="row">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold text-white">Data Kelurahan
                                        </p>
                                        <h5 class="font-weight-bolder mb-0 text-white">
                                            {{ $totalDesa }} <span class="text-success">Update</span>
                                        </h5>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="row mx-1">
                        <div class="card card-background shadow-none card-background-mask-info" id="sidenavCard">
                            <div class="full-background"
                                style="background-image: url('{{ asset('img/curved-images/curved-6.jpg') }}')">
                            </div>
                            <div class="card-body text-start p-3 w-100">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-xl position-relative">
                                            <img src="{{ asset('img/bruce-mars.jpg') }}" alt="profile_image"
                                                class="w-100 border-radius-lg shadow-sm">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="docs-info">
                                            <h4 class="text-white up mb-0"><b>Hi, {{ auth()->user()->name }}</h4>
                                            <p class="text-xs font-weight-bold">Please check our profile</p>
                                            <a href="{{ route('profile.index') }}" target="_self"
                                                class="btn btn-dark btn-sm w-100 mb-0">Check
                                                Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-auto mt-4 mb-3 mx-3">
        <div class="row mx-1">
            <div class="col mb-3">
                <div class="card z-index-2 bg-gradient-dark shadow">
                    <div class="card-header pb-0 bg-transparent">
                        <h6 class="text-success">Proyek</h6>
                        <p class="text-sm">
                            <i class="fa fa-arrow-up text-success"></i>
                            <span class="font-weight-bold text-white">Total Proyek dihitung dari setiap Kecamatan</span>
                        </p>
                    </div>
                    <div class="card-body p-1 text-dark">
                        {!! $data1['ProyekChart']->container() !!}
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card z-index-2 bg-gradient-dark shadow">
                    <div class="card-header pb-0 bg-transparent">
                        <h6 class="text-success">Perusahaan</h6>
                        <p class="text-sm">
                            <i class="fa fa-arrow-up text-success"></i>
                            <span class="font-weight-bold text-white">Total Perusahaan sesuai dengan Jenis Perusahaan</span>
                        </p>
                    </div>
                    <div class="card-body p-1 text-dark overflow-hidden">
                        {!! $data2['PerusahaanChart']->container() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        unction updateJumlahUser() {
            fetch('/path/ke/endpoint/laravel/proyek') // Ganti dengan path endpoint proyek
                .then(response => response.json())
                .then(data => {
                    document.getElementById('totalUser').innerText = data.totalUser;
                })
                .catch(error => console.error('Error:', error));
        }

        function updateJumlahProyek() {
            fetch('/path/ke/endpoint/laravel/proyek') // Ganti dengan path endpoint proyek
                .then(response => response.json())
                .then(data => {
                    document.getElementById('totalProyek').innerText = data.totalProyek;
                })
                .catch(error => console.error('Error:', error));
        }

        function updateJumlahPerusahaan() {
            fetch('/path/ke/endpoint/laravel/perusahaan') // Ganti dengan path endpoint perusahaan
                .then(response => response.json())
                .then(data => {
                    document.getElementById('totalPerusahaan').innerText = data.totalPerusahaan;
                })
                .catch(error => console.error('Error:', error));
        }

        function updateJumlahKecamatan() {
            fetch('/path/ke/endpoint/laravel/kecamatan') // Ganti dengan path endpoint kecamatan
                .then(response => response.json())
                .then(data => {
                    document.getElementById('totalKecamatan').innerText = data.totalKecamatan;
                })
                .catch(error => console.error('Error:', error));
        }

        function updateJumlahDesa() {
            fetch('/path/ke/endpoint/laravel/desa') // Ganti dengan path endpoint desa
                .then(response => response.json())
                .then(data => {
                    document.getElementById('totalDesa').innerText = data.totalDesa;
                })
                .catch(error => console.error('Error:', error));
        }

        // Panggil fungsi saat halaman dimuat
        window.onload = function() {
            updateJumlahUser();
            updateJumlahProyek();
            updateJumlahPerusahaan();
            updateJumlahKecamatan();
            updateJumlahDesa();
        };
    </script>
    {{-- <script src="{{ $ProyekChart->cdn() }}"></script>
    {{ $ProyekChart->script() }} --}}
    <script src="{{ $data1['ProyekChart']->cdn() }}"></script>
    {{ $data1['ProyekChart']->script() }}
    <script src="{{ $data2['PerusahaanChart']->cdn() }}"></script>
    {{ $data2['PerusahaanChart']->script() }}
@endsection
