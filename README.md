# Jaya Futsal - Sistem Reservasi Lapangan

Project Laravel 12 untuk sistem reservasi futsal dengan dua sisi tampilan:

- User: landing page, login, register, reservasi, dan membership.
- Admin: dashboard, kelola jadwal, kelola reservasi, laporan, membership, dan pelanggan.

## Struktur Utama

- Blade layouts dan partials: `resources/views/layouts` dan `resources/views/partials`
- Halaman user: `resources/views/pages/user`
- Halaman admin: `resources/views/pages/admin`
- Aset statis: `public/assets`

## Menjalankan Project (Local) - Langkah demi Langkah

### 1) Prasyarat

- PHP 8.2+ dan Composer sudah terpasang.
- Node.js (opsional, hanya jika ingin build asset Vite).

### 2) Install dependency

```
composer install
```

### 3) Buat file environment

```
copy .env.example .env
```

### 4) Generate app key

```
php artisan key:generate
```

### 5) (Opsional) Konfigurasi database

Jika ingin memakai database, atur konfigurasi `DB_*` di `.env`, lalu jalankan:

```
php artisan migrate
```

### 6) Jalankan server

```
php artisan serve
```

Project akan berjalan di http://127.0.0.1:8000

### 7) (Opsional) Build asset Vite

Jika menggunakan Vite (bukan asset statis di `public/assets`):

```
npm install
npm run dev
```

## Catatan

- Saat ini halaman masih bersifat statis melalui `Route::view` di `routes/web.php`.
- Integrasi database dan controller bisa ditambahkan setelah kebutuhan data siap.
