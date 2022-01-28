<?php get_header(); ?>
<section class="section">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>
      <div class="row">
        <div class="col">
          <h1 class="header-top-text">About</h1>
          <p class="header-bottom-text">Answer questions</p>
        </div>
        <div class="col-auto d-none d-md-block">
          <img class="avatar avatar-2x rounded-circle" src="<?php echo esc_url(get_avatar_url(get_the_author_id())); ?>" alt="Hakkımda" loading="lazy">
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <?php get_template_part('template-parts/contents/content', 'page'); ?>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</section>
<?php get_footer(); ?>