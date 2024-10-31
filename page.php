<?php  
get_header();

while(have_posts()) {
    the_post(); ?>
    <h1>This is a page not a post.</h1>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <p><?php the_content(); ?></p>

<?php }

get_footer();
?>