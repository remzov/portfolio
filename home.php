<?php /* Template Name: Главная */ ?>
<!DOCTYPE html>
<html>
<?php get_header(); ?>
<body>
	<?php get_template_part('_header'); ?>
	<main class="home">
		<div class="home__intro">
			<div class="home__intro-content">
				<h1 class="home__intro-title"><?php echo get_bloginfo('name'); ?></h1>
			</div>
			<a class="home__intro-button" href="#about" uk-scroll="offset: 80">
				<span class="home__intro-button-icon uk-preserve" uk-icon="icon: arrow-down"></span>
			</a>
		</div>
		<section class="home__about" id="about">
			<div class="uk-container">
				<h2 class="section-title section-title_dark">О себе</h2>
				<div class="home__about-cols">
					<div class="home__about-photo">
						<img src="<?php the_field('home_about-photo') ?>" alt="">
					</div>
					<div class="home__about-text">
						<?php the_field('home_about-text') ?>
					</div>
				</div>
			</div>
		</section>
		<section class="home__recent-projects">
			<div class="uk-container">
				<h2 class="section-title section-title_green">Последние работы</h2>
				<div class="landing__partners-slider uk-visible-toggle" data-uk-slider>
				    <div class="uk-position-relative">
						<div class="uk-slider-container">
						    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
								<li>
									<div class="project-item">
										<div class="project-item__image uk-cover-container">
											<img src="<?php echo get_template_directory_uri(); ?>/dist/img/project-1.jpg" alt="" data-uk-cover>
										</div>
										<div class="project-item__desc">
											<div class="project-item__title">
												Проект №4
											</div>
											<div class="project-item__text">
												Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне...
											</div>
											<a class="link-more" href="#">Перейти</a>
										</div>
									</div>
						        </li>
						        <li>
									<div class="project-item">
										<div class="project-item__image uk-cover-container">
											<img src="<?php echo get_template_directory_uri(); ?>/dist/img/project-2.jpg" alt="" data-uk-cover>
										</div>
										<div class="project-item__desc">
											<div class="project-item__title">
												Проект №4
											</div>
											<div class="project-item__text">
												Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне...
											</div>
											<a class="link-more" href="#">Перейти</a>
										</div>
									</div>
						        </li>
						        <li>
									<div class="project-item">
										<div class="project-item__image uk-cover-container">
											<img src="<?php echo get_template_directory_uri(); ?>/dist/img/project-3.jpg" alt="" data-uk-cover>
										</div>
										<div class="project-item__desc">
											<div class="project-item__title">
												Проект №4
											</div>
											<div class="project-item__text">
												Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне...
											</div>
											<a class="link-more" href="#">Перейти</a>
										</div>
									</div>
						        </li>
						        <li>
									<div class="project-item">
										<div class="project-item__image uk-cover-container">
											<img src="<?php echo get_template_directory_uri(); ?>/dist/img/project-4.jpg" alt="" data-uk-cover>
										</div>
										<div class="project-item__desc">
											<div class="project-item__title">
												Проект №4
											</div>
											<div class="project-item__text">
												Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне...
											</div>
											<a class="link-more" href="#">Перейти</a>
										</div>
									</div>
						        </li>
								<li>
									<div class="project-item">
										<div class="project-item__image uk-cover-container">
											<img src="<?php echo get_template_directory_uri(); ?>/dist/img/project-1.jpg" alt="" data-uk-cover>
										</div>
										<div class="project-item__desc">
											<div class="project-item__title">
												Проект №4
											</div>
											<div class="project-item__text">
												Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне...
											</div>
											<a class="link-more" href="#">Перейти</a>
										</div>
									</div>
								</li>
								<li>
									<div class="project-item">
										<div class="project-item__image uk-cover-container">
											<img src="<?php echo get_template_directory_uri(); ?>/dist/img/project-2.jpg" alt="" data-uk-cover>
										</div>
										<div class="project-item__desc">
											<div class="project-item__title">
												Проект №4
											</div>
											<div class="project-item__text">
												Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне...
											</div>
											<a class="link-more" href="#">Перейти</a>
										</div>
									</div>
								</li>
						    </ul>
						</div>
						<a class="uk-position-center-left-out" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a>
						<a class="uk-position-center-right-out" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a>
					</div>
				</div>
				<a class="view-all" href="<?php echo get_page_link(4)?>"><span>Посмотреть все</span></a>
			</div>
		</section>
		<section class="home__recent-news">
			<div class="uk-container">
				<h2 class="section-title">Свежие статьи</h2>
				<div class="home__recent-news-grid">
					<?php
						$news = get_posts(array('category' => 'Статьи','numberposts' => 2));
						foreach ($news as $post):
					?>
					<div>
						<div class="news-item">
							<div class="news-item__image uk-cover-container">
								<img src="<?php the_field('article_image') ?>" alt="" data-uk-cover>
								<a class="news-item__image-link" href="<?php the_permalink(); ?>"></a>
							</div>
							<div class="news-item__desc">
								<header class="news-item__heading">
									<div>
										<a class="news-item__title-link" href="<?php the_permalink(); ?>">
											<h3 class="news-item__title"><?php the_title(); ?></h3>
										</a>
									</div>
									<div>
										<time class="news-item__time" datetime="<?php the_time('d.m.Y'); ?>"><?php the_time('d.m.Y'); ?></time>
									</div>
								</header>
								<div class="news-item__text">
									<?php the_field('article_intro'); ?>
								</div>
								<a class="link-more" href="<?php the_permalink(); ?>">Читать</a>
							</div>
						</div>
					</div>
				<?php
					endforeach;
					wp_reset_postdata();
				?>
				</div>
				<a class="view-all" href="<?php echo get_page_link(10)?>"><span>Посмотреть все</span></a>
			</div>
		</section>
		<section class="home__studio">
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
		</section>
	</main>
<?php get_template_part('_footer'); ?>
</body>
</html>
