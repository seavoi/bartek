<?php if(have_rows('navigation', 'option')): $url = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<div class="sidebar-navigation-wrapper">
  <nav class="sitemap" id="sitemap">
  	<ul class="level-1-wrapper">
    <?php while(have_rows('navigation', 'option')): the_row(); 
    	$link = get_sub_field('navigation_link', 'option'); 
    	$parent = get_sub_field('navigation_parent', 'option');
    	$level_2 = get_sub_field('navigation_secondary', 'option');?>
    	<?php if ($parent === true): ?>
    	<li class="level-1 parent" <?php if ($url === $link['url']): ?> id="active"<?php endif; ?>>
    		<a class="link" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
    		<button class="icon-wrapper" onclick="sitemapLevel2(this)">
    			<svg class="icon" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
    		</button>

    			<?php if(have_rows('navigation_secondary', 'option')): ?>
  				<ul class="level-2-wrapper">
	    			<?php while(have_rows('navigation_secondary', 'option')): the_row(); 
				    	$link = get_sub_field('navigation_link', 'option'); 
				    	$parent = get_sub_field('navigation_parent', 'option');?>
				    	<?php if ($parent === true): ?>
			    		<li class="level-2 parent" <?php if ($url === $link['url']): ?>id="active"<?php endif; ?>>
				    		<a class="link" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
				    		<button class="icon-wrapper" onclick="sitemapLevel3(this)">
				    			<svg class="icon" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
				    		</button>

				    		<?php if(have_rows('navigation_tertiary', 'option')): ?>
			    				<ul class="level-3-wrapper">
			    					<span>
					    			<?php while(have_rows('navigation_tertiary', 'option')): the_row(); 
								    	$link = get_sub_field('navigation_link', 'option');?>
						    			<li class="level-3" <?php if ($url === $link['url']): ?>id="active"<?php endif; ?>>
								    		<a class="link" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
								    	</li>
						    		<?php endwhile; ?>
							    	</span>
					    		</ul>
					    	<?php endif; ?>

				    	</li>
			    		<?php else: ?>
		    			<li class="level-2" <?php if ($url === $link['url']): ?>id="active"<?php endif; ?>>
				    		<a class="link" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
				    	</li>
		    			<?php endif; ?>	
		    		<?php endwhile; ?>
	    		</ul>
		    	<?php endif; ?>

    	</li>
    	<?php else: ?>
    	<li class="level-1<?php if ($url === $link['url']): ?> active<?php endif; ?>">
    		<a class="link" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
    	</li>
    	<?php endif; ?>
    <?php endwhile; ?>
  	</ul>
  </nav>
</div>
<?php endif; ?>