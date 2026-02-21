<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemerintah Kabupaten Pandeglang · Profil</title>
    <!-- Font Awesome 5 (free) -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <!-- Google Fonts: Poppins + Public Sans -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Public+Sans:wght@300;400;500&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Public Sans', sans-serif;
            background-color: #f4f7fc;
            color: #1e2f4e;
            line-height: 1.6;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            letter-spacing: -0.02em;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* ===== NAVBAR ===== */
        .navbar {
            background: linear-gradient(135deg, #003366 0%, #1a4d8c 100%);
            padding: 0.8rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0, 35, 70, 0.2);
        }

        .navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .navbar-logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-circle {
            background: white;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.2rem;
            color: #003366;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .logo-text {
            color: white;
            font-weight: 600;
            font-size: 1.2rem;
            letter-spacing: 0.5px;
        }

        .logo-text span {
            font-weight: 300;
            font-size: 0.85rem;
            display: block;
            opacity: 0.9;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 1.8rem;
            align-items: center;
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            padding: 0.5rem 0;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 5px;
            border-bottom: 2px solid transparent;
        }

        .nav-link i {
            font-size: 0.8rem;
            transition: transform 0.3s;
        }

        .nav-link:hover {
            border-bottom-color: #f5b342;
        }

        .nav-link:hover i {
            transform: rotate(180deg);
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            border-radius: 12px;
            padding: 0.8rem 0;
            min-width: 220px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s;
            list-style: none;
            z-index: 100;
        }

        .nav-item:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(5px);
        }

        .dropdown-menu li a {
            color: #003366;
            text-decoration: none;
            padding: 0.6rem 1.5rem;
            display: block;
            font-size: 0.95rem;
            transition: background 0.2s;
        }

        .dropdown-menu li a:hover {
            background: #f0f5fc;
        }

        .nav-search {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 40px;
            padding: 0.4rem 0.4rem 0.4rem 1rem;
            display: flex;
            align-items: center;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .nav-search input {
            background: transparent;
            border: none;
            color: white;
            outline: none;
            width: 140px;
            font-size: 0.9rem;
        }

        .nav-search input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .nav-search button {
            background: #f5b342;
            border: none;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            color: #003366;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .nav-search button:hover {
            transform: scale(1.05);
        }

        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background: white;
            margin: 3px 0;
            border-radius: 3px;
            transition: 0.3s;
        }

        /* ===== HERO SECTION ===== */
        .hero {
            background: linear-gradient(135deg, #003366 0%, #1a4d8c 100%);
            color: white;
            padding: 3rem 0 4rem 0;
            margin-bottom: 2rem;
            border-bottom-left-radius: 3rem;
            border-bottom-right-radius: 3rem;
            box-shadow: 0 10px 25px rgba(0, 35, 70, 0.15);
        }

        .hero-content {
            display: flex;
            align-items: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .hero-logo {
            background: white;
            border-radius: 50%;
            width: 130px;
            height: 130px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        }

        .hero-logo .logo-fallback {
            font-size: 3.8rem;
            font-weight: 700;
            color: #003366;
        }

        .hero-text h1 {
            font-size: 2.6rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 0.4rem;
        }

        .hero-text .region-tag {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(4px);
            display: inline-block;
            padding: 0.4rem 1.2rem;
            border-radius: 40px;
            font-weight: 500;
            font-size: 1.1rem;
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        /* ===== SECTION CARD STYLE ===== */
        .section-card {
            background: white;
            border-radius: 32px;
            padding: 2.5rem 2.8rem;
            margin-bottom: 2.5rem;
            box-shadow: 0 10px 30px -10px rgba(0, 40, 80, 0.1);
            transition: transform 0.2s ease;
        }

        .section-card:hover {
            transform: translateY(-3px);
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: #003366;
            margin-bottom: 1.8rem;
            position: relative;
            padding-bottom: 0.75rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 5px;
            background: #f5b342;
            border-radius: 8px;
        }

        .title-center::after {
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
        }

        /* Timeline Sejarah */
        .timeline {
            position: relative;
            padding: 2rem 0;
        }

        /* .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 100%;
            background: #e0e8f0;
            border-radius: 4px;
        } */

        .timeline-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 3rem;
            position: relative;
        }

        .timeline-item:nth-child(even) {
            flex-direction: row-reverse;
        }

        .timeline-year {
            width: 120px;
            background: #003366;
            color: white;
            padding: 0.8rem;
            border-radius: 40px;
            text-align: center;
            font-weight: 700;
            font-size: 1.2rem;
            box-shadow: 0 5px 15px rgba(0, 51, 102, 0.3);
            position: relative;
            z-index: 2;
        }

        .timeline-content {
            width: calc(50% - 80px);
            background: #f8fafd;
            padding: 1.5rem 2rem;
            border-radius: 24px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.03);
            border: 1px solid #eef2f7;
        }

        .timeline-content h4 {
            color: #003366;
            margin-bottom: 0.8rem;
            font-size: 1.3rem;
        }

        .timeline-content p {
            color: #4a5f7a;
        }

        .geografis-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .geo-card {
            background: #f0f6ff;
            padding: 1.8rem;
            border-radius: 24px;
            text-align: center;
            border: 1px solid #d9e6f5;
        }

        .geo-card i {
            font-size: 2.5rem;
            color: #003366;
            margin-bottom: 1rem;
        }

        .geo-card h4 {
            color: #003366;
            margin-bottom: 0.5rem;
        }

        .struktur-tree {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2rem;
        }

        .struktur-level {
            display: flex;
            justify-content: center;
            gap: 3rem;
            flex-wrap: wrap;
        }

        .struktur-card {
            background: #f8fafd;
            padding: 1.5rem 2rem;
            border-radius: 20px;
            text-align: center;
            min-width: 200px;
            border: 1px solid #e0ebf5;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
        }

        .struktur-card .role {
            color: #f5b342;
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .struktur-card .name {
            font-weight: 700;
            color: #003366;
            margin: 0.5rem 0;
            font-size: 1.2rem;
        }

        .profil-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            align-items: center;
        }

        .profil-text p {
            margin-bottom: 1.2rem;
            font-size: 1.1rem;
            color: #2c3e50;
        }

        .profil-stats {
            display: flex;
            flex-wrap: wrap;
            gap: 1.8rem;
            margin-top: 2rem;
        }

        .stat-item {
            background: #eef4fa;
            border-radius: 28px;
            padding: 1.2rem 1.8rem;
            text-align: center;
            flex: 1 0 auto;
        }

        .stat-item .number {
            font-size: 2.2rem;
            font-weight: 700;
            color: #003366;
            line-height: 1.2;
        }

        .vimi-container {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .visi-box,
        .misi-box {
            flex: 1 1 300px;
            background: #f9fcff;
            border-radius: 28px;
            padding: 2rem;
            border: 1px solid rgba(0, 51, 102, 0.08);
        }

        .visi-box h3,
        .misi-box h3 {
            font-size: 1.9rem;
            color: #003366;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.6rem;
        }

        .visi-box h3 i,
        .misi-box h3 i {
            color: #f5b342;
            font-size: 2rem;
        }

        .visi-content {
            font-size: 1.4rem;
            font-weight: 600;
            line-height: 1.4;
            color: #0b2b4a;
            padding: 0.5rem 0 0.5rem 1.2rem;
            border-left: 5px solid #f5b342;
            background: rgba(245, 179, 66, 0.03);
            border-radius: 0 20px 20px 0;
        }

        .misi-list {
            list-style: none;
        }

        .misi-list li {
            margin-bottom: 1rem;
            font-size: 1.1rem;
            display: flex;
            gap: 0.8rem;
            align-items: flex-start;
        }

        .misi-list li i {
            color: #f5b342;
            font-size: 1.3rem;
            min-width: 24px;
        }

        .footer-note {
            text-align: center;
            padding: 2rem 0;
            color: #4a6382;
            border-top: 1px solid rgba(0, 51, 102, 0.1);
        }

        @media (max-width: 900px) {
            .nav-menu {
                position: fixed;
                left: -100%;
                top: 70px;
                flex-direction: column;
                background: #003366;
                width: 100%;
                border-radius: 0 0 20px 20px;
                padding: 2rem;
                gap: 1.5rem;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
                transition: 0.3s;
                align-items: flex-start;
            }

            .nav-menu.active {
                left: 0;
            }

            .hamburger {
                display: flex;
            }

            .nav-search {
                width: 100%;
            }

            .nav-search input {
                width: 100%;
            }

            .dropdown-menu {
                position: static;
                opacity: 1;
                visibility: visible;
                transform: none;
                background: transparent;
                box-shadow: none;
                padding-left: 1rem;
                display: none;
            }

            .nav-item:hover .dropdown-menu {
                display: block;
            }

            .dropdown-menu li a {
                color: white;
                padding: 0.5rem 1rem;
            }

            .dropdown-menu li a:hover {
                background: rgba(255, 255, 255, 0.1);
            }

            .timeline::before {
                left: 30px;
            }

            .timeline-item,
            .timeline-item:nth-child(even) {
                flex-direction: column;
                margin-left: 60px;
            }

            .timeline-year {
                width: 100px;
                margin-bottom: 1rem;
            }

            .timeline-content {
                width: 100%;
            }

            .geografis-grid {
                grid-template-columns: 1fr;
            }

            .profil-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 700px) {
            .hero-text h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <!-- ===== NAVBAR ===== -->
    <nav class="navbar">
        <div class="navbar-container">
            <div class="navbar-logo">
                <!-- Logo dengan teks Pemkab Pandeglang -->
                <img src="{{ asset('assets/images/logo-black.png') }}" alt="Logo Pemkab Pandeglang" width="auto"
                    style="height: 50px; width: auto; max-width: 180px; object-fit: contain;">

                <!-- <div class="logo-text">
                PEMKAB PANDEGLANG
                <span>Banten · Indonesia</span>
            </div> -->
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#sejarah" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Profil <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#sejarah">Sejarah</a></li>
                        <li><a href="#visi-misi">Visi & Misi</a></li>
                        <li><a href="#pimpinan">Profile Pimpinan Daerah</a></li>
                        {{-- <li><a href="#struktur">Struktur Organisasi</a></li> --}}
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Pengaduan Pelayanan Publik</a>
                </li>

            </ul>

            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- ===== HERO SECTION DENGAN LOGO KOTAK TAPI TAMPILAN LINGKARAN ===== -->
    <section class="hero">
        <div class="container hero-content">
            <div class="hero-logo"
                style="width: 130px; height: 130px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.2);">
                <!-- Logo gambar - akan tetap kotak tapi terpotong lingkaran karena overflow: hidden -->
                <img src="{{ asset('assets/images/logos.png') }}" alt="Logo Pemkab Pandeglang"
                    style="width: 100%; height: 100%; object-fit: cover; object-position: center;"
                    onerror="this.style.display='none'; this.parentElement.innerHTML='<div style=\'font-size: 3.8rem; font-weight: 700; color: #003366;\'>PDG</div>';">
            </div>
            <div class="hero-text">
                <h1>Pemerintah Kabupaten Pandeglang</h1>
                <div class="region-tag"><i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i>Provinsi Banten
                    · Indonesia</div>
            </div>
        </div>
    </section>

    <main class="container">
        <!-- ===== SEJARAH ===== -->
        <section id="sejarah" class="section-card">
            <h2 class="section-title">Sejarah Kabupaten Pandeglang</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <p>Nama “Pandeglang” yang sekarang digunakan ini baik sebagai Ibu Kota Kabupaten maupun sebagai
                        nama Kabupaten hal ini ada beberapa pendapat antara lain yaitu pandeglang yang berasal dari
                        kata “Pandai Gelang” yang artinya tukang atau tempat menempa gelang. Pendapat ini terutama
                        dikaitkan dengan legenda “Si Amuk” yang konon kabarnya pada Zaman Kesultanan Banten, di Desa
                        Kadu Pandak ada seorang tukang Pandai (tukang besi) yang termasyur.
                        .</p>
                </div>
            </div>
        </section>

        <!-- ===== VISI & MISI ===== -->
        <section id="visi-misi" class="section-card">
            <h2 class="section-title title-center">Visi & Misi Kabupaten Pandeglang 2025-2029</h2>
            <div class="vimi-container">
                <div class="visi-box">
                    <h3><i class="fas fa-eye"></i> Visi</h3>
                    <div class="visi-content">
                        “Pandeglang Maju melalui Infrastruktur Mantap, Pertumbuhan Ekonomi dan Keluarga Sejahtera”
                    </div>
                </div>
                <div class="misi-box">
                    <h3><i class="fas fa-list"></i> Misi</h3>
                    <ul class="misi-list">
                        <li><i class="fas fa-check-circle"></i> Meningkatkan akses infrastruktur dasar yang mendukung
                            konektifitas, pendidikan, kesehatan, perekonomian unggulan dan resiliensi bencana.</li>
                        <li><i class="fas fa-check-circle"></i> Meningkatkan daya saing ekonomi melalui peningkatan
                            kemandirian fiskal, kemudahan investasi dan ekonomi berkelanjutan, pemberdayaan pemuda
                            berbasis ekonomi kreatif, serta kemitraan UMKM pondok pesantren.</li>
                        <li><i class="fas fa-check-circle"></i> Meningkatkan kesejahteraan masyarakat dan daya saing SDM
                            melalui penurunan kemiskinan ekstrim dan penuntasan stunting.</li>
                        <li><i class="fas fa-check-circle"></i> Mewujudkan tata kelola pemerintahan yang profesional dan
                            adaptif.</li>
                    </ul>
                </div>
            </div>
        </section>

        {{-- <!-- ===== GEOGRAFIS & DEMOGRAFIS ===== -->
        <section id="geografis" class="section-card">
            <h2 class="section-title">Geografis & Demografis</h2>
            <div class="profil-grid">
                <div class="profil-text">
                    <p><strong>Kabupaten Pandeglang</strong> terletak di ujung barat Pulau Jawa, pada posisi 6°21' -
                        7°10' Lintang Selatan dan 105°50' - 106°21' Bujur Timur.</p>
                    <p><strong>Batas Wilayah:</strong></p>
                    <ul style="margin-left: 1.5rem; margin-bottom: 1rem;">
                        <li>Utara: Kabupaten Serang</li>
                        <li>Timur: Kabupaten Lebak</li>
                        <li>Selatan: Samudra Hindia</li>
                        <li>Barat: Selat Sunda</li>
                    </ul>
                    <p><strong>Luas Wilayah:</strong> 2.746,89 km² (terluas di Provinsi Banten)</p>
                    <p><strong>Topografi:</strong> Beragam, mulai dari dataran rendah pantai hingga perbukitan dan
                        pegunungan.</p>

                    <div class="profil-stats">
                        <div class="stat-item"><span class="number">35</span> <span class="label">Kecamatan</span>
                        </div>
                        <div class="stat-item"><span class="number">339</span> <span
                                class="label">Desa/Kelurahan</span></div>
                        <div class="stat-item"><span class="number">1,35 Jt</span> <span class="label">Penduduk</span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="geografis-grid">
                        <div class="geo-card">
                            <i class="fas fa-mountain"></i>
                            <h4>Pegunungan</h4>
                            <p>Gunung Pulosari, Gunung Karang, Pegunungan Honje</p>
                        </div>
                        <div class="geo-card">
                            <i class="fas fa-water"></i>
                            <h4>Pantai</h4>
                            <p>Pantai Tanjung Lesung, Pantai Carita, Pantai Sawarna</p>
                        </div>
                        <div class="geo-card">
                            <i class="fas fa-tree"></i>
                            <h4>Konservasi</h4>
                            <p>Taman Nasional Ujung Kulon, Cagar Alam Rawa Danau</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- ===== PROFIL PIMPINAN DAERAH ===== -->
        {{-- <section id="pimpinan" class="section-card">
            <h2 class="section-title">Profil Pimpinan Daerah Kabupaten Pandeglang</h2>

            <!-- Bupati dan Wakil Bupati -->
            <div style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: center; margin-bottom: 3rem;">
                <!-- Bupati -->
                <div
                    style="flex: 1; min-width: 280px; max-width: 350px; background: linear-gradient(145deg, #ffffff, #f8fcff); border-radius: 32px; padding: 2rem 1.5rem; box-shadow: 0 15px 35px rgba(0,51,102,0.1); border: 1px solid rgba(0,51,102,0.05); text-align: center; transition: transform 0.3s;">
                    <div style="position: relative; margin-bottom: 1.5rem;">
                        <!-- Foto Bupati (avatar dengan inisial) -->
                        <div
                            style="width: 150px; height: 150px; border-radius: 50%; margin: 0 auto; background: linear-gradient(135deg, #003366, #1a4d8c); display: flex; align-items: center; justify-content: center; border: 5px solid #f5b342; box-shadow: 0 10px 25px rgba(0,51,102,0.3);">
                            <span style="font-size: 3.5rem; font-weight: 700; color: white;">RD</span>
                        </div>
                        <div
                            style="position: absolute; bottom: 10px; right: 50%; transform: translateX(50px); background: #f5b342; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 3px solid white;">
                            <i class="fas fa-crown" style="color: #003366; font-size: 1.2rem;"></i>
                        </div>
                    </div>
                    <h3 style="color: #003366; font-size: 1.8rem; margin-bottom: 0.3rem;">Raden Dewi Setiani</h3>
                    <p
                        style="background: #f5b342; color: #003366; font-weight: 600; padding: 0.5rem 1.5rem; border-radius: 40px; display: inline-block; margin-bottom: 1rem; font-size: 0.95rem;">
                        BUPATI PANDEGLANG</p>

                </div>

                <!-- Wakil Bupati -->
                <div
                    style="flex: 1; min-width: 280px; max-width: 350px; background: linear-gradient(145deg, #ffffff, #f8fcff); border-radius: 32px; padding: 2rem 1.5rem; box-shadow: 0 15px 35px rgba(0,51,102,0.1); border: 1px solid rgba(0,51,102,0.05); text-align: center; transition: transform 0.3s;">
                    <div style="position: relative; margin-bottom: 1.5rem;">
                        <!-- Foto Wakil Bupati (avatar dengan inisial) -->
                        <div
                            style="width: 150px; height: 150px; border-radius: 50%; margin: 0 auto; background: linear-gradient(135deg, #1a4d8c, #2d6a9f); display: flex; align-items: center; justify-content: center; border: 5px solid #f5b342; box-shadow: 0 10px 25px rgba(0,51,102,0.3);">
                            <span style="font-size: 3.5rem; font-weight: 700; color: white;">TS</span>
                        </div>
                        <div
                            style="position: absolute; bottom: 10px; right: 50%; transform: translateX(50px); background: #f5b342; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 3px solid white;">
                            <i class="fas fa-star" style="color: #003366; font-size: 1.2rem;"></i>
                        </div>
                    </div>
                    <h3 style="color: #003366; font-size: 1.8rem; margin-bottom: 0.3rem;">Ling Andri Supriadi</h3>
                    <p
                        style="background: #f5b342; color: #003366; font-weight: 600; padding: 0.5rem 1.5rem; border-radius: 40px; display: inline-block; margin-bottom: 1rem; font-size: 0.95rem;">
                        WAKIL BUPATI PANDEGLANG</p>
                </div>
            </div>




        </section> --}}

        <!-- ===== PROFIL PIMPINAN DAERAH ===== -->
        <section id="pimpinan" class="section-card">
            <h2 class="section-title">Bupati dan Wakil Bupati Pandeglang Tahun 2025 - 2029</h2>

            <div
                style="display: flex; flex-wrap: wrap; gap: 3rem; justify-content: center; align-items: center; padding: 2rem 0;">
                <!-- Bupati -->
                <div style="text-align: center; flex: 1; min-width: 250px;">
                    <div
                        style="width: 220px; height: 220px; border-radius: 50%; margin: 0 auto 1.5rem; background: linear-gradient(135deg, #003366, #1a4d8c); display: flex; align-items: center; justify-content: center; border: 5px solid #f5b342; box-shadow: 0 15px 30px rgba(0,51,102,0.2);">
                        <span style="font-size: 5rem; font-weight: 700; color: white;"><img
                                src="{{ asset('assets/images/bupati.png') }}" alt="RA"></span>
                    </div>
                    <h3 style="color: #003366; font-size: 2rem; margin-bottom: 0.3rem; font-weight: 700;">Raden Dewi
                        Setiani</h3>
                    <p style="color: #f5b342; font-size: 1.3rem; font-weight: 600; letter-spacing: 1px;">BUPATI</p>
                </div>

                <!-- Penghubung (optional) -->
                <div style="font-size: 3rem; color: #003366; font-weight: 300; display: none;">&</div>

                <!-- Wakil Bupati -->
                <div style="text-align: center; flex: 1; min-width: 250px;">
                    <div
                        style="width: 220px; height: 220px; border-radius: 50%; margin: 0 auto 1.5rem; background: linear-gradient(135deg, #1a4d8c, #2d6a9f); display: flex; align-items: center; justify-content: center; border: 5px solid #f5b342; box-shadow: 0 15px 30px rgba(0,51,102,0.2);">
                        <span style="font-size: 5rem; font-weight: 700; color: white;"><img
                                src="{{ asset('assets/images/wakil-bupati.png') }}" alt="RA"></span></span>
                    </div>
                    <h3 style="color: #003366; font-size: 2rem; margin-bottom: 0.3rem; font-weight: 700;">ling Andri
                        Supriadi</h3>
                    <p style="color: #f5b342; font-size: 1.3rem; font-weight: 600; letter-spacing: 1px;">WAKIL BUPATI
                    </p>
                </div>
            </div>

            <!-- Tahun periode -->
            <div
                style="text-align: center; margin-top: 2rem; padding: 1rem; background: #eef4fa; border-radius: 60px; max-width: 300px; margin-left: auto; margin-right: auto;">
                <span style="color: #003366; font-weight: 600; font-size: 1.2rem;"><i class="fas fa-calendar-alt"
                        style="margin-right: 8px; color: #f5b342;"></i>Periode 2025 - 2029</span>
            </div>
        </section>
        <!-- ===== TUGAS & FUNGSI ===== -->
        <section class="section-card">
            <h2 class="section-title">Tugas & Fungsi Pemerintah Kabupaten</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
                <div style="background: #f8fafd; padding: 2rem; border-radius: 24px;">
                    <i class="fas fa-balance-scale" style="font-size: 2.5rem; color: #003366; margin-bottom: 1rem;"></i>
                    <h4 style="color: #003366; margin-bottom: 0.8rem;">Penyelenggaraan Pemerintahan</h4>
                    <p>Menyelenggarakan urusan pemerintahan daerah berdasarkan asas otonomi dan tugas pembantuan.</p>
                </div>
                <div style="background: #f8fafd; padding: 2rem; border-radius: 24px;">
                    <i class="fas fa-chart-bar" style="font-size: 2.5rem; color: #003366; margin-bottom: 1rem;"></i>
                    <h4 style="color: #003366; margin-bottom: 0.8rem;">Pembangunan Daerah</h4>
                    <p>Merencanakan dan melaksanakan pembangunan infrastruktur dan ekonomi daerah.</p>
                </div>
                <div style="background: #f8fafd; padding: 2rem; border-radius: 24px;">
                    <i class="fas fa-hand-holding-heart"
                        style="font-size: 2.5rem; color: #003366; margin-bottom: 1rem;"></i>
                    <h4 style="color: #003366; margin-bottom: 0.8rem;">Pelayanan Publik</h4>
                    <p>Memberikan pelayanan kepada masyarakat sesuai dengan standar pelayanan yang ditetapkan.</p>
                </div>
                <div style="background: #f8fafd; padding: 2rem; border-radius: 24px;">
                    <i class="fas fa-shield-alt" style="font-size: 2.5rem; color: #003366; margin-bottom: 1rem;"></i>
                    <h4 style="color: #003366; margin-bottom: 0.8rem;">Pemberdayaan Masyarakat</h4>
                    <p>Mendorong partisipasi dan kemandirian masyarakat dalam pembangunan.</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer-note">
        <div class="container">
            <p>© 2026 Pemerintah Kabupaten Pandeglang.</p>
            {{-- <p style="margin-top: 0.5rem; font-size: 0.85rem;">Jl. Bhayangkara No. 1, Pandeglang - Banten 42211</p> --}}
        </div>
    </footer>

    <script>
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');

        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });

        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
            });
        });

        // Smooth scroll untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>

</html>
