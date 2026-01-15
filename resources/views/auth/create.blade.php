<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Masyarakat - Sistem Pengaduan</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />


    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            width: 100%;
            max-width: 600px;
            margin-top: 20px
        }
    </style>
</head>

<body>
    <div class="login-card">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Daftar Akun Pengaduan</h1>
            {{-- <p class="text-gray-600">Masuk ke akun Anda</p> --}}
        </div>

        {{-- Alert Sukses --}}
        @if (isset($success))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ $success }}
            </div>
        @endif

        {{-- Alert Error --}}
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- <form method="POST" action="{{ route('login.process') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror"
                    placeholder="Masukkan email Anda" required>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror"
                    placeholder="Masukkan password Anda" required>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between mb-6">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                    Masuk
                </button>
            </div>

            <div class="text-center">
                <p class="text-gray-600 text-sm">
                    Belum punya akun?
                    <a href="#" class="text-blue-500 hover:text-blue-700 font-medium">Hubungi Admin</a>
                </p>
            </div>
        </form> --}}
        <form method="POST" action="{{ route('register-prosess') }}" enctype="multipart/form-data" class="p-6">
            @csrf

            <div class="mb-6">
                <div class="mb-6">
                    <label for="name" class="mt-1 block text-sm font-medium text-gray-700 mb-2">
                        Nama <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="name" name="name"
                        class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('name')  @enderror"
                        required>
                </div>

                <div class="mb-6">
                    <label for="email" class="mt-1 block text-sm font-medium text-gray-700 mb-2">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="email" name="email"
                        class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('email')  @enderror"
                        required>
                </div>

                <div class="mb-6">
                    <label for="nik" class="mt-1 block text-sm font-medium text-gray-700 mb-2">
                        nik <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="nik" name="nik"
                        class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('nik')  @enderror"
                        required>
                </div>

                <div class="mb-6">
                    <label for="pekerjaan" class="mt-1 block text-sm font-medium text-gray-700 mb-2">
                        pekerjaan <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="pekerjaan" name="pekerjaan"
                        class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('pekerjaan')  @enderror"
                        required>
                </div>

                <div class="mb-6">
                    <label for="status_pernikahan" class="mt-1 block text-sm font-medium text-gray-700 mb-2">
                        Status Pernikahan <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="status_pernikahan" name="status_pernikahan"
                        class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('status_pernikahan')  @enderror"
                        required>
                </div>

                <div class="mb-6">
                    <label for="tanggal_lahir" class="mt-1 block text-sm font-medium text-gray-700 mb-2">
                        Tanggal Lahir <span class="text-red-500">*</span>
                    </label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                        class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('tanggal_lahir')  @enderror"
                        required>
                </div>

                <div class="mb-6">
                    <label for="alamat" class="block text-sm font-medium text-gray-700 mb-2">
                        Alamat <span class="text-red-500">*</span>
                    </label>
                    <textarea id="alamat" name="alamat" rows="6"
                        class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('alamat')  @enderror"
                        required></textarea>
                </div>

                <div class="mb-6">
                    <label for="no_hp" class="mt-1 block text-sm font-medium text-gray-700 mb-2">
                        Telepon <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="no_hp" name="no_hp"
                        class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('no_hp')  @enderror"
                        required>
                </div>


                <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700 mb-2">
                    Jenis Kelamin <span class="text-red-500">*</span>
                </label>
                <select id="jenis_kelamin" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}"
                    class="mt-1 block w-full  border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('category')  @enderror"
                    required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki">
                        Laki-Laki</option>
                    <option value="Perempuan">
                        Perempuan</option>
                </select>
                <div class="mb-6">
                    <label for="password" class="mt-2 block text-sm font-medium text-gray-700 mb-2">
                        Password
                    </label>
                    <input type="password" id="password" name="password"
                        class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('password')  @enderror">
                </div>
                <div class="mb-6">
                    <label for="password_confirmation" class="mt-2 block text-sm font-medium text-gray-700 mb-2">
                        Konfirmasi Password
                    </label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="mt-1 block w-full border-gray-300  rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('password')  @enderror">
                </div>

                <div class="flex items-center justify-between">
                    <a href="{{ route('login') }}"
                        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Kembali
                    </a>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline">
                        Buat Akun
                    </button>
                </div>
        </form>


    </div>
</body>

</html>
