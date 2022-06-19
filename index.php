<?php
get_header();

while ( have_posts() ) :
	the_post();

	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	the_content( 'Continue reading' );
endwhile;

get_footer();