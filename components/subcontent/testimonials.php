<div class="container">
	<?php $headline = get_sub_field('testimonial_section_headline'); if ($headline): ?>
		<div class="row headline-row">
			<div class="col-12 text-center">
				<h2 class="m-b-0"><?php echo $headline; ?></h2>
			</div>
		</div>
	<?php endif; ?>
	<?php if(have_rows('testimonials')): ?>
		<div class="row testimonial-row">
			<div class="col-12 text-center">
				<div id="testimonials-<?php echo $content_counter; ?>" class="carousel slide">
					<div class="carousel-indicators">
					  <?php $counter = 1; while( have_rows('testimonials') ) : the_row(); ?>
			  			<?php if($counter == 1): ?>
			  				<button 
			          	aria-current="true"
			          	aria-label="Slide <?php echo $counter; ?>"
			          	class="active"
			          	data-bs-slide-to="0"
			          	data-bs-target="#testimonials-<?php echo $content_counter; ?>" 
			          	type="button"></button>
				  			<?php else: ?>
			  				<button 
			          	aria-label="Slide <?php echo $counter; ?>"
			          	data-bs-slide-to="<?php echo $counter - 1; ?>"
			          	data-bs-target="#testimonials-<?php echo $content_counter; ?>" 
			          	type="button"></button>
			  			<?php endif; ?>
						<?php $counter = $counter + 1; endwhile; ?>
					</div>
	        <div class="carousel-inner">
	        	<?php $counter = 1; while( have_rows('testimonials') ) : the_row(); ?>
		          <div class="carousel-item <?php if($counter == 1): ?>active<?php endif; ?>">
		            <div class="testimonial-wrapper">
		              <p class="testimonial">“Bartek Equine offers scientifically and practically proven shoeing solutions which contribute to healthier hooves by simulating barefoot conditions while maintaining full protection of the hoof.”</p>
		              <p class="name">Name Name</p>
		            </div>
		          </div>
	          <?php $counter = $counter + 1; endwhile; ?>
	        </div>
				  <button class="carousel-control-prev" type="button" data-bs-target="#testimonials-<?php echo $content_counter; ?>" data-bs-slide="prev">
	          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	          <span class="visually-hidden">Previous</span>
	        </button>
	        <button class="carousel-control-next" type="button" data-bs-target="#testimonials-<?php echo $content_counter; ?>" data-bs-slide="next">
	          <span class="carousel-control-next-icon" aria-hidden="true"></span>
	          <span class="visually-hidden">Next</span>
	        </button>
				</div>
		  </div>
		</div>
	<?php endif; ?>
</div>