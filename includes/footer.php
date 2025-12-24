        </div>
    </main>
    <footer class="glass-footer py-5 mt-auto">
        <div class="container">
            <div class="row gy-4 align-items-start footer-top">
                <div class="col-lg-3 text-center text-lg-start">
                    <div class="footer-brand d-inline-flex align-items-center gap-3 mb-3">
                        <img src="assets/images/favicon_io/android-chrome-192x192.png" alt="NearBy logo" class="footer-logo">
                        <div>
                            <span class="h5 d-block mb-0">NearBy Housing</span>
                            <small class="text-white-50">Live close. Live better.</small>
                        </div>
                    </div>
                    <p class="footer-copy mb-3">
                        Discover vetted rooms, apartments, and co-living spaces designed for students and young professionals.
                    </p>
                    <p class="footer-maintained small mb-0">Platform managed with care by the NearBy Support Team.</p>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <h6 class="footer-heading">Support</h6>
                    <ul class="footer-list">
                        <li><span>24×7 chat support</span></li>
                        <li><a href="mailto:support@nearbyhousing.com">Send us an email</a></li>
                        <li><a href="guidance.php">Housing guidance</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <h6 class="footer-heading">Quick links</h6>
                    <ul class="footer-list">
                        <li><a href="search.php">For renters</a></li>
                        <li><a href="register.php">Create account</a></li>
                        <li><a href="login.php">Member login</a></li>
                        <li><a href="posts/list.php">Community stories</a></li>
                        <li><a href="contact/request.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <h6 class="footer-heading">Important links</h6>
                    <ul class="footer-list">
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="guidance.php">FAQ</a></li>
                        <li><a href="login.php">My account</a></li>
                        <li><a href="register.php">Register</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h6 class="footer-heading">Download app</h6>
                    <div class="d-flex flex-wrap gap-2 mb-3">
                        <a class="footer-store" href="#" aria-label="Download on Play Store">Play Store</a>
                        <a class="footer-store" href="#" aria-label="Download on App Store">App Store</a>
                    </div>
                    <div class="footer-social d-flex gap-2">
                        <a class="social-link" href="https://www.instagram.com" target="_blank" rel="noopener" aria-label="Instagram">
                            <span>IG</span>
                        </a>
                        <a class="social-link" href="https://www.facebook.com" target="_blank" rel="noopener" aria-label="Facebook">
                            <span>Fb</span>
                        </a>
                        <a class="social-link" href="https://www.youtube.com" target="_blank" rel="noopener" aria-label="YouTube">
                            <span>YT</span>
                        </a>
                        <a class="social-link" href="https://www.linkedin.com" target="_blank" rel="noopener" aria-label="LinkedIn">
                            <span>In</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-bottom d-flex flex-column flex-lg-row justify-content-between align-items-center gap-3">
                <span class="small">Website secured and maintained by <strong>NearBy Web &amp; Security</strong></span>
                <span class="small">© <?= date('Y') ?> NearBy Student Housing. All rights reserved.</span>
            </div>
        </div>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="assets/js/main.js"></script>
<?php if (!empty($pageScripts)): ?>
    <?php foreach ($pageScripts as $scriptPath): ?>
        <script src="<?= htmlspecialchars($scriptPath) ?>" type="module"></script>
    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>
