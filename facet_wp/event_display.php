<div class="row accordion-row event-accordion-row" style="width: 100%;">
	<div class="col-12">
		<?php $content_counter = 1; $counter = 1; while (have_posts()): the_post(); ?>
			
			<div class="accordion-item">
		    <p class="accordion-header">
		      <button 
		      	aria-controls="collapse-<?php echo $content_counter; ?>-<?php echo $counter ?>"
		      	<?php if ($counter == "1"): ?>
		      		aria-expanded="true"
		      	<?php endif; ?>
		      	class="accordion-button" 
		      	data-bs-target="#collapse-<?php echo $content_counter; ?>-<?php echo $counter ?>"
		      	data-bs-toggle="collapse"
		      	type="button">
		        <?php the_title(); ?>
		      </button>
		    </p>
		    <div 
		    	<?php if ($counter == "1"): ?>
		    		class="accordion-collapse collapse show"
		    	<?php else: ?>
		    		class="accordion-collapse collapse"
		    	<?php endif; ?>
		    	data-bs-parent="#accordion-<?php echo $content_counter; ?>"
		    	id="collapse-<?php echo $content_counter; ?>-<?php echo $counter ?>">
		      <div class="accordion-body">
		      	<div class="event-details">
			      	<span class="event-header">Date</span>
			        <p><?php echo get_field('event_date'); ?></p>
			        <span class="event-header">Location</span>
			        <p><?php echo get_field('event_location'); ?></p>
			        <?php if (get_field('event_details')): ?>
			        <div class="wysiwyg-wrapper">
				        <?php echo get_field('event_details'); ?>
				        <div class="clear"></div>
				      </div>
				    	<?php endif; ?>
				    	<?php if (get_field('event_image')): ?>
					    	<img alt="" src="<?php echo get_field('event_image'); ?>" style="display: block; margin: 40px 0 0 0; max-width: 125px;">
				    	<?php endif; ?>
				    </div>
			    	<?php if (get_field('event_flyer')): ?>
			    		<a class="flyer-wrapper" href="<?php echo get_field('event_flyer'); ?>">
					    	<img class="image" src="<?php echo get_field('event_flyer'); ?>"/>
					    </a>
			    	<?php endif; ?>
		      </div>
		    </div>
		  </div>

		<?php $counter = $counter + 1; endwhile; ?>
	</div>
</div>