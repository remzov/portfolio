<?php /* Template Name: Проекты */ ?>
<!DOCTYPE html>
<html>
<?php get_header(); ?>
<body>
<?php get_template_part('_header'); ?>
    <main class="projects">
        <div class="projects__page-intro page-intro">
            <div class="page-intro__content">
                <h1 class="page-intro__title"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="projects__content">
            <div class="uk-container">
                <div class="projects__filter">
                    <button class="projects__filter-item projects__filter-item_isActive" type="button" data-filter="">Все</button>
                    <button class="projects__filter-item" type="button" data-filter="Визитка">Визитки</button>
                    <button class="projects__filter-item" type="button" data-filter="Лендинг">Лендинги</button>
                    <button class="projects__filter-item" type="button" data-filter="Кейс">Кейсы</button>
                </div>
                <div class="projects__grid"></div>
                <button class="show-more" type="button"><span>Показать ещё</span></button>
            </div>
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
                            <a class="link-out" href="#"><span>Перейти<span class="link-out__icon uk-preserve" uk-icon="icon: arrow-right"></span></span></a>
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
    </main>
<?php get_template_part('_footer'); ?>
</body>
</html>
