<?php get_header(); ?>
<section class="section">
  <div class="container">
    <h1 class="header-top-text">Search Results</h1>
    <p class="header-bottom-text"><strong><?php echo get_search_query(); ?></strong> Search results for</p>
    <?php if (have_posts()) : ?>
      <div class="row">