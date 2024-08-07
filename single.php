<?php get_header(); $post_id = get_the_ID(); ?>

<header class="" id="single">
  <?php get_template_part('components/tophat'); ?>
  <?php get_template_part('components/navigation'); ?>
</header>
<main>
  <?php get_template_part('components/billboard'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-xl-2 sitemap-wrapper">
        <?php get_template_part('components/sitemap'); ?>
      </div>
      <div class="col-xs-12 col-md-9 col-xl-10">
        <?php get_template_part('components/content'); ?>
      </div>
    </div>
  </div>
    
<?php get_footer(); ?>