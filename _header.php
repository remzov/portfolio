<?php /* Хэдер */ ?>
<header class="main-header" data-uk-sticky>
    <div class="uk-container">
        <div class="main-header__cols">
            <div class="main-header__leftside">
                <a href="<?php echo get_home_url(); ?>">
                    <svg class="logo">
                        <use xlink:href="#logo">
                    </svg>
                </a>
            </div>
            <div class="main-header__rightside">
                <button class="menu-btn" type="button">
                    <div class="menu-btn__line menu-btn__line_first"></div>
                    <div class="menu-btn__line menu-btn__line_second"></div>
                    <div class="menu-btn__line menu-btn__line_third"></div>
                </button>
                <nav class="menu-nav">
                    <ul>
                        <li><a href="#about" uk-scroll="offset: 80">О себе</a></li>
                        <li><a href="#projects" uk-scroll="offset: 80">Проекты</a></li>
                        <li><a href="#contacts" uk-scroll="offset: 80">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
