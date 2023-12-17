@extends('layouts.home')

@section('title', 'Dashboard')
@section('title1', 'Home')
@section('title2', 'Dashboard')
@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card bg-dark">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold text-white">Proyek</p>
                                    <h5 class="font-weight-bolder mb-0 text-white">
                                        {{ $totalProyek }}
                                        <span class="text-success text-sm font-weight-bolder">Update</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <a href="{{ route('proyek.index') }}">
                                    <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card bg-dark">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold text-white">Perusahaan</p>
                                    <h5 class="font-weight-bolder mb-0 text-white">
                                        {{ $totalPerusahaan }}
                                        <span class="text-success text-sm font-weight-bolder">Update</span>
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
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card bg-dark">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold text-white">Kecamatan</p>
                                    <h5 class="font-weight-bolder mb-0 text-white">
                                        {{ $totalKecamatan }}
                                        <span class="text-success text-sm font-weight-bolder">Update</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <a href="{{ route('kecamatan.index') }}">
                                    <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card bg-dark">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold text-white">Kelurahan/Desa</p>
                                    <h5 class="font-weight-bolder mb-0 text-white">
                                        {{ $totalDesa }}
                                        <span class="text-success text-sm font-weight-bolder">Update</span>
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
            <div class="col-lg-12 mt-4">
                <div class="card z-index-2 bg-dark">
                    <div class="card-header pb-0 bg-dark">
                        <h6 class="text-white">Proyek</h6>
                        <p class="text-sm">
                            <i class="fa fa-arrow-up text-success"></i>
                            <span class="font-weight-bold text-white">Total Proyek dihitung dari beberapa Kecamatan</span>
                        </p>
                    </div>
                    <div class="card-body p-1">

                    </div>
                </div>
                <div class="card z-index-2 bg-dark mt-4">
                    <div class="card-header pb-0 bg-dark">
                        <h6 class="text-white">Perusahaan</h6>
                        <p class="text-sm">
                            <i class="fa fa-arrow-up text-success"></i>
                            <span class="font-weight-bold text-white">Total Perusahaan sesuai dengan Jenis Perusahaan</span>
                        </p>
                    </div>
                    <div class="card-body p-1 text-dark">
                        {!! $chart->container() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        // Fungsi untuk melakukan permintaan ke endpoint dan menampilkan hasilnya\
        function updateJumlahProyek() {
            fetch('/path/ke/endpoint/laravel')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('totalProyek').innerText = data.totalProyek;
                })
                .catch(error => console.error('Error:', error));
        }

        // Panggil fungsi saat halaman dimuat
        window.onload = function() {
            updateJumlahProyek();
        }

        function updateJumlahPerusahaan() {
            fetch('/path/ke/endpoint/laravel')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('totalPerusahaan').innerText = data.totalPerusahaan;
                })
                .catch(error => console.error('Error:', error));
        }

        // Panggil fungsi saat halaman dimuat
        window.onload = function() {
            updateJumlahPerusahaan();
        }

        function updateJumlahKecamatan() {
            fetch('/path/ke/endpoint/laravel')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('totalKecamatan').innerText = data.totalKecamatan;
                })
                .catch(error => console.error('Error:', error));
        }

        // Panggil fungsi saat halaman dimuat
        window.onload = function() {
            updateJumlahKecamatan();
        }

        function updateJumlahPerusahaan() {
            fetch('/path/ke/endpoint/laravel')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('totalDesa').innerText = data.totalDesa;
                })
                .catch(error => console.error('Error:', error));
        }

        // Panggil fungsi saat halaman dimuat
        window.onload = function() {
            updateJumlahDesa();
        };
    </script>


    <script src="{{ $chart->cdn()}}"></script>
    {{ $chart->script() }}
@endsection
