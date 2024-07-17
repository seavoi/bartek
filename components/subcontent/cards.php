<div class="container">
  <?php $headline = get_sub_field('card_section_headline'); $size = get_sub_field('card_size'); if ($headline): ?>
    <div class="row headline-row">
      <div class="col-12 text-center">
        <h2 class="m-b-0"><?php echo $headline; ?></h2>
      </div>
    </div>
  <?php endif; ?>
  <?php if(have_rows('cards')): $counter = 1; ?>
    <div class="row card-row">
      <?php while(have_rows('cards')): the_row(); ?>
        <?php if ($size == 2): ?>
          <div class="col-xs-12 col-md-6">
        <?php elseif ($size == 3): ?>
          <div class="col-xs-12 col-md-4">
        <?php elseif ($size == 4): ?>
          <div class="col-xs-12 col-md-3">
        <?php endif; ?>
          <div class="card">
            <?php $card_image = get_sub_field('card_image'); $card_title = get_sub_field('card_title'); if($card_image): ?>
              <div class="card-image-wrapper">
                <div class="card-image" style="background-image: url('<?php echo $card_image ?>.webp');"></div>
              </div>
            <?php endif; ?>
            <div class="card-body">
              <?php if($card_title): ?>
                <p class="title"><?php echo $card_title ?></p>
              <?php endif; ?>
              <?php $card_content = get_sub_field('card_content'); if($card_content): ?>
                <div class="wysiwyg-wrapper">
                  <?php echo $card_content ?>
                  <div class="clear"></div>
                </div>
              <?php endif; ?>
              <?php $card_button = get_sub_field('card_button'); if ($card_button):
                $button_target = $card_button['target'] ? $card_button['target'] : '_self'; 
                $button_title = $card_button['title']; 
                $button_url = $card_button['url'];?>
                <a 
                  class="button button-outline-primary" 
                  href="<?php echo esc_url( $button_url ); ?>" 
                  target="<?php echo esc_attr( $button_target ); ?>">
                  <?php echo esc_html( $button_title ); ?>
                </a>
              <?php endif; ?>
            </div>
          </div>
        <?php if ($size == 2 || $size == 3 || $size == 4): ?>
          </div>
        <?php endif; ?>
      <?php $counter = $counter + 1; endwhile; ?>
    </div>
  <?php endif; ?>
  <?php $button = get_sub_field('card_section_button'); if ($button): ?>
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