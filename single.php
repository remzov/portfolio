<?php /* Template Name: Статья */ ?>
<!DOCTYPE html>
<html>
<?php get_header(); ?>
<body>
    <?php get_template_part('_header'); ?>
    <?php the_post(); ?>
    <main class="article">
        <div class="uk-container">
            <h1 class="article__title"><?php the_title() ?></h1>
            <time class="article__time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
            <div class="article__image">
                <img src="<?php the_field('article_image') ?>" alt="">
            </div>
            <div class="article__text">
            <?php the_content(); ?>
            </div>
        </div>
    </main>
    <?php get_template_part('_footer'); ?>
</body>
</html>
