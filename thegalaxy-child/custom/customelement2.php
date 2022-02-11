<?php
	
	if( have_rows('staff_blocks') ):

		echo '<div id="staff_block_wrapper">';
		
		echo '<h2>Offered Solutions</h2><h1>Sample Services</h1><span class="grad-bar"></span>';
				
		while ( have_rows('staff_blocks') ) : the_row();
				        
			echo '<div class="staff_block">';
			
			$image = get_sub_field('image');
			
			$link = get_sub_field('page_link');
			
			echo '<img href="' . $image['url'] . '" alt="' . $image['alt'] . ' />';
			
			echo '<h3>' . get_sub_field('name') . '</h3>';
			
			echo '<h4>' . get_sub_field('title') . '</h4>';
			
			if (!empty($link)):
			
				echo '<a href="' . $link['url'] . '" target="' . $link['target'] . '">' . $link['title'] . '</a>';
			
			endif;
			
			echo '</div>';
				
		endwhile;
		
		echo '</div>';
					
	else :
				
	endif;
		
?>