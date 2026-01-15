@extends('layouts.petugas.main')

@section('title', 'Dashboard Admin')

@section('page-title')
    <h1>Dashboard Kepala MPP</h1>
    <p class="text-subtitle text-muted">Ini adalah halaman dashboard Kepala MPP</p>
@endsection

@section('main')
    <div class="row mb-4">
        <!-- Total Pengaduan -->
        <div class="col-12 col-md-4">
            <div class="card card-statistic text-center">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center">
                        <h3 class="card-title text-dark mb-3">Total Pengaduan</h3>
                        <div class="number-display">
                            <h1 class="display-4 font-weight-bold text-dark">{{ $totalPengaduan }}</h1>
                        </div>
                        <a href="{{ route('kelola-laporan-petugas') }}" class="text-dark mt-2">Semua Status Pengaduan</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Total Pengaduan -->
        <div class="col-12 col-md-4">
            <div class="card card-statistic text-center">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center">
                        <h3 class="card-title text-dark mb-3">Pengaduan Tertunda</h3>
                        <div class="number-display">
                            <h1 class="display-4 font-weight-bold text-dark">{{ $pengaduanTertunda }}</h1>
                        </div>
                        <a href="{{ route('kelola-laporan-petugas') }}" class="text-dark mt-2">Semua Status Pengaduan
                            Tertunda</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Total Pengaduan -->
        <div class="col-12 col-md-4">
            <div class="card card-statistic text-center">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center">
                        <h3 class="card-title text-dark mb-3">Pengaduan Selesai</h3>
                        <div class="number-display">
                            <h1 class="display-4 font-weight-bold text-dark">{{ $pengaduanSelesai }}</h1>
                        </div>
                        <a href="{{ route('kelola-laporan-petugas') }}" class="text-dark mt-2">Semua Status Pengaduan
                            Selesai</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
