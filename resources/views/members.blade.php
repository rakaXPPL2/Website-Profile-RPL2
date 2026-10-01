<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f2f0e8">
    <title>Anggota LKPD 4 · Kelompok 7</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @php
        $members = [
            ['name' => 'Raka', 'initials' => 'RK', 'role' => 'Project Manager', 'class' => 'XI RPL-2', 'born' => '07/03/10', 'number' => '01', 'color' => 'mint'],
            ['name' => 'Arkan', 'initials' => 'AR', 'role' => 'Developer Profile', 'class' => 'XI RPL-2', 'born' => '07/04/09', 'number' => '02', 'color' => 'coral'],
            ['name' => 'Radit', 'initials' => 'RD', 'role' => 'Developer Anggota', 'class' => 'XI RPL-2', 'born' => '24/04/10', 'number' => '03', 'color' => 'butter'],
            ['name' => 'Adjie', 'initials' => 'AJ', 'role' => 'Developer Kontak', 'class' => 'XI RPL-2', 'born' => '26/07/09', 'number' => '04', 'color' => 'blue'],
        ];
        $expertise = [
            [
                'number' => '01', 'title' => 'Pemrograman & Dasar Software', 'color' => 'mint',
                'skills' => [
                    ['name' => 'Dasar Pemrograman', 'detail' => 'Logika, algoritma, struktur data, variabel, percabangan, dan perulangan.'],
                    ['name' => 'Pemrograman Berorientasi Objek', 'detail' => 'Membangun program berbasis kelas dan objek dengan Java, C++, C#, atau Python.'],
                    ['name' => 'Pemrograman Web', 'detail' => 'Front-end HTML, CSS, JavaScript; back-end PHP atau Node.js; basis data MySQL dan PostgreSQL.'],
                    ['name' => 'Pemrograman Mobile', 'detail' => 'Pengembangan aplikasi Android dan iOS dengan Kotlin, Flutter, atau React Native.'],
                ],
            ],
            [
                'number' => '02', 'title' => 'Pengembangan Gim', 'color' => 'coral',
                'skills' => [
                    ['name' => 'Game Logic & Mechanics', 'detail' => 'Merancang aturan main, sistem permainan, dan mekanisme fisika di dalam gim.'],
                    ['name' => 'Game Engine', 'detail' => 'Mengenal Unity (C#), Unreal Engine (C++/Blueprints), dan Godot.'],
                    ['name' => 'Desain Assets & Audio', 'detail' => 'Dasar visual 2D/3D, sprite, serta integrasi efek suara dan musik.'],
                ],
            ],
            [
                'number' => '03', 'title' => 'Infrastruktur & Tools Pendukung', 'color' => 'butter',
                'skills' => [
                    ['name' => 'Database Management', 'detail' => 'Merancang, mengolah, dan menyimpan data dengan SQL maupun NoSQL.'],
                    ['name' => 'Version Control', 'detail' => 'Mengelola versi kode dan kolaborasi tim menggunakan Git dan GitHub.'],
                    ['name' => 'UI/UX Design', 'detail' => 'Merancang antarmuka dan pengalaman pengguna agar aplikasi atau gim nyaman digunakan.'],
                    ['name' => 'Hardware Interfacing / IoT Dasar', 'detail' => 'Dasar mikrokontroler Arduino atau ESP32 untuk menghubungkan software dengan perangkat fisik.'],
                ],
            ],
        ];
    @endphp

    <div class="site-shell">
        <header class="topbar">
            <a class="brand" href="#beranda" aria-label="LKPD 4 Kelompok 7, ke beranda">
                <span class="brand-mark">R</span>
                <span class="brand-copy"><strong>RPL 02</strong><small>LKPD 4 · Kelompok 7</small></span>
            </a>
            <nav class="main-nav" aria-label="Navigasi utama">
                <a href="#anggota">Anggota</a>
                <a href="#keahlian">Keahlian</a>
                <a href="#tentang">Tentang tim</a>
            </nav>
            <a class="nav-cta" href="#anggota">Lihat tim <span aria-hidden="true">↗</span></a>
        </header>

        <main>
            <section class="hero" id="beranda" aria-labelledby="hero-title">
                <div class="hero-copy">
                    <p class="eyebrow"><span class="status-dot"></span> XI RPL-2 <span class="eyebrow-divider">/</span> TAHUN AJARAN 2025—2026</p>
                    <h1 id="hero-title">Kenalan dengan<br><span>tim di balik kode.</span></h1>
                    <p class="hero-description">Empat orang, satu kelompok, dan rasa ingin tahu yang sama. Inilah anggota LKPD 4 Kelompok 7 beserta bidang yang kami pelajari.</p>
                    <a class="hero-link" href="#anggota">Temui anggota <span aria-hidden="true">↓</span></a>
                </div>
                <div class="hero-art" aria-label="Empat inisial anggota kelompok">
                    <div class="orbit orbit-one"></div>
                    <div class="orbit orbit-two"></div>
                    <span class="art-tag">OUR<br>CREW</span>
                    <span class="art-sticker sticker-one">&lt;/&gt;</span>
                    <span class="art-sticker sticker-two">G7</span>
                    <div class="avatar avatar-raka">RK</div>
                    <div class="avatar avatar-arkan">AR</div>
                    <div class="avatar avatar-radit">RD</div>
                    <div class="avatar avatar-adjie">AJ</div>
                </div>
                <div class="hero-footnote"><span>01 — 04</span><span>PROFIL KELOMPOK</span></div>
            </section>

            <section class="members-section section-wrap" id="anggota" aria-labelledby="members-title">
                <div class="section-heading">
                    <div>
                        <p class="eyebrow section-kicker">ORANG-ORANGNYA</p>
                        <h2 id="members-title">Anggota <span>kelompok.</span></h2>
                    </div>
                    <p class="section-aside">Setiap peran punya andil.<br>Semua ide punya tempat.</p>
                </div>

                <div class="member-tools">
                    <label class="search-box">
                        <span class="search-icon" aria-hidden="true">⌕</span>
                        <span class="visually-hidden">Cari nama atau peran anggota</span>
                        <input id="member-search" type="search" placeholder="Cari anggota atau peran..." autocomplete="off">
                        <kbd>/</kbd>
                    </label>
                    <div class="filter-group" role="group" aria-label="Filter anggota berdasarkan peran">
                        <button class="filter-button is-active" type="button" data-filter="all" aria-pressed="true">Semua <span>04</span></button>
                        <button class="filter-button" type="button" data-filter="manager" aria-pressed="false">Manajer</button>
                        <button class="filter-button" type="button" data-filter="developer" aria-pressed="false">Developer</button>
                    </div>
                </div>

                <div class="member-grid" id="member-grid">
                    @foreach ($members as $member)
                        <article class="member-card clay-card" data-name="{{ strtolower($member['name']) }}" data-role="{{ str_contains(strtolower($member['role']), 'manager') ? 'manager' : 'developer' }}">
                            <div class="member-card-top">
                                <span class="member-number">{{ $member['number'] }} <i></i> 04</span>
                                <span class="role-label">{{ $member['role'] }}</span>
                            </div>
                            <div class="member-portrait portrait-{{ $member['color'] }}"><span>{{ $member['initials'] }}</span><i aria-hidden="true"></i></div>
                            <div class="member-info">
                                <h3>{{ $member['name'] }}</h3>
                                <p class="member-class">{{ $member['class'] }}</p>
                            </div>
                            <div class="member-meta">
                                <span>Tanggal lahir</span>
                                <strong>{{ $member['born'] }}</strong>
                            </div>
                        </article>
                    @endforeach
                </div>
                <p class="empty-state" id="empty-state" hidden>Tidak ada anggota yang cocok. Coba kata kunci lain.</p>
                <p class="member-count" id="member-count" aria-live="polite">Menampilkan 4 anggota <span>•</span> XI RPL-2</p>
            </section>

            <section class="expertise-section" id="keahlian" aria-labelledby="expertise-title">
                <div class="section-wrap">
                    <div class="section-heading expertise-heading">
                        <div>
                            <p class="eyebrow section-kicker">YANG KAMI PELAJARI</p>
                            <h2 id="expertise-title">Ruang untuk<br><span>terus berkembang.</span></h2>
                        </div>
                        <p class="section-aside">Dari baris kode pertama<br>sampai perangkat yang terhubung.</p>
                    </div>
                    <div class="expertise-grid">
                        @foreach ($expertise as $domain)
                            <article class="expertise-card clay-card expertise-{{ $domain['color'] }}">
                                <div class="expertise-top"><span class="expertise-number">{{ $domain['number'] }}</span><span class="expertise-mark" aria-hidden="true">↗</span></div>
                                <h3>{{ $domain['title'] }}</h3>
                                <ul>
                                    @foreach ($domain['skills'] as $skill)
                                        <li><strong>{{ $skill['name'] }}</strong><span>{{ $skill['detail'] }}</span></li>
                                    @endforeach
                                </ul>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer section-wrap" id="tentang">
            <a class="brand footer-brand" href="#beranda">
                <span class="brand-mark">R</span>
                <span class="brand-copy"><strong>RPL 02</strong><small>Belajar, berkarya, bersama.</small></span>
            </a>
            <p>LKPD 4 <span>·</span> Kelompok 7 <span>·</span> XI RPL-2</p>
            <a class="back-top" href="#beranda">Kembali ke atas <span aria-hidden="true">↑</span></a>
        </footer>
    </div>
</body>
</html>