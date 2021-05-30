<footer class="footer">
    <?php if(!is_page('contact')){ ?>
        <div class="custom-shape-divider-top-1605563144">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill <?php echo is_single() ? " shape-fill-post" : null?> <?php echo is_page( 'pricing' ) ? " shape-fill-pricing" : null ?>"></path>
            </svg>
        </div>
    <?php } ?>
    <div class="footer__list">
        <div class="footer__list-row footer__list-row__one">
            <div class="footer__list-row--logo">
                <a class="withBlurInAnimation" href="<?php echo site_url('/'); ?>"><img src="<?php echo get_theme_file_uri('/images/logos/meeko-logo-white.png'); ?>" /></a> 
            </div>
            <div class="footer__list-row-text">
                35 Kingsland Road, Shoreditch, London E2 8AA
            </div>
            <div class="footer__list-row-text">hello@meekoteams.com</div>
            <div class="footer__list-row-text">020 7042 6317</div>
        </div>
        <div class="footer__list-row footer__list-row__two">
            <div class="footer__list-row--title">Quick Links</div>
            <a href="<?php echo site_url('/process'); ?>" class="footer__list-row--link">Process</a>
            <a href="<?php echo site_url('/about'); ?>" class="footer__list-row--link">About</a>
            <a href="<?php echo site_url('/blog'); ?>" class="footer__list-row--link">Blog</a>
        </div>
        <div class="footer__list-row footer__list-row__three">
            <div class="footer__list-row--title">Support</div>
            <a href="<?php echo site_url('/contact'); ?>" class="footer__list-row--link">Contact</a>
            <a href="<?php echo site_url('/privacy-policy'); ?>" class="footer__list-row--link">Privacy Policy</a>
            <a href="<?php echo site_url('/terms-and-conditions'); ?>" class="footer__list-row--link">Terms & Conditions</a>
        </div>
        <div class="footer__list-row footer__list-row__four">
            <div class="footer__list-row--socials">
                <a target="_blank" href="https://www.facebook.com/MeekoTeams/"><i class="fab fa-facebook-f"></i></a>
                <a target="_blank" href="https://www.linkedin.com/company/meekoteams/?trk=similar-pages_result-card_full-click&originalSubdomain=ie"><i class="fab fa-linkedin-in"></i></a>
                <a target="_blank" href="https://www.instagram.com/meekoteams/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>



    <div class="footer__legals">
        <div>© Copyright Meeko Teams Ltd, 2021</div>
        <div>Meeko Teams Limited is registered in England and Wales number 11660818. Registered office: 35 Kingsland Road, Shoreditch, London, E2 8AA. VAT number 326 265 800</div>
    </div>
</footer>
    
<?php wp_footer(); ?>

</body>
</html>