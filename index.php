
	<?php get_header ();?>
	<main class="intro">
		<div class="firsttext">
			<div class="intro__image"></div>
		<h2>Milagros Guerra</h2>

		<p class="text__intro">En este espacio podrás ver algunos de mis proyectos de las distintas áreas que abarca el diseño, para saber más de cada uno solo tienes que darle click!</p>
		</div>

		<section class="imagesblock">
			<ul class="imagesblock__list">
				
				<li class="imagesblock__item"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/1home.png" alt="Proyecto1"></a><div class="transition">Proyecto 1</div></li>
				<li class="imagesblock__item"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/2home.png" alt="Proyecto2"></a><div class="transition">Proyecto 2</div></li>
				<li class="imagesblock__item"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/3home.png" alt="Proyecto3"></a><div class="transition">Proyecto 3</div></li>
				<li class="imagesblock__item"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/4home.png" alt="Proyecto4"></a><div class="transition">Proyecto 4</div></li>
				<li class="imagesblock__item"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/5home.png" alt="Proyecto5"></a><div class="transition">Proyecto 5</div></li>
				<li class="imagesblock__item"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/6home.png" alt="Proyecto6"></a><div class="transition">Proyecto 6</div></li>


			</ul>
		</section>

		<?php if(have_posts() ): ?>
			<ul class="postslist">
				
				<?php while(have_posts() ): the_post(); ?>
					<li class="postslist_item">
					<?php if(has_post_thumbnail() ): ?>
						
					<div>
					<?php the_post_thumbnail('thumbnail'); ?>
					</div>	
					<?php endif; ?>

					<h2><?php the_title();  ?></h2>
					<?php the_content(); ?>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>
			
	</main>
		<?php get_sidebar ();?>

		<?php get_footer ();?>