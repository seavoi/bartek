<div class="container">
	<?php $headline = get_sub_field('carousel_section_headline'); if ($headline): ?>
		<div class="row headline-row">
			<div class="col-12 text-center">
				<h2 class="m-b-0"><?php echo $headline; ?></h2>
			</div>
		</div>
	<?php endif; ?>
	<?php if(have_rows('carousels')): ?>
		<div class="row carousel2-row">
			<div class="col-12 text-center">
				<div id="carousels-<?php echo $content_counter; ?>" class="carousel slide">
					<div class="carousel-indicators">
					  <?php $counter = 1; while( have_rows('carousels') ) : the_row(); ?>
			  			<?php if($counter == 1): ?>
			  				<button 
			          	aria-current="true"
			          	aria-label="Slide <?php echo $counter; ?>"
			          	class="active"
			          	data-bs-slide-to="0"
			          	data-bs-target="#carousels-<?php echo $content_counter; ?>" 
			          	type="button"></button>
				  			<?php else: ?>
			  				<button 
			          	aria-label="Slide <?php echo $counter; ?>"
			          	data-bs-slide-to="<?php echo $counter - 1; ?>"
			          	data-bs-target="#carousels-<?php echo $content_counter; ?>" 
			          	type="button"></button>
			  			<?php endif; ?>
						<?php $counter = $counter + 1; endwhile; ?>
					</div>
	        <div class="carousel-inner">
	        	<?php $counter = 1; while( have_rows('carousels') ) : the_row(); ?>
		          <div class="carousel-item <?php if($counter == 1): ?>active<?php endif; ?>">
		            <div class="carousel-wrapper">
		            	<?php if (get_sub_field('carousel_headline')): ?>
		              	<h2><?php echo get_sub_field('carousel_headline'); ?></h2>
		              <?php endif; ?>
		            	<?php if (get_sub_field('carousel_content')): ?>
		              	<p class="carousel2"><?php echo get_sub_field('carousel_content'); ?></p>
		              <?php endif; ?>
		            </div>
		          </div>
	          <?php $counter = $counter + 1; endwhile; ?>
	        </div>
				  <button class="carousel-control-prev" type="button" data-bs-target="#carousels-<?php echo $content_counter; ?>" data-bs-slide="prev">
	          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	          <span class="visually-hidden">Previous</span>
	        </button>
	        <button class="carousel-control-next" type="button" data-bs-target="#carousels-<?php echo $content_counter; ?>" data-bs-slide="next">
	          <span class="carousel-control-next-icon" aria-hidden="true"></span>
	          <span class="visually-hidden">Next</span>
	        </button>
				</div>
		  </div>
		</div>
	<?php endif; ?>
</div>