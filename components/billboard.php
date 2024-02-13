<?php
	$billboard_button = get_field('billboard_button');
	$billboard_content = get_field('billboard_content');
	$billboad_format = get_field('billboad_format');
	$billboard_headline = get_field('billboard_headline');
	$billboard_image = get_field('billboard_image'); ?>

<?php if($billboad_format == 'miniture'): ?>
	<div class="billboard-wrapper mini-billboard-wrapper">
	  <div class="billboard-content-wrapper">
	    <div class="container">
	      <div class="row">
	        <div class="col-12 billboard-content">
	          <?php if ($billboard_headline): ?>
	          	<?php if($billboard_content): ?>
							<h1><?php echo $billboard_headline; ?></h1>
							<?php else: ?>
							<h1 class="m-b-0"><?php echo $billboard_headline; ?></h1>	
							<?php endif; ?>
						<?php else: ?>
							<?php if($billboard_content): ?>
							<h1><?php echo get_the_title(); ?></h1>
							<?php else: ?>
							<h1 class="m-b-0"><?php echo get_the_title(); ?></h1>
							<?php endif; ?>
						<?php endif; ?>
						<?php if($billboard_content): ?>
					    <div class="wysiwyg-wrapper">
					      <?php echo $billboard_content; ?>
					    </div>
				    <?php endif; ?>
				    <?php if($billboard_button): ?>
			    		<div class="button-row">
					    <?php if($billboard_button): 
				        $button_target = $billboard_button['target'] ? $billboard_button['target'] : '_self'; 
				        $button_title = $billboard_button['title']; 
				        $button_url = $billboard_button['url'];?>
				        <a 
				          class="button button-billboard" 
				          href="<?php echo esc_url( $button_url ); ?>" 
				          target="<?php echo esc_attr( $button_target ); ?>">
				          <?php echo esc_html( $button_title ); ?>
				        </a>
				      <?php endif; ?>
				    </div>
				    <?php endif; ?>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
<?php else: ?>
	<div class="billboard-wrapper">
		<div class="billboard-content-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-6 billboard-content">
						<?php if ($billboard_headline): ?>
							<h1><?php echo $billboard_headline; ?></h1>
						<?php else: ?>
							<h1><?php echo get_the_title(); ?></h1>
						<?php endif; ?>
						<?php if($billboard_content): ?>
					    <div class="wysiwyg-wrapper">
					      <?php echo $billboard_content; ?>
					    </div>
				    <?php endif; ?>
				    <?php if($billboard_button): ?>
			    		<div class="button-row">
				      <?php if($billboard_button): 
				        $button_target = $billboard_button['target'] ? $billboard_button['target'] : '_self'; 
				        $button_title = $billboard_button['title']; 
				        $button_url = $billboard_button['url'];?>
				        <a 
				          class="button button-billboard" 
				          href="<?php echo esc_url( $button_url ); ?>" 
				          target="<?php echo esc_attr( $button_target ); ?>">
				          <?php echo esc_html( $button_title ); ?>
				        </a>
				      <?php endif; ?>
				      </div>
			      <?php endif; ?>
					</div>
					<div class="col-md-6">
					</div>
				</div>
			</div>
		</div>
		<div class="billboard-background-wrapper">
			<div class="billboard-background"></div>
			<div class="billboard-background" style="background-image: url('<?php echo $billboard_image; ?>')"></div>
		</div>
	</div>
<?php endif; ?>