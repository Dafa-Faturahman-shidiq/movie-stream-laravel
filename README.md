# 🎬 MovieStream - Laravel 12

[![Laravel 12](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

MovieStream adalah aplikasi web sederhana untuk streaming dan manajemen katalog film yang dibangun menggunakan **Laravel 12**. Project ini difokuskan pada implementasi *clean code* dan fitur esensial untuk platform konten video.

## 🌟 Fitur Utama
- **Manajemen Film:** Tambah, edit, dan hapus data film (CRUD) dengan mudah.
- **Kategori & Genre:** Pengelompokan film berdasarkan genre yang rapi.
- **Sistem Autentikasi:** Fitur login dan register yang aman untuk pengguna.
- **Pencarian Cepat:** Temukan film favorit melalui kolom pencarian.
- **UI Responsif:** Tampilan yang optimal diakses dari smartphone maupun desktop.

## 🛠️ Tech Stack
- **Framework:** Laravel 12
- **Language:** PHP 8.2+
- **Database:** MySQL / MariaDB
- **Frontend:** Tailwind CSS / Blade Templating

## 🚀 Instalasi Cepat

1. **Clone & Masuk Folder:**
   ```bash
   git clone [https://github.com/Dafa-Faturahman-shidiq/movie-stream-laravel.git](https://github.com/Dafa-Faturahman-shidiq/movie-stream-laravel.git)
   cd movie-stream-laravel

2. **Install & Konfigurasi:**
composer install
cp .env.example .env
php artisan key:generate

3. **Database & Running:**
(Pastikan konfigurasi database di file .env sudah benar)
php artisan migrate --seed
php artisan serve

Oleh [Dafa Faturahman](https://github.com/Dafa-Faturahman-shidiq)
