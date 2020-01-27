 <?php 
// Widgets menu 
	function hunters_blog_widgets(){
		register_sidebar(
			array(
				'name'          => __( 'Hunters Sidebar 1', 'textdomain' ),
		        'id'            => 'sidebar-blog',
		        'description'   => __( 'Blog Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		        'before_widget' => '<li id="%1$s" class="widget %2$s">',
		        'after_widget'  => '</li>',
		        'before_title'  => '<h5 class="widgettitle">',
		        'after_title'   => '</h5>',
		));
		register_sidebar(
			array( 
				'name' => 'Footer Area 1',
				'id'   => 'footer1' 
			));	

		register_sidebar(
			array( 
				'name' => 'Footer Area 2',
				'id'   => 'footer2' 
			));	

		register_sidebar(
			array( 
				'name' => 'Footer Area 3',
				'id'   => 'footer3' 
			));	

		register_sidebar(
			array( 
				'name' => 'Footer Area 4',
				'id'   => 'footer4' 
			));
	}
add_action('widgets_init','hunters_blog_widgets' );


 //New Adds hunters_Widget text-area.

	class hunters_Widget extends WP_Widget {
	 
	    /**
	     * Register widget with WordPress.
	     */
	    public function __construct() {
	        parent::__construct(
	            'foo_widget', // Base ID
	            esc_html__('Hunters Title','text_domain'), // Name
	            array( 'description' => esc_html__( 'Hunters Text Widget', 'text_domain' ), ) // Args
	        );
	    }
	 
	    /**
	     * Back-end widget form.
	     *
	     * @see WP_Widget::form()
	     *
	     * @param array $instance Previously saved values from database.
	     */
	    public function form( $instance ) {
	        if ( isset( $instance[ 'title' ] ) ) {
	            $title = $instance[ 'title' ];
	        }
	        else {
	            $title = __( 'New title', 'text_domain' );
	        }

	       	if ( isset( $instance[ 'description' ] ) ) {
	            $description = $instance[ 'description' ];
	        }
	        else {
	            $description = __( 'New Description', 'text_domain' );
	        }
	        ?>
	        <p>
	            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
	            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
	         </p>
	         <p>
	            <label for="<?php echo $this->get_field_name( 'description' ); ?>"><?php _e( 'Description:' ); ?></label>
	            <textarea class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>" type="text" value="<?php echo esc_attr( $description ); ?>" /></textarea>
	         </p>
	    	<?php
	    }

	    /**
	     * Sanitize widget form values as they are saved.
	     *
	     * @see WP_Widget::update()
	     *
	     * @param array $new_instance Values just sent to be saved.
	     * @param array $old_instance Previously saved values from database.
	     *
	     * @return array Updated safe values to be saved.
	     */
	    public function update( $new_instance, $old_instance ) {
	        $instance = array();
	        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
	       	$instance['description'] = ( !empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';
	 
	        return $instance;
	    }

	    /**
	     * Front-end display of widget.
	     *
	     * @see WP_Widget::widget()
	     *
	     * @param array $args     Widget arguments.
	     * @param array $instance Saved values from database.
	     */
	    public function widget( $args, $instance ) {
	        extract( $args );
	        $title = apply_filters( 'widget_title', $instance['title'] );
	        $description = apply_filters( 'widget_title', $instance['description'] );
	 
	        echo $before_widget;
	        if ( ! empty( $title ) ) {
	            echo $before_title . $title . $after_title;
	        }

	       	if ( ! empty( $description ) ) {
	            echo $before_title . $description . $after_title;
	        }
	
	        echo $after_widget;
	    }
	 
	} // class hunters_Widget

add_action('widgets_init', function() {
	   register_widget('hunters_Widget');
	});


 ?>
