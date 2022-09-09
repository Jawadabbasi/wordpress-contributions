<?php

if(have_posts()):
    while(have_posts()) : the_posts();
?>
<h1><?php the_title(); ?></h1>
<div class="post-image"><?php the_post_thumbnail('medium'); ?></div>
<php><?php the_excerpt(); ?></p>
<?php
endwhile;
endif

echo paginate_links();

?>