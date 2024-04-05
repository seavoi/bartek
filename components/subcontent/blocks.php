<?php 
  $block_button = get_sub_field('block_button'); 
  $block_content = get_sub_field('block_content'); 
  $block_headline_format = get_sub_field('block_headline_format'); 
  $block_headline = get_sub_field('block_headline'); 
  $block_image_format = get_sub_field('block_image_format'); 
  $block_image = get_sub_field('block_image'); 
  $block_layout = get_sub_field('block_layout'); 
  $block_video = get_sub_field('block_video');  ?>

<div class="container">
  <div class="block-wrapper <?php if($block_layout == 'right'): ?>mobile-invert<?php endif; ?>">
    <div class="col-xs-12 col-sm-6">
      <?php if($block_image_format == 'float'): ?>
        <div class="image-wrapper">
          <img alt="" class="image" src="<?php echo $block_image; ?>"/>
        </div>
      <?php elseif($block_image_format == 'video'): ?>
        <div class="video-wrapper">
          <?php echo $block_video; ?>
        </div>
      <?php else: ?>
        <div class="image-wrapper" style="background-image: url('<?php echo $block_image; ?>')"></div>
      <?php endif; ?>
    </div>
    <div class="col-xs-12 col-sm-6">
      <div class="content-wrapper">
        <?php if($block_headline): ?>
          <?php if($block_headline_format == 'secondary'): ?>
          <h3><?php echo $block_headline; ?></h3>
          <?php else: ?>
          <h2><?php echo $block_headline; ?></h2>
          <?php endif; ?>
        <?php endif; ?>
        <?php if($block_content): ?>
          <div class="wysiwyg-wrapper">
            <?php echo $block_content; ?>
            <div class="clear"></div>
          </div>
        <?php endif; ?>
        <?php if($block_button): ?>
          <div class="button-row">
          <?php if($block_button): 
            $button_target = $block_button['target'] ? $block_button['target'] : '_self'; 
            $button_title = $block_button['title']; 
            $button_url = $block_button['url'];?>
            <a 
              class="button button-primary" 
              href="<?php echo esc_url( $button_url ); ?>" 
              target="<?php echo esc_attr( $button_target ); ?>">
              <?php echo esc_html( $button_title ); ?>
            </a>
          <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>