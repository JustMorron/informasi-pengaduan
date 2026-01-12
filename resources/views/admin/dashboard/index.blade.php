@extends('layouts.admin.main')

@section('title', 'Dashboard Admin')

@section('content')
    <h1>Dashboard Admin</h1>
@endsection

@section('content-title')
    <p class="text-subtitle text-muted">Ini adalah halaman dashboard admin</p>
@endsection

@section('main')
    <div class="row mb-2">
        <div class="col-12 col-md-4">
            <div class="card card-statistic">
                <div class="card-body p-0">
                    <div class="d-flex flex-column">
                        <div class='px-3 py-3 d-flex justify-content-between'>
                            <h3 class='card-title'>Total Pengaduan</h3>
                        </div>
                        <div class="chart-wrapper">
                            <canvas id="canvas1" style="height:100px !important"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card card-statistic">
                <div class="card-body p-0">
                    <div class="d-flex flex-column">
                        <div class='px-3 py-3 d-flex justify-content-between'>
                            <h3 class='card-title'> Pengaduan Tertunda</h3>
                        </div>
                        <div class="chart-wrapper">
                            <canvas id="canvas1" style="height:100px !important"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card card-statistic">
                <div class="card-body p-0">
                    <div class="d-flex flex-column">
                        <div class='px-3 py-3 d-flex justify-content-between'>
                            <h3 class='card-title'> Pengaduan Selesai</h3>
                        </div>
                        <div class="chart-wrapper">
                            <canvas id="canvas1" style="height:100px !important"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
