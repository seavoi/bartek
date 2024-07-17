<?php /* Template Name: Product */ ?>
<?php get_header(); ?>

<header class="" id="product">
  <?php get_template_part('components/tophat'); ?>
  <?php get_template_part('components/navigation'); ?>
</header>
<main>
  <?php get_template_part('components/billboard'); ?>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Product template</h1>
        <?php echo do_shortcode('[product_page id=""]'); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>