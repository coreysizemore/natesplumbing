<?php
	
	echo '<div id="boring_wrapper"><div class="container"><div class="row gutters"><div class="col_12"><div class="boring_image">';
	
	$image = get_field('image');
	
	if (!empty($image)):
	
		echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
	
	endif;
	
	echo '</div><div class="boring_content">';
	
	if( get_field('heading') ):
	
		echo '<h2>' . get_field('heading') . '</h2>';
	
	endif;
	
	if( get_field('description') ):
	
		echo '<p>' . get_field('description') . '</p>';
	
	endif;
	
	$link = get_field('link');
	
	if (!empty($link)):
	
		echo '<a href="' . $link['url'] . '" target="' . $link['target'] . '">' . $link['title'] . '</a>';
	
	endif;
	
	echo '</div></div></div></div></div>';
		
?>