<footer class="footer">
    <div class="footer__inner inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logo">
            <picture>
                <source srcset='<?php echo ImgPath; ?>/webp/logo.webp' type='image/webp'>
                <img src='<?php echo ImgPath; ?>/logo.png' alt=''>
            </picture>
        </a>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'f-nav',
                'container' => '',
                'menu_class' => 'f-nav__list',
            )
        );
        ?>
    </div>
    <p class="footer__copy"><small>Copyright © Kashiwabara Group All rights reserved.</small></p>
</footer>
<?php wp_footer(); ?>
</body>

</html>