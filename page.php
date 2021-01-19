<?php
echo 'page.php: Burası Bir Sayfadır.';
while ( have_posts() ) :
  the_post();
  the_title( '<h1 class="entry-title">', '</h1>' );
  the_content();
endwhile;
?>