@extends('layouts.admin.main')

@section('title', 'Dashboard Admin')

@section('page-title')
    <h1>Kelola Data Masyarakat</h1>
    <p class="text-subtitle text-muted">Ini adalah halaman kelola data masyarakat</p>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard-admin') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('kelola-masyarakat-admin') }}">Masyarakat</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
        Data Masyarakat
    </li>
@endsection


@section('main')
    <section class="section">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4 class="mb-0">Data Masyarakat</h4>
                <div>
                    <a href="{{ route('create-masyarakat-admin') }}" class="btn btn-success ">Tambah</a>
                </div>
            </div>

            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($masyarakats as $masyarakat)
                            <tr class="border-t">
                                <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2">{{ $masyarakat->user->name }}</td>
                                <td class="px-4 py-2">{{ $masyarakat->no_hp }}</td>
                                <td class="px-4 py-2">{{ $masyarakat->alamat }}</td>
                                <td class="px-4 py-2">
                                    <div class="d-flex flex-nowrap">
                                        <a href="{{ route('show-masyarakat-admin', $masyarakat->id) }}"
                                            class="btn btn-warning btn-sm mr-1">Edit</a>

                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#exampleModalCenter-{{ $masyarakat->id }}">
                                            Hapus
                                        </button>
                                    </div>
                                </td>

                            </tr>
                            <!-- Vertically Centered modal Modal -->
                            <div class="modal fade" id="exampleModalCenter-{{ $masyarakat->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Data Masyarakat
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                Hapus data {{ $masyarakat->user->name }}?
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                            <form method="POST"
                                                action="{{ route('destroy-masyarakat-admin', $masyarakat->id) }}"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger ml-1">
                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Hapus</span>
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
@endsection
