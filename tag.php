<?php
echo 'Etiket Sayfası <hr>';
single_tag_title();
echo '<hr>';
if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
    if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
    the_content();
  endwhile;
else :
  echo 'İçerik Bulunamadı';
  get_search_form();
endif;
?>
