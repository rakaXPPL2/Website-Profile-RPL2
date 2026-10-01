<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Profil Kelas XI Rekayasa Perangkat Lunak SMKN 1 Garut.">
        <title>XI RPL | SMKN 1 Garut</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="page-shell">
            <header class="topbar">
                <a class="brand" href="{{ url('/') }}" aria-label="Beranda XI Rekayasa Perangkat Lunak">
                    <span class="brand-mark">XI</span>
                    <span><strong>XI Rekayasa Perangkat Lunak</strong><small>SMKN 1 GARUT</small></span>
                </a>
                <div class="status-pill"><span></span> open to connect</div>
            </header>

            <main>
                <section class="class-profile" aria-labelledby="class-title">
                    <div class="profile-copy">
                        <p class="eyebrow">CLASS PROFILE / 2026</p>
                        <h1 id="class-title">XI <em>Rekayasa</em><br>Perangkat Lunak.</h1>
                        <p class="profile-description">Mempelajari pengembangan perangkat lunak, bertumbuh lewat karya, dan membawa semangat berprestasi bersama.</p>
                        <div class="achievement-row" aria-label="Prestasi kelas">
                            <span><strong>Juara 1</strong> Teater</span>
                            <span><strong>Juara 2</strong> Padus</span>
                        </div>
                    </div>
                    <div class="photo-collage" aria-label="Foto kegiatan kelas XI Rekayasa Perangkat Lunak">
                        <img class="photo-main" src="{{ asset('Foto Profil/WhatsApp Image 2026-10-01 at 09.49.36.jpeg') }}" alt="Kegiatan kelas XI Rekayasa Perangkat Lunak">
                        <img class="photo-secondary photo-secondary-one" src="{{ asset('Foto Profil/WhatsApp Image 2026-10-01 at 09.49.36 (1).jpeg') }}" alt="Foto siswa kelas XI Rekayasa Perangkat Lunak" loading="lazy">
                        <img class="photo-secondary photo-secondary-two" src="{{ asset('Foto Profil/WhatsApp Image 2026-10-01 at 09.49.36 (2).jpeg') }}" alt="Kebersamaan kelas XI Rekayasa Perangkat Lunak" loading="lazy">
                        <span class="photo-stamp">XI / RPL</span>
                    </div>
                </section>

                <section class="class-values" aria-label="Informasi kelas">
                    <div class="value-block"><p>OUR SCHOOL</p><strong>SMKN 1 GARUT</strong></div>
                    <div class="value-block"><p>OUR VISION</p><strong>Berusaha menjadi lebih baik dan mengikuti perlombaan antar jurusan.</strong></div>
                    <div class="value-block"><p>CLASS NOTE</p><strong>Banyak murid yang berprestasi</strong></div>
                </section>

                <section class="intro" aria-labelledby="page-title">
                    <div class="intro-copy">
                        <p class="eyebrow">CONTACT DIRECTORY / XI RPL</p>
                        <h1 id="page-title">Kenalan dengan<br><em>tim di balik karya kami.</em></h1>
                        <p class="intro-text">Satu ruang untuk menemukan, menyapa, dan berkolaborasi bersama anggota Kelompok RPL 2.</p>
                    </div>
                    <div class="intro-badge" aria-hidden="true"><span class="badge-dot"></span><span class="badge-number">04</span><span class="badge-label">people<br>in the crew</span></div>
                </section>

                <section class="member-grid" aria-label="Daftar kontak anggota kelompok">
                    <article class="member-card card-coral">
                        <div class="card-topline"><span>01 / LEAD</span><span class="availability"></span></div>
                        <div class="avatar avatar-coral">RA</div><h2>Raka <span>Aditya</span></h2><p class="role">Project Manager</p>
                        <div class="contact-list"><a href="tel:+6289507818994"><span class="icon">⌕</span>0895-0781-8994</a><a href="mailto:rakaraditya4750@gmail.com"><span class="icon">✉</span>rakaraditya4750@gmail.com</a><a href="https://instagram.com/akaachenn" target="_blank" rel="noreferrer"><span class="icon">◎</span>@akaachenn</a></div>
                        <a class="github-link" href="https://github.com/rakaXPPL2" target="_blank" rel="noreferrer">github <span>↗</span></a>
                    </article>
                    <article class="member-card card-lilac">
                        <div class="card-topline"><span>02 / BUILD</span><span class="availability"></span></div>
                        <div class="avatar avatar-lilac">AN</div><h2>Arkan <span>Nazril</span></h2><p class="role">Developer Profil</p>
                        <div class="contact-list"><a href="tel:+6285724940975"><span class="icon">⌕</span>0857-2494-0975</a><a href="mailto:arkanmuhammadnazril@gmail.com"><span class="icon">✉</span>arkanmuhammadnazril@gmail.com</a><a href="https://instagram.com/arknnzril" target="_blank" rel="noreferrer"><span class="icon">◎</span>@arknnzril</a></div>
                        <a class="github-link" href="https://github.com/Arkannaz" target="_blank" rel="noreferrer">github <span>↗</span></a>
                    </article>
                    <article class="member-card card-sage">
                        <div class="card-topline"><span>03 / CODE</span><span class="availability"></span></div>
                        <div class="avatar avatar-sage">RE</div><h2>Radit <span>El Adzany</span></h2><p class="role">Developer Anggota</p>
                        <div class="contact-list"><a href="tel:+6283166191424"><span class="icon">⌕</span>0831-6619-1424</a><a href="mailto:radithyaell2@gmail.com"><span class="icon">✉</span>radithyaell2@gmail.com</a><a href="https://instagram.com/radityaaell_" target="_blank" rel="noreferrer"><span class="icon">◎</span>@radityaaell_</a></div>
                        <a class="github-link" href="https://github.com/radithyaell" target="_blank" rel="noreferrer">github <span>↗</span></a>
                    </article>
                    <article class="member-card card-yellow">
                        <div class="card-topline"><span>04 / SHIP</span><span class="availability"></span></div>
                        <div class="avatar avatar-yellow">AN</div><h2>Adjie <span>Noer Wahad</span></h2><p class="role">Developer Kontak</p>
                        <div class="contact-list"><a href="tel:+6283180570306"><span class="icon">⌕</span>0831-8057-0306</a><a href="mailto:ajieniedek@gmail.com"><span class="icon">✉</span>ajieniedek@gmail.com</a><a href="https://instagram.com/ajienrwhd" target="_blank" rel="noreferrer"><span class="icon">◎</span>@ajienrwhd</a></div>
                        <a class="github-link" href="https://github.com/ajieniedek-alt" target="_blank" rel="noreferrer">github <span>↗</span></a>
                    </article>
                </section>

                <section class="school-strip" aria-label="Alamat sekolah">
                    <div class="school-icon">⌂</div><div><p>OUR HOME BASE</p><strong>SMK Negeri 1 Garut</strong></div>
                    <address>Jalan Cimanuk Nomor 309A, Kelurahan Pataruman, Kecamatan Tarogong Kidul, Kabupaten Garut, Jawa Barat</address>
                    <a href="https://maps.google.com/?q=SMK+Negeri+1+Garut" target="_blank" rel="noreferrer" aria-label="Buka lokasi di Google Maps">↗</a>
                </section>
            </main>
            <footer><span>XI RPL / SMKN 1 GARUT</span><span>made with curiosity &amp; code</span><span>© 2026</span></footer>
        </div>
    </body>
</html>
