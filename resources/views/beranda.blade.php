<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Bimo Satrio Putra</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- NAVBAR -->
    <header>
        <h2>PORTOFOLIO</h2>

        <button class="menu-toggle" id="menuToggle" aria-label="Buka menu navigasi" aria-expanded="false"
            aria-controls="mainNav">
            ☰
        </button>

        <nav id="mainNav">
            <a href="#beranda">Beranda</a>
            <a href="#tentang">Tentang Saya</a>
            <a href="#proyek">Proyek</a>
            <a href="#keahlian">Keahlian</a>
            <a href="#kontak">Kontak</a>
        </nav>
    </header>

    <!-- BERANDA -->
    <section id="beranda" class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <p>HALO, SAYA</p>
                <h1>Bimo Satrio Putra</h1>
                <h3>Fresh Graduate Teknik Informatika S-1</h3>

                <p>
                    Saya tertarik pada pengembangan website, pengelolaan database,
                    <br>IT Support, serta desain UI/UX.
                </p>

                <a href="#proyek">Lihat Proyek Saya</a>
            </div>

            <div class="hero-image">
                <img src="{{ asset('images/bimo.png') }}" alt="Foto Bimo Satrio Putra">
            </div>
        </div>
    </section>

    <!-- TENTANG SAYA -->
    <section id="tentang" class="about">
        <div class="container">

            <div class="section-heading">
                <span>TENTANG SAYA</span>
            </div>

            <div class="about-content">

                <div class="about-text">
                    <h3>Halo, saya Bimo Satrio Putra.</h3>

                    <p>
                        Saya merupakan lulusan S1 Teknik Informatika dari Institut Teknologi Nasional Malang dengan IPK
                        3,42. Saya memiliki ketertarikan pada pengembangan aplikasi berbasis web, pengelolaan database,
                        IT Support, serta teknologi informasi. Memiliki pengalaman dalam pengembangan sistem informasi
                        melalui kegiatan Praktik Kerja Nyata (PKN) dan proyek akademik menggunakan PHP, Laravel, dan
                        MySQL.
                    </p>

                    <p>
                        Selama masa perkuliahan, saya pernah melaksanakan
                        Praktik Kerja Nyata di BKPSDM Kota Batu dengan
                        berkontribusi dalam pengembangan Sistem Informasi
                        Surat Perintah Perjalanan Dinas (SPPD) berbasis web.
                    </p>

                    <p>
                        Saya juga pernah menjadi Asisten Praktikum
                        Laboratorium Database. Tugas saya meliputi mendampingi
                        mahasiswa selama praktikum, menjelaskan materi MySQL
                        dan basis data, serta membantu pemeriksaan tugas praktikum.
                    </p>

                    <p>
                        Saya senang mempelajari teknologi baru dan terus
                        mengembangkan kemampuan di bidang teknologi informasi.
                    </p>
                </div>

                <div class="about-info">
                    <div>
                        <span>Nama</span>
                        <strong>Bimo Satrio Putra</strong>
                    </div>

                    <div>
                        <span>Pendidikan</span>
                        <strong>S1 Teknik Informatika</strong>
                    </div>

                    <div>
                        <span>Universitas</span>
                        <strong>Institut Teknologi Nasional Malang</strong>
                    </div>

                    <div>
                        <span>IPK</span>
                        <strong>3,42 / 4,00</strong>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PROYEK -->

    <!-- PROYEK -->
    <section id="proyek" class="projects">
        <div class="container">

            <div class="section-heading">
                <span>PROYEK</span>
                <h2>Proyek Saya</h2>
                <p>
                    Proyek pengembangan sistem pendukung keputusan
                    yang saya kerjakan selama menyelesaikan studi.
                </p>
            </div>

            <div class="project-container">

                <article class="project-card">
                    <span class="project-number">PROJECT 01</span>

                    <h3>
                        Sistem Pendukung Keputusan Pemilihan Jenis Pupuk
                        Non-Subsidi untuk Tanaman Padi Di Kabupaten Pasuruan
                    </h3>

                    <p>
                        Aplikasi berbasis web untuk membantu proses
                        pemilihan jenis pupuk non-subsidi bagi tanaman
                        padi di Kabupaten Pasuruan menggunakan metode
                        Analytical Hierarchy Process (AHP) dan
                        Simple Additive Weighting (SAW).
                    </p>

                    <div class="tech-list">
                        <span>Laravel</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>AHP</span>
                        <span>SAW</span>
                    </div>

                    <details>
                        <summary>Lihat detail proyek</summary>

                        <p>
                            Sistem menggunakan lima kriteria penilaian,
                            yaitu kondisi lahan, tujuan, fase tanaman,
                            kemasan, dan bentuk pupuk. Metode AHP digunakan
                            untuk menentukan bobot kriteria, sedangkan
                            metode SAW digunakan untuk melakukan
                            perangkingan alternatif pupuk.
                        </p>
                    </details>

                </article>

            </div>
        </div>
    </section>


    <!-- KEAHLIAN -->

    <!-- KEAHLIAN -->
    <section id="keahlian" class="skills">
        <div class="container">

            <div class="section-heading">
                <span>KEAHLIAN</span>
                <h2>Kemampuan yang Saya Miliki</h2>
                <p>
                    Beberapa teknologi dan tools yang saya gunakan
                    dalam pengembangan aplikasi dan pengolahan data.
                </p>
            </div>

            <div class="skills-container">

                <!-- WEB DEVELOPMENT -->
                <div class="skill-card">
                    <div class="skill-icon">💻</div>
                    <h3>Web Development</h3>
                    <p>Teknologi yang digunakan untuk membangun aplikasi web.</p>

                    <div class="skill-list">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>JavaScript</span>
                        <span>PHP</span>
                        <span>Laravel</span>
                    </div>
                </div>

                <!-- DATABASE -->
                <div class="skill-card">
                    <div class="skill-icon">🗄️</div>
                    <h3>Database Management</h3>
                    <p>Pengelolaan dan perancangan basis data aplikasi.</p>

                    <div class="skill-list">
                        <span>MySQL</span>
                        <span>Database Design</span>
                        <span>Data Management</span>
                    </div>
                </div>

                <!-- TOOLS -->
                <div class="skill-card">
                    <div class="skill-icon">🛠️</div>
                    <h3>Tools & Productivity</h3>
                    <p>Tools untuk mendukung pekerjaan dan pengolahan dokumen.</p>

                    <div class="skill-list">
                        <span>Microsoft Word</span>
                        <span>Microsoft Excel</span>
                        <span>Visual Studio Code</span>
                        <span>Git</span>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- KONTAK -->
    <section id="kontak" class="contact">
        <div class="container">

            <div class="section-heading">
                <span>KONTAK</span>
                <h2>Mari Terhubung</h2>
                <p>
                    Saya terbuka terhadap peluang kerja, kolaborasi,
                    maupun diskusi seputar teknologi informasi.
                </p>
            </div>

            <div class="contact-container">

                <div class="contact-card">
                    <div class="contact-icon">✉️</div>
                    <h3>Email</h3>
                    <p>bimosp717@gmail.com</p>
                    <a href="mailto:bimosp717@gmail.com">
                        Kirim Email
                    </a>
                </div>

                <div class="contact-card">
                    <div class="contact-icon">📱</div>
                    <h3>WhatsApp</h3>
                    <p>Hubungi saya melalui WhatsApp.</p>
                    <a href="https://wa.me/6289687050895" target="_blank">
                        Hubungi Saya
                    </a>
                </div>

                <div class="contact-card">
                    <div class="contact-icon">💼</div>
                    <h3>LinkedIn</h3>
                    <p>Profil profesional saya.</p>
                    <a href="https://www.linkedin.com/in/bimo-satrio-putra312" target="_blank">
                        Lihat Profil
                    </a>
                </div>

                <div class="contact-card">
                    <div class="contact-icon">💻</div>
                    <h3>GitHub</h3>
                    <p>Repositori dan proyek coding saya.</p>
                    <a href="https://github.com/Bimoosp312" target="_blank">
                        Lihat GitHub
                    </a>
                </div>

            </div>

            <div class="contact-cv">
                <h3>Ingin melihat CV saya?</h3>
                <p>Unduh CV untuk mengetahui informasi pendidikan, pengalaman, dan keahlian saya.</p>

                <a href="{{ asset('files/CV Bimo Satrio Putra.pdf') }}" download>
                    Unduh CV Saya
                </a>
            </div>

        </div>
    </section>


    <!-- FOOTER -->
    <footer>
        <p>&copy; 2026 Bimo Satrio Putra.</p>
    </footer>

    <!-- NAVBAR -->
    <script>
        const menuToggle = document.getElementById('menuToggle');
        const mainNav = document.getElementById('mainNav');

        menuToggle.addEventListener('click', function() {
            const isOpen = mainNav.classList.toggle('nav-open');

            menuToggle.setAttribute('aria-expanded', isOpen);
            menuToggle.setAttribute(
                'aria-label',
                isOpen ? 'Tutup menu navigasi' : 'Buka menu navigasi'
            );

            menuToggle.textContent = isOpen ? '✕' : '☰';
        });

        mainNav.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                mainNav.classList.remove('nav-open');

                menuToggle.setAttribute('aria-expanded', 'false');
                menuToggle.setAttribute('aria-label', 'Buka menu navigasi');
                menuToggle.textContent = '☰';
            });
        });
    </script>

    <a href="#beranda" class="back-to-top" id="backToTop">↑</a>
    <script>
        const backToTop = document.getElementById('backToTop');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });
    </script>

    <script>
        const revealElements = document.querySelectorAll(
            '.section-heading, .about-content, .project-card, .skill-card, .contact-card, .contact-cv'
        );

        revealElements.forEach(element => {
            element.classList.add('reveal');
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15
        });

        revealElements.forEach(element => {
            observer.observe(element);
        });
    </script>

</body>

</html>
