@extends('layouts.admin.main')

@section('title', 'Dashboard Admin')

@section('page-title')
    <h1>Kelola Data Pengaduan</h1>
    <p class="text-subtitle text-muted">Ini adalah halaman kelola data pengaduan</p>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard-admin') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('kelola-pengaduan-admin') }}">Pengaduan</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
        Data Pengaduan
    </li>
@endsection


@section('main')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>Data Pengaduan</h4>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Judul</th>
                            {{-- <th>Gambar</th> --}}
                            <th>Status</th>
                            <th>Tanggapan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($complaints as $complaint)
                            <tr class="border-t">
                                <td class="px-4 py-2">{{ $loop->iteration }}</td>

                                <td class="px-4 py-2"> {{ $complaint->masyarakat->user->name }}
                                </td>
                                <td class="px-4 py-2">{{ $complaint->judul }}</td>
                                {{-- <td class="px-4 py-2">
                                    @if ($complaint->gambar)
                                        <img src="{{ asset('storage/' . $complaint->gambar) }}" alt="Lampiran"
                                            style="width:100px;height:100px;object-fit:cover;border-radius:4px;">
                                    @else
                                        <span class="text-gray-400">Tidak ada</span>
                                    @endif
                                </td> --}}
                                <td class="px-4 py-2">{{ $complaint->status }}</td>
                                <td class="px-4 py-2">
                                    @if ($complaint->tanggapan)
                                        <span class="text-gray-400">{{ $complaint->tanggapan }}</span>
                                    @else
                                        <span class="text-gray-400">Tidak ada</span>
                                    @endif

                                </td>
                                <td class="px-4 py-2">
                                    <div class="d-flex flex-nowrap">
                                        <a href="{{ route('admin-pengaduan-show', $complaint->id) }}"
                                            class="btn btn-warning btn-sm mr-1">Edit</a>

                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#exampleModalCenter-{{ $complaint->id }}">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Vertically Centered modal Modal -->
                            <div class="modal fade" id="exampleModalCenter-{{ $complaint->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Data Pengaduan
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                Hapus data pengaduan {{ $complaint->masyarakat->user->name }}?
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                            <form method="POST"
                                                action="{{ route('admin-pengaduan-destroy', $complaint->id) }}"
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
