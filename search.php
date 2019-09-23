 <?php while (have_posts()) : the_post(); ?>
 <?php if ( $post->post_type == 'post' ) { ?>
          **Display Regular Posts**
 <?php } elseif ( $post->post_type == 'movies'  { ?>
          **Display Movie Posts**
 <?php } else  { ?>
          **Display Other Posts**
 <?php else : endif; ?>
