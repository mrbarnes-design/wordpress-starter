<?php  
get_header();

while(have_posts()) {
    the_post(); ?>

    <li><?php the_title(); ?></li>
    <p><?php the_content(); ?></p>
    <button class="btn">Click me</button>

<?php }

get_footer();
?>