<?php 
get_header(); // bu alanı diğer dosyalara da ekleyebilirsiniz ?>
<?php
echo 'single.php: Burası Bir İçeriktir.';
while ( have_posts() ) :
 the_post();
 the_title( '<h1 class="entry-title">', '</h1>' );
 the_content();
endwhile;
?>
<?php 
get_footer(); // bu alanı diğer dosyalara da ekleyebilirsiniz ?>