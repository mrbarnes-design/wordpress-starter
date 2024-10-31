<?php  
get_header();

while(have_posts()) {
    the_post(); ?>

    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <p><?php the_content(); ?></p>

<?php }

get_footer();
?>