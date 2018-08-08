<?php get_header(); ?>

<section class="hero">
	<div class="contain">
		<h1><?php the_title(); ?></h1>
	</div>
</section>


<section>
	<div class="contain">
		<?php get_template_part( 'partials/gallery' ); ?>
	</div>
</section>

<?php get_footer(); ?>
