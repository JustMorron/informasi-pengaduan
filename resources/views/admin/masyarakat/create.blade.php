@extends('layouts.admin.main')

@section('title', 'Dashboard Admin')

@section('page-title')
    <h1>Tambah Data Masyarakat</h1>
    <p class="text-subtitle text-muted">Ini adalah halaman tambah data masyarakat</p>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard-admin') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('kelola-masyarakat-admin') }}">Masyarakat</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
        Tambah Data Masyarakat
    </li>
@endsection


@section('main')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data Masyarakat</h4>
            </div>

            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" method="POST" action="{{ route('store-masyarakat-admin') }}">
                        @csrf

                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Nama</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="col-md-4">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="col-md-4">
                                    <label>Password</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="col-md-4">
                                    <label>Nik</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" class="form-control" name="nik">
                                </div>
                                <div class="col-md-4">
                                    <label>Pekerjaan</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" class="form-control" name="pekerjaan">
                                </div>
                                <div class="col-md-4">
                                    <label>Status Pernikahan</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" class="form-control" name="status_pernikahan">
                                </div>
                                <div class="col-md-4">
                                    <label>Tanggal Lahir</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="date" class="form-control" name="tanggal_lahir">
                                </div>
                                <div class="col-md-4">
                                    <label>Alamat</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <textarea class="form-control" required name="alamat"></textarea>
                                </div>
                                <div class="col-md-4">
                                    <label>Telepon</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" class="form-control" name="no_hp">
                                </div>
                                <div class="col-md-4">
                                    <label>Jenis Kelamin</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect" name="jenis_kelamin">
                                            <option value="Laki-Laki">
                                                Laki-Laki</option>
                                            <option value="Perempuan">
                                                Perempuan
                                            </option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <a href="{{ route('kelola-masyarakat-admin') }}"
                                        class="btn btn-light mr-1 mb-1">Back</a>
                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

@endsection
