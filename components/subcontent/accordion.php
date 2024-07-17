<div class="container">
	<?php $headline = get_sub_field('accordion_section_headline'); if ($headline): ?>
	<div class="row headline-row">
		<div class="col-12 text-center">
			<h2 class="m-b-0"><?php echo $headline; ?></h2>
		</div>
	</div>
	<?php endif; ?>
	<?php if(have_rows('accordions')): $counter = 1; ?>
	<div class="row accordion-row">
		<div class="col-12">
		  <?php while( have_rows('accordions') ) : the_row(); ?>
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
		        <?php echo get_sub_field('accordion_title'); ?>
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
		        <?php echo get_sub_field('accordion_content'); ?>
		      </div>
		    </div>
		  </div>
		  <?php $counter = $counter + 1; endwhile; ?>
	  </div>
	</div>
	<?php endif; ?>
	<?php $button = get_sub_field('accordion_section_button'); if ($button): ?>
	<div class="row button-row">
		<div class="col-12 text-center">
			<?php if($button): 
				$button_target = $button['target'] ? $button['target'] : '_self'; 
				$button_title = $button['title']; 
				$button_url = $button['url'];?>
		    <a 
		    	class="button button-primary" 
		    	href="<?php echo esc_url( $button_url ); ?>" 
		    	target="<?php echo esc_attr( $button_target ); ?>">
		    	<?php echo esc_html( $button_title ); ?>
	    	</a>
			<?php endif; ?>
		</div>
	</div>
	<?php endif; ?>
</div>