<?php
require dirname(__DIR__) . '/app/bootstrap.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: /contact.php', true, 303); exit; }

function fail_form(string $message, int $status = 422): never {
    http_response_code($status);
    $meta = page_meta('Message status | SANET MEDIA TEKNOLOGI', 'Status pengiriman pesan.');
    require __DIR__ . '/includes/header.php';
    echo '<section class="section-pad"><div class="container status-panel"><span class="eyebrow">MESSAGE STATUS</span><h1>We could not process<br><em>your request.</em></h1><p>' . e($message) . '</p><a class="btn btn-primary" href="/contact.php">Back to contact</a></div></section>';
    require __DIR__ . '/includes/footer.php';
    exit;
}
if (!verify_csrf($_POST['csrf_token'] ?? null)) fail_form('Sesi formulir tidak valid atau telah kedaluwarsa. Silakan muat ulang halaman dan coba kembali.', 403);
if (!empty($_POST['website'])) fail_form('Permintaan tidak dapat diproses.', 400);

$now = time();
$last = (int)($_SESSION['last_contact_submit'] ?? 0);
if ($last && ($now - $last) < 30) fail_form('Mohon tunggu sebentar sebelum mengirim pesan berikutnya.', 429);

$name = trim((string)($_POST['name'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$phone = trim((string)($_POST['phone'] ?? ''));
$subject = trim((string)($_POST['subject'] ?? ''));
$message = trim((string)($_POST['message'] ?? ''));

if (mb_strlen($name) < 2 || mb_strlen($name) > 100) fail_form('Nama harus terdiri dari 2–100 karakter.');
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 150) fail_form('Alamat email tidak valid.');
if (strlen($phone) > 30 || mb_strlen($subject) < 2 || mb_strlen($subject) > 150) fail_form('Nomor WhatsApp atau subjek tidak valid.');
if (mb_strlen($message) < 10 || mb_strlen($message) > 5000) fail_form('Pesan harus terdiri dari 10–5000 karakter.');

$_SESSION['last_contact_submit'] = $now;
if (!site_config('mail_enabled')) {
    fail_form('Formulir telah divalidasi, tetapi pengiriman email belum diaktifkan oleh administrator. Silakan hubungi kami melalui WhatsApp.', 503);
}

$to = (string)site_config('contact_email');
$safeSubject = 'Website inquiry: ' . str_replace(["\r","\n"], '', $subject);
$body = "Nama: {$name}\nEmail: {$email}\nWhatsApp: {$phone}\n\nPesan:\n{$message}\n";
$headers = [
    'From: ' . (string)site_config('mail_from'),
    'Reply-To: ' . $email,
    'Content-Type: text/plain; charset=UTF-8',
    'X-Mailer: PHP/' . PHP_VERSION
];
$sent = mail($to, '=?UTF-8?B?' . base64_encode($safeSubject) . '?=', $body, implode("\r\n", $headers));
if (!$sent) fail_form('Pesan belum dapat dikirim. Silakan coba melalui WhatsApp atau hubungi administrator.', 503);
$meta = page_meta('Thank you | SANET MEDIA TEKNOLOGI', 'Pesan Anda telah diterima.');
require __DIR__ . '/includes/header.php';
?>
<section class="section-pad"><div class="container status-panel"><span class="eyebrow">MESSAGE SENT</span><h1>Thank you for<br><em>reaching out.</em></h1><p>Pesan Anda berhasil dikirim. Tim kami akan menindaklanjuti melalui informasi kontak yang diberikan.</p><a class="btn btn-primary" href="/">Back to homepage</a></div></section>
<?php require __DIR__ . '/includes/footer.php'; ?>
