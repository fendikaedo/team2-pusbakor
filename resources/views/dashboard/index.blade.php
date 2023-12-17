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
                                        2,300
                                        <span class="text-success text-sm font-weight-bolder">+3%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                </div>
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
                                        2,300
                                        <span class="text-success text-sm font-weight-bolder">+3%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                </div>
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
                                        2,300
                                        <span class="text-success text-sm font-weight-bolder">+3%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                </div>
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
                                        2,300
                                        <span class="text-success text-sm font-weight-bolder">+3%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                </div>
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
                            <span class="font-weight-bold text-white">4% more</span> in 2021
                        </p>
                    </div>
                    <div class="card-body p-1">
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
                <div class="card z-index-2 bg-dark mt-4">
                    <div class="card-header pb-0 bg-dark">
                        <h6 class="text-white">Perusahaan</h6>
                        <p class="text-sm">
                            <i class="fa fa-arrow-up text-success"></i>
                            <span class="font-weight-bold text-white">4% more</span> in 2021
                        </p>
                    </div>
                    <div class="card-body p-1">
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
