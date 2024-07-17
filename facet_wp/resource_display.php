<?php while (have_posts()): the_post(); $display = get_field('resources_display'); if ($display == 1): ?>

	<div class="col-xs-12 col-sm-6 col-md-3">
	  <div class="card">
	  	<?php if (has_post_thumbnail($post)): $image = wp_get_attachment_image_src( get_post_thumbnail_id($post), 'single-post-thumbnail' ); ?>
	  	<div class="card-image-wrapper">
        <div class="card-image" style="background-image: url('<?php echo $image[0]; ?>');"></div>
      </div>
      <?php else: ?>
    	<div class="card-image-wrapper" style="background-color: #07343a;">
        <div class="card-image card-image-na" style="background-image: url('https://bartekequine.wpenginepowered.com/wp-content/uploads/2023/12/cropped-bartek-icon.png');"></div>
      </div>
      <?php endif; ?>
	    <div class="card-body">
	      <p class="title"><?php the_title(); ?></p>
	      <?php $description = get_field('resources_description'); if ($description): ?>
		      <div class="wysiwyg-wrapper">
		        <?php echo $description; ?>
		        <div class="clear"></div>
		      </div>
				<?php endif; ?>
				<?php $link = get_field('resources_external_link'); if ($link): ?>
					<?php $button = get_field('resources_button_text'); if ($button): ?>
		      <a class="button button-outline-primary" href="<?php echo $link; ?>" target="_self"><?php echo $button; ?></a>
		      <?php endif; ?>
	      <?php else: ?>
      		<?php $button = get_field('resources_button_text'); if ($button): ?>
		      <a class="button button-outline-primary" href="<?php the_permalink(); ?>" target="_self"><?php echo $button; ?></a>
		      <?php endif; ?>
	      <?php endif; ?>
	    </div>
	  </div>
	</div>

<?php endif; endwhile; ?>