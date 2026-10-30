-- Database belum diwajibkan untuk versi company profile ini.
-- Form kontak dikirim melalui PHP mail() setelah mail_enabled diaktifkan.
-- File ini disediakan sebagai titik awal bila kelak menambah CMS/admin.
CREATE DATABASE IF NOT EXISTS sanetmedia CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE sanetmedia;
CREATE TABLE IF NOT EXISTS contact_messages (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL,
  phone VARCHAR(30) NULL,
  subject VARCHAR(150) NOT NULL,
  message TEXT NOT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  INDEX idx_created_at (created_at)
) ENGINE=InnoDB;
