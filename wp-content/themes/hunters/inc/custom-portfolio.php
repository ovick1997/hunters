<?php 
/**
 * Register a Portfolio post type.
 */
function custome_portfolio() {
	$labels = array(
		'name'               => _x( 'Portfolios', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Portfolio', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Portfolios', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Portfolio', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Portfolio', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Portfolio', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Portfolio', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Portfolio', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Portfolios', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Portfolios', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Portfolios:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Portfolios found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Portfolios found in Trash.', 'your-plugin-textdomain' )
	);

	$arg = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'portfolio', $arg );
}
// hook into the init action and call custome_portfolio when it fires
add_action('init','custome_portfolio');

/**
 * Create taxonomies, Catagory and writers for the post type "portfolio".
 *
 * @see register_post_type() for registering custom post types.
 */
function portfolio_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Catagorys', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Catagory', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Catagorys', 'textdomain' ),
        'all_items'         => __( 'All Catagorys', 'textdomain' ),
        'parent_item'       => __( 'Parent Catagory', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Catagory:', 'textdomain' ),
        'edit_item'         => __( 'Edit Catagory', 'textdomain' ),
        'update_item'       => __( 'Update Catagory', 'textdomain' ),
        'add_new_item'      => __( 'Add New Catagory', 'textdomain' ),
        'new_item_name'     => __( 'New Catagory Name', 'textdomain' ),
        'menu_name'         => __( 'Catagory', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'portfolio' ),
    );
 
    register_taxonomy( 'Catagory', array( 'portfolio' ), $args );
}
// hook into the init action and call portfolio_taxonomies when it fires
add_action( 'init', 'portfolio_taxonomies', 0 );



/**
 * Create taxonomies, Tags and writers for the post type "portfolio".
 *
 * @see register_post_type() for registering custom post types.
 */
function portfolio_taxonomies_tags() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Tags', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Tags', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Tags', 'textdomain' ),
        'all_items'         => __( 'All Tagss', 'textdomain' ),
        'parent_item'       => __( 'Parent Tags', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Tags:', 'textdomain' ),
        'edit_item'         => __( 'Edit Tags', 'textdomain' ),
        'update_item'       => __( 'Update Tags', 'textdomain' ),
        'add_new_item'      => __( 'Add New Tags', 'textdomain' ),
        'new_item_name'     => __( 'New Tags Name', 'textdomain' ),
        'menu_name'         => __( 'Tags', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'portfolio' ),
    );
 
    register_taxonomy( 'Tags', array( 'portfolio' ), $args );
}
// hook into the init action and call portfolio_taxonomies_tags when it fires
add_action( 'init', 'portfolio_taxonomies_tags', 0 );


/**
* Create custome metabox
*/
function portfolio_add_metabox(){
	add_meta_box(  
			'portfolio_section_id', //id section
			'Portfolio Metabox', //title section
			'portfolio_section_callback', //callback section
			'portfolio', //screen section
			'normal', //context section 
			'default'//priority section 

	);
}
// hook into the init action and call add_meta_boxes when it fires
add_action( 'add_meta_boxes', 'portfolio_add_metabox');

/**
 *Create custome metabox portfolio_section_callback data input.
 */
function portfolio_section_callback($post){ 

	wp_nonce_field('portfolio_metabox','portfolio_metabox_nonce');
	$title = get_post_meta($post->ID,'title',true);

	?>

	<form>
	 	 <div class="form-group col-md-12">
	    	<label for="exampleInputText1">Title</label>
	   		<input type="text" class="form-control" name="title" value="<?php echo $title; ?>">
	  	</div>
	</form>

<?php }

/**
*Check if our nonce, Verify,sure-input,Sanitize,Update save data is set .
*/

function portfolio_save_meta($post_id){

//Check if our nonce is set.
	if(!isset($_POST['portfolio_metabox_nonce'])){
		return;
	}

// Verify that the nonce is valid.
	if (! wp_verify_nonce($_POST['portfolio_metabox_nonce'], 'portfolio_metabox' )) {
		return;
	}

// Make sure that it (input) is sest.
	if (! isset($_POST['title'])) {
		return;
	}
//Sanitize user input.
	$my_title = sanitize_text_field($_POST['title']);

//Update the meta field in the database
	update_post_meta( $post_id, 'title', $my_title);
}
add_action('save_meta','portfolio_save_meta');


 ?>
