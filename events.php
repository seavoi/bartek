<?php /* Template Name: Events */ ?>
<?php get_header(); ?>

<header class="" id="account">
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
        <section class="accordion">
          <div class="container">
            <div class="row headline-row">
              <div class="col-12 text-left">
                <h2><?php echo esc_html(get_field('events_headline')); ?></h2>
                <div class="wysiwyg-wrapper">
                  <?php the_field('events_content'); ?>
                  <div class="clear"></div>
                </div>
              </div>
            </div>
            <?php echo facetwp_display('template','events_library'); ?>
            <?php echo facetwp_display('pager'); ?> 
          </div>
        </section>
        <?php get_template_part('components/content'); ?>
      </div>
    </div>
  </div>
  
<?php get_footer(); ?>