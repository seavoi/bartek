<?php if(have_rows('navigation', 'option')): 
	$url = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
  <nav class="navbar-wrapper" id="navigation">
  	<a aria-label="Bartek logo (click to visit homepage)" class="logo-wrapper" href="/">
  		<svg class="logo" viewBox="0 0 403.38 117.07" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			  <defs>
			    <clipPath id="clippath">
			      <rect class="cls-2" width="403.38" height="117.07"/>
			    </clipPath>
			    <clipPath id="clippath-1">
			      <rect class="cls-2" width="403.38" height="117.07"/>
			    </clipPath>
			  </defs>
			  <g class="cls-1">
			    <path class="cls-4" d="m39.95,75.57c1.62-.2,2.83-.82,3.64-1.85.81-1.03,1.22-2.55,1.22-4.54,0-1.6,0-2.4.01-4,0-2-.4-3.43-1.2-4.3-.81-.87-2.02-1.24-3.64-1.09-2.04.18-3.06.27-5.1.45-.01,6.39-.02,9.58-.03,15.96,2.04-.26,3.06-.38,5.1-.63m-.53-26.21c1.62-.11,2.83-.66,3.65-1.65.81-.99,1.22-2.48,1.22-4.49,0-1.31,0-1.96,0-3.27,0-2-.4-3.45-1.21-4.37-.81-.91-2.02-1.35-3.64-1.29-1.81.06-2.72.09-4.52.15-.01,6.09-.02,9.13-.03,15.22,1.81-.12,2.71-.18,4.52-.3M7.29,79.97c1.67-.25,2.5-.37,4.17-.61,0-14.69.01-29.38.01-44.08-1.68.06-2.51.1-4.19.16v-16.22h38.48c6.99,0,12.43,1.52,16.34,4.47,3.9,2.95,5.85,7.12,5.83,12.61-.01,3.41-.8,6.31-2.37,8.74-1.57,2.43-3.41,4.31-5.51,5.65s-4.12,2.29-6.08,2.84c0,.36,0,.53,0,.89,3.96.13,7.53,1.21,10.71,3.19,3.18,1.97,4.76,5.76,4.74,11.41-.02,6.05-2.24,10.69-6.66,14.07-4.42,3.38-10.14,5.62-17.16,6.66-15.35,2.3-23.01,3.58-38.31,6.44v-16.23Z"/>
			    <path class="cls-4" d="m98.3,54.43c3.09-.17,4.63-.25,7.72-.4-1.35-6.4-2.03-9.62-3.38-16.09-.34,0-.5.01-.84.02-1.4,6.55-2.1,9.85-3.5,16.47m35.37,13.02c1.34-.07,2.01-.1,3.36-.17-.02,5.14-.02,7.7-.04,12.84-13.17.81-19.76,1.32-32.91,2.54.02-5.35.03-8.02.05-13.38,2.01-.15,3.02-.22,5.03-.36-.53-2.56-.79-3.83-1.32-6.4-4.56.28-6.85.43-11.41.74-.55,2.68-.82,4.02-1.36,6.71,2.01-.16,3.02-.24,5.03-.39-.02,5.38-.03,8.07-.05,13.46-11.48,1.11-17.21,1.74-28.67,3.17.02-5.65.03-8.47.05-14.12,1.34-.13,2.01-.2,3.35-.33,4.67-17.55,9.45-35.07,14.35-52.55h30.52c4.63,16.09,9.3,32.17,14.03,48.24"/>
			    <path class="cls-4" d="m172.01,44.24c1.62-.02,2.84-.42,3.65-1.22.81-.79,1.22-2.03,1.22-3.71v-2.74c0-1.67-.4-2.9-1.21-3.68-.81-.78-2.03-1.17-3.65-1.16-1.81.01-2.72.02-4.53.03,0,5.02-.01,7.52-.02,12.54,1.81-.02,2.72-.04,4.53-.06m-32.3,22.92c1.68-.08,2.52-.11,4.2-.19.04-14,.06-21,.09-35-1.68.02-2.52.03-4.19.05.01-5.12.02-7.68.04-12.81h38.49c7.21,0,12.72,1.34,16.52,4.01,3.8,2.67,5.7,7.02,5.7,13.02,0,3.38-.76,6.31-2.27,8.79-1.51,2.48-3.67,4.2-6.47,5.17.03.3.05.45.08.76,5.38.73,8.06,3.71,8.06,8.91v5.83c1.58,0,2.37,0,3.95,0,0,4.97,0,7.45,0,12.42-10.67-.02-16,.03-26.66.28,0-7.15.01-10.73.02-17.88,0-1.98-.32-3.47-.96-4.48-.64-1-1.65-1.68-3.02-2.01-1.37-.33-3.32-.48-5.84-.43,0,5.01-.01,7.52-.02,12.54,2.22-.06,3.33-.08,5.55-.13,0,5-.01,7.5-.02,12.5-13.32.36-19.98.65-33.29,1.43.01-5.12.02-7.68.04-12.81"/>
			    <path class="cls-4" d="m266.52,38.17c-5.77-.11-8.66-.16-14.43-.25,0-2.41,0-3.62-.01-6.03-2.15-.02-3.22-.03-5.37-.05.03,13.85.05,20.78.08,34.64,2.35.08,3.53.12,5.88.21.01,5.07.02,7.61.03,12.68-14.12-.68-21.19-.91-35.32-1.12,0-4.98,0-7.47,0-12.44,2.35.03,3.53.05,5.88.08-.01-13.68-.02-20.52-.04-34.21-2.15,0-3.22-.01-5.37-.02,0,2.37,0,3.55,0,5.92-5.77-.03-8.66-.03-14.44-.04,0-7.33,0-11,0-18.33h63.05c.02,7.58.03,11.37.06,18.95"/>
			    <path class="cls-4" d="m269.5,80.32c-.02-5.15-.02-7.73-.04-12.88,1.68.08,2.52.13,4.2.22-.04-14.2-.07-21.3-.11-35.5-1.68-.03-2.52-.04-4.2-.06-.01-5.15-.02-7.73-.04-12.88h56.6c.04,10.29.05,15.44.09,25.73-7.51-.35-11.27-.51-18.78-.8-.02-4.56-.03-6.84-.04-11.39-4.06-.09-6.09-.13-10.14-.21.02,5.14.03,7.71.05,12.85,2.95.11,4.43.17,7.38.29.01,3.75.02,5.62.03,9.37-2.95-.16-4.43-.24-7.38-.39.02,5.79.03,8.68.05,14.47,4.06.29,6.09.44,10.15.77-.02-5.22-.03-7.83-.05-13.04,7.52.44,11.27.68,18.78,1.21.04,10.98.06,16.46.1,27.44-18.83-2.24-37.72-3.97-56.64-5.19"/>
			  </g>
			  <g class="cls-5">
			    <path class="cls-4" d="m391.92,79.36c1.67.24,2.5.36,4.17.61v16.22c-9.1-1.7-13.65-2.5-22.77-4-5.03-12.46-7.55-18.5-12.6-30.27-1.54,1.25-2.3,1.87-3.84,3.09,0,3.91.02,5.87.03,9.77,1.61.19,2.41.28,4.02.48.01,5.99.02,8.98.03,14.97-12.64-1.93-18.97-2.8-31.63-4.34-.02-5.62-.03-8.43-.05-14.05,1.68.16,2.51.24,4.19.41-.05-15.54-.08-23.32-.13-38.86-1.68-.04-2.51-.07-4.19-.11-.02-5.62-.03-8.43-.05-14.05h31.7c.01,5.99.02,8.98.03,14.97-1.61-.05-2.41-.08-4.02-.13.01,4.78.02,7.17.03,11.95,5.18-4.49,7.77-6.78,12.96-11.52-2.11-.07-3.17-.11-5.28-.18-.01-6.04-.02-9.05-.03-15.09h31.19c0,6.48,0,9.73,0,16.21-1.68-.07-2.51-.1-4.19-.16-5.59,5.19-8.39,7.69-13.97,12.55,5.77,12.2,8.65,18.49,14.4,31.54"/>
			    <path class="cls-4" d="m7.29,117.07s72.18-22.75,195.47-22.75,193.16,22.75,193.16,22.75l.17-9.23s-69.3-21.72-193.46-21.72S7.29,107.55,7.29,107.55v9.52Z"/>
			    <line class="cls-3" x1="7.29" y1="7.29" x2="396.09" y2="7.29"/>
			  </g>
			</svg>
  	</a>
  	<button aria-label="Open navigation" class="mobile-toggle" id="mobile-toggle-open" onclick="navMobileOpen(this)" >
  		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
  	</button>
  	<button aria-label="Close navigation" class="mobile-toggle none" id="mobile-toggle-close" onclick="navMobileClose(this)">
  		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
  	</button>
  	<ul class="level-1-wrapper" id="level-1-wrapper">
    <?php while(have_rows('navigation', 'option')): the_row(); 
    	$link = get_sub_field('navigation_link', 'option'); 
    	$parent = get_sub_field('navigation_parent', 'option');
    	$level_2 = get_sub_field('navigation_secondary', 'option');?>
    	<?php if ($parent === true): ?>
    	<li class="level-1 parent" <?php if ($url === $link['url']): ?> id="current"<?php endif; ?> onmouseenter="navLevel1Open(this)" onmouseleave	="navLevel1Close(this)">
    		<a class="link" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>

    		<button aria-label="Dropdown navigation" class="icon-wrapper" onclick="navMobileLevel1(this)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    			<svg class="icon mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
    			<svg class="icon desktop" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
    		</button>
    	
    			<?php if(have_rows('navigation_secondary', 'option')): ?>
    				<ul class="level-2-wrapper">
    					
		    			<?php while(have_rows('navigation_secondary', 'option')): the_row(); 
					    	$link = get_sub_field('navigation_link', 'option'); 
					    	$parent = get_sub_field('navigation_parent', 'option');?>
					    	<?php if ($parent === true): ?>
				    		<li class="level-2 parent" <?php if ($url === $link['url']): ?> id="current"<?php endif; ?>>

					    		<a class="link" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>

					    		<button aria-label="Dropdown navigation" class="icon-wrapper" onclick="navMobileLevel2(this)">
					    			<svg class="icon mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
					    			<svg class="icon desktop" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
					    		</button>

					    		<?php if(have_rows('navigation_tertiary', 'option')): ?>
				    				<ul class="level-3-wrapper">
						    			<?php while(have_rows('navigation_tertiary', 'option')): the_row(); 
									    	$link = get_sub_field('navigation_link', 'option');?>
							    			<li class="level-3" <?php if ($url === $link['url']): ?> id="current"<?php endif; ?>>
									    		<a class="link" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
									    	</li>
							    		<?php endwhile; ?>
						    		</ul>
						    	<?php endif; ?>


					    	</li>
				    		<?php else: ?>
			    			<li class="level-2">
					    		<a class="link" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
					    	</li>
			    			<?php endif; ?>	
			    		<?php endwhile; ?>
				    	
		    		</ul>
		    	<?php endif; ?>

    	</li>
    	<?php else: ?>
    	<li class="level-1" <?php if ($url === $link['url']): ?> id="current"<?php endif; ?>>
    		<a class="link" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
    	</li>
    	<?php endif; ?>
    <?php endwhile; ?>

    	<div class="nav-right">
    		<form class="nav-search-wrapper">
				  <input id="nav-search" onkeydown="navSeach()" placeholder="Search resources..." type="text">
				  <button aria-label="Search" class="button button-icon" disabled onclick="navSeachButton()" id="nav-search-button">
				  	<svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><path opacity="1" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
				  </button>
				</form>
		  	<a class="button button-outline-primary" href="/buy">Buy Now</a>
		  </div>

  	</ul>
  </nav>
<?php endif; ?>