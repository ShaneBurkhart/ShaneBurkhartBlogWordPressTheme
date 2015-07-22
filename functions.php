<?php
remove_action('template_redirect', 'redirect_canonical');

// theme setup
if (!function_exists('crawford_setup')):
	function crawford_setup() {	
		add_theme_support('post-thumbnails');
		add_image_size('featured', 1170, 400, true);	
	}
endif; 
add_action('after_setup_theme', 'crawford_setup');

// pagination
if (!function_exists('crawford_pagination')):
	function crawford_pagination() {
		global $wp_query;
		$big = 999999999;	
		echo '<div class="pager">';	
		echo paginate_links( array(
			'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			'format' => '?paged=%#%',
			'current' => max(1, get_query_var('paged')),
			'total' => $wp_query->max_num_pages,
			'prev_next' => true,
			'prev_text' => __('&larr; Prev', 'crawford'),
			'next_text' => __('Next &rarr;', 'crawford')
		));
		echo '</div>';
	}
endif;

add_filter( 'post_thumbnail_html', 'remove_width_attribute' );
add_filter( 'image_send_to_editor', 'remove_width_attribute' );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}
?>
