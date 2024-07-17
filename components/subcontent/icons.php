<div class="container">
  <?php $headline = get_sub_field('icon_section_headline'); $size = get_sub_field('icon_size'); if ($headline): ?>
    <div class="row headline-row">
      <div class="col-12 text-center">
        <h2 class="m-b-0"><?php echo $headline; ?></h2>
      </div>
    </div>
  <?php endif; ?>
  <?php if(have_rows('icons')): $counter = 1; ?>
    <div class="row icon-row">
      <?php while(have_rows('icons')): the_row(); ?>
        <?php if ($size == 2): ?>
          <div class="col-xs-12 col-md-6 text-center">
        <?php elseif ($size == 3): ?>
          <div class="col-xs-12 col-md-4 text-center">
        <?php elseif ($size == 4): ?>
          <div class="col-xs-12 col-md-3 text-center">
        <?php endif; ?>
          <?php $icon_format = get_sub_field('icon_format'); $icon_image = get_sub_field('icon_image'); if($icon_format == 'frameless'): ?>
            <div class="icon-wrapper">
              <img alt="" class="icon" loading="lazy" src="<?php echo $icon_image; ?>"/>
            </div>
          <?php else: ?>
            <div class="icon-wrapper circular" style="background-image: url('<?php echo $icon_image; ?>.webp');"></div>
          <?php endif; ?>
          <?php $icon_title = get_sub_field('icon_title'); if($icon_title): ?>
            <p class="title"><?php echo $icon_title; ?></p>
          <?php endif; ?>
          <?php $icon_paragraph = get_sub_field('icon_paragraph'); if($icon_paragraph): ?>
            <div class="paragraph-wrapper">
              <p class="paragraph"><?php echo $icon_paragraph; ?></p>
              <?php $icon_hover_paragraph = get_sub_field('icon_hover_paragraph'); if($icon_hover_paragraph): ?>
                <div class="read-more-wrapper">
                  <p class="read-more-link">Read more...</p>
                  <p class="read-more"><?php echo $icon_hover_paragraph; ?></p>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php $icon_button = get_sub_field('icon_button'); if($icon_button): ?>
              <div class="button-row">
              <?php if($icon_button): 
                $button_target = $icon_button['target'] ? $icon_button['target'] : '_self'; 
                $button_title = $icon_button['title']; 
                $button_url = $icon_button['url'];?>
                <a 
                  class="button button-outline-primary" 
                  href="<?php echo esc_url( $button_url ); ?>" 
                  target="<?php echo esc_attr( $button_target ); ?>">
                  <?php echo esc_html( $button_title ); ?>
                </a>
              <?php endif; ?>
            </div>
            <?php endif; ?>
        <?php if ($size == 2 || $size == 3 || $size == 4): ?>
          </div>
        <?php endif; ?>
      <?php $counter = $counter + 1; endwhile; ?>
    </div>
  <?php endif; ?>
  <?php $button = get_sub_field('icon_section_button'); if ($button): ?>
    <div class="row button-row">
      <div class="col-12 text-center">
        <?php if($button): 
          $button_target = $button['target'] ? $button['target'] : '_self'; 
          $button_title = $button['title']; 
          $button_url = $button['url'];?>
          <a 
            class="button button-primary" 
            href="<?php echo esc_url( $button_url ); ?>" 
            target="<?php echo esc_attr( $button_target ); ?>">
            <?php echo esc_html( $button_title ); ?>
          </a>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>
</div>