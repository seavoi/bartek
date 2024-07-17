<?php 
  $text = get_sub_field('text'); 
  $text_section_button = get_sub_field('text_section_button'); 
  $text_section_headline = get_sub_field('text_section_headline'); 
  $text_section_subheadline = get_sub_field('text_section_subheadline');  ?>
  
<div class="container">
  <div class="col-12">
    <?php if($text_section_headline): ?>
      <h2><?php echo $text_section_headline; ?></h2>
    <?php endif; ?>
    <?php if($text_section_subheadline): ?>
      <h3><?php echo $text_section_subheadline; ?></h3>
    <?php endif; ?>
    <?php if($text): ?>
      <div class="wysiwyg-wrapper">
        <?php echo $text; ?>
        <div class="clear" class="clear"></div>
      </div>
    <?php endif; ?>
    <?php if($text_section_button): ?>
      <div class="button-row">
        <?php if($text_section_button): 
          $button_target = $text_section_button['target'] ? $text_section_button['target'] : '_self'; 
          $button_title = $text_section_button['title']; 
          $button_url = $text_section_button['url'];?>
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