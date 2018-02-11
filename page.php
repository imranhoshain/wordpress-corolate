<?php get_header(); ?>

<div class="page_title_banner blog_sidebar_title_bg page_title_banner_text text-center">
	<div class="page_title_banner_overlay"></div>
                <h2 class="banner_effect">Blog Sidebar</h2>
                <ul class="breadcrumb">
                   <?php if(function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb(); ?>
                </ul>
            </div>
<?php
while (have_posts() ) : the_post();
	
	get_template_part( 'template-parts/page/content', 'page' );
	// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

endwhile;
?>
<?php get_footer();