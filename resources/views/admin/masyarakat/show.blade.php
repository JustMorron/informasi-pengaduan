@extends('layouts.admin.main')

@section('title', 'Dashboard Admin')

@section('page-title')
    <h1>Detail Data Masyarakat</h1>
    <p class="text-subtitle text-muted">Ini adalah halaman detail data masyarakat</p>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard-admin') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('kelola-masyarakat-admin') }}">Masyarakat</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
        Detail Masyarakat
    </li>
@endsection


@section('main')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>Data Masyarakat</h4>
            </div>

            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" method="POST"
                        action="{{ route('update-masyarakat-admin', $masyarakats->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Nama</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="first-name" class="form-control" name="name"
                                        value="{{ $masyarakats->user->name }}">
                                </div>
                                <div class="col-md-4">
                                    <label>Nik</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="first-name" class="form-control" name="nik"
                                        value="{{ $masyarakats->nik }}">
                                </div>
                                <div class="col-md-4">
                                    <label>Pekerjaan</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="first-name" class="form-control" name="pekerjaan"
                                        value="{{ $masyarakats->pekerjaan }}">
                                </div>
                                <div class="col-md-4">
                                    <label>Status Pernikahan</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="first-name" class="form-control" name="status_pernikahan"
                                        value="{{ $masyarakats->status_pernikahan }}">
                                </div>
                                <div class="col-md-4">
                                    <label>Tanggal Lahir</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="date" id="first-name" class="form-control" name="tanggal_lahir"
                                        value="{{ $masyarakats->tanggal_lahir }}">
                                </div>
                                <div class="col-md-4">
                                    <label>Alamat</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <textarea id="first-name" class="form-control" required name="alamat">{{ $masyarakats->alamat }}</textarea>
                                </div>
                                <div class="col-md-4">
                                    <label>Telepon</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="first-name" class="form-control" name="no_hp"
                                        value="{{ $masyarakats->no_hp }}">
                                </div>
                                <div class="col-md-4">
                                    <label>Jenis Kelamin</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect" name="jenis_kelamin">
                                            <option value="Laki-Laki"
                                                {{ $masyarakats->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>
                                                Laki-Laki</option>
                                            <option value="Perempuan"
                                                {{ $masyarakats->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                                                Perempuan
                                            </option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-4">
                                    <label>Dibuat pada tanggal</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="first-name" class="form-control" name="created_at" readonly
                                        value="{{ $masyarakats->created_at->format('d F Y') }}">

                                </div>
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <a href="{{ route('kelola-masyarakat-admin') }}"
                                        class="btn btn-light mr-1 mb-1">Back</a>
                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

@endsection
