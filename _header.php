<?php /* Хэдер */ ?>
<header class="main-header" data-uk-sticky>
    <div class="uk-container">
        <div class="main-header__cols">
            <div class="main-header__leftside">
                <a href="<?php echo get_home_url(); ?>">
                    <img class="main-header__logo" src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.svg" alt="">
                </a>
            </div>
            <div class="main-header__rightside">
                <?php wp_nav_menu(
                    array (
                        'menu'=> 'header_menu',
                        'container' => 'nav',
                        'container_class' => 'main-header__nav',
                        'menu_class' => '',
                        'menu_id' => ''
                    )
                ); ?>
            </div>
        </div>
    </div>
</header>
