<?php  get_header(); ?>

<?php 

	while (have_posts()) : the_post();

		get_template_part('template-parts/page/content', 'page');
	endwhile;//End of the while loop

	//If comment are open or we have at last one comment,Load of the comments template.
	if (comments_open() || get_comments_number()) : 
		comments_template();
	endif


 ?>

<?php get_footer(); ?>