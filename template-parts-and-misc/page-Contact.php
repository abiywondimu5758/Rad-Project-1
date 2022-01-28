<?php get_header(); ?>
<section class="section">
  <div class="container">
    <h1 class="header-top-text">Communication</h1>
    <p class="header-bottom-text">You can use the contact form below to send your suggestions and requests.</p>
    <?php while (have_posts()) : the_post(); ?>
      <div class="row">
        <div class="col-md-8">
          <?php get_template_part('template-parts/contents/content', 'page'); ?>
        </div>
        <div class="col-md-4 mt-5 mt-md-0">
          <div class="card mb-3">
            <div class="card-body">
              <div class="contact-info">
                <i class="fas fa-phone"></i>
                <a rel="external" href="https://wa.me/905350685472" class="stretched-link">
                  <span>+251936694957</span>
                </a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="contact-info">
                <i class="fas fa-envelope"></i>
                <a rel="external" href="eyolden@gmail.com" class="stretched-link">
                  <span>eyolden@gmail.com</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</section>
<?php get_footer(); ?>
