<?php
function mytheme_header_social()
{
    $facebook_URL = get_theme_mod('facebook_URL', '#');
    $instagram_URL = get_theme_mod('instagram_URL', '#');
    $twitter_URL = get_theme_mod('twitter_URL', '#');
    $pinterest_URL = get_theme_mod('pinterest_URL', '#');
    ?>
    <?php if (!empty($facebook_URL)): ?>
    <a href="<?php echo $facebook_URL ?>"><i class="fa-brands fa-facebook"></i></a>
    <?php endif; ?>
    <?php if (!empty($instagram_URL)): ?>
    <a href="<?php echo $instagram_URL ?>""><i class="fa-brands fa-instagram"></i></a>
    <?php endif; ?>
    <?php if (!empty($twitter_URL)): ?>
    <a href="<?php echo $twitter_URL ?>""><i class="fa-brands fa-twitter"></i></a>
    <?php endif; ?>
    <?php if (!empty($pinterest_URL)): ?>
    <a href="<?php echo $pinterest_URL ?>""><i class="fa-brands fa-pinterest"></i></a>
<?php endif; ?>
<?php
};

/*
function mytheme_Top_header_page()
{
    $page_01 = get_theme_mod('page_01', 'Faq');
    $page_01_URL = get_theme_mod('page_01_URL', 'faq.html');

    $page_02 = get_theme_mod('page_02', 'Service');
    $page_02_URL = get_theme_mod('page_02_URL', 'service.html');

    $page_03 = get_theme_mod('page_03', 'Contact');
    $page_03_URL = get_theme_mod('page_03_URL', 'contact.html');
    ?>
        <?php if (!empty($page_01)): ?>
    <li><a href="<?php echo $page_01_URL ?> "><?php echo $page_01 ?> <span>/</span></a></li>
    <?php endif; ?>
    <?php if (!empty($page_02)): ?>
    <li><a href="<?php echo $page_02_URL ?>"><?php echo $page_02 ?> <span>/</span></a></li>
    <?php endif; ?>
    <?php if (!empty($page_03)): ?>
    <li><a href="<?php echo $page_03_URL ?>"><?php echo $page_03 ?></a></li>
    <?php endif; ?>
<?php
};
*/
