<?php get_header(); ?>

<div id="topText" class="col-sm-8">
	<?php

		$topText = new WP_Query("page_id=4"); 
		while($topText->have_posts()) : $topText->the_post();
	    the_content();
	    endwhile; 
	?>
</div>
<div id="left-content" class="col-sm-4">
	<img src="<?php echo get_template_directory_uri(); ?>/img/meeting_09.png" class="meeting">
</div>
<div id="bottomText" class="col-sm-12">
	<?php 

		$bottomText = new WP_Query("page_id=7"); 
		while($bottomText->have_posts()) : $bottomText->the_post();
	    the_content();
	    endwhile; 
	?>
</div>


<?php get_footer(); ?>
