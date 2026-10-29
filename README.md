# Website Desa Digital

Website Desa Digital adalah aplikasi berbasis web yang dibuat untuk membantu penyampaian informasi desa secara online.

## Teknologi yang Digunakan
- PHP
- MySQL
- Nginx
- Docker
- Docker Compose

## Struktur Project
- `app/` - File aplikasi web
- `mysql/` - Database dan file inisialisasi SQL
- `nginx/` - Konfigurasi web server
- `Dockerfile` - Konfigurasi pembuatan image
- `docker-compose.yml` - Konfigurasi layanan Docker

## Cara Menjalankan
Pastikan Docker dan Docker Compose sudah terpasang di server.

Jalankan perintah berikut dari direktori project:

```bash
docker compose up -d --build
