<?php 

function hunters_section_1($attr, $content=null){
	extract(
		shortcode_atts(array(

			'title_sec_1'=> 'No Title',
			'description_sec_1' => 'No Description',
			'image_sec_1' => 'No Image',
			'color_sec_1' =>'No Color',


		),$attr));

	ob_start(); ?>

	<div class="looking_for_specific_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="looking_for_left para_default">
                        <h3 style="color:<?php echo esc_html($color_sec_1); ?>"><?php echo esc_html($title_sec_1); ?></h3>
                        <p style="color:<?php echo esc_html($color_sec_1); ?>"><?php echo esc_html($description_sec_1); ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="looking_for_right image_fulwidth wow fadeInRight" data-wow-delay="300ms">
      					<?php 

      						$sec1_image = wp_get_attachment_image_src($image_sec_1,'full');

      						if ($sec1_image) {  ?>
      							 <img src=" <?php echo esc_url($sec1_image [0]); ?>">
      						<?php } ?>
                    </div>
                </div>
            </div><!--row -->
        </div><!--container -->
    </div><!--looking_for_specific_area -->

<?php	return ob_get_clean();
}
add_shortcode('section_base_1','hunters_section_1');


// Section third 
function hunters_section_3($attr, $content=null){
	extract(
	shortcode_atts(array(
		'sec_icon_3'=> 'No Icon',
		'sec_image_3'=> 'No Image',
		'sec_title_3'=> 'No Title',
		'sec_desc_3' => 'No Description',
		'sec_color_3' => 'No Color',
		'sec_grp_3' => 'No Group'

	),$attr));

	ob_start();  ?>

			<div class="about_section_area">
		        <div class="container-fluid">
		            <div class="row">

				<?php 
					$sec_3_group = vc_param_group_parse_atts($sec_grp_3);

					foreach ($sec_grp_3 as $sec_grp_value) { ?>

						<div class="col-md-4 col-sm-6">
		                    <div class="about_Single_item para_default text-center wow fadeInLeft" data-wow-delay="300ms">
		                    	  	<?php 

			      						$sec3_image = wp_get_attachment_image_src($sec_grp_value['sec_image_3'],'full');

			      						if ($sec3_image) {  ?>
			      							 <img src=" <?php echo esc_url($sec3_image [0]); ?>">
			      						<?php }
			      					?>
		                        <i class="<?php  echo esc_attr( $sec_grp_value['sec_icon_3']); ?>"></i>
		                        <h3 style="color:<?php echo esc_html($sec_grp_value['sec_color_3']); ?>"><?php  echo esc_html( $sec_grp_value['sec_title_3']); ?></h3>
		                        <p><?php  echo esc_html( $sec_grp_value['sec_desc_3']); ?></p>
		                    </div>
		                </div><!--col-md-4 -->
				<?php } ?>

		            </div><!--row -->
		        </div><!--container-fluid -->
		    </div><!--about_section_area -->

	<?php ob_get_clean();
}
add_shortcode('section_base_3','hunters_section_3');


// Blog section 
function hunters_blog_section($attr, $content=null){
	extract(
		shortcode_atts(array(
			'section_blog_4'=> 'No Heading',

		), $attr));

	ob_start(); ?>

		    <div class="latest_blog_section_area removeBg_latest_blog">
		        <div class="container">
		            <div class="row">
						<div class="item single_blog_item_div para_default text-center">
							<h2><a><?php esc_html($section_blog_4); ?></a></h2>
						</div>

						<?php 
							$hunters_blog_post = new WP_Query(array(
								'post_type' => 'post',
								'post_pre_page'=> 3,
							));

							if($hunters_blog_post->have_posts()):
								while($hunters_blog_post->have_posts()):$hunters_blog_post->the_post();

						 ?>
		                <div class="col-md-4">
		                    <div class="single_blog_h_active">
		                        <div class="single_blog_item_area para_default image_fulwidth text-center">
		                            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail(); ?>" alt="images"></a>
		                            <h4><?php echo get_the_date('F j Y'); ?></h4>
		                            <h3><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
		                            <p><?php echo wp_trim_words(get_the_content(),30); ?></p>
		                        </div>
							</div>
						</div>

					<?php endwhile; endif; ?>

		            </div>
		        </div><!-- container-->
		    </div><!-- latest_blog_section_area-->

	<?php ob_get_clean();
}
add_shortcode('section_4_blog','hunters_blog_section');


