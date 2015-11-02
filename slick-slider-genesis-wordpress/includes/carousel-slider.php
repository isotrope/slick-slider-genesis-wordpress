<?php
function ss_include_slick_carousel() {

// Image repeater field outputs to a Slick carousel slider

	if( have_rows('slick_carousel_slider') ): // repeater field: Slick Carousel Repeater
		
		echo '<div class="wrap carousel-slider">';
			
			echo '<div id="slider" class="carousel responsive-carousel">';

				while ( have_rows('slick_carousel_slider') ) : the_row(); // loop through the repeater field
					
					$image = get_sub_field('image'); // get image from repeater
					
					?>
				
					<div>
					
						<a rel="lightbox" class="fancybox-ss" href="<?php echo $image['url']; ?>"><img data-lazy="<?php echo $image['url']; ?>" alt="" /></a>
						
					</div>
				
				<?php
				
				endwhile; // end loop
			
			echo '</div>';
			
		echo '</div>';

	endif;
// End Carousel repeater
}

add_action( 'genesis_before_loop', 'ss_include_slick_carousel' );