<?php get_header(); ?>

<section id="services" class="service-item">
	<div class="container">
<?php 
while ( have_posts() ) : the_post();

get_template_part('template-parts/page/content','page');

	if ( comments_open() || get_comments_number() ) :
					comments_template();
	endif;

endwhile;
?>
</div>
</section>


<?php get_footer();