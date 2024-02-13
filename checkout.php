<?php /* Template Name: Checkout */ ?>
<?php get_header(); ?>

<header class="" id="checkout">
  <?php get_template_part('components/tophat'); ?>
  <?php get_template_part('components/navigation'); ?>
</header>
<main>
  <?php get_template_part('components/billboard'); ?>
  <div class="container checkout">
    <div class="row">
      <div class="col-md-3 col-xl-2 sitemap-wrapper">
        <?php get_template_part('components/sitemap'); ?>
      </div>
      <div class="col-xs-12 col-md-9 col-xl-10">
        <?php echo do_shortcode('[woocommerce_checkout]'); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>