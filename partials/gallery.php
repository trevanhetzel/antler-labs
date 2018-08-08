<?php if ( have_rows('images') ) { ?>
	<ul class="gallery">
		<?php while ( have_rows('images') ) { ?>
			<?php the_row(); ?>
			<?php $image = get_sub_field('image'); ?>

			<?php if ( !empty($image) ) {
				$thumb = $image['sizes']['gallery_thumbnail']; ?>
				<li>
					<img src="<?php echo $thumb; ?>" width="184" height="144">
				</li>
			<?php } ?>
		<?php } ?>
	</ul>
<?php } ?>
