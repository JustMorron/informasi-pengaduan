@extends('layouts.petugas.main')

@section('title', 'Dashboard Admin')

@section('page-title')
    <h1>Detail Laporam Pengaduan</h1>
    <p class="text-subtitle text-muted">Ini adalah halaman detail laporan pengaduan</p>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard-petugas') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('kelola-laporan-petugas') }}">Laporan</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
        Detail Laporan Pengaduan
    </li>
@endsection


@section('main')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>Laporan Pengaduan</h4>
            </div>

            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Nama</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="first-name" class="form-control" name="name"
                                        value="{{ $complaints->masyarakat->user->name }}">
                                </div>
                                <div class="col-md-4">
                                    <label>Pengaduan</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="first-name" class="form-control" name="judul"
                                        value="{{ $complaints->judul }}">
                                </div>
                                <div class="col-md-4">
                                    <label>Isi Pengaduan</label>
                                </div>
                                <div class="col-md-8 form-group">

                                    <textarea id="first-name" class="form-control" name="isi_complaint">{{ $complaints->isi_complaint }}</textarea>

                                </div>
                                <div class="col-md-4">
                                    <label>Jenis Pengaduan</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="first-name" class="form-control" name="jenis_pengaduan"
                                        value="{{ $complaints->jenis_pengaduan }}">
                                </div>
                                <div class="col-md-4">
                                    <label>Gambar</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    @if ($complaints->gambar)
                                        {{-- JIKA ADA GAMBAR --}}
                                        <button type="button" class="btn btn-primary block" data-toggle="modal"
                                            data-target="#exampleModalCenter">
                                            Lihat Lampiran
                                        </button>
                                    @else
                                        {{-- JIKA TIDAK ADA GAMBAR --}}
                                        <input type="text" class="form-control" value="Tidak ada lampiran">
                                    @endif

                                </div>
                                <div class="col-md-4">
                                    <label>Status</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect" name="status">
                                            <option value="pending"
                                                {{ $complaints->status == 'pending' ? 'selected' : '' }}>
                                                Pending</option>
                                            <option value="diproses"
                                                {{ $complaints->status == 'diproses' ? 'selected' : '' }}>Diproses</option>
                                            <option value="selesai"
                                                {{ $complaints->status == 'selesai' ? 'selected' : '' }}>
                                                Selesai</option>
                                            <option value="ditolak"
                                                {{ $complaints->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>

                                        </select>
                                    </fieldset>
                                </div>

                                <div class="col-md-4">
                                    <label>Tanggapan</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <textarea id="first-name" class="form-control" required name="tanggapan">{{ $complaints->tanggapan }}</textarea>
                                </div>
                                <div class="col-md-4">
                                    <label>Dibuat pada tanggal</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="first-name" class="form-control" name="created_at"
                                        value="{{ $complaints->created_at->format('d F Y') }}">

                                </div>
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <a href="{{ route('kelola-laporan-petugas') }}"
                                        class="btn btn-light mr-1 mb-1">Back</a>
                                    {{-- <button type="submit" class="btn btn-primary mr-1 mb-1">Beri Tanggapan</button> --}}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>


    <!-- Vertically Centered modal Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Gambar
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        <img src="{{ $complaints->gambar }}" alt="{{ $complaints->gambar }}">
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    {{-- <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Accept</span>
                    </button> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
