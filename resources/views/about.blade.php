<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#111827">
    <title>Tentang — Portofolio Saya</title>
    <style>
        :root { font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; color: #172033; background: #f7f8fc; }
        * { box-sizing: border-box; }
        body { margin: 0; }
        a { color: inherit; text-decoration: none; }
        .wrap { width: min(900px, calc(100% - 40px)); margin: 0 auto; }
        header { padding: 24px 0; }
        nav { display: flex; justify-content: space-between; align-items: center; }
        .brand { font-weight: 800; letter-spacing: -.04em; }
        .links { display: flex; gap: 28px; color: #657087; font-size: .94rem; }
        .links a:hover, .back:hover { color: #5143d2; }
        main { padding: 70px 0; }
        article { padding: clamp(32px, 7vw, 72px); border: 1px solid #e8eaf2; border-radius: 26px; background: #fff; box-shadow: 0 24px 70px rgb(35 45 75 / 7%); }
        .eyebrow { color: #6658e8; font-size: .8rem; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; }
        h1 { margin: 16px 0; font-size: clamp(2.5rem, 6vw, 4.5rem); line-height: 1.08; letter-spacing: -.06em; }
        p { max-width: 650px; color: #657087; font-size: 1.06rem; line-height: 1.85; }
        .back { display: inline-block; margin-top: 20px; color: #6658e8; font-weight: 700; }
        footer { padding: 24px 0 36px; color: #8991a3; font-size: .88rem; text-align: center; }
        @media (max-width: 600px) { .wrap { width: min(100% - 28px, 900px); } .links { gap: 17px; } main { padding: 48px 0; } }
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
        <article>
            <p class="eyebrow">Tentang saya</p>
            <h1>Senang berkenalan!</h1>
            <p>Gunakan halaman ini untuk bercerita tentang diri Anda, perjalanan, minat, serta keahlian yang ingin ditampilkan.</p>
            <p>Anda juga dapat menambahkan tautan kontak atau media sosial agar pengunjung mudah terhubung.</p>
            <a class="back" href="{{ route('home') }}">&larr; Kembali ke beranda</a>
        </article>
    </main>
    <footer class="wrap">&copy; {{ date('Y') }} Portofolio Saya</footer>
</body>
</html>