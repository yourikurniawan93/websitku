<?php
$pageTitle = $meta['title'] ?? 'SANET MEDIA TEKNOLOGI | Digital Infrastructure & IT Solutions';
$pageDescription = $meta['description'] ?? 'Solusi teknologi informasi, infrastruktur jaringan, konektivitas, server, dan layanan digital untuk bisnis.';
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($pageTitle) ?></title>
  <meta name="description" content="<?= e($pageDescription) ?>">
  <meta name="theme-color" content="#071A33">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="SANET MEDIA TEKNOLOGI">
  <meta property="og:title" content="<?= e($pageTitle) ?>">
  <meta property="og:description" content="<?= e($pageDescription) ?>">
  <meta property="og:url" content="<?= e(url(ltrim($_SERVER['REQUEST_URI'] ?? '/', '/'))) ?>">
  <meta property="og:image" content="<?= e(url('assets/images/og-cover.svg')) ?>">
  <link rel="canonical" href="<?= e(url(ltrim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/', '/'))) ?>">
  <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<a class="skip-link" href="#main">Lewati ke konten</a>
<header class="site-header">
  <div class="container nav-wrap">
    <a class="brand" href="/" aria-label="SANET MEDIA TEKNOLOGI - Beranda">
      <img src="/assets/images/logo.svg" width="42" height="42" alt="">
      <span><strong>SANET</strong><small>MEDIA TEKNOLOGI</small></span>
    </a>
    <button class="nav-toggle" aria-label="Buka navigasi" aria-expanded="false" aria-controls="main-nav"><span></span><span></span><span></span></button>
    <nav id="main-nav" class="main-nav" aria-label="Navigasi utama">
      <a class="<?= active_page('index.php') ?>" href="/">Home</a>
      <a class="<?= active_page('about.php') ?>" href="/about.php">About Us</a>
      <a class="<?= active_page('services.php') ?>" href="/services.php">Services</a>
      <a class="<?= active_page('portfolio.php') ?>" href="/portfolio.php">Portfolio</a>
      <a class="nav-contact<?= active_page('contact.php') ?>" href="/contact.php">Contact Us <span>↗</span></a>
    </nav>
  </div>
</header>
<main id="main">
