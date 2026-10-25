<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#111827">
    <meta name="description" content="Portofolio pribadi dan karya pilihan.">
    <title>Portofolio Saya</title>
    <style>
        :root {
            color-scheme: light;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            color: #172033;
            background: #f7f8fc;
            font-synthesis: none;
            text-rendering: optimizeLegibility;
        }

        * { box-sizing: border-box; }
        body { margin: 0; }
        a { color: inherit; text-decoration: none; }
        .wrap { width: min(1080px, calc(100% - 40px)); margin: 0 auto; }
        header { padding: 24px 0; }
        nav { display: flex; align-items: center; justify-content: space-between; }
        .brand { font-size: 1.05rem; font-weight: 800; letter-spacing: -.04em; }
        .links { display: flex; gap: 28px; color: #657087; font-size: .94rem; }
        .links a:hover { color: #6658e8; }
        main { padding: 70px 0 96px; }
        .hero {
            position: relative;
            overflow: hidden;
            padding: clamp(40px, 8vw, 92px);
            border: 1px solid #e8eaf2;
            border-radius: 28px;
            background: #fff;
            box-shadow: 0 24px 70px rgb(35 45 75 / 7%);
        }
        .hero::after {
            position: absolute;
            top: -150px;
            right: -100px;
            width: 360px;
            height: 360px;
            border-radius: 50%;
            background: radial-gradient(circle, rgb(118 104 246 / 18%), rgb(118 104 246 / 0%) 70%);
            content: "";
            pointer-events: none;
        }
        .eyebrow { margin: 0 0 20px; color: #6658e8; font-size: .8rem; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; }
        h1 { max-width: 720px; margin: 0; font-size: clamp(2.6rem, 7vw, 5.4rem); line-height: 1.04; letter-spacing: -.065em; }
        h1 span { color: #6658e8; }
        .intro { max-width: 560px; margin: 24px 0 32px; color: #657087; font-size: clamp(1rem, 2vw, 1.14rem); line-height: 1.8; }
        .button { display: inline-flex; align-items: center; min-height: 48px; padding: 0 21px; border-radius: 12px; background: #6658e8; color: #fff; font-weight: 700; transition: transform .2s, background .2s; }
        .button:hover { transform: translateY(-2px); background: #5143d2; }
        .section { padding-top: 58px; }
        .section h2 { margin: 0 0 10px; font-size: 1.55rem; letter-spacing: -.04em; }
        .section p { max-width: 620px; margin: 0; color: #657087; line-height: 1.8; }
        footer { padding: 24px 0 36px; color: #8991a3; font-size: .88rem; text-align: center; }
        @media (max-width: 600px) {
            .wrap { width: min(100% - 28px, 1080px); }
            header { padding: 19px 0; }
            .links { gap: 17px; font-size: .88rem; }
            main { padding: 48px 0 70px; }
            .hero { border-radius: 21px; }
        }
    </style>
</head>
<body>
    <header class="wrap">
        <nav aria-label="Navigasi utama">
            <a class="brand" href="{{ route('home') }}">Portofolio.</a>
            <div class="links">
                <a href="{{ route('home') }}">Beranda</a>
                <a href="{{ route('about') }}">Tentang</a>
            </div>
        </nav>
    </header>
    <main class="wrap">
        <section class="hero">
            <p class="eyebrow">Selamat datang</p>
            <h1>Ide yang baik,<br><span>dibuat menjadi nyata.</span></h1>
            <p class="intro">Ini adalah ruang untuk memperkenalkan diri, membagikan karya, dan menceritakan hal-hal yang sedang Anda kerjakan.</p>
            <a class="button" href="{{ route('about') }}">Kenali lebih lanjut</a>
        </section>
        <section class="section">
            <h2>Halo, saya pemilik portofolio ini.</h2>
            <p>Tambahkan profil, keahlian, dan proyek pilihan Anda di sini. Halaman ini sudah siap dibuka dan dapat dikembangkan sesuai kebutuhan.</p>
        </section>
    </main>
    <footer class="wrap">&copy; {{ date('Y') }} Portofolio Saya</footer>
</body>
</html>