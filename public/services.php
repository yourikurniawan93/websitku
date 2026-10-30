<?php
require dirname(__DIR__) . '/app/bootstrap.php';
$meta = page_meta('Our Services | SANET MEDIA TEKNOLOGI', 'Layanan jaringan, konektivitas, IT support, server, cloud, pengembangan website, software, dan keamanan.');
$services = [
['01','⌘','Network Infrastructure','Perencanaan, instalasi, konfigurasi, dan optimasi infrastruktur LAN, WLAN, routing, switching, serta structured cabling.'],
['02','◉','Internet & Connectivity Solutions','Solusi konektivitas internet, integrasi jaringan, dan pengelolaan koneksi untuk kebutuhan operasional.'],
['03','⚙','IT Consulting & Support','Konsultasi teknologi, troubleshooting, dukungan teknis, dan rekomendasi pengembangan sistem.'],
['04','▤','Server & Data Center Solutions','Implementasi server, virtualisasi, penyimpanan, backup, dan pengelolaan infrastruktur data.'],
['05','⌘','Website & Software Development','Pengembangan website dan aplikasi yang responsif, terukur, serta disesuaikan dengan proses bisnis.'],
['06','◈','CCTV & Security Systems','Perencanaan dan implementasi sistem pemantauan serta solusi keamanan terintegrasi.'],
['07','☁','Cloud Computing Solutions','Adopsi cloud, deployment layanan, pengelolaan resource, dan strategi skalabilitas.'],
['08','✳','IT Maintenance','Pemeliharaan berkala, pemeriksaan perangkat, pembaruan sistem, dan dukungan keberlangsungan layanan.']
];
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero"><div class="container"><span class="eyebrow">OUR CAPABILITIES</span><h1>End-to-end solutions<br>for your <em>digital foundation.</em></h1><p>Dari konektivitas hingga pengembangan digital, kami membantu menyatukan teknologi dengan kebutuhan bisnis.</p></div></section>
<section class="section-pad"><div class="container service-page-grid"><?php foreach($services as $s): ?><article class="service-detail"><div class="card-top"><span><?= e($s[0]) ?></span><b><?= e($s[1]) ?></b></div><h2><?= e($s[2]) ?></h2><p><?= e($s[3]) ?></p><a class="text-link" href="/contact.php?service=<?= rawurlencode($s[2]) ?>">Discuss this service <span>↗</span></a></article><?php endforeach; ?></div></section>
<section class="cta-section"><div class="container cta-inner"><span class="eyebrow">LET'S BUILD TOGETHER</span><h2>Have a technology<br><em>challenge to solve?</em></h2><a class="btn btn-light" href="/contact.php">Talk to our team <span>↗</span></a></div></section>
<?php require __DIR__ . '/includes/footer.php'; ?>
