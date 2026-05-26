📖 Panduan Instalasi Praktikum: Aplikasi Maskapai
Ikuti langkah-langkah di bawah ini untuk menjalankan project pada lingkungan lokal (Laragon).

 PENTING: Prasyarat Sistem
Aplikasi Laragon sudah berjalan (Apache & MySQL status: Started).
Composer sudah terinstal secara global di laptop/PC masing-masing.
🛠️ Langkah-Langkah Instalasi
Letakkan Folder Project
Pastikan folder project hasil ekstrak berada tepat di direktori root web Laragon Anda:
C:\laragon\www\maskapai
Buka Terminal / Command Prompt (CMD)
Masuk ke dalam direktori project dengan menjalankan perintah berikut:
cd C:\laragon\www\maskapai
Instalasi Dependency PHP (Menumbuhkan Folder Vendor)
Unduh ulang library core framework Laravel yang dibutuhkan dengan perintah:
composer install
*Tunggu proses download hingga selesai sampai folder vendor muncul kembali.
Setup File Environment (.env)
Duplikat file template konfigurasi bawaan dengan perintah:
cp .env.example .env
*Jika menggunakan CMD Windows biasa, gunakan perintah: copy .env.example .env
Generate Application Key
Buat kunci enkripsi aplikasi baru lewat terminal:
php artisan key:generate
Konfigurasi Database di .env
Buka file .env menggunakan VS Code, sesuaikan blok data berikut agar pas dengan Laragon:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=maskapai
DB_USERNAME=root
DB_PASSWORD=
*Catatan: Kosongkan nilai DB_PASSWORD karena MySQL default Laragon tidak berpassword.
Import file maskapai.sql ke phpMyAdmin
Akses browser ke: http://localhost/phpmyadmin
Buat database baru dengan nama exact: db_penerbangan
Masuk ke dalam database baru tersebut, pilih tab Import.
Klik Choose File dan arahkan ke file mentah di: C:\laragon\www\maskapai\maskapai.sql
Scroll ke paling bawah lalu klik button Import / Go.
Clear Cache & Jalankan Aplikasi
Bersihkan sisa cache config lama, lalu jalankan development server:
php artisan config:clear
php artisan serve
