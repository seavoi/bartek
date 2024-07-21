<?php
	$billboard_button = get_field('billboard_button');
	$billboard_content = get_field('billboard_content');
	$billboad_format = get_field('billboad_format');
	$billboard_headline = get_field('billboard_headline');
	$billboard_image = get_field('billboard_image'); ?>

<?php if($billboad_format == 'miniture'): ?>
	<div class="billboard-wrapper mini-billboard-wrapper" id="billboard">
	  <div class="billboard-content-wrapper">
	    <div class="container">
	    	<div class="row">
					<div class="col-xs-12">
						<ul class="breadcrumb-wrapper alignleft">
							<li><a href="/">Home</a></li>
						  <?php 
						    $parents =  implode( ',' , get_post_ancestors( $post));
						    if ($post->post_parent){
						      wp_list_pages('include='.$parents.'&title_li=&depth=2' ); 
						    }
						  ?>
						  <li><?= the_title() ?></li>
						  <!--<a class="alignright" id="breadcrumb-back" href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M177.5 414c-8.8 3.8-19 2-26-4.6l-144-136C2.7 268.9 0 262.6 0 256s2.7-12.9 7.5-17.4l144-136c7-6.6 17.2-8.4 26-4.6s14.5 12.5 14.5 22l0 72 288 0c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32l-288 0 0 72c0 9.6-5.7 18.2-14.5 22z"/></svg>Back</a>-->
						</ul>
						<div class="clear"></div>
					</div>
				</div>
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
				  	<?php elseif (strpos('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'],'resources') !== false): ?>
			  			<?php echo facetwp_display('facet','search'); ?>
				    <?php endif; ?>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
<?php else: ?>
	<div class="billboard-wrapper" id="billboard">
		<div class="billboard-content-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<ul class="breadcrumb-wrapper alignleft">
							<li><a href="/">Home</a></li>
						  <?php 
						    $parents =  implode( ',' , get_post_ancestors( $post));
						    if ($post->post_parent){
						      wp_list_pages('include='.$parents.'&title_li=&depth=2' ); 
						    }
						  ?>
						  <li><?= the_title() ?></li>
						  <!--<a class="alignright" id="breadcrumb-back" href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M177.5 414c-8.8 3.8-19 2-26-4.6l-144-136C2.7 268.9 0 262.6 0 256s2.7-12.9 7.5-17.4l144-136c7-6.6 17.2-8.4 26-4.6s14.5 12.5 14.5 22l0 72 288 0c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32l-288 0 0 72c0 9.6-5.7 18.2-14.5 22z"/></svg>Back</a>-->
						</ul>
						<div class="clear"></div>
					</div>
				</div>
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
			<div class="billboard-background" style="background-image: url('<?php echo $billboard_image; ?>.webp')"></div>
		</div>
	</div>
<?php endif; ?>