</main>
<footer class="site-footer">
  <div class="container footer-grid">
    <div class="footer-brand">
      <a class="brand brand-light" href="/"><img src="/assets/images/logo.svg" width="42" height="42" alt=""><span><strong>SANET</strong><small>MEDIA TEKNOLOGI</small></span></a>
      <p>Connecting Technology, Empowering Digital Future.</p>
    </div>
    <div><h3>Explore</h3><a href="/about.php">About Us</a><a href="/services.php">Our Services</a><a href="/portfolio.php">Portfolio</a></div>
    <div><h3>Contact</h3><a href="mailto:<?= e((string)site_config('company_email')) ?>"><?= e((string)site_config('company_email')) ?></a><a href="<?= e(whatsapp_url()) ?>" target="_blank" rel="noopener">WhatsApp</a><span><?= e((string)site_config('address')) ?></span></div>
    <div class="footer-cta"><span class="eyebrow">LET'S CONNECT</span><h3>Ready to build what's next?</h3><a class="text-link" href="/contact.php">Start a conversation <span>↗</span></a></div>
  </div>
  <div class="container footer-bottom"><span>© <?= date('Y') ?> SANET MEDIA TEKNOLOGI. All rights reserved.</span><span>Technology with purpose.</span></div>
</footer>
<a class="whatsapp-float" href="<?= e(whatsapp_url()) ?>" target="_blank" rel="noopener" aria-label="Hubungi kami melalui WhatsApp">✆</a>
<button class="back-top" aria-label="Kembali ke atas">↑</button>
<script src="/assets/js/main.js" defer></script>
</body></html>
