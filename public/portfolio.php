<?php
require dirname(__DIR__) . '/app/bootstrap.php';
$meta = page_meta('Portfolio | SANET MEDIA TEKNOLOGI', 'Contoh kategori proyek infrastruktur jaringan, server, cloud, keamanan, dan pengembangan digital.');
$projects = [
['Enterprise Network Deployment','Network','Perencanaan dan implementasi jaringan terstruktur untuk lingkungan kerja.','NETWORK / 001','art-network'],
['Modern Server Environment','Server','Contoh rancangan lingkungan server dan layanan infrastruktur.','SERVER / 002','art-cloud'],
['Integrated Security System','Security','Contoh integrasi sistem pemantauan dan keamanan.','SECURITY / 003','art-security'],
['Business Website Platform','Development','Contoh pengembangan website untuk kebutuhan komunikasi bisnis.','DIGITAL / 004','art-digital'],
['Cloud-ready Infrastructure','Cloud','Contoh pendekatan infrastruktur yang siap dikembangkan ke cloud.','CLOUD / 005','art-cloud'],
['Office Connectivity Upgrade','Network','Contoh peningkatan konektivitas dan segmentasi jaringan kantor.','NETWORK / 006','art-network']
];
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero"><div class="container"><span class="eyebrow">SELECTED PROJECTS</span><h1>Practical solutions.<br><em>Meaningful outcomes.</em></h1><p>Ruang untuk menampilkan hasil kerja, kapabilitas, dan perjalanan kolaborasi kami.</p></div></section>
<section class="section-pad"><div class="container"><div class="filter-bar" role="group" aria-label="Filter kategori proyek"><button class="filter-btn active" data-filter="all">All projects</button><?php foreach(['Network','Server','Security','Development','Cloud'] as $cat): ?><button class="filter-btn" data-filter="<?= e($cat) ?>"><?= e($cat) ?></button><?php endforeach; ?></div>
<div class="portfolio-grid"><?php foreach($projects as $i=>$p): ?><article class="portfolio-item" data-category="<?= e($p[1]) ?>"><div class="project-art <?= e($p[4]) ?>"><span><?= e($p[3]) ?></span><div class="portfolio-symbol"><?= ['◉','☁','◈','⌘','☁','◉'][$i] ?></div></div><div class="portfolio-info"><small><?= e($p[1]) ?></small><h2><?= e($p[0]) ?></h2><p><?= e($p[2]) ?></p><span class="demo-note">Sample content — replace with verified project information.</span></div></article><?php endforeach; ?></div></div></section>
<?php require __DIR__ . '/includes/footer.php'; ?>
