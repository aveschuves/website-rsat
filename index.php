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
        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: var(--light);
            color: var(--dark);
            line-height: 1.6;
            font-size: 16px;
        }
        a { text-decoration: none; }
        .container { width: min(1500px, 90%); margin: 0 auto; }
        .header {
            position: sticky; top: 0; z-index: 100;
            background: var(--dark); border-bottom: 1px solid var(--green);
        }
        .navbar {
            min-height: 68px; display: flex; align-items: center;
            justify-content: space-between; gap: 24px;
        }
        .logo { color: var(--white); font-size: 25px; font-weight: 800; letter-spacing: .5px; }
        .logo span { color: var(--neon); }
        .nav-links { display: flex; align-items: center; gap: 10px; }
        .nav-links a {
            color: var(--white); font-size: 14px; font-weight: 700;
            padding: 9px 13px; border-radius: 6px; transition: color .2s, background .2s;
        }
        .nav-links a:hover, .nav-links a.active { color: var(--dark); background: var(--neon); }
        .page { display: none; animation: pageIn .24s ease-out; }
        .page.active { display: block; }
        @keyframes pageIn {
            from { opacity: 0; transform: translateY(6px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .hero {
            background: radial-gradient(circle at 85% 40%, #176f30 0, #0b3b1b 42%, var(--dark) 100%);
            color: var(--white); padding: 64px 0;
        }
        .hero-grid { display: grid; grid-template-columns: 1.05fr .95fr; align-items: center; gap: 48px; }
        .eyebrow { color: var(--neon); font-size: 12px; font-weight: 800; letter-spacing: 1.5px; margin-bottom: 14px; }
        .hero h1 { font-size: clamp(36px, 4.2vw, 54px); line-height: 1.12; margin-bottom: 20px; max-width: 600px; }
        .hero h1 span { color: var(--neon); }
        .hero-description { max-width: 520px; color: #e0e9e1; font-size: 16px; margin-bottom: 28px; }
        .hero-buttons { display: flex; flex-wrap: wrap; gap: 12px; }
        .btn {
            display: inline-flex; justify-content: center; align-items: center;
            min-height: 46px; padding: 12px 22px; border: 1px solid transparent;
            border-radius: 6px; font-size: 15px; font-weight: 700; cursor: pointer;
            transition: transform .2s, background .2s;
        }
        .btn:hover { transform: translateY(-2px); }
        .btn-primary { background: var(--neon); color: var(--dark); }
        .btn-primary:hover { background: #a2ff32; }
        .btn-outline { border-color: #d9eadb; color: var(--white); background: transparent; }
        .btn-outline:hover { background: rgba(255,255,255,.08); }
        .product-visual { display: flex; justify-content: center; align-items: center; min-width: 0; }
        .product-image { display: block; width: 100%; max-width: 450px; height: auto; object-fit: contain; }
        .section { padding: 64px 0 72px; background: var(--light); min-height: 55vh; }
        .section-heading { text-align: center; margin-bottom: 32px; }
        .section-heading h1, .section-heading h2 { font-size: clamp(27px, 3vw, 36px); line-height: 1.25; margin-bottom: 10px; }
        .section-heading p { color: var(--muted); font-size: 16px; }
        .features-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 22px; }
        .feature-card {
            background: var(--white); padding: 28px; border: 1px solid var(--border);
            border-bottom: 3px solid var(--green); border-radius: 9px;
            box-shadow: 0 4px 14px rgba(6,25,11,.04); transition: transform .2s, box-shadow .2s;
        }
        .feature-card:hover { transform: translateY(-3px); box-shadow: 0 8px 22px rgba(6,25,11,.09); }
        .feature-card h3 { color: var(--green-dark); font-size: 20px; margin-bottom: 8px; }
        .feature-card p { color: var(--muted); font-size: 16px; }
        .product-layout {
            display: grid; grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            align-items: center; gap: 42px; background: #fff; border: 1px solid var(--border);
            border-radius: 12px; padding: clamp(20px, 4vw, 42px);
        }
        .product-layout .product-image { max-width: 500px; margin: auto; }
        .product-info h2 { font-size: clamp(25px, 3vw, 34px); margin-bottom: 12px; }
        .product-info p { color: var(--muted); margin-bottom: 16px; }
        .product-info ul { padding-left: 22px; margin: 0 0 24px; }
        .product-info li { margin-bottom: 7px; }
        .price-note { color: var(--green-dark) !important; font-weight: 700; }
        .contact-panel {
            max-width: 760px; margin: 0 auto; text-align: center; padding: clamp(24px, 5vw, 48px);
            background: linear-gradient(120deg, #eaf9e4, #d6f3cc); border: 1px solid #d2e9c9;
            border-radius: 12px;
        }
        .contact-panel h1 { font-size: clamp(27px, 3vw, 36px); margin-bottom: 12px; }
        .contact-panel p { color: #526451; font-size: 16px; margin-bottom: 24px; }
        .contact-panel .btn { min-width: 230px; }
        .footer { background: var(--dark); color: var(--white); text-align: center; padding: 22px 16px; border-top: 2px solid var(--green); font-size: 14px; }
        @media (max-width: 900px) {
            .hero { padding: 52px 0; }
            .hero-grid { gap: 28px; grid-template-columns: 1fr .85fr; }
            .product-image { max-width: 360px; }
            .features-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }
        @media (max-width: 650px) {
            .navbar { min-height: 64px; flex-direction: column; justify-content: center; gap: 8px; padding: 12px 0; }
            .logo { font-size: 23px; }
            .nav-links { width: 100%; justify-content: center; flex-wrap: wrap; gap: 5px; }
            .nav-links a { font-size: 13px; padding: 7px 10px; }
            .hero { padding: 44px 0; }
            .hero-grid { grid-template-columns: 1fr; gap: 32px; }
            .hero-copy { text-align: center; }
            .hero-description { margin-left: auto; margin-right: auto; }
            .hero-buttons { justify-content: center; }
            .hero-buttons .btn { flex: 1 1 160px; }
            .product-image { max-width: min(100%, 390px); }
            .section { padding: 48px 0; }
            .features-grid { grid-template-columns: 1fr; gap: 14px; }
            .feature-card { padding: 21px; }
            .product-layout { grid-template-columns: 1fr; gap: 24px; }
            .product-info { text-align: left; }
            .contact-panel .btn { width: 100%; }
        }
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { animation: none !important; transition: none !important; }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container navbar">
            <a href="#home" class="logo" aria-label="RSAT V1 Home" data-page-link>RSAT <span>V1</span></a>
            <nav class="nav-links" aria-label="Navigasi utama">
                <a href="#home" data-page-link class="active" aria-current="page">Home</a>
                <a href="#fitur" data-page-link>Fitur</a>
                <a href="#produk" data-page-link>Produk</a>
                <a href="#kontak" data-page-link>Kontak</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="page active" id="home" aria-labelledby="home-title">
            <div class="hero">
                <div class="container hero-grid">
                    <div class="hero-copy">
                        <p class="eyebrow">RADAR SECURITY ALARM TECHNOLOGY (RSAT)</p>
                        <h1 id="home-title">Keamanan <span>Lebih Nyata.</span></h1>
                        <p class="hero-description">
                            Deteksi gerakan, alarm otomatis, dan solusi keamanan praktis
                            untuk rumah, gudang, lokasi kerja, serta berbagai lokasi lainnya.
                        </p>
                        <div class="hero-buttons">
                            <a href="#produk" class="btn btn-primary" data-page-link>Lihat Produk</a>
                            <a href="#kontak" class="btn btn-outline" data-page-link>Hubungi Kami</a>
                        </div>
                    </div>
                    <div class="product-visual">
                        <img src="assets/images/rsat-v1.png" alt="Produk RSAT V1 Smart Security" class="product-image" width="450" height="450" fetchpriority="high">
                    </div>
                </div>
            </div>
        </section>

        <section class="page" id="fitur" aria-labelledby="fitur-title" hidden>
            <div class="section">
                <div class="container">
                    <div class="section-heading">
                        <h1 id="fitur-title">Mengapa Memilih RSAT V1?</h1>
                        <p>Solusi keamanan yang praktis, ringkas, dan mudah digunakan.</p>
                    </div>
                    <div class="features-grid">
                        <article class="feature-card"><h3>Deteksi Gerakan</h3><p>Mendeteksi gerakan menggunakan teknologi sensor microwave.</p></article>
                        <article class="feature-card"><h3>Output Relay</h3><p>Mendukung keluaran kontak relay NO/NC untuk sistem alarm yang sesuai.</p></article>
                        <article class="feature-card"><h3>Alarm Suara</h3><p>Mendukung buzzer eksternal 5V untuk memberikan peringatan suara.</p></article>
                        <article class="feature-card"><h3>Input 12–48V DC</h3><p>Gunakan catu daya sesuai spesifikasi perangkat dan konfigurasi instalasi.</p></article>
                        <article class="feature-card"><h3>Desain Kompak</h3><p>Bentuk ringkas untuk membantu pemasangan di berbagai lokasi.</p></article>
                        <article class="feature-card"><h3>Instalasi Praktis</h3><p>Dirancang agar integrasi ke sistem alarm menjadi lebih mudah.</p></article>
                    </div>
                </div>
            </div>
        </section>

        <section class="page" id="produk" aria-labelledby="produk-title" hidden>
            <div class="section">
                <div class="container">
                    <div class="section-heading">
                        <h1 id="produk-title">Produk RSAT V1</h1>
                        <p>Solusi deteksi gerakan untuk membantu kebutuhan keamanan lokasi Anda.</p>
                    </div>
                    <div class="product-layout">
                        <div class="product-visual">
                            <img src="assets/images/rsat-v1.png" alt="Produk RSAT V1 Smart Security" class="product-image" width="450" height="450" loading="lazy">
                        </div>
                        <div class="product-info">
                            <h2>RSAT V1 Smart Security</h2>
                            <p>Perangkat deteksi gerakan yang dirancang untuk mendukung sistem alarm keamanan.</p>
                            <ul>
                                <li>Sensor microwave untuk deteksi gerakan</li>
                                <li>Output relay untuk integrasi alarm</li>
                                <li>Desain ringkas dan praktis</li>
                                <li>Gunakan sesuai spesifikasi dan petunjuk pemasangan</li>
                            </ul>
                            <p class="price-note">Harga dan ketersediaan: silakan tanyakan melalui WhatsApp.</p>
                            <a class="btn btn-primary" href="https://wa.me/6285221100190?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20produk%20RSAT%20V1." target="_blank" rel="noopener noreferrer">Tanyakan Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page" id="kontak" aria-labelledby="kontak-title" hidden>
            <div class="section">
                <div class="container">
                    <div class="contact-panel">
                        <p class="eyebrow">RSAT V1 SMART SECURITY</p>
                        <h1 id="kontak-title">Tingkatkan Keamanan Lokasi Anda</h1>
                        <p>RSAT V1 — Investasi Kecil untuk Keamanan Besar.<br>Hubungi kami untuk menanyakan harga, spesifikasi, dan informasi produk.</p>
                        <a class="btn btn-primary" href="https://wa.me/6285221100190?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20RSAT%20V1." target="_blank" rel="noopener noreferrer">Hubungi Kami via WhatsApp</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2026 RSAT V1 — Radar Security Alarm Technology</p>
    </footer>

    <script>
        (() => {
            const pages = [...document.querySelectorAll('.page')];
            const navLinks = [...document.querySelectorAll('[data-page-link]')];
            const validPages = new Set(pages.map(page => page.id));

            function showPage(pageId, updateHistory = true) {
                const id = validPages.has(pageId) ? pageId : 'home';

                pages.forEach(page => {
                    const isActive = page.id === id;
                    page.classList.toggle('active', isActive);
                    page.hidden = !isActive;
                });

                document.querySelectorAll('.nav-links [data-page-link]').forEach(link => {
                    const isActive = link.getAttribute('href') === '#' + id;
                    link.classList.toggle('active', isActive);
                    if (isActive) link.setAttribute('aria-current', 'page');
                    else link.removeAttribute('aria-current');
                });

                if (updateHistory && window.location.hash !== '#' + id) {
                    window.history.pushState({ page: id }, '', '#' + id);
                }
                window.scrollTo({ top: 0, behavior: 'smooth' });
                document.title = (id.charAt(0).toUpperCase() + id.slice(1)) + ' | RSAT V1';
            }

            document.addEventListener('click', event => {
                const link = event.target.closest('[data-page-link]');
                if (!link) return;

                const href = link.getAttribute('href') || '';
                if (!href.startsWith('#')) return;

                const pageId = href.slice(1);
                if (!validPages.has(pageId)) return;

                event.preventDefault();
                showPage(pageId);
            });

            window.addEventListener('popstate', () => {
                showPage(window.location.hash.slice(1) || 'home', false);
            });

            window.addEventListener('hashchange', () => {
                showPage(window.location.hash.slice(1) || 'home', false);
            });

            showPage(window.location.hash.slice(1) || 'home', false);
        })();
    </script>
</body>
</html>
