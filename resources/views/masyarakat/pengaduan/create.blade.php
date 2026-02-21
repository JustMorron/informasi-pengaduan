<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Pengaduan - Sistem Pengaduan Masyarakat</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />

</head>

<body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/logo-black.png') }}" alt="Logo" width="120">
                    <h1 class="text-xl font-semibold text-gray-800 ml-5">Sistem Pengaduan Masyarakat</h1>
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
    <div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-900">Buat Pengaduan Baru</h2>
                <p class="mt-1 text-sm text-gray-600">Sampaikan keluhan atau aspirasi Anda dengan jelas dan lengkap</p>
            </div>

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <form method="POST" action="{{ route('store-pengaduan-masyarakat') }}" enctype="multipart/form-data"
                    class="p-6">
                    @csrf

                    <div class="mb-6">

                        <div class="mb-6">
                            <label for="judul" class="block text-sm font-medium text-gray-700 mb-2">
                                Judul Pengaduan <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="judul" name="judul" value="{{ old('judul') }}"
                                class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('judul')  @enderror"
                                placeholder="Masukkan isi pengaduan Anda" required>
                            @error('judul')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="isi_complaint" class="block text-sm font-medium text-gray-700 mb-2">
                                Deskripsi Pengaduan <span class="text-red-500">*</span>
                            </label>
                            <textarea id="isi_complaint" name="isi_complaint" rows="6"
                                class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('isi_complaint')  @enderror"
                                placeholder="Jelaskan pengaduan Anda secara detail..." required>{{ old('isi_complaint') }}</textarea>
                            @error('isi_complaint')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="jenis_pengaduan" class="block text-sm font-medium text-gray-700 mb-2">
                                Kategori Pengaduan <span class="text-red-500">*</span>
                            </label>
                            <select id="jenis_pengaduan" name="jenis_pengaduan"
                                class="mt-1 block w-full  border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('category')  @enderror"
                                required>
                                <option value="">-- Pilih Kategori Pengaduan --</option>
                                <option value="keterlambatan pelayanan">Keterlambatan Pelayanan</option>
                                <option value="sikap petugas">Sikap / Perilaku Petugas</option>
                                <option value="prosedur pelayanan">Prosedur Pelayanan</option>
                                <option value="sarana prasarana">Sarana dan Prasarana</option>
                                <option value="kesalahan administrasi">Kesalahan Administrasi</option>
                                <option value="pungutan liar">Pungutan Tidak Resmi</option>
                                <option value="sistem pelayanan">Sistem / Aplikasi Pelayanan</option>
                                <option value="informasi pelayanan">Informasi Pelayanan</option>
                                <option value="keamanan kenyamanan">Keamanan dan Kenyamanan</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label for="instansi" class="block text-sm font-medium text-gray-700 mb-2">
                                Instansi Tujuan<span class="text-red-500">*</span>
                            </label>
                            <select id="instansi" name="instansi"
                                class="mt-1 block w-full  border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('category')  @enderror"
                                required>
                                <option value="">-- Pilih Instansi --</option>
                                <option value="DINSOS">DINSOS</option>
                                <option value="DPMPTSP">DPMPTSP</option>
                                <option value="DLH">DLH</option>
                                <option value="DPUPR">DPUPR</option>
                                <option value="PPID">PPID</option>
                                <option value="DPKPP">DPKPP</option>
                                <option value="PERPUSTAKAAN">PERPUSTAKAAN</option>
                                <option value="ULP">ULP</option>
                                <option value="DISHUB">DISHUB</option>
                                <option value="DISDUKCAPIL">DISDUKCAPIL</option>
                                <option value="BAPENDA">BAPENDA</option>
                                <option value="DINAS KESEHATAN">DINAS KESEHATAN</option>
                                <option value="DISNAKER">DISNAKER</option>
                                <option value="PERUMDAM">PERUMDAM</option>
                                <option value="BPJS KETENAGAKERJAAN">BPJS KETENAGAKERJAAN</option>
                                <option value="PT. POS">PT. POS</option>
                                <option value="PENGADILAN NEGERI">PENGADILAN NEGERI</option>
                                <option value="KEJARI">KEJARI</option>
                                <option value="BPOM">BPOM</option>
                                <option value="BPJS KESEHATAN">BPJS KESEHATAN</option>
                                <option value="BANK BRI">BANK BRI</option>
                                <option value="PENGADILAN AGAMA">PENGADILAN AGAMA</option>
                                <option value="SAMSAT">SAMSAT</option>
                                <option value="POLRES">POLRES</option>
                                <option value="PT. TASPEN">PT. TASPEN</option>
                                <option value="KEMENAG">KEMENAG</option>
                                <option value="KPP PRATAMA">KPP PRATAMA</option>
                                <option value="BPN RI">BPN RI</option>
                                <option value="KANWIL DIRJEN PERMASYARAKATAN BANTEN">KANWIL DIRJEN PERMASYARAKATAN
                                    BANTEN</option>
                                <option value="KANTOR IMIGRASI">KANTOR IMIGRASI</option>
                                <option value="KEMENKUMHAM RI WIL. BANTEN">KEMENKUMHAM RI WIL. BANTEN</option>
                                <option value="BJB">BJB</option>

                                {{-- <option value="Dishub">Dishub</option>
                                <option value="Disnaker">Disnaker</option>
                                <option value="Dinsos">Dinas Sosial</option>
                                <option value="Dinkes">Dinas Kesehatan</option>
                                <option value="Polri">Polri</option>
                                <option value="Kemenag">Kementerian Agama</option>
                                <option value="Imigrasi">Imigrasi</option>
                                <option value="Kantor Pajak">Kantor Pajak</option>
                                <option value="BPJS Kesehatan">BPJS Kesehatan</option>
                                <option value="BPJS Ketenagakerjaan">BPJS Ketenagakerjaan</option>
                                <option value="PLN">PLN</option>
                                <option value="PDAM">PDAM</option>
                                <option value="Perbankan">Perbankan</option> --}}
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label for="gambar" class="block text-sm font-medium text-gray-700 mb-2 mt-2">
                                Lampiran Gambar (Opsional)
                            </label>
                            <input type="file" id="gambar" name="gambar" accept="image/*"
                                class="mt-1 block w-full border-gray-300 px-4 text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 @error('gambar')  @enderror">
                            @error('gambar')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="mt-2 text-sm text-gray-500">
                                Upload gambar pendukung pengaduan (format: JPG, PNG, GIF, maksimal 2MB). Opsional.
                            </p>
                        </div>
                    </div>
                    {{-- <div class="mb-6">
                        <div class="bg-blue-50 border border-blue-200 rounded-md p-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-sm font-medium text-blue-800">Informasi Penting</h3>
                                    <div class="mt-2 text-sm text-blue-700">
                                        <ul class="list-disc pl-5 space-y-1">
                                            <li>Pastikan pengaduan Anda sesuai dengan ketentuan yang berlaku</li>
                                            <li>Sertakan bukti-bukti yang relevan jika memungkinkan</li>
                                            <li>Pengaduan akan diproses dalam waktu 3-5 hari kerja</li>
                                            <li>Anda akan menerima notifikasi status pengaduan via email</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="flex items-center justify-between">
                        <a href="{{ route('dashboard-masyarakat') }}"
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Batal
                        </a>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline">
                            Kirim Pengaduan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
