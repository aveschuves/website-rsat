
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RSAT V1 | Smart Security</title>
    <meta name="description" content="RSAT V1, solusi deteksi gerakan dan alarm keamanan praktis untuk berbagai lokasi.">

    <style>
        :root {
            --dark: #06190b;
            --green-dark: #0d5120;
            --green: #21b52f;
            --neon: #8cff00;
            --white: #ffffff;
            --light: #f3f7f2;
            --muted: #647067;
            --border: #dce7dc;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 85px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: var(--light);
            color: var(--dark);
            line-height: 1.6;
            font-size: 16px;
        }

        a {
            text-decoration: none;
        }

        .container {
            width: min(1120px, 90%);
            margin: 0 auto;
        }

        /* HEADER */
        .header {
            position: sticky;
            top: 0;
            z-index: 100;
            background: var(--dark);
            border-bottom: 1px solid var(--green);
        }

        .navbar {
            min-height: 68px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .logo {
            color: var(--white);
            font-size: 25px;
            font-weight: 800;
            letter-spacing: 0.5px;
        }

        .logo span {
            color: var(--neon);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .nav-links a {
            color: var(--white);
            font-size: 14px;
            font-weight: 700;
            transition: color 0.2s;
        }

        .nav-links a:hover {
            color: var(--neon);
        }

        /* HERO */
        .hero {
            background:
                radial-gradient(
                    circle at 85% 40%,
                    #176f30 0,
                    #0b3b1b 42%,
                    var(--dark) 100%
                );
            color: var(--white);
            padding: 64px 0;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.05fr 0.95fr;
            align-items: center;
            gap: 48px;
        }

        .eyebrow {
            color: var(--neon);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1.5px;
            margin-bottom: 14px;
        }

        .hero h1 {
            font-size: clamp(36px, 4.2vw, 54px);
            line-height: 1.12;
            margin-bottom: 20px;
            max-width: 600px;
        }

        .hero h1 span {
            color: var(--neon);
        }

        .hero-description {
            max-width: 520px;
            color: #e0e9e1;
            font-size: 16px;
            margin-bottom: 28px;
        }

        .hero-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .btn {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            min-height: 46px;
            padding: 12px 22px;
            border: 1px solid transparent;
            border-radius: 6px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: transform 0.2s, background 0.2s;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-primary {
            background: var(--neon);
            color: var(--dark);
        }

        .btn-primary:hover {
            background: #a2ff32;
        }

        .btn-outline {
            border-color: #d9eadb;
            color: var(--white);
            background: transparent;
        }

        .btn-outline:hover {
            background: rgba(255, 255, 255, 0.08);
        }

        .product-visual {
            display: flex;
            justify-content: center;
            align-items: center;
            min-width: 0;
        }

        .product-image {
            display: block;
            width: 100%;
            max-width: 450px;
            height: auto;
            object-fit: contain;
        }

        /* FITUR */
        .features {
            padding: 64px 0 72px;
            background: var(--light);
        }

        .section-heading {
            text-align: center;
            margin-bottom: 32px;
        }

        .section-heading h2 {
            font-size: clamp(25px, 3vw, 32px);
            line-height: 1.25;
            margin-bottom: 10px;
        }

        .section-heading p {
            color: var(--muted);
            font-size: 15px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }

        .feature-card {
            background: var(--white);
            padding: 24px;
            border: 1px solid var(--border);
            border-bottom: 3px solid var(--green);
            border-radius: 9px;
            box-shadow: 0 4px 14px rgba(6, 25, 11, 0.04);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .feature-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 22px rgba(6, 25, 11, 0.09);
        }

        .feature-card h3 {
            color: var(--green-dark);
            font-size: 18px;
            margin-bottom: 8px;
        }

        .feature-card p {
            color: var(--muted);
            font-size: 15px;
        }

        /* CTA */
        .contact {
            padding: 58px 0;
            text-align: center;
            background: linear-gradient(120deg, #eaf9e4, #d6f3cc);
            border-top: 1px solid #d2e9c9;
        }

        .contact h2 {
            font-size: clamp(25px, 3vw, 32px);
            margin-bottom: 10px;
        }

        .contact p {
            color: #526451;
            font-size: 16px;
            margin-bottom: 24px;
        }

        .contact .btn {
            min-width: 210px;
        }

        /* FOOTER */
        .footer {
            background: var(--dark);
            color: var(--white);
            text-align: center;
            padding: 22px 16px;
            border-top: 2px solid var(--green);
            font-size: 14px;
        }

        /* TABLET */
        @media (max-width: 900px) {
            .hero {
                padding: 52px 0;
            }

            .hero-grid {
                gap: 28px;
                grid-template-columns: 1fr 0.85fr;
            }

            .product-image {
                max-width: 360px;
            }

            .features-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .nav-links {
                gap: 18px;
            }
        }

        /* HP */
        @media (max-width: 650px) {
            .navbar {
                min-height: 64px;
                flex-direction: column;
                justify-content: center;
                gap: 8px;
                padding: 12px 0;
            }

            .logo {
                font-size: 23px;
            }

            .nav-links {
                width: 100%;
                justify-content: center;
                flex-wrap: wrap;
                gap: 10px 22px;
            }

            .nav-links a {
                font-size: 13px;
                padding: 3px 0;
            }

            .hero {
                padding: 44px 0;
            }

            .hero-grid {
                grid-template-columns: 1fr;
                gap: 32px;
            }

            .hero-copy {
                text-align: center;
            }

            .hero-description {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-buttons .btn {
                flex: 1 1 160px;
            }

            .product-image {
                max-width: min(100%, 390px);
            }

            .features {
                padding: 48px 0;
            }

            .features-grid {
                grid-template-columns: 1fr;
                gap: 14px;
            }

            .feature-card {
                padding: 21px;
            }

            .contact {
                padding: 46px 0;
            }

            .contact .btn {
                width: 100%;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            *,
            *::before,
            *::after {
                transition: none !important;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div class="container navbar">
            <a href="#home" class="logo" aria-label="RSAT V1 Home">
                RSAT <span>V1</span>
            </a>

            <nav class="nav-links" aria-label="Navigasi utama">
                <a href="#home">Home</a>
                <a href="#fitur">Fitur</a>
                <a href="#produk">Produk</a>
                <a href="#kontak">Kontak</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero" id="home">
            <div class="container hero-grid">

                <div class="hero-copy">
                    <p class="eyebrow">
                        RADAR SECURITY ALARM TECHNOLOGY (RSAT)
                    </p>

                    <h1>
                        Keamanan <span>Lebih Nyata.</span>
                    </h1>

                    <p class="hero-description">
                        Deteksi gerakan, alarm otomatis, dan solusi keamanan
                        praktis untuk rumah, gudang, lokasi kerja, serta
                        berbagai lokasi lainnya.
                    </p>

                    <div class="hero-buttons">
                        <a href="#produk" class="btn btn-primary">
                            Lihat Produk
                        </a>

                        <a href="#kontak" class="btn btn-outline">
                            Hubungi Kami
                        </a>
                    </div>
                </div>

                <div class="product-visual" id="produk">
                    <img
                        src="assets/images/rsat-v1.png"
                        alt="Produk RSAT V1 Smart Security"
                        class="product-image"
                        width="450"
                        height="450"
                        fetchpriority="high"
                    >
                </div>

            </div>
        </section>

        <section class="features" id="fitur">
            <div class="container">

                <div class="section-heading">
                    <h2>Mengapa Memilih RSAT V1?</h2>
                    <p>
                        Solusi keamanan yang praktis, ringkas, dan mudah digunakan.
                    </p>
                </div>

                <div class="features-grid">

                    <article class="feature-card">
                        <h3>Deteksi Gerakan</h3>
                        <p>
                            Mendeteksi gerakan menggunakan teknologi sensor microwave.
                        </p>
                    </article>

                    <article class="feature-card">
                        <h3>Output Relay</h3>
                        <p>
                            Mendukung keluaran kontak relay NO/NC untuk
                            sistem alarm yang sesuai.
                        </p>
                    </article>

                    <article class="feature-card">
                        <h3>Alarm Suara</h3>
                        <p>
                            Mendukung buzzer eksternal 5V untuk memberikan
                            peringatan suara.
                        </p>
                    </article>

                    <article class="feature-card">
                        <h3>Input 12–48V DC & Custom</h3>
                        <p>
                            Dirancang untuk rentang masukan sesuai spesifikasi
                            perangkat.
                        </p>
                    </article>

                    <article class="feature-card">
                        <h3>Desain Kompak</h3>
                        <p>
                            Bentuk ringkas untuk membantu pemasangan di berbagai lokasi.
                        </p>
                    </article>

                    <article class="feature-card">
                        <h3>Instalasi Praktis</h3>
                        <p>
                            Dirancang agar integrasi ke sistem alarm menjadi
                            lebih mudah.
                        </p>
                    </article>

                </div>
            </div>
        </section>

        <section class="contact" id="kontak">
            <div class="container">
                <h2>Tingkatkan Keamanan Lokasi Anda</h2>

                <p>
                    RSAT V1 — Investasi Kecil untuk Keamanan Besar.
                </p>

                <a
                    href="mailto:aveschuves@gmail.com"
                    class="btn btn-primary"
                >
                    Hubungi Kami 
                    085221100190 
                </a>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <p>
            &copy; 2026 RSAT V1 — Radar Security Alarm Technology
        </p>
    </footer>

</body>
</html>
