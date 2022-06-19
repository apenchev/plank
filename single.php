<?php
get_header();

while ( have_posts() ) :
	the_post();

	the_title( '<h2 class="entry-title">', '</h2>' );
	the_content();

	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
endwhile;

get_footer();