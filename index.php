<?php get_header(); ?>
<h1> Los posts/entradas</h1>
<div>
	<?php 
	if ( have_posts() ) : while ( have_posts() ) : the_post();

		get_template_part( 'content', get_post_format() );

	endwhile; endif; 
	?>
</div>
<hr>
<h1> Las páginas</h1>
<div>
	<?php 
	$pages = get_pages();
	foreach($pages as $page) {
		echo($page->post_title);
	    echo($page->post_content);
	    echo'<hr>';
	}
	?>
</div>

