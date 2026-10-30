# Maintenance & Backup

## Update aplikasi
Simpan salinan sebelum deployment. Uji perubahan di staging terlebih dahulu, lalu deploy source ke `/var/www/sanetmedia`. Jangan menimpa `app/config.php` tanpa backup konfigurasi.

## Backup
```bash
sudo install -d -m 700 /var/backups/sanetmedia
sudo tar -czf /var/backups/sanetmedia/site-$(date +%F).tar.gz \
  --exclude='/var/www/sanetmedia/storage/cache' /var/www/sanetmedia
```
Jika database digunakan:
```bash
sudo mariadb-dump --single-transaction sanetmedia | gzip > /var/backups/sanetmedia/db-$(date +%F).sql.gz
```
Simpan salinan terenkripsi di lokasi terpisah/offsite. Uji proses restore secara berkala.

## Log dan status
```bash
sudo systemctl status apache2
sudo tail -n 100 /var/log/apache2/sanetmedia_error.log
sudo certbot renew --dry-run
df -h
```

## Checklist berkala
- Update security Ubuntu dan PHP.
- Periksa masa berlaku SSL.
- Uji formulir kontak dan tautan WhatsApp.
- Periksa backup dan uji restore.
- Perbarui proyek/layanan hanya dengan informasi yang telah diverifikasi.
- Pantau error log dan kapasitas disk.
