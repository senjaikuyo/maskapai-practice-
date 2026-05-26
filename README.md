# ✈️ Aplikasi Maskapai - Panduan Instalasi

Project ini menggunakan Laravel dan dijalankan menggunakan Laragon sebagai local development environment.

## 📌 Prasyarat

Pastikan sebelum menjalankan project:

- Laragon sudah aktif
  - Apache: Started
  - MySQL: Started
- Composer sudah terinstall secara global
- Folder project sudah diekstrak

---

## 🛠️ Langkah Instalasi

### 1. Letakkan Folder Project

Pastikan folder project berada di direktori berikut:

```bash
C:\\laragon\\www\\maskapai
```

---

### 2. Buka Terminal / CMD

Masuk ke folder project:

```bash
cd C:\\laragon\\www\\maskapai
```

---

### 3. Install Dependency Laravel

Jalankan perintah berikut untuk menginstall dependency Laravel dan membuat ulang folder `vendor`:

```bash
composer install
```

Tunggu sampai proses selesai. Jangan ditutup tengah jalan terus bingung sendiri kenapa Laravel ngamuk 😹

---

### 4. Setup File Environment

Duplikat file `.env.example` menjadi `.env`

#### Jika menggunakan Git Bash / Terminal Laragon:

```bash
cp .env.example .env
```

#### Jika menggunakan CMD Windows:

```bash
copy .env.example .env
```

---

### 5. Generate Application Key

```bash
php artisan key:generate
```

---

### 6. Konfigurasi Database

Buka file `.env`, lalu ubah konfigurasi database menjadi seperti berikut:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_penerbangan
DB_USERNAME=root
DB_PASSWORD=
```

---

### 7. Import Database SQL

1. Buka browser:

```txt
http://localhost/phpmyadmin
```

2. Buat database baru dengan nama:

```txt
db_penerbangan
```

3. Masuk ke database tersebut

4. Pilih tab `Import`

5. Klik `Choose File`

6. Pilih file:

```bash
C:\\laragon\\www\\maskapai\\maskapai.sql
```

7. Klik tombol `Import / Go`

Karena ngetik query manual satu-satu itu kegiatan kaum dongo 🤓

---

### 8. Clear Cache Laravel

```bash
php artisan config:clear
```

---

### 9. Jalankan Development Server

```bash
php artisan serve
```

---

## 🌐 Link Pengujian

### CRUD Data Pesawat

```txt
[http://127.0.0.1:8000/pesawat](http://127.0.0.1:8000/pesawat)
```

### Laporan Manifes Penerbangan

```txt
[http://127.0.0.1:8000/laporan-penerbangan](http://127.0.0.1:8000/laporan-penerbangan)
```

---

## ✅ Selesai

Jika semua langkah dilakukan dengan benar, aplikasi sudah dapat dijalankan secara lokal tanpa drama error `vendor missing`, `.env not found`, atau manusia yang lupa nyalain MySQL
