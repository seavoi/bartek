<?php if(have_rows('content')): $content_counter = 1; ?>
    <?php while(have_rows('content')): the_row(); $type = get_sub_field('content_type'); $id = get_sub_field('content_id');?>
        <?php if ($type == 'accordion'): ?>
            <section class="accordion">
                <?php set_query_var('content_counter', $content_counter); get_template_part('components/subcontent/accordion'); ?>
        <?php elseif ($type == 'blocks'): ?>
            <section class="blocks">
                <?php set_query_var('content_counter', $content_counter); get_template_part('components/subcontent/blocks'); ?>
        <?php elseif ($type == 'cards'): ?>
            <section class="cards">
                <?php set_query_var('content_counter', $content_counter); get_template_part('components/subcontent/cards'); ?>
        <?php elseif ($type == 'icons'): ?>
            <section class="icons">
                <?php set_query_var('content_counter', $content_counter); get_template_part('components/subcontent/icons'); ?>
        <?php elseif ($type == 'carousels'): ?>
            <section class="carousels">
                <?php set_query_var('content_counter', $content_counter); get_template_part('components/subcontent/carousels'); ?>
        <?php elseif ($type == 'text'): ?>
            <section class="text">
                <?php set_query_var('content_counter', $content_counter); get_template_part('components/subcontent/text'); ?>
        <?php endif; ?>
        <?php if($id): ?>
                <div class="section-id" id="<?php echo $id; ?>"></div>
        <?php endif; ?>
            </section>
    <?php $content_counter = $content_counter + 1; endwhile; ?>
<?php endif; ?>