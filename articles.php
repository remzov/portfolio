<?php /* Template Name: Статьи */ ?>
<!DOCTYPE html>
<html>
<?php get_header(); ?>
<body>
<?php get_template_part('_header'); ?>
    <main class="articles">
        <div class="articles__page-intro page-intro">
            <div class="page-intro__content">
                <h1 class="page-intro__title"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="articles__content">
            <div class="uk-container">
                <div class="recent-news__pool">
                    <?php
                        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                        $wp_query = new WP_Query(array(
                        	'category-name' => 'Статьи',
                        	'paged' => $paged,
                        	'post_status' => 'publish',
                        	'posts_per_page' => 2,
                        	'caller_get_posts'=> 1)
                        );
                        while ($wp_query->have_posts()):
                            $wp_query->the_post();
                    ?>
                    <div class="news-item">
                        <div class="news-item__image uk-cover-container">
                            <img src="<?php the_field('article_image') ?>" alt="" data-uk-cover>
                            <a class="news-item__image-link" href="<?php the_permalink() ?>"></a>
                        </div>
                        <div class="news-item__desc">
                            <header class="news-item__heading">
                                <div>
                                    <a class="news-item__title-link" href="<?php the_permalink() ?>">
                                        <h3 class="news-item__title"><?php the_title() ?></h3>
                                    </a>
                                </div>
                                <div>
                                    <time class="news-item__time" datetime="<?php the_time('d.m.Y') ?>"><?php the_time('d.m.Y') ?></time>
                                </div>
                            </header>
                            <div class="news-item__text">
                                <?php the_field('article_intro') ?>
                            </div>
                            <a class="link-more" href="<?php the_permalink() ?>">Читать</a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php if ( function_exists('wp_pagenavi')) wp_pagenavi(array('wrapper_class' => 'pagination')); ?>
            </div>
        </div>
    </main>
<?php get_template_part('_footer'); ?>
</body>
</html>
