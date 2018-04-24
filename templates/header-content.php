<div class="header__logo">
    <a href="<?php echo home_url( '/' ); ?>">
        <?php if ( \Waboot\template_tags\get_desktop_logo() != "" ) : ?>
            <?php \Waboot\template_tags\desktop_logo(false, 'waboot-desktop-logo'); ?>
        <?php else : ?>
            <?php \Waboot\template_tags\site_title(); ?>
        <?php endif; ?>

        <?php if ( \Waboot\template_tags\get_mobile_logo() != "" ) : ?>
            <?php \Waboot\template_tags\mobile_logo(false, 'waboot-mobile-logo') ?>
        <?php else : ?>
            <?php \Waboot\template_tags\desktop_logo(false, 'waboot-mobile-logo'); ?>
        <?php endif; ?>
    </a>
</div>