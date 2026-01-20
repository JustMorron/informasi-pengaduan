<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pengaduan - Sistem Pengaduan Masyarakat</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1 class="text-xl font-semibold text-gray-800">Sistem Pengaduan Masyarakat</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-700">Selamat datang, {{ $masyarakats->user->name }}</span>
                    <a href="{{ route('dashboard-masyarakat') }}"
                        class="text-blue-500 hover:text-blue-700">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                            Keluar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900">Riwayat Pengaduan</h2>
                    <p class="mt-1 text-sm text-gray-600">Pantau status pengaduan yang telah Anda ajukan</p>
                </div>
                <a href="{{ route('create-pengaduan-masyarakat') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Buat Pengaduan Baru
                </a>
            </div>

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

            @if ($complaints->count())
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Judul</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Kategori</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Tanggapan</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Tanggal</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($complaints as $complaint)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm font-medium text-gray-900 max-w-xs truncate">
                                                    {{ $complaint->judul }}
                                                </div>
                                                <div class="text-sm text-gray-500 max-w-xs truncate">
                                                    {{ \Illuminate\Support\Str::limit($complaint->isi_complaint, 60) }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if ($complaint->status == 'pending')
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                Menunggu
                                            </span>
                                        @elseif($complaint->status == 'diproses')
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                Diproses
                                            </span>
                                        @elseif($complaint->status == 'selesai')
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                Selesai
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                                {{ ucfirst($complaint->status) }}
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span>
                                            @php
                                                $jenisPengaduan = [
                                                    'keterlambatan pelayanan' => 'Keterlambatan Pelayanan',
                                                    'sikap petugas' => 'Sikap Petugas',
                                                    'prosedur pelayanan' => 'Prosedur Pelayanan',
                                                    'sarana prasarana' => 'Sarana Prasarana',
                                                    'kesalahan administrasi' => 'Kesalahan Administrasi',
                                                    'pungutan liar' => 'Pungutan Liar',
                                                    'sistem pelayanan' => 'Sistem Pelayanan',
                                                    'informasi pelayanan' => 'Informasi Pelayanan',
                                                    'keamanan kenyamanan' => 'Keamanan Kenyamanan',
                                                    'lainnya' => 'Lainnya',
                                                ];
                                            @endphp
                                            {{ $jenisPengaduan[$complaint->jenis_pengaduan] ?? '❓ Tidak Diketahui' }}

                                        </span>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span>
                                            {{-- @php
                                                $instansi = [
                                                    'Disdukcapil' => 'Dinas Kependudukan dan Pencatatan Sipil',
                                                    'DPMPTSP' =>
                                                        'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu',
                                                    'Bapenda' => 'Badan Pendapatan Daerah',
                                                    'Dishub' => 'Dinas Perhubungan',
                                                    'Disnaker' => 'Dinas Tenaga Kerja',
                                                    'Dinsos' => 'Dinas Sosial',
                                                    'Dinkes' => 'Dinas Kesehatan',
                                                    'Polri' => 'Kepolisian Negara Republik Indonesia',
                                                    'Kemenag' => 'Kementerian Agama',
                                                    'Imigrasi' => 'Direktorat Jenderal Imigrasi',
                                                    'KPP' => 'Kantor Pelayanan Pajak',
                                                    'BPJS Kesehatan' => 'Badan Penyelenggara Jaminan Sosial Kesehatan',
                                                    'BPJS Ketenagakerjaan' =>
                                                        'Badan Penyelenggara Jaminan Sosial Ketenagakerjaan',
                                                    'PLN' => 'Perusahaan Listrik Negara',
                                                    'PDAM' => 'Perusahaan Daerah Air Minum',
                                                    'Perbankan' => 'Bank / Lembaga Perbankan',
                                                    'Lainnya' => 'Instansi Lainnya',
                                                ];
                                            @endphp --}}
                                            {{ $complaint->tanggapan ?? '❓ Belum Diproses' }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $complaint->created_at->format('d/m/Y') }}
                                        <div class="text-xs text-gray-400">
                                            {{ $complaint->created_at->format('H:i') }}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="px-4 py-5 sm:p-6">
                    <div class="text-center py-8">
                        <p class="text-gray-500">Belum ada pengaduan yang dibuat</p>
                        <p class="text-sm text-gray-400 mt-2">Klik "Buat Pengaduan Baru" untuk memulai</p>
                    </div>
                </div>
            @endif
        </div>
        <a href="{{ route('dashboard-masyarakat') }}"
            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Kembali
        </a>

    </div>
</body>

</html>
