<?php
http_response_code(404);
require dirname(__DIR__) . '/app/bootstrap.php';
$meta = page_meta('404 | SANET MEDIA TEKNOLOGI', 'Halaman yang Anda cari tidak ditemukan.');
require __DIR__ . '/includes/header.php';
?>
<section class="section-pad"><div class="container status-panel"><span class="eyebrow">ERROR 404</span><h1>Looks like this<br><em>page is offline.</em></h1><p>Halaman yang Anda cari tidak ditemukan atau sudah dipindahkan.</p><a class="btn btn-primary" href="/">Return home <span>↗</span></a></div></section>
<?php require __DIR__ . '/includes/footer.php'; ?>
