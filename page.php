<?php get_header(); ?>
<main>
	<?php if(have_posts() ): while(have_posts() ) : the_post(); ?>
		<?php if( has_post_thumbnail() ) : ?>
		<h2 
			style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);"
		<?php endif; ?>

		><?php the_title(); ?></h2>
		<?php the_content();  ?>

<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>