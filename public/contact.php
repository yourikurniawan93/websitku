<?php
require dirname(__DIR__) . '/app/bootstrap.php';
$meta = page_meta('Contact Us | SANET MEDIA TEKNOLOGI', 'Hubungi SANET MEDIA TEKNOLOGI untuk konsultasi kebutuhan teknologi, jaringan, server, dan solusi digital.');
$prefill = isset($_GET['service']) ? trim((string)$_GET['service']) : '';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero"><div class="container"><span class="eyebrow">CONTACT</span><h1>Let's start a<br><em>meaningful connection.</em></h1><p>Ceritakan kebutuhan Anda. Kami akan membantu mengidentifikasi langkah teknologi yang tepat.</p></div></section>
<section class="section-pad"><div class="container contact-grid"><div class="contact-info"><span class="eyebrow">GET IN TOUCH</span><h2>We'd love to<br>hear from you.</h2><p>Gunakan formulir atau hubungi kami melalui kanal berikut. Ganti seluruh placeholder dengan informasi resmi perusahaan sebelum website dipublikasikan.</p><div class="contact-line"><small>EMAIL</small><a href="mailto:<?= e((string)site_config('company_email')) ?>"><?= e((string)site_config('company_email')) ?></a></div><div class="contact-line"><small>WHATSAPP</small><a href="<?= e(whatsapp_url()) ?>" target="_blank" rel="noopener"><?= e((string)site_config('phone_display')) ?></a></div><div class="contact-line"><small>OFFICE</small><span><?= e((string)site_config('address')) ?></span></div></div>
<form class="contact-form" method="post" action="/send-message.php">
<input type="hidden" name="csrf_token" value="<?= e(csrf_token()) ?>">
<div class="trap-field" aria-hidden="true"><label>Leave this field empty<input name="website" tabindex="-1" autocomplete="off"></label></div>
<div class="form-row"><label>Nama lengkap<input name="name" required maxlength="100" autocomplete="name" placeholder="Nama Anda"></label><label>Email<input type="email" name="email" required maxlength="150" autocomplete="email" placeholder="nama@email.com"></label></div>
<div class="form-row"><label>Nomor WhatsApp<input name="phone" maxlength="30" autocomplete="tel" placeholder="+62..."></label><label>Subjek<input name="subject" required maxlength="150" value="<?= e($prefill) ?>" placeholder="Apa yang ingin dibahas?"></label></div>
<label>Pesan<textarea name="message" rows="5" required maxlength="5000" placeholder="Ceritakan kebutuhan atau tantangan Anda..."></textarea></label>
<button class="btn btn-primary" type="submit">Send message <span>↗</span></button>
<p class="form-note">Dengan mengirim formulir, Anda menyetujui bahwa informasi ini digunakan untuk menindaklanjuti permintaan Anda.</p>
</form></div></section>
<?php require __DIR__ . '/includes/footer.php'; ?>
