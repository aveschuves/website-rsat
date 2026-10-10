
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSAT V1 | Smart Security</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --dark: #06190b;
    --green-dark: #0d5120;
    --green: #21b52f;
    --neon: #8cff00;
    --white: #ffffff;
    --muted: #647067;
}

html {
    scroll-behavior: smooth;
    scroll-padding-top: 90px;
}

body {
    font-family: Arial, Helvetica, sans-serif;
    background: #f4f7f3;
    color: #172019;
    line-height: 1.7;
}

header {
    position: sticky;
    top: 0;
    z-index: 100;
    min-height: 76px;
    padding: 14px 7%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 24px;
    flex-wrap: wrap;
    color: var(--white);
    background: rgba(6, 25, 11, 0.97);
    border-bottom: 2px solid var(--green);
    box-shadow: 0 5px 20px #00000018;
}

.logo {
    font-size: 29px;
    font-weight: 900;
    letter-spacing: 1.5px;
    line-height: 1.2;
}

.logo span {
    color: var(--neon);
}

nav {
    display: flex;
    align-items: center;
    gap: 28px;
    flex-wrap: wrap;
}

nav a {
    position: relative;
    color: var(--white);
    text-decoration: none;
    font-size: 14px;
    font-weight: 700;
    transition: color 0.2s ease;
}

nav a:hover {
    color: var(--neon);
}

nav a::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -7px;
    width: 0;
    height: 2px;
    background: var(--neon);
    transition: width 0.2s ease;
}

nav a:hover::after {
    width: 100%;
}

.hero {
    position: relative;
    overflow: hidden;
    background:
        radial-gradient(ellipse at 85% 50%, #16762d 0%, transparent 48%),
        linear-gradient(120deg, var(--dark), #0b3d18 65%, #126b25);
    color: var(--white);
    padding: 75px 7%;
    min-height: 510px;
    display: grid;
    grid-template-columns: 1.05fr 0.95fr;
    align-items: center;
    gap: 55px;
}

.hero > div:first-child {
    max-width: 600px;
}

.tagline {
    display: inline-block;
    color: var(--neon);
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1px;
    margin-bottom: 12px;
}

h1 {
    font-size: clamp(38px, 4.5vw, 62px);
    line-height: 1.13;
    letter-spacing: -1.5px;
    margin: 8px 0 22px;
}

.hero p {
    max-width: 520px;
    margin-bottom: 30px;
    color: #e0ece2;
    font-size: 16px;
}

.buttons {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
}

.btn {
    width: 100%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 46px;
    padding: 12px 23px;
    border-radius: 7px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 800;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 7px 18px #00000025;
}

.btn-primary {
    background: var(--neon);
    color: var(--dark);
}

.btn-secondary {
    border: 1px solid #d8e9d9;
    color: var(--white);
    background: #ffffff08;
}

#produk {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.product-image {
    display: block;
    width: 100%;
    max-width: 500px;
    height: auto;
    object-fit: contain;
    margin: auto;
    border-radius: 10px;
    box-shadow: 0 20px 50px #00000040;
}

/* Gambar asli dipertahankan; tidak ada filter atau pemotongan. */

section {
    padding: 75px 7%;
}

#fitur {
    background: #f4f7f3;
}

.section-title {
    text-align: center;
    font-size: clamp(27px, 3vw, 36px);
    line-height: 1.3;
    margin-bottom: 12px;
    color: #102b16;
}

.section-desc {
    text-align: center;
    color: var(--muted);
    margin: 0 auto 38px;
    max-width: 650px;
    font-size: 15px;
}

.features {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 22px;
}

