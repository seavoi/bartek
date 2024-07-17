<?php /* Template Name: Account */ ?>
<?php get_header(); ?>

<header class="" id="account">
  <?php get_template_part('components/tophat'); ?>
  <?php get_template_part('components/navigation'); ?>
</header>
<main>
  <?php get_template_part('components/billboard'); ?>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php echo do_shortcode('[woocommerce_my_account]'); ?>
      </div>
    </div>
  </div>
  
<?php get_footer(); ?>