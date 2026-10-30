# Instalasi Ubuntu Server + Apache2

Contoh menggunakan Ubuntu 24.04 LTS dan PHP dari repositori Ubuntu. Ubuntu 24.04 menyediakan PHP 8.3; gunakan versi yang didukung repositori OS Anda. Aplikasi kompatibel dengan PHP 8.2+.

## 1. Update sistem dan install paket
```bash
sudo apt update
sudo apt upgrade -y
sudo apt install -y apache2 php libapache2-mod-php php-cli php-mbstring php-xml php-curl unzip certbot python3-certbot-apache
sudo systemctl enable --now apache2
php -v
```
MariaDB tidak wajib untuk versi company profile ini. Jika nanti menggunakan database:
```bash
sudo apt install -y mariadb-server php-mysql
sudo systemctl enable --now mariadb
sudo mysql_secure_installation
```

## 2. Upload source dan siapkan direktori
Upload ZIP ke server, lalu:
```bash
sudo mkdir -p /var/www/sanetmedia
sudo unzip sanetmedia.zip -d /var/www/
sudo chown -R root:www-data /var/www/sanetmedia
sudo find /var/www/sanetmedia -type d -exec chmod 755 {} \;
sudo find /var/www/sanetmedia -type f -exec chmod 644 {} \;
sudo mkdir -p /var/www/sanetmedia/storage
sudo chown -R www-data:www-data /var/www/sanetmedia/storage
sudo chmod 750 /var/www/sanetmedia/storage
```
Pastikan hasil ekstraksi menghasilkan `/var/www/sanetmedia/public/index.php`. Jika folder ZIP diekstrak menjadi nested folder, pindahkan isinya agar struktur sesuai.

## 3. Konfigurasi aplikasi
```bash
sudo nano /var/www/sanetmedia/app/config.php
```
Ubah `site_url`, email penerima, nomor WhatsApp, alamat, dan `mail_from`. `mail_enabled` tetap `false` sampai pengiriman email server benar-benar disiapkan dan diuji. File config berada di luar document root.

## 4. Apache VirtualHost
```bash
sudo cp /var/www/sanetmedia/deploy/apache-sanetmedia.conf /etc/apache2/sites-available/sanetmedia.conf
sudo a2enmod rewrite headers
sudo a2ensite sanetmedia.conf
sudo a2dissite 000-default.conf
sudo apache2ctl configtest
sudo systemctl reload apache2
```
Jika domain belum mengarah ke server, uji menggunakan hosts file lokal atau IP server. Pastikan DNS A/AAAA domain dan `www` mengarah ke VPS.

## 5. Firewall
```bash
sudo ufw allow OpenSSH
sudo ufw allow 'Apache Full'
sudo ufw enable
sudo ufw status
```
Jangan aktifkan UFW sebelum memastikan akses SSH diizinkan.

## 6. HTTPS Let's Encrypt
Setelah DNS aktif dan port 80/443 dapat dijangkau:
```bash
sudo certbot --apache -d sanetmedia.com -d www.sanetmedia.com
sudo certbot renew --dry-run
```
Certbot akan mengubah konfigurasi Apache untuk HTTPS. Periksa:
```bash
sudo apache2ctl configtest
sudo systemctl reload apache2
```

## 7. Pengiriman email formulir
Aplikasi menggunakan `mail()` PHP. Instal dan konfigurasi MTA atau gunakan SMTP relay tepercaya sesuai provider email Anda. Jangan mengaktifkan `mail_enabled` sebelum konfigurasi dan uji pengiriman berhasil. Untuk production skala lebih besar, integrasikan SMTP library yang terpelihara dan simpan kredensial di environment/secret store di luar webroot.

## 8. Pengujian
```bash
curl -I http://sanetmedia.com
curl -I https://sanetmedia.com
sudo tail -f /var/log/apache2/sanetmedia_error.log
sudo journalctl -u apache2 -f
```
Uji seluruh menu, mobile layout, filter portfolio, tautan WhatsApp, form validasi, CSRF, dan halaman 404.

## 9. Troubleshooting
- 403: periksa permission setiap direktori induk dan aturan `<Directory>`.
- 404: pastikan `DocumentRoot` menunjuk ke `/var/www/sanetmedia/public`.
- 500: cek log Apache dan sintaks PHP dengan `php -l file.php`.
- Form gagal: `mail_enabled` mungkin masih `false`, atau MTA/SMTP belum dikonfigurasi.
- CSS tidak muncul: pastikan file di `public/assets/css/style.css` dan URL diawali `/assets/`.
- Certbot gagal: periksa DNS, port 80, firewall, dan konfigurasi VirtualHost.

## 10. Pemeriksaan syntax
```bash
find /var/www/sanetmedia -name '*.php' -print0 | xargs -0 -n1 php -l
sudo apache2ctl configtest
```
