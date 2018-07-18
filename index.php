<?php /* Template Name: Лендинг */ ?>
<!DOCTYPE html>
<html lang="ru">
<?php get_header(); ?>
<body class="page">
<?php get_template_part('_header'); ?>  
<?php the_post(); ?>
<main class="home">
    <section class="home__intro">
        <div class="home__intro-content">
            <h1 class="home__intro-title"><?php echo get_bloginfo('name'); ?></h1>
        </div>
        <a class="home__intro-button" href="#about" uk-scroll="offset: 80">
            <span class="home__intro-button-icon uk-preserve" uk-icon="icon: arrow-down"></span>
        </a>
    </section>
    <section class="home__about section" id="about">
        <div class="uk-container">
            <h2 class="section-title section-title_dark">О себе</h2>
            <div class="home__about-grid">
                <div>
                    <img class="home__about-image" src="<?php the_field('my-photo') ?>" alt="">
                </div>
                <div>
                    <div class="home__about-text">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home__projects section" id="projects">
        <div class="uk-container">
            <h2 class="section-title">Проекты</h2>
            <div class="projects-filter">
                <button class="projects-filter__item projects-filter__item_isActive" type="button" data-filter="">Все</button>
                <button class="projects-filter__item" type="button" data-filter="Визитка">Визитки</button>
                <button class="projects-filter__item" type="button" data-filter="Лендинг">Лендинги</button>
                <button class="projects-filter__item" type="button" data-filter="Кейс">Кейсы</button>
            </div>
            <div class="home__projects-grid"></div>
            <button class="show-more" type="button"><span>Показать ещё</span></button>
        </div>
        <div class="project-modal" id="project" data-id="" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <button class="uk-modal-close-default" type="button" data-uk-close></button>
                <div class="project-modal__grid">
                    <div>
                        <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow>
                            <ul class="uk-slideshow-items"></ul>
                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                        </div>
                    </div>
                    <div>
                        <div class="project-modal__caption">
                            <h2 class="project-modal__title"></h2>
                            <div class="project-modal__desc">
                            </div>
                            <a class="link-out" href="" target="_blank"><span>Перейти<span class="link-out__icon uk-preserve" uk-icon="icon: arrow-right"></span></span></a>
                            <div class="project-modal__nav">
                                <button class="project-modal__nav-prev" type="button">
                                    <span uk-icon="icon: chevron-left"></span>
                                    Предыдущий
                                </button>
                                <button class="project-modal__nav-next" type="button">
                                    Следующий
                                    <span uk-icon="icon: chevron-right"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home__contacts section" id="contacts">
        <div class="uk-container">
            <h2 class="section-title">Контакты</h2>
            <div class="home__contacts-grid">
                <div>
                    <div class="contacts-info">
                        <svg class="contacts-info__icon">
                            <use xlink:href="#pin">
                        </svg>
                        <div class="contacts-info__text">
                            <?php the_field('address') ?>
                        </div>
                    </div>
                    <div class="contacts-info">
                        <svg class="contacts-info__icon">
                            <use xlink:href="#letter">
                        </svg>
                        <div class="contacts-info__text">
                            <?php the_field('email') ?>
                        </div>
                    </div>
                    <div class="contacts-info">
                        <svg class="contacts-info__icon">
                            <use xlink:href="#phone">
                        </svg>
                        <div class="contacts-info__text">
                            <?php the_field('phone') ?>
                        </div>
                    </div>
                    <div class="contacts-info">
                        <svg class="contacts-info__icon">
                            <use xlink:href="#skype">
                        </svg>
                        <div class="contacts-info__text">
                            <?php the_field('skype') ?>
                        </div>
                    </div>
                    <div class="contacts-info">
                        <svg class="contacts-info__icon">
                            <use xlink:href="#github">
                        </svg>
                        <div class="contacts-info__text">
                            <?php the_field('github') ?>
                        </div>
                    </div>
                </div>
                <div>
                    <form class="contacts-form">
                        <div class="contacts-form__text">
                            Вы также можете связаться со мной, используя форму.
                        </div>
                        <div class="contacts-form__row">
                            <input class="contacts-form__input uk-input" name="user" type="text" placeholder="Ваше имя" title="Пожалуйста, напишите своё имя">
                        </div>
                        <div class="contacts-form__row">
                            <input class="contacts-form__input uk-input js-tel-input" name="phone" type="tel" placeholder="Телефон" title="Пожалуйста, напишите свой телефон">
                        </div> 
                        <div class="contacts-form__row">
                            <input class="contacts-form__input uk-input" name="email" type="email" placeholder="Email*" required title="Пожалуйста, напишите свой e-mail">
                        </div>
                        <div class="contacts-form__row">
                            <textarea class="contacts-form__textarea uk-textarea" name="message" placeholder="Сообщение*" required title="Пожалуйста, напишите своё сообщение"></textarea>
                        </div>
                        <div class="contacts-form__row">
                            <div class="contacts-form__tip">
                                Поля с * обязательны для заполнения
                            </div>
                        </div>
                        <div class="contacts-form__row">
                            <button class="contacts-form__submit" type="submit" name="contacts_submit" formnovalidate>Отправить</button>
                        </div>
                        <div class="loading">
                            <svg class="loading__pic">
                                <use xlink:href="#loading">
                            </svg>  
                            <div class="loading__message"></div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </section>
		<!-- <section class="home__studio">
			<div class="uk-container">
				<div class="home__studio-cols">
					<div class="home__studio-offer">
						Хотите разработать сайт с нуля под ключ? Вы можете заказать всю работу веб-студии "ДоменАРТ"!
					</div>
					<div>
						<a class="link-out" href="#"><span>Перейти <span class="link-out__icon uk-preserve" uk-icon="icon: arrow-right"></span></span></a>
					</div>
				</div>
			</div>
		</section> -->
</main>
<a class="to-top" href="#" uk-scroll uk-totop>

</a>
<?php get_template_part('_footer'); ?>
</body>
</html>
