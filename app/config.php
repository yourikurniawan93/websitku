<?php
declare(strict_types=1);

/*
 * Konfigurasi SANET MEDIA TEKNOLOGI.
 * Simpan file ini di luar document root.
 */
return [
    'site_name' => 'Siti jukianti',
    'site_url' => 'https://sanetmedia.com',
    'default_locale' => 'id_ID',
    'contact_email' => 'hello@sanetmedia.com', // Ganti dengan email aktif
    'company_email' => 'hello@sanetmedia.com',
    'phone_display' => '+62 8xx-xxxx-xxxx',     // Ganti dengan nomor resmi
    'whatsapp_number' => '628xxxxxxxxxx',      // Format internasional, tanpa + dan spasi
    'address' => 'Alamat perusahaan akan diperbarui.',
    'mail_from' => 'website@sanetmedia.com',   // Gunakan alamat pada domain Anda
    'mail_enabled' => false,                   // Aktifkan setelah MTA/SMTP dikonfigurasi
    'storage_path' => dirname(__DIR__) . '/storage',
];