// Contact Form 7

function hunters_contact_form($attr, $content=null){
	extract(
		shortcode_atts(array(
			'content'=> '',

		), $attr));


	ob_start(); ?>

		<div class="contact_page_get_start_area">
	        <div class="container">
	            <div class="row">
	                <div class="make_an_appoinment_area get_start_areA">
	                    <div class="col-md-12">
	                        <h3 class="title_get_start text-center">Ready to Get Started?</h3>
	                    </div>
	                    <?php 

	                        include_once(ABSPATH . 'wp-admin/includes/plugin.php');

			                    if(is_plugin_active('contact-form-7/wp-contact-form-7.php')){
			                    	echo do_shortcode($content);
			                } 
	                     ?>
	                </div>
	            </div><!--row-->
	        </div><!--container-->
	    </div><!--contact_page_get_start_area-->
	<?php ob_get_clean();
}
add_shortcode('section_contact_form','hunters_contact_form');


// Portfolio section 
function hunters_portfolio_section($attr, $content=null){
	extract(
		shortcode_atts(array(
			'section_Portfolio_post_per_page'=> 'No Heading',

		), $attr));

	ob_start(); ?>
		    <div class="portfolio_section_area">
		        <div class="container">
		            <div class="row">
		                <ul class="portfolio_menu">
		                    <li class="filter active" data-filter="all">All</li>

		                    <?php
		                    	$terms = get_terms('portfolio');
		                    		foreach ($terms as $term) { ?>
		                    			<li class="filter" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?> </li>
		                    		<?php } ?>

		                </ul>
		                <div class="mix-active portfolio_column_div">
		                    <div class="col-md-6 col-sm-6 mix BRANDING">
		                    	<?php 
		                    		$hunters_portfolio_post = new WP_Query(
		                    			array(

		                    				'post_type' =>'portfolio',
		                    				'taxonomy'  => 'portfolio',
		                    				'post_pre_page'=> $section_Portfolio_post_per_page,
										));

	                    				if ($hunters_portfolio_post->have_posts()):
	                    					while ($hunters_portfolio_post->have_posts()): $hunters_portfolio_post->the_post()

		                    			 ?>

		                    			<?php 

		                    				$portfolio_var = get_post_meta(get_the_ID(), '_portfolio_section', true);

		                    					get_post_thumbnail_id(get_the_ID());

		                    				$termsPor = get_the_terms(get_the_ID(), 'portfolio');
		                    					if ($termsPor && ! is_wp_error($termsPor)):
		                    						$draught_links = array();

			                    					foreach ($termsPor as $termp){
			                    						$draught_links[] = $termp->slug;
			                    					}
			                    					 $on_draught = join(" ", $draught_links ); ?>

					                        <div class="portfolio_column image_ <?php echo $portfolio_var['portfolio_img_size']; ?>	 <?php echo $on_draught; ?>">
					                            <a href="<?php the_permalink(); ?>" data-fancybox="gallery">
					                                <img src="<?php the_post_thumbnail(); ?>" alt="images"/>
					                            </a>
					                        </div>

					                       		<?php endif ?>
					                       <?php endwhile; endif ?>

		                    </div><!-- col-md-6 -->

		                </div>
		            </div><!-- row -->
		        </div><!-- container -->
		    </div><!-- portfolio_section_area -->

	<?php ob_get_clean();
}
add_shortcode('section_5_Portfolio','hunters_portfolio_section');







 ?>