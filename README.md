# SANET MEDIA TEKNOLOGI

Website company profile PHP 8.2 untuk Ubuntu Server + Apache2.

## Isi
- Homepage, About, Services, Portfolio, Contact, custom 404
- Responsive UI, mobile navigation, filter portfolio, WhatsApp CTA
- PHP contact handler dengan CSRF, honeypot, validasi server-side dan rate limit
- SVG logo, SEO metadata, robots.txt, sitemap.xml
- Apache VirtualHost, `.htaccess`, SQL opsional, panduan deployment

## Struktur
`public/` adalah document root. `app/`, `database/`, `storage/`, `deploy/` dan `docs/` harus tetap di luar document root.

## Konfigurasi sebelum deploy
1. Edit `app/config.php`: domain, alamat, email penerima, WhatsApp, URL website.
2. Ubah `public/sitemap.xml` dan `public/robots.txt` sesuai domain.
3. Tambahkan foto proyek dan ganti data contoh pada `public/portfolio.php`.
4. Atur PHP `mail()`/MTA atau sesuaikan handler dengan SMTP provider.
5. Pastikan direktori `storage/` writable oleh user Apache.

## Jalankan lokal
Dari folder proyek:
```bash
php -S 127.0.0.1:8080 -t public
```
Untuk pengujian lokal, email tidak akan terkirim kecuali MTA tersedia. Form akan menampilkan pesan sesuai konfigurasi.

## Keamanan
- Jangan memindahkan `app/` atau `storage/` ke dalam `public/`.
- Jangan commit credential atau file konfigurasi berisi rahasia.
- Gunakan HTTPS di production.
- Ganti placeholder dan tinjau kebijakan privasi sebelum publikasi.
