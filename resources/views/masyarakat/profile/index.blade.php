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
                <h2 class="text-2xl font-bold text-gray-900">Kelola Profile</h2>
                <p class="mt-1 text-sm text-gray-600">kelola data profile</p>
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
                <form method="POST" action="{{ route('update-profile-masyarakat') }}" enctype="multipart/form-data"
                    class="p-6">
                    @csrf

                    <div class="mb-6">
                        <div class="mb-6">
                            <label for="name" class="mt-1 block text-sm font-medium text-gray-700 mb-2">
                                Nama <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="name" name="name" value="{{ $masyarakats->user->name }}"
                                class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('name')  @enderror"
                                required>
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="email" class="mt-1 block text-sm font-medium text-gray-700 mb-2">
                                Email <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="email" name="email" value="{{ $masyarakats->user->email }}"
                                class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('email')  @enderror"
                                required>
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="nik" class="mt-1 block text-sm font-medium text-gray-700 mb-2">
                                nik <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="nik" name="nik" value="{{ $masyarakats->nik }}"
                                class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('nik')  @enderror"
                                required>
                            @error('nik')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="pekerjaan" class="mt-1 block text-sm font-medium text-gray-700 mb-2">
                                pekerjaan <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="pekerjaan" name="pekerjaan" value="{{ $masyarakats->pekerjaan }}"
                                class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('pekerjaan')  @enderror"
                                required>
                            @error('pekerjaan')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="status_pernikahan" class="mt-1 block text-sm font-medium text-gray-700 mb-2">
                                Status Pernikahan <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="status_pernikahan" name="status_pernikahan"
                                value="{{ $masyarakats->status_pernikahan }}"
                                class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('status_pernikahan')  @enderror"
                                required>
                            @error('status_pernikahan')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="tanggal_lahir" class="mt-1 block text-sm font-medium text-gray-700 mb-2">
                                Tanggal Lahir <span class="text-red-500">*</span>
                            </label>
                            <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                                value="{{ $masyarakats->tanggal_lahir }}"
                                class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('tanggal_lahir')  @enderror"
                                required>
                            @error('tanggal_lahir')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="alamat" class="block text-sm font-medium text-gray-700 mb-2">
                                Alamat <span class="text-red-500">*</span>
                            </label>
                            <textarea id="alamat" name="alamat" rows="6"
                                class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('alamat')  @enderror"
                                required>{{ $masyarakats->alamat }}</textarea>
                            @error('alamat')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="no_hp" class="mt-1 block text-sm font-medium text-gray-700 mb-2">
                                Telepon <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="no_hp" name="no_hp" value="{{ $masyarakats->no_hp }}"
                                class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('no_hp')  @enderror"
                                required>
                            @error('no_hp')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>


                        <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700 mb-2">
                            Jenis Kelamin <span class="text-red-500">*</span>
                        </label>
                        <select id="jenis_kelamin" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}"
                            class="mt-1 block w-full  border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('category')  @enderror"
                            required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki"
                                {{ $masyarakats->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                            <option value="Perempuan"
                                {{ $masyarakats->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>

                        </select>


                        <div class="mb-6">
                            <label for="password" class="mt-2 block text-sm font-medium text-gray-700 mb-2">
                                password Lama
                            </label>
                            <input type="password" id="password" name="password"
                                class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('password')  @enderror">
                            @error('password')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="password_baru" class="mt-2 block text-sm font-medium text-gray-700 mb-2">
                                Password Baru
                            </label>
                            <input type="password" id="password_baru" name="password_baru"
                                class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('password_baru')  @enderror">
                            @error('password_baru')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="password_baru_confirmation"
                                class="mt-2 block text-sm font-medium text-gray-700 mb-2">
                                Konfirmasi Password Baru
                            </label>
                            <input type="password" id="password_baru_confirmation" name="password_baru_confirmation"
                                class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('password_baru_confirmation')  @enderror">
                            @error('password_baru_confirmation')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-between">
                            <a href="{{ route('dashboard-masyarakat') }}"
                                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Batal
                            </a>
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline">
                                Ubah Profile
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
