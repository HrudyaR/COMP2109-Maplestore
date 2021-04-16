<?php
 /* Template Name: Home Page */

 get_header();

 $args = array(
    'numberposts' => 120, // Number of recent posts thumbnails to display
    'post_status' => 'publish' // Show only the published posts
);

$query = new WP_Query( $args );


 ?>
 <?php if ( $query->have_posts() ) : ?> 
     <?php while ( $query->have_posts() ) : ?>
         <?php $query->the_post(); ?>
         <?php get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) ); ?>
     <?php endwhile; ?>
 
     <?php twenty_twenty_one_the_posts_navigation(); ?>
 
 <?php else : ?>
     <?php get_template_part( 'template-parts/content/content-none' ); ?>
 <?php endif; ?>
 
 <?php get_footer(); ?> 