<?php get_header();?>
    <div class="page_title_banner banner_blog_single_title_bg">
        <div class="page_title_banner_overlay"></div>
        <div class="container">
            <div class="page_title_banner_text text-center">
                <h2 class="banner_effect">Blog single</h2>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">blog single</li>
                </ul>
            </div>
        </div><!--container-->
    </div><!-- page_title_banner -->

    <div class="blog_page_area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                                    
                    <?php 
                      if(have_posts()):
                      while(have_posts()):the_post();
                      
                      ?>
                       <div class="blog_left_side_area">
                        <div class="blog_pic image_fulwidth">
                            <?php the_post_thumbnail();?>
                            <h4 class="date_position"><?php echo get_the_date('F j Y');?></h4>
                        </div>
                <div class="blog_left_single_content blog_single_content para_default">
                    <h3><?php echo get_the_title();?></h3>
                    <p><?php the_content(); ?></p>

                </div>

                        <div class="blog_tag">
                            <?php the_tags( ' ', ' ', '<br />' ); ?>
                        </div>

                        <div class="share_blog_single_in_social">
                            <h4>
                                <span>Share</span>                      
                                <a href="http://www.facebook.com/sharer.php?url=<?php the_permalink();?>&amp;t=<?php the_title(); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="https://plus.google.com/share?url=<?php the_permalink();?>"><i class="fa fa-google-plus"></i></a>
                                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </h4>
                        </div>
                        
                        
                        <div class="content_blog_a fix">
                            <div class="e_blog_A">
                                 <?php echo get_avatar(get_the_author_meta('ID'),100); ?>
 
                            </div>
                            <div class="blog_a_text">
                            
                                <h5><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'),get_the_author_meta('user_nicename'));?>" class="admin"><?php the_author();?></a></h5>
                                
                                <p><?php the_author_meta('description'); ?></p>
                            </div>
                        </div>
                        
                        <?php  

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                        ?>   
                        
                        
                    </div><!-- blog_left_side_area -->
                
                    <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>

                </div><!-- col-md-8 -->

                <div class="col-md-4">
                    <div class="blog_right_side_area">
                        <?php echo dynamic_sidebar('right_sidebar'); ?>                                
                    </div>
                </div><!-- col-md-4 -->
            </div><!-- row -->

            
        </div><!-- container -->
    </div><!-- blog_page_area -->

   <?php get_footer();?>