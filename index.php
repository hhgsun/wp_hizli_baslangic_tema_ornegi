<?php
if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
    the_title( '<h1 class="entry-title">', '</h1>' );
    the_content();
  endwhile;
else :
  echo 'İçerik Bulunamadı';
  get_search_form();
endif;
?>
