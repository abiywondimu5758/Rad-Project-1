<?php get_header(); ?>
<section class="section">
  <div class="container">
    <h1 class="header-top-text"><?php echo single_cat_title(); ?></h1>
    <p class="header-bottom-text"><strong><?php echo single_cat_title(); ?></strong> catagories</p>
    <?php if (have_posts()) : ?>
      <div class="row">
        <?php while (have_posts()) : the_post(); ?>
          <div class="col-md-4 mb-4">
            <?php get_template_part('template-parts/cards/card', 'article'); ?>
          </div>
        
  </div>
</section>
<?php get_footer(); ?>
