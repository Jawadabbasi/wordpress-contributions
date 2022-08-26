<?php
         
if(is_user_logged_in()){
   $args = array(
    'category_name' => 'Flowers',
    'post_status' => 'draft,publish',
    'posts_per_page' => 3,
   );
}
else{
    $args = array(
    'category_name' => 'Flowers',
    'post_status' => 'publish',
    'posts_per_page' => 3,
);      
}
 
$flowerposts = new WP_query($args);
 
if($flowerposts->have_posts()):
   while($flowerposts->have_posts()) : $flowerposts->the_post();
   ?>
  <h1><?php the_title(); ?></h1>
  <p><?php the_content(); ?>
  </p>
 
<?php
 
endwhile;
endif;
 
?>