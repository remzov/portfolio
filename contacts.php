<?php /* Template Name: Контакты */ ?>
<!DOCTYPE html>
<html>
<?php get_header(); ?>
<body>
    <?php get_template_part('_header'); ?>
    <main class="contacts">
        <div class="contacts__page-intro page-intro">
            <div class="page-intro__content">
                <h1 class="page-intro__title"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="contacts__content">
            <div class="uk-container">
                <div class="contacts__grid">
    				<div>
                        <div class="contacts__info-row">
                            <img class="contacts__icon" src="<?php echo get_template_directory_uri(); ?>/dist/img/map-icon.svg">
                            <span class="contacts__info"><?php the_field('contacts_address') ?></span>
                        </div>
                        <div class="contacts__info-row">
                            <img class="contacts__icon" src="<?php echo get_template_directory_uri(); ?>/dist/img/mail-icon.svg">
                            <span class="contacts__info"><?php the_field('contacts_email') ?></span>
                        </div>
                        <div class="contacts__info-row">
                            <img class="contacts__icon" src="<?php echo get_template_directory_uri(); ?>/dist/img/phone-icon.svg">
                            <span class="contacts__info"><?php the_field('contacts_tel') ?></span>
                        </div>
                        <div class="contacts__info-row">
                            <img class="contacts__icon" src="<?php echo get_template_directory_uri(); ?>/dist/img/skype-icon.svg">
                            <span class="contacts__info"><?php the_field('contacts_skype') ?></span>
                        </div>
                        <div class="contacts__info-row">
                            <img class="contacts__icon" src="<?php echo get_template_directory_uri(); ?>/dist/img/github-icon.svg">
                            <span class="contacts__info"><?php the_field('contacts_github') ?></span>
                        </div>
    				</div>
                    <div>
                        <form class="contacts-form">
                            <div class="contacts-form__text">
                                Вы также можете связаться со мной, используя форму.
                            </div>
                            <div class="contacts-form__row">
                                <input class="contacts-form__input uk-input" name="user" type="text" placeholder="Ваше имя">
                            </div>
                            <div class="contacts-form__row">
                                <input class="contacts-form__input uk-input" name="phone" type="tel" placeholder="Телефон">
                            </div> 
                            <div class="contacts-form__row">
                                <input class="contacts-form__input uk-input" name="email" type="email" placeholder="Email*" required>
                            </div>
                            <div class="contacts-form__row">
                                <textarea class="contacts-form__textarea uk-textarea" name="message" placeholder="Сообщение*" required></textarea>
                            </div>
                            <div class="contacts-form__row">
                                <div class="contacts-form__tip">
                                    Поля с * обязательны для заполнения
                                </div>
                            </div>
                            <div class="contacts-form__row">
                                <button class="contacts-form__submit" type="submit" name="contacts_submit">Отправить</button>
                            </div>
                        </form> 
                    </div>
        		</div>
            </div>
        </div>
    </main>
    <?php get_template_part('_footer'); ?>
</body>
</html>
