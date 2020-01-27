<?php

/***
* Template Part for displaying page content in page .php
*
*@link https://henters
*
*@package Wordpress
*@subpackage henters
*@since 1.0
*@version 1.0
***/

 ?>

 <article>
 	<?php the_title(); ?>
 	<?php the_content(); ?>

<div class="pagination-entry-content">
	 <?php wp_link_pages(array(
 		'before' => '<div class="page_links">' .__('Pages:', 'hunters'),
 		'after' => "</div>",

 	)); ?>
</div>

 </article>