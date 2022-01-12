Skip to content
Why GitHub? 
Team
Enterprise
Explore 
Marketplace
Pricing 
Search
Sign in
Sign up
nebyouame
/
themedev
Public
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
themedev/index.php /
@nebyouame
nebyouame Update index.php
Latest commit 8d93df4 on May 22, 2021
 History
 1 contributor
66 lines (55 sloc)  1.9 KB
  
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DarkTheme
 */

get_header();
?>

<!-- Bread Crumb Area -->



<section class="blog-style-one sec-pad blog-page mrmain_blog mrindex">
    <div class="container">
        <div class="row">
			<?php if(is_active_sidebar('sidebar-left')) : ?> 
			<div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
			<?php  else : ?>
			<div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
			<?php  endif ; ?> 
				   
				<div id="primary" class="content-area">
                    <main id="main" class="blog_list site-main ">
				
				<?php if ( have_posts() ) :
                  while( have_posts() ): the_post();?> 
				   <div id="post-<?php the_ID(); ?>" <?php post_class();?>>
                  <?php get_template_part( 'template-parts/content' ); ?>
                        <!-- blog post item -->
                  </div><!-- End Post --> 
				<?php endwhile;?>
					<div class="dope-pagination text-center">
						<?php the_posts_pagination(); ?>
                    </div>
			
			<?php else :
get_template_part( 'template-parts/content', 'none' ); endif;?>

                        </main><!-- #main -->
                    </div>
                </div>			
				<!-- sidebar area -->
			<?php if(is_active_sidebar('sidebar-left')) { ?>
			<div class="col-lg-4 col-md-4 col-sm-12">
                <div class="sidebar">
				<?php dynamic_sidebar('sidebar-left'); ?>
				</div>
			</div>
			<?php } ?>
            <!--Sidebar-->
				
            </div>
        </div>
    </section>
<?php
get_footer();
