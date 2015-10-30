<?php
function ss_include_slick_carousel() {

// Image (with crop) repeater field
// That is nested in a flexible content layout (start above)
// And then outputs to a Slick carousel slider

	if( have_rows('slick_carousel_slider') ): // repeater field: Flex Carousel Repeater
		
		echo '<section class="wrap carousel-slider">'; // section wrapper
			echo '<div id="slider" class="carousel responsive-carousel">'; // slider wrapper which might be redundant 

			while ( have_rows('slick_carousel_slider') ) : the_row(); // begin the loop through the repeater field. so far this has only been outputting one image
				
				$image = get_sub_field('image'); // get image from repeater
				
				?>
			
				<div>
					<a rel="lightbox" class="fancybox-ss" href="<?php echo $image['url']; ?>"><img data-lazy="<?php echo $image['url']; ?>" alt="" /></a>
				</div> <?php // need to add alt and title ?>
			
			<?php
			// end loop
			endwhile;
			
		echo '</div></section> <!-- carousel-slider -->';

	endif;
// End Carousel repeater
}

add_action( 'genesis_before_loop', 'ss_include_slick_carousel' );