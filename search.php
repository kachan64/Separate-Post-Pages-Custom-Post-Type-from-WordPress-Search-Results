 <?php if ( $post->post_type == 'post' ) : ?>
          **Display Regular Posts**
 <?php elseif ( $post->post_type == 'Movies' ) : ?>
          **Display Movie Posts**
 <?php else :  ?>
          **Display Other Posts**
 <?php endif; ?>
