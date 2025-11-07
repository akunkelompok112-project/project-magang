// ...existing code...

# 🚀 Project Magang

Repository ini berisi source code project magang yang dijalankan menggunakan
Laravel 12 + Docker + Nginx + MySQL + PHPMyAdmin. Tujuan: menyamakan dev
environment seluruh tim tanpa harus install manual.

---

## 📁 Struktur Folder (singkat)
project-magang/
- docker/
  - php/ (Dockerfile, php.ini)
  - nginx/ (default.conf)
  - mysql/
  - data/ (ignored)
- src/
  - laravel-app/ (kode Laravel)
- docker-compose.yml
- .env.example

---

## ⚙️ Prasyarat
- Docker & Docker Compose (CLI v2 recommended)
- Git
- (opsional) PowerShell di Windows

---

## 🚀 Cara cepat — Setup dan jalankan

1. Clone repository
```bash
git clone https://github.com/akunkelompok112-project/project-magang.git
cd project-magang
```

2. Salin file environment
- macOS / Linux:
```bash
cp src/laravel-app/.env.example src/laravel-app/.env
```
- Windows PowerShell:
```powershell
copy src\laravel-app\.env.example src\laravel-app\.env
```

3. Build & jalankan container
```bash
docker compose up -d --build
```
Tunggu beberapa menit sesuai koneksi dan spesifikasi mesin.

4. Masuk ke container PHP untuk instalasi dependency Laravel
```bash
docker exec -it magang-php bash
# di dalam container:
composer install
php artisan key:generate
php artisan migrate
exit
```

---

## 🔗 Akses layanan
- Laravel App: http://localhost (port 80)
- phpMyAdmin: http://localhost:8080
- MySQL: localhost:3306 (akses dari host/client)

---

## 🔐 Kredensial database (default)
- Database: magang_db
- User: magang_user
- Password: magang_pass
- Root password: root

Nilai ini disetel di file `.env` pada root dan di `src/laravel-app/.env`.

---

## 🧹 Membersihkan / Rebuild container
- Stop semua service:
```bash
docker compose down
```
- Rebuild total (hapus volume data juga):
```bash
docker compose down -v
docker compose up -d --build
```

---

## 💡 Tips & catatan
- Jangan commit file `.env` atau folder `docker/mysql/data/`.
- Selalu buat branch baru untuk fitur:
```bash
git checkout -b fitur-nama-fitur
```
- Tarik perubahan terbaru sebelum push:
```bash
git pull origin main
```
- Jika menemukan error permission pada storage:
```bash
# di host (Linux/macOS)
sudo chmod -R 777 src/laravel-app/storage
# di Windows gunakan File Explorer atau sesuaikan permission via WSL jika perlu
```

---

## Kontribusi
Buat issue atau PR dengan deskripsi jelas dan langkah reproduksi. Ikuti gaya coding Laravel dan jalankan migration/test sebelum submit.

// ...existing code...