 add_filter( 'pre_get_posts', 'tgm_io_cpt_search' );
 /**
  * This function modifies the main WordPress query to include an array of 
  * post types instead of the default 'post' post type.
  *
  * @param object $query  The original query.
  * @return object $query The amended query.
  */
 function tgm_io_cpt_search( $query ) {
 	
     if ( $query->is_search ) {
 	$query->set( 'post_type', array( 'post', 'movies', 'products', 'portfolio' ) );
     }
     
     return $query;
