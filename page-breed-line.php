<?php get_header(); ?>

<section class="hero">
	<div class="contain">
		<h1><?php the_title(); ?></h1>
	</div>
</section>

<div class="page">
	<div class="contain">
		<?php
		$dogs = array( 'studs', 'females' );

		foreach ( $dogs as &$dog ) {
		?>

			<?php
			$stud_args = array(
				'post_type' => $dog,
				'posts_per_page' => 10
			);
			$studs = new WP_Query( $stud_args );
			?>

			<?php if ( $studs->have_posts() ) { ?>
				<h1><?php echo ucfirst($dog); ?></h1>

				<?php while ( $studs->have_posts() ) { ?>
					<?php $studs->the_post(); ?>
					<div class="breed-line">
						<?php the_post_thumbnail( 'featured', array( 'class' => 'breed-line__featured' ) ); ?>

						<div>
							<h2><?php the_title(); ?></h2>
							<p><?php the_field('description'); ?></p>

							<?php $pedigree = get_field('pedigree'); ?>
							<?php if ( $pedigree) { ?>
								<a href="<?php echo $pedigree['url']; ?>" class="button" target="_blank">View pedigree</a><br><br>
							<?php } ?>
						</div>
					</div>

					<?php get_template_part( 'partials/gallery' ); ?>
				<?php } ?>
			<?php } ?>
		<?php } ?>
	</div>
</div>

<?php get_footer(); ?>
