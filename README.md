# Website Portofolio Nabil Huda

Website portofolio berbasis Laravel 12 dan Filament 3 untuk menampilkan profil, keahlian, proyek, dan menerima pesan dari pengunjung.

## Fitur

- Landing page responsif dan ramah aksesibilitas
- Daftar serta detail proyek dengan galeri gambar
- Form kontak tersimpan ke database dan dilindungi rate limit
- Panel admin Filament pada `/admin`
- Pengelolaan proyek, konten, dan pesan kontak
- Metadata SEO dasar dan navigasi mobile
- Feature test untuk route publik, detail proyek, dan form kontak

## Instalasi lokal

Persyaratan: PHP 8.2+, Composer, Node.js 20+, dan ekstensi SQLite atau database lain yang didukung Laravel.

```bash
composer install
cp .env.example .env
touch database/database.sqlite
php artisan key:generate
php artisan migrate
php artisan storage:link
npm install
npm run build
php artisan serve
```

Buat akun admin pertama:

```bash
php artisan make:filament-user
```

Kemudian buka `http://localhost:8000/admin`.

## Pengembangan dan pengujian

```bash
composer run dev
php artisan test
./vendor/bin/pint --test
```

Untuk production, gunakan `APP_ENV=production`, `APP_DEBUG=false`, HTTPS, kredensial database terpisah, serta jalankan `php artisan optimize` setelah deployment.
