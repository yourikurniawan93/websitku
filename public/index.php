<?php
require dirname(__DIR__) . '/app/bootstrap.php';
$meta = page_meta('SANET MEDIA TEKNOLOGI | Connecting Technology', 'Kami menghadirkan solusi teknologi informasi, infrastruktur jaringan, dan layanan digital untuk mendukung transformasi bisnis Anda.');
require __DIR__ . '/includes/header.php';
?>
<section class="hero">
 <div class="hero-glow"></div><div class="container hero-grid">
  <div class="hero-copy">
   <span class="eyebrow"><i></i> TECHNOLOGY · CONNECTIVITY · INNOVATION</span>
   <h1>Building Digital Infrastructure for a <em>Connected Future.</em></h1>
   <p>Kami menghadirkan solusi teknologi informasi, infrastruktur jaringan, dan layanan digital untuk mendukung transformasi bisnis Anda.</p>
   <div class="hero-actions"><a class="btn btn-primary" href="/services.php">Explore Our Services <span>↗</span></a><a class="btn btn-ghost" href="/contact.php">Contact Us <span>→</span></a></div>
   <div class="hero-note"><span class="pulse-dot"></span> Technology that moves your business forward</div>
  </div>
  <div class="hero-visual" aria-label="Ilustrasi abstrak infrastruktur jaringan digital">
   <div class="orbit orbit-one"></div><div class="orbit orbit-two"></div><div class="orbit orbit-three"></div>
   <div class="core-node"><div class="core-inner">S<span>+</span></div><small>CONNECTED CORE</small></div>
   <div class="node node-a"><b>01</b><span>NETWORK</span></div><div class="node node-b"><b>02</b><span>CLOUD</span></div><div class="node node-c"><b>03</b><span>SECURITY</span></div>
   <div class="connection-line line-a"></div><div class="connection-line line-b"></div><div class="connection-line line-c"></div>
   <div class="visual-caption"><span>● SYSTEM ONLINE</span><small>CONNECTIVITY / 24—7</small></div>
  </div>
 </div>
 <div class="container hero-bottom"><span>01 / DIGITAL INFRASTRUCTURE</span><span>SCROLL TO EXPLORE ↓</span></div>
</section>
<section class="intro section-pad"><div class="container intro-grid">
 <div><span class="eyebrow">WHO WE ARE</span><h2>Technology is more than tools.<br><em>It's your next advantage.</em></h2></div>
 <div class="intro-copy"><p>SANET MEDIA TEKNOLOGI berfokus pada penyediaan solusi teknologi yang membantu organisasi membangun fondasi digital yang andal, aman, dan siap berkembang.</p><a class="text-link" href="/about.php">Discover our company <span>↗</span></a></div>
</div></section>
<section class="services-section section-pad"><div class="container">
 <div class="section-heading"><div><span class="eyebrow">WHAT WE DO</span><h2>Technology solutions.<br><em>Built around your needs.</em></h2></div><a class="text-link" href="/services.php">View all services <span>↗</span></a></div>
 <div class="service-grid">
 <?php $services = [
 ['01','⌘','Network Infrastructure','Desain, implementasi, dan optimasi jaringan untuk konektivitas yang stabil.'],
 ['02','◈','Internet & Connectivity','Solusi konektivitas untuk mendukung operasional bisnis tanpa hambatan.'],
 ['03','⌁','Server & Cloud Solutions','Infrastruktur server dan cloud yang skalabel serta mudah dikelola.'],
 ['04','✳','Digital Development','Website dan software yang dirancang untuk kebutuhan bisnis.']
 ]; foreach ($services as $s): ?>
 <a class="service-card" href="/services.php"><div class="card-top"><span><?= e($s[0]) ?></span><b><?= e($s[1]) ?></b></div><h3><?= e($s[2]) ?></h3><p><?= e($s[3]) ?></p><span class="card-arrow">↗</span></a>
 <?php endforeach; ?>
 </div>
</div></section>
<section class="why-section section-pad"><div class="container why-grid"><div><span class="eyebrow">WHY SANET</span><h2>A dependable partner for your <em>digital journey.</em></h2><p class="muted">Kami mengutamakan pendekatan yang terukur, komunikasi yang jelas, dan solusi yang sesuai dengan kebutuhan.</p></div>
 <div class="why-list"><div><span>01</span><section><h3>Thoughtful engineering</h3><p>Solusi dirancang berdasarkan kebutuhan dan tujuan operasional.</p></section></div><div><span>02</span><section><h3>Reliable execution</h3><p>Fokus pada kualitas implementasi, dokumentasi, dan keberlanjutan.</p></section></div><div><span>03</span><section><h3>Long-term support</h3><p>Pendekatan kolaboratif untuk kebutuhan teknologi yang terus berkembang.</p></section></div></div>
</div></section>
<section class="projects-section section-pad"><div class="container"><div class="section-heading"><div><span class="eyebrow">SELECTED WORK</span><h2>Ideas into <em>impact.</em></h2></div><a class="text-link" href="/portfolio.php">Explore portfolio <span>↗</span></a></div>
 <div class="project-grid"><a class="project-card project-large" href="/portfolio.php"><div class="project-art art-network"><span>NETWORK / 001</span><div class="network-art">◉<i></i><i></i><i></i></div></div><div><small>NETWORK INFRASTRUCTURE</small><h3>Enterprise Network Deployment</h3></div></a><a class="project-card" href="/portfolio.php"><div class="project-art art-cloud"><span>CLOUD / 002</span><div class="cloud-art">☁</div></div><div><small>SERVER & CLOUD</small><h3>Modern Server Environment</h3></div></a></div>
 <p class="demo-note">Contoh kategori dan visual portofolio. Ganti dengan dokumentasi proyek perusahaan yang sebenarnya.</p>
</div></section>
<section class="partners-section"><div class="container partners-row"><span>TECHNOLOGY ECOSYSTEM</span><b>NETWORKING</b><b>INFRASTRUCTURE</b><b>CYBERSECURITY</b><b>CLOUD</b><b>DEVELOPMENT</b></div></section>
<section class="cta-section"><div class="container cta-inner"><span class="eyebrow">YOUR NEXT STEP STARTS HERE</span><h2>Let's connect your business<br>to <em>what's possible.</em></h2><a class="btn btn-light" href="/contact.php">Discuss your project <span>↗</span></a></div></section>
<?php require __DIR__ . '/includes/footer.php'; ?>
