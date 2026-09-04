<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Portofolio Nabil Huda Rizalul Haq, mobile developer Flutter dan web developer Laravel.')">
    <meta name="theme-color" content="#081c15">
    <title>@yield('title', 'Nabil Huda — Mobile & Web Developer')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a class="skip-link" href="#main-content">Lewati ke konten utama</a>
    <header class="site-header">
        <nav class="nav container" aria-label="Navigasi utama">
            <a href="{{ route('landing') }}" class="brand" aria-label="Beranda Nabil Huda">NH<span>.</span></a>
            <button class="menu-button" type="button" aria-expanded="false" aria-controls="main-menu">Menu</button>
            <div id="main-menu" class="nav-links">
                <a @class(['active' => request()->routeIs('landing')]) href="{{ route('landing') }}">Beranda</a>
                <a @class(['active' => request()->routeIs('about.*')]) href="{{ route('about.index') }}">Tentang</a>
                <a @class(['active' => request()->routeIs('skills.*')]) href="{{ route('skills.index') }}">Keahlian</a>
                <a @class(['active' => request()->routeIs('portfolio.*')]) href="{{ route('portfolio.index') }}">Proyek</a>
                <a @class(['active' => request()->routeIs('contact.*')]) href="{{ route('contact.index') }}">Kontak</a>
                <a class="button button-small" href="{{ asset('assets/cv/cv_nabil.pdf') }}" download="CV-Nabil-Huda.pdf">Unduh CV</a>
            </div>
        </nav>
    </header>

    <main id="main-content">@yield('content')</main>

    <footer class="footer">
        <div class="container footer-inner">
            <p>© {{ date('Y') }} Nabil Huda Rizalul Haq.</p>
            <p>Flutter · Laravel · React</p>
        </div>
    </footer>
    <script>
        const menuButton = document.querySelector('.menu-button');
        const menu = document.querySelector('#main-menu');
        menuButton?.addEventListener('click', () => {
            const open = menu.classList.toggle('open');
            menuButton.setAttribute('aria-expanded', String(open));
        });
    </script>
</body>
</html>
