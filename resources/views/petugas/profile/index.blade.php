@extends('layouts.petugas.main')

@section('title', 'Dashboard Profile')

@section('page-title')
    <h1>Data Profile</h1>
    <p class="text-subtitle text-muted">Ini adalah halaman kelola data profile</p>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard-petugas') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('profile-petugas') }}">Profile</a>
    </li>
@endsection


@section('main')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>Data Profile</h4>
            </div>

            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" method="POST" action="{{ route('update-profile-petugas') }}">
                        @csrf
                        @method('PUT')

                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Nama</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                                </div>
                                <div class="col-md-4">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                                </div>
                                <div class="col-md-4">
                                    <label>Password Saat Ini</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="password" class="form-control" name="password">
                                    <small class="text-muted">Kosongkan jika tidak ingin mengubah password</small>

                                </div>
                                <div class="col-md-4">
                                    <label>Password Baru</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="password" class="form-control" name="new_password">
                                </div>
                                <div class="col-md-4">
                                    <label>Konfirmasi Password</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="password" class="form-control" name="new_password_confirmation">
                                </div>

                                <div class="col-sm-12 d-flex justify-content-end">
                                    <a href="{{ route('dashboard-petugas') }}" class="btn btn-light mr-1 mb-1">Back</a>
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
