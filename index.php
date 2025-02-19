<?php

get_header();

while (have_posts()) {
  the_post(); ?>

  <h2 class="text-4xl font-bold my-5"><a class="hover:text-emerald-500 transition-all duration-200" href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
  <?php the_content(); ?>
  <hr>

<?php }

get_footer();

?>