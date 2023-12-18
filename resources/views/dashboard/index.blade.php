@extends('layouts.home')

@section('title', 'Dashboard')
@section('title1', 'Home')
@section('title2', 'Dashboard')
@section('content')

    <div class="container-fluid py-4">
        <div class="row m-1">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="row">
                    <div class="card bg-gradient-dark">
                        <div class="card-body bg-transparent p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold text-white">Total
                                        </p>
                                        <span class="text-success text-sm font-weight-bolder">Proyek</span>
                                        <h5 class="font-weight-bolder mb-0 text-white">
                                            {{ $totalProyek }}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-2 text-end">
                                    <a href="{{ route('proyek.index') }}">
                                        <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                            <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-gradient-dark mt-3">
                        <div class="card-body bg-transparent p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold text-white">Total
                                            <span class="text-success text-sm font-weight-bolder">Perusahaan</span>
                                        </p>
                                        <h5 class="font-weight-bolder mb-0 text-white">
                                            {{ $totalPerusahaan }}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <a href="{{ route('perusahaan.index') }}">
                                        <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                            <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mx-3">
                <div class="row">
                    <div class="card bg-gradient-dark">
                        <div class="card-body bg-transparent p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold text-white">Total
                                        </p>
                                        <span class="text-success text-sm font-weight-bolder">Kecamatan</span>
                                        <h5 class="font-weight-bolder mb-0 text-white">
                                            {{ $totalKecamatan }}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-2 text-end">
                                    <a href="{{ route('kecamatan.index') }}">
                                        <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                            <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-gradient-dark mt-3">
                        <div class="card-body bg-transparent p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold text-white">Total
                                            <span class="text-success text-sm font-weight-bolder">Kelurahan</span>
                                        </p>
                                        <h5 class="font-weight-bolder mb-0 text-white">
                                            {{ $totalDesa }}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <a href="{{ route('desa.index') }}">
                                        <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                            <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mx-3">
                <div class="row">
                    <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
                        <div class="full-background"
                            style="background-image: url('{{ asset('img/curved-images/curved-6.jpg') }}')"></div>
                        <div class="card-body text-start p-3 w-100">
                            <div
                                class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
                                <i class="ni ni-circle-08 text-dark text-gradient text-lg top-0" aria-hidden="true"
                                    id="sidenavCardIcon"></i>
                            </div>
                            <div class="docs-info">
                                <h6 class="text-white up mb-0">Profile</h6>
                                <p class="text-xs font-weight-bold">Please check our profile</p>
                                <a href="{{ route('profile.index') }}" target="_self"
                                    class="btn btn-white btn-sm w-100 mb-0">Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-lg-12 mt-4 m-3">
        <div class="card z-index-2 bg-gradient-dark">
            <div class="card-header pb-0 bg-gradient-dark">
                <h6 class="text-white">Proyek</h6>
                <p class="text-sm">
                    <i class="fa fa-arrow-up text-success"></i>
                    <span class="font-weight-bold text-white">Total Proyek dihitung dari beberapa Kecamatan</span>
                </p>
            </div>
            <div class="card-body p-1">

            </div>
        </div>
        <div class="card z-index-2 bg-gradient-dark mt-4">
            <div class="card-header pb-0 bg-transparent">
                <h6 class="text-white">Perusahaan</h6>
                <p class="text-sm">
                    <i class="fa fa-arrow-up text-success"></i>
                    <span class="font-weight-bold text-white">Total Perusahaan sesuai dengan Jenis Perusahaan</span>
                </p>
            </div>
            <div class="card-body p-1 text-dark">
                {!! $PerusahaanChart->container() !!}
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
@section('js')
    <script>
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
            updateJumlahProyek();
            updateJumlahPerusahaan();
            updateJumlahKecamatan();
            updateJumlahDesa();
        };
    </script>
    <script src="{{ $PerusahaanChart->cdn() }}"></script>
    {{ $PerusahaanChart->script() }}
@endsection
