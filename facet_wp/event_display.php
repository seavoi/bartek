<h3 style="padding-bottom: 0;">Current Events</h3>
<div class="row accordion-row event-accordion-row" style="width: 100%;">
	<div class="col-12">
		<?php $content_counter = 1; $counter = 1; while (have_posts()): the_post(); ?>
			<?php $scheduled_date = get_field('event_date'); if ( $scheduled_date > date("Ymd") ): ?>
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
				        <p><?php $date = get_field('event_date'); $date_formatted = date("F j, Y", strtotime($date)); echo $date_formatted; ?></p>
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
			    		<a class="flyer-wrapper" href="<?php echo get_field('event_flyer'); ?>" target="new">
					    	<img class="image" src="<?php echo get_field('event_flyer'); ?>"/>
					    </a>
				    	<?php endif; ?>
				    	<div class="clear"></div>

				    	<?php if(have_rows('event_preview_images')): ?>
						    <div class="event-preview-image-wrapper">
						    	<ul>
						      	<?php while(have_rows('event_preview_images')): the_row(); ?>
						      		<li>
						    				<a href="<?php $img = get_sub_field('image'); echo $img; ?>" style="background-image: url('<?php echo $img; ?>');" target="new"></a>
						    			</li>
						      	<?php endwhile; ?>
						      	<div class="clear"></div>
									</ul>
				    		</div>
			      	<?php endif; ?>

			      </div>
			    </div>
			  </div>
		  <?php else: ?>
		  	<?php if ($counter == "1"): ?>
		  	<div class="empty-events">
		  		<p style="margin-bottom: 0;">No events are scheduled. Please check back soon.</p>
		  	</div>
		  	<?php endif; ?>
		  <?php endif; ?>
		<?php $counter = $counter + 1; endwhile; ?>
	</div>
</div>

<h3 id="past-events" style="padding-top: 20px; padding-bottom: 0;">Past Events</h3>
<div class="row accordion-row event-accordion-row" style="width: 100%;">
	<div class="col-12">
		<?php $content_counter = 1; $counter_past = 1; while (have_posts()): the_post(); ?>
			<?php $scheduled_date = get_field('event_date'); if ( $scheduled_date < date("Ymd") ): ?>
				<div class="accordion-item">
			    <p class="accordion-header">
			      <button 
			      	aria-controls="collapse-<?php echo $content_counter; ?>-<?php echo $counter_past ?>"
			      	<?php if ($counter_past == "1"): ?>
			      		aria-expanded="true"
			      	<?php endif; ?>
			      	class="accordion-button" 
			      	data-bs-target="#collapse-<?php echo $content_counter; ?>-<?php echo $counter_past ?>"
			      	data-bs-toggle="collapse"
			      	type="button">
			        <?php the_title(); ?>
			      </button>
			    </p>

			    <div 
		    		class="accordion-collapse collapse"
			    	data-bs-parent="#accordion-<?php echo $content_counter; ?>"
			    	id="collapse-<?php echo $content_counter; ?>-<?php echo $counter_past ?>">
			      <div class="accordion-body">
			      	<div class="event-details">
				      	<span class="event-header">Date</span>
				        <p><?php $date = get_field('event_date'); $date_formatted = date("F j, Y", strtotime($date)); echo $date_formatted; ?></p>
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
			    		<a class="flyer-wrapper" href="<?php echo get_field('event_flyer'); ?>" target="new">
					    	<img class="image" src="<?php echo get_field('event_flyer'); ?>"/>
					    </a>
				    	<?php endif; ?>
				    	<div class="clear"></div>

				    	<?php if(have_rows('event_preview_images')): ?>
						    <div class="event-preview-image-wrapper">
						    	<ul>
						      	<?php while(have_rows('event_preview_images')): the_row(); ?>
						      		<li>
						    				<a href="<?php $img = get_sub_field('image'); echo $img; ?>" style="background-image: url('<?php echo $img; ?>');" target="new"></a>
						    			</li>
						      	<?php endwhile; ?>
						      	<div class="clear"></div>
									</ul>
				    		</div>
			      	<?php endif; ?>

			      </div>
			    </div>
			  </div>
		  <?php endif; ?>
		<?php $counter_past = $counter_past + 1; endwhile; ?>
	</div>
</div>