.feature {
    position: relative;
    overflow: hidden;
    background: var(--white);
    padding: 28px 25px;
    border: 1px solid #e4ebe3;
    border-bottom: 4px solid var(--green);
    border-radius: 13px;
    box-shadow: 0 7px 24px #102b1609;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}

.feature:hover {
    transform: translateY(-5px);
    box-shadow: 0 14px 30px #102b1615;
}

.feature h3 {
    margin-bottom: 10px;
    color: #146326;
    font-size: 18px;
}

.feature p {
    color: #58645a;
    font-size: 14px;
    line-height: 1.8;
}

.cta {
    position: relative;
    text-align: center;
    background: linear-gradient(135deg, #e9f9e1, #d8f3ce);
    border-top: 1px solid #d3e9ca;
}

.cta .section-desc {
    margin-bottom: 25px;
}

footer {
    background: var(--dark);
    color: #e7f1e8;
    text-align: center;
    padding: 25px 7%;
    border-top: 3px solid var(--green);
    font-size: 13px;
}

/* Tablet */
@media (max-width: 900px) {
    .hero {
        grid-template-columns: 1fr 0.85fr;
        gap: 30px;
        padding: 60px 5%;
    }

    header,
    section {
        padding-left: 5%;
        padding-right: 5%;
    }

    .features {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    nav {
        gap: 18px;
    }
}

/* HP */
@media (max-width: 650px) {
    header {
        gap: 16px;
        position: relative;
        justify-content: center;
        text-align: center;
        padding: 18px 5%;
    }

    nav {
        width: 100%;
        justify-content: center;
        gap: 12px 16px;
    }

    nav a {
        font-size: 13px;
    }

    .hero {
        grid-template-columns: 1fr;
        gap: 35px;
        padding: 48px 6%;
        text-align: center;
    }

    .hero > div:first-child {
        margin: auto;
    }

    h1 {
        font-size: clamp(36px, 10vw, 48px);
        letter-spacing: -1px;
    }

    .hero p {
        margin-left: auto;
        margin-right: auto;
    }

    .buttons {
        justify-content: center;
    }

    .product-image {
        max-width: 420px;
        border-radius: 8px;
    }

    section {
        padding: 48px 6%;
    }

    .features {
        grid-template-columns: 1fr;
        gap: 16px;
    }

    .feature {
        padding: 23px;
    }
}

@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
        scroll-behavior: auto !important;
        transition: none !important;
    }
}

    </style>
</head>
<body>

<header>
    <div class="logo">RSAT <span>V1</span></div>
    <nav>
        <a href="#home">Home</a>
        <a href="#fitur">Fitur</a>
        <a href="#produk">Produk</a>
        <a href="#kontak">Kontak</a>
    </nav>
</header>

<main>
    <section class="hero" id="home">
        <div>
            <div class="tagline">RADAR SECURITY ALARM TECHNOLOGY</div>
            <h1>Keamanan <span style="color:#8cff00">Lebih Nyata.</span></h1>
            <p>
                Deteksi gerakan, alarm otomatis, dan solusi keamanan
                praktis untuk rumah, gudang, kios, serta berbagai lokasi lainnya.
            </p>
            <div class="buttons">
                <a class="btn btn-primary" href="#produk">Lihat Produk</a>
                <a class="btn btn-secondary" href="#kontak">Hubungi Kami</a>
            </div>
        </div>

        <div class="product-visual">
            <img
                src="assets/images/rsat-v1.png"
                alt="Produk RSAT V1 Smart Security"
                class="product-image"
                    width: 100%;
                      display: flex;
                        justify-content: center;
                        align-items: center;
                        min-width: 0;
            >
        </div>
    </section>

    <section id="fitur">
        <h2 class="section-title">Mengapa Memilih RSAT V1?</h2>
        <p class="section-desc">
            Solusi keamanan yang praktis, ringkas, dan mudah digunakan.
        </p>

        <div class="features">
            <article class="feature">
                <h3>Deteksi Gerakan</h3>
                <p>Mendeteksi gerakan menggunakan teknologi sensor microwave.</p>
            </article>

            <article class="feature">
                <h3>Output Relay</h3>
                <p>Mendukung keluaran kontak relay NO/NC untuk sistem alarm yang sesuai.</p>
            </article>

            <article class="feature">
                <h3>Alarm Suara</h3>
                <p>Mendukung buzzer eksternal 5V untuk memberikan peringatan suara.</p>
            </article>

            <article class="feature">
                <h3>Input 12–48V DC</h3>
                <p>Dirancang untuk rentang masukan daya sesuai spesifikasi perangkat.</p>
            </article>

            <article class="feature">
                <h3>Desain Kompak</h3>
                <p>Bentuk ringkas untuk membantu pemasangan di berbagai lokasi.</p>
            </article>

            <article class="feature">
                <h3>Instalasi Praktis</h3>
                <p>Dirancang agar integrasi ke sistem alarm menjadi lebih mudah.</p>
            </article>
        </div>
    </section>

    <section class="cta" id="kontak">
        <h2 class="section-title">Tingkatkan Keamanan Lokasi Anda</h2>
        <p class="section-desc">
            RSAT V1 — Investasi Kecil untuk Keamanan Besar.
        </p>
        <a class="btn btn-primary" href="mailto:info@rsat.local">
            Hubungi Kami
        </a>
    </section>
</main>

<footer>
    <p>&copy; 2026 RSAT V1 — Radar Security Alarm Technology</p>
</footer>

</body>
</html>
