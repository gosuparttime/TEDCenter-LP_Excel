<?php
/**
 * Custom functions
 */
// Homepage Options Dashboard Menu
//$file_url = get_bloginfo('template_directory').'/library/images/custom-post-icon.png';
function home_page_menu() {
  add_menu_page( 'Site Options', 'Site Options', 'edit_posts', 'home-menu', null, '', 32 );
}

add_action('admin_menu', 'home_page_menu');

// New Modules For Site
add_action( 'init', 'create_new_modules' );
function create_new_modules() {
	// Add Modules
	$labels = array(
		'name' => 'Modules',
		 'singular_name' => 'Module',
		 'menu_name' => 'Modules',
		 'add_new' => 'Add Module',
		 'add_new_item' => 'Add New Module',
		 'edit' => 'Edit',
		 'edit_item' => 'Edit Module',
		 'new_item' => 'New Module',
		 'view' => 'View Module',
		 'view_item' => 'View Module',
		 'search_items' => 'Search Modules',
		 'not_found' => 'No Modules Found',
		 'not_found_in_trash' => 'No Modules Found in Trash',
		 'parent' => 'Parent Module'
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Create new modules for OCL. These can be content blocks for the homepage',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'page',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'module'),
		'query_var' => true,
		'exclude_from_search' => true,
		'menu_position' => 1,
		'show_in_menu' => 'home-menu',
		'menu_icon' => get_bloginfo('template_directory') . '/assets/img/custom-post-icon.png',  // Icon Path
		'supports' => array('title', 'editor', 'thumbnail'),
	);
	register_post_type('module', $args);
};

// Display Modules
function display_module($type, $heading, $block, $hide) {
	echo '<div class="clearfix';
	
	echo '" role="complementary">';
    $query = new WP_Query(array( 'post_type' => 'module', 'name' => $type));
    while ( $query->have_posts() ) : $query->the_post();
	if (!$hide){
		echo '<h'.$heading.'>';
		the_title();
		echo '</h'.$heading.'>';
	}
	if (has_post_thumbnail()){
		echo '<div class="pad-one-t">'; 
		the_post_thumbnail('featured');
		echo '</div>'; 
	}
	the_content();//$info; 
    endwhile;
	wp_reset_postdata();
	echo '</div>'; 
}

// Module Widget
class ModuleWidget extends WP_Widget
{
  function ModuleWidget()
  {
    $widget_ops = array('classname' => 'ModuleWidget', 'description' => 'Displays information from selected module section within "Homepage Options"' );
    $this->WP_Widget('ModuleWidget', 'Module Widget', $widget_ops);
  }
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'available' => '', 'checkbox' => '', ) );
	$available = $instance['available'];
	$checkbox = $instance['checkbox'];
	$query = new WP_Query(array( 'post_type' => 'module', 'orderby' => 'ASC', 'posts_per_page' => '-1'));?>

<p>
  <label for="<?php echo $this->get_field_id('available'); ?>">Choose A Module: </label>
  <select id="<?php echo $this->get_field_id('available'); ?>" name="<?php echo $this->get_field_name('available'); ?>" class="widefat" style="width:100%;">
    <? while ( $query->have_posts() ) : $query->the_post();
  $id = get_the_ID();?>
    <option <?php selected( $instance['available'], $id ); ?> value="<?php echo $id; ?>"><?php echo the_title(); ?></option>
    <? endwhile;
  	wp_reset_postdata(); ?>
  </select>
<p>
  <input id="<?php echo $this->get_field_id('checkbox'); ?>" name="<?php echo $this->get_field_name('checkbox'); ?>" type="checkbox" value="1" <?php checked( '1', $checkbox ); ?>/>
  <label for="<?php echo $this->get_field_id('checkbox'); ?>">
    <?php _e('Remove Title'); ?>
  </label>
</p>
</p>
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['checkbox'] = $new_instance['checkbox'];
	$instance['available'] = $new_instance['available'];
    return $instance;
  }
 
    function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
	$checkbox = empty($instance['checkbox']) ? ' ' : apply_filters('widget_title', $instance['checkbox']);
	$available = empty($instance['available']) ? ' ' : apply_filters('widget_title', $instance['available']);
    $query = new WP_Query(array( 'post_type' => 'module', 'page_id' => $available));
    while ( $query->have_posts() ) : $query->the_post();
   
    //$title = the_title();
 	
    //if (!empty($title))
    echo $before_widget;
	
	if ($checkbox !="1"){
		echo $before_title;
		echo the_title();
		echo $after_title;
	}
	
    
    // WIDGET CODE GOES HERE
   
	echo '<div class="clearfix pad-one-b">';
	
	echo the_content();
	
	echo '</div>';
	
    echo $after_widget;
	endwhile;
	wp_reset_postdata();
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("ModuleWidget");') );

// Buttons
function buttons( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'color' => 'default', /* primary, default, info, success, danger, warning, inverse */
	'url'  => '',
	'text' => '',
	'subtext' => '',
	'blank' => false,
	'icon'=>'',
	), $atts ) );
	
	if($color == "default"){
		$color = "btn btn-default";
	}
	else{ 
		$color = "btn btn-" . $color;
	}
	if($blank == false){
		$blank = "_self";
	}
	else{ 
		$blank = "_blank";
	}
	if(! $icon){
		$icon = "glyphicon glyphicon-chevron-right";
	}
	$output = '<a href="' . $url . '" class="'.$color.'" target="'.$blank.'" title="'.$text.'" role="button">';
	if($subtext){
		$output .= '<div class="emphasize">';
		$output .= $text;
		$output .= '</div>';
		$output .= '<small>';
		$output .= $subtext;
		$output .= '<span class="' . $icon . '"></span>';
		$output .= '</small>';
	} else{
		$output .= $text;
		$output .= '<span class="' . $icon . '"></span>';
	}
	$output .= '</a>';
	
	return $output;
}

add_shortcode('button', 'buttons');

?>