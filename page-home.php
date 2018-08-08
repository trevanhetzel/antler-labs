<?php get_header(); ?>

<section class="hero">
	<div class="contain">
		<h1><?php the_field('title'); ?></h1>
	</div>
</section>

<section class="welcome">
	<div class="contain">
		<div class="welcome__left">
			<h2><?php the_field('subtitle'); ?></h2>
			<p><?php the_field('paragraph'); ?></p>

			<a href="/breed-line" class="button">View our breed line</a>
		</div>

		<div class="welcome__image">
			<?php $image = get_field('image'); ?>

			<?php if ( !empty($image) ) :
				$thumb = $image['sizes']['featured_2x']; ?>
				<img src="<?php echo $thumb; ?>" width="440" height="440" alt="AKC Yellow Labrador Retrievers">
			<?php endif; ?>
		</div>
	</div>
</section>

<section>
	<div class="contain">
		<?php get_template_part( 'partials/gallery' ); ?>
	</div>
</section>

<section class="availability">
	<div class="contain">
		<p><strong>Puppies are currently <span>available</span></strong> from this litter</p>
		<a href="/puppies" class="button --secondary">View puppies</a>
	</div>
</section>

<?php if ( have_rows('testimonial') ) : ?>
	<div class="testimonials">
		<div class="contain">
			<?php while ( have_rows('testimonial') ) : ?>
				<?php the_row(); ?>
				<?php $image = get_sub_field('image'); ?>

				<div class="testimonial">
					<?php if ( !empty($image) ) :
						$thumb = $image['sizes']['testimonial']; ?>
						<img src="<?php echo $thumb; ?>" width="160" height="160" alt="Antler Labs puppy owner">
					<?php endif; ?>

					<div>
						<p><em><?php the_sub_field('content'); ?></em></p>
						<p><strong><?php the_sub_field('name'); ?></strong></p>
						<p><?php the_sub_field('location'); ?></p>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
