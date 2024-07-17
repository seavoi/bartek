<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<header class="home dark" id="home">
  <?php get_template_part('components/tophat'); ?>
  <?php get_template_part('components/navigation'); ?>
</header>
<main class="home"> 
  <?php if(have_rows('billboard_carousel')): ?>
    <?php while(have_rows('billboard_carousel')): the_row(); 
      $billboard_carousel_background_image = get_sub_field('billboard_carousel_background_image');
      $mobile_billboard_carousel_background_image = get_sub_field('mobile_billboard_carousel_background_image');
      $billboard_carousel_headline = get_sub_field('billboard_carousel_headline');
      $billboard_carousel_paragraph = get_sub_field('billboard_carousel_paragraph'); ?>
    <div id="home-hero-mobile" class="billboard-wrapper">
      <div class="billboard-content-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-6 billboard-content">
              <h1><?php echo $billboard_carousel_headline; ?></h1>
              <div class="wysiwyg-wrapper">
                <?php echo $billboard_carousel_paragraph; ?>
                <div class="clear"></div>
              </div>
              <?php $billboard_button = get_sub_field('billboard_carousel_button'); if($billboard_button): ?>
                <div class="button-row">
                <?php if($billboard_button): 
                  $button_target = $billboard_button['target'] ? $billboard_button['target'] : '_self'; 
                  $button_title = $billboard_button['title']; 
                  $button_url = $billboard_button['url'];?>
                  <a 
                    class="button button-secondary" 
                    href="<?php echo esc_url( $button_url ); ?>" 
                    style="border-color: white;"
                    target="<?php echo esc_attr( $button_target ); ?>">
                    <?php echo esc_html( $button_title ); ?>
                  </a>
                <?php endif; ?>
              </div>
              <?php endif; ?>
            </div>
            <div class="col-md-6">
            </div>
          </div>
        </div>
      </div>
      <div class="billboard-background-wrapper">
        <div class="billboard-background"></div>
        <div class="billboard-background" style="background-image: url('<?php echo $billboard_carousel_background_image; ?>')"></div>
      </div>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php if(have_rows('billboard_carousel')): $counter = 0; ?>
  <div id="home-hero" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
    <?php while(have_rows('billboard_carousel')): the_row(); ?>
      <style>
        #home-hero .carousel-indicators button:nth-of-type(<?php echo $counter + 1; ?>)::before {
          content: "<?php echo get_sub_field('billboard_carousel_button_text'); ?>";
        }
      </style>
      <button 
        aria-current="true" 
        aria-label="Slide <?php echo $counter + 1; ?>" 
        <?php if ($counter == 0): ?>
          class="active" 
        <?php endif; ?>
        data-bs-slide-to="<?php echo $counter; ?>" 
        data-bs-target="#home-hero" 
        type="button">
      </button>
    <?php $counter = $counter + 1; endwhile; ?>
    </div>
  <?php endif; ?>
  <?php if(have_rows('billboard_carousel')): $counter = 0; ?>
    <div class="carousel-inner">
    <?php while(have_rows('billboard_carousel')): the_row(); 
      $billboard_carousel_background_image = get_sub_field('billboard_carousel_background_image');
      $billboard_carousel_headline = get_sub_field('billboard_carousel_headline');
      $billboard_carousel_paragraph = get_sub_field('billboard_carousel_paragraph'); ?>
      <div 
        <?php if ($counter == 0): ?>
        class="carousel-item active" 
        <?php else: ?>
        class="carousel-item" 
        <?php endif; ?>
        data-bs-interval="8000">
        <div class="d-block w-100">
          <div class="carousel-caption">
            <h1 class="carousel-headline"><?php echo $billboard_carousel_headline; ?></h1>
            <div class="wysiwyg-wrapper">
              <?php echo $billboard_carousel_paragraph; ?>
              <div class="clear"></div>
            </div>
            <?php $billboard_button = get_sub_field('billboard_carousel_button'); if($billboard_button): ?>
              <div class="button-row">
              <?php if($billboard_button): 
                $button_target = $billboard_button['target'] ? $billboard_button['target'] : '_self'; 
                $button_title = $billboard_button['title']; 
                $button_url = $billboard_button['url'];?>
                <a 
                  class="button button-secondary" 
                  href="<?php echo esc_url( $button_url ); ?>" 
                  style="border-color: white;"
                  target="<?php echo esc_attr( $button_target ); ?>">
                  <?php echo esc_html( $button_title ); ?>
                </a>
              <?php endif; ?>
            </div>
            <?php endif; ?>
          </div>
          <div class="carousel-blocker"></div>
          <div class="carousel-desktop" style="background-image: url('<?php echo $billboard_carousel_background_image; ?>.webp');"></div>
          <div class="carousel-mobile" style="background-image: url('<?php echo $mobile_billboard_carousel_background_image; ?>.webp');"></div>
        </div>
      </div>
    <?php $counter = $counter + 1; endwhile; ?>
    </div>
    <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#home-hero" type="button" style="opacity: 0;">
      <span aria-hidden="true" class="carousel-control-prev-icon"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#home-hero" type="button" style="opacity: 0;">
      <span aria-hidden="true" class="carousel-control-next-icon"></span>
      <span class="visually-hidden">Next</span>
    </button>
    <div class="hero-shaddow">
      <div class="billboard-learn-more-wrapper">
        <button aria-label="Scroll down" class="billboard-learn-more" onclick="homeScroll(this)">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m480-340 180-180-57-56-123 123-123-123-57 56 180 180Zm0 260q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
        </button>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div id="scroll"></div>
  <?php get_template_part('components/content'); ?>
<?php get_footer(); ?>