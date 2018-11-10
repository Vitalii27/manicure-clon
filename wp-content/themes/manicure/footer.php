<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package manicure
 */

?>

</main>
<?php $header = get_option('header'); ?>
<?php $footer = get_option('footer'); ?>
<footer class="footer" id="footer">
    <div class="container-fluid">
        <div class="footer_container">

                <div class="footer_logo">
                    <?php if (!empty($header['header-logo'])) {
                        ?>
                        <a href="#hero" class="footer_link"> <img src="<?php echo $header['header-logo']; ?>" alt="logo"
                                                                  class="footer_img">
                            <p><?php echo $header['header-logo-text']; ?></p>
                        </a>
                    <?php } ?>
                </div>

            <div class="footer_copy">
                <div class="footer_menu">
                    <?php
                    $args = array(
                        'theme_location' => 'footer',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'menu_class' => '',
                        'walker' => '',
                        'container' => 'ul',

                    );
                    wp_nav_menu($args);

                    ?>
                </div>
                <?php if (!empty($footer['footer-menu-text'])) {
                    ?>
                    <div class="footer_copy-text"><?php echo $footer['footer-menu-text']; ?></div>
                    <div class="footer_links">
                        <?php if (!empty($footer['footer_link-text-web'])) {
                            ?>
                            <a href="<?php echo $footer['link-wb-st']; ?>" target="_blank"
                               class="footer_link-web"><?php echo $footer['footer_link-text-web']; ?></a>
                        <?php } ?>
                        <?php if (!empty($footer['footer_link-data'])) {
                            ?>
                            <a href="<?php echo get_template_directory_uri() ?>/assets/pdf/dates.pdf" target="_blank"
                               class="footer_link-web"><?php echo $footer['footer_link-data']; ?></a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>

            <div class="footer_social">
                <?php if (!empty($footer['vk-icon'])) {
                    ?>
                    <a href="<?php echo $footer['vk-link']; ?>"><img
                                src="<?php echo $footer['vk-icon']; ?>" alt="icon"></a>
                <?php } ?>
                <?php if (!empty($footer['fb-icon'])) {
                    ?>
                    <a href="<?php echo $footer['fb-link']; ?>"><img
                                src="<?php echo $footer['fb-icon']; ?>" alt="icon"></a>
                <?php } ?>
                <?php if (!empty($footer['insta-icon'])) {
                    ?>
                    <a href="<?php echo $footer['insta-link']; ?>"><img
                                src="<?php echo $footer['insta-icon']; ?>" alt="icon"></a>
                <?php } ?>

            </div>

        </div>

    </div>
</footer>
<?php wp_footer(); ?>



</body>
</html>
