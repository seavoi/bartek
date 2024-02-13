<?php /* Template Name: Distribution Partners */ ?>
<?php get_header(); ?>

<header class="" id="cart">
  <?php get_template_part('components/tophat'); ?>
  <?php get_template_part('components/navigation'); ?>
</header>
<main>
  <?php get_template_part('components/billboard'); ?>
  <div class="container cart">
    <div class="row">
      <div class="col-md-3 col-xl-2 sitemap-wrapper">
        <?php get_template_part('components/sitemap'); ?>
      </div>
      <div class="col-xs-12 col-md-9 col-xl-10">
        
      <?php if(have_rows('partner')): ?>
        <?php while( have_rows('partner') ): the_row(); ?> 
          <section class="blocks">
            <div class="container">
              <div class="block-wrapper ">
                <div class="col-xs-12 col-sm-6">
                  <div class="content-wrapper">

                    <?php 
                      $partner_company_name = get_sub_field('partner_company_name');
                      $partner_address = get_sub_field('partner_address');
                      $partner_phone = get_sub_field('partner_phone');
                      $partner_fax = get_sub_field('partner_fax');
                      $partner_email_address = get_sub_field('partner_email_address');
                      $partner_shipping_details = get_sub_field('partner_shipping_details');
                      $partner_additional_details = get_sub_field('partner_additional_details');
                      $partner_website = get_sub_field('partner_website');
                    ?>

                    <h3><?php echo $partner_company_name ?></h3>
                    <div class="wysiwyg-wrapper m-b-0">
                      <?php if($partner_address): ?>
                        <span class="section-label">Address</span>
                        <p><?php echo $partner_address; ?></p>
                      <?php endif; ?>
                      <?php if($partner_phone): ?>
                        <span class="section-label m-t-20">Phone</span>
                        <p><?php echo $partner_phone; ?></p>
                      <?php endif; ?>
                      <?php if($partner_fax): ?>
                        <span class="section-label m-t-20">Fax</span>
                        <p><?php echo $partner_fax; ?></p>
                      <?php endif; ?>
                      <?php if($partner_email_address): ?>
                        <span class="section-label m-t-20">Email</span>
                        <a href="mailto:<?php echo $partner_email_address; ?>"><?php echo $partner_email_address; ?></a>
                      <?php endif; ?>
                      <?php if($partner_shipping_details): ?>
                      <span class="section-label m-t-20">Shipping</span>
                      <div class="wysiwyg-wrapper m-b-20">
                        <?php echo $partner_shipping_details; ?>
                      </div>
                      <?php endif; ?>
                      <?php if($partner_additional_details): ?>
                      <span class="section-label m-t-20">Additional Details</span>
                      <div class="wysiwyg-wrapper m-b-20">
                        <?php echo $partner_additional_details; ?>
                      </div>
                      <?php endif; ?>

                      <?php if($partner_website): ?>
                      <div class="button-row m-t-20">
                        <a class="button button-primary" href="<?php echo $partner_website['url']; ?>" target="new">Visit Site</a>
                      </div>
                      <?php endif; ?>

                      <div class="clear"></div>
                    </div>

                  </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="image-wrapper" style="background-color: #f7f7f6;"></div>
                </div>
              </div>
            </div>
          </section>
        <?php endwhile; ?>
      <?php endif; ?>

      </div>
    </div>
  </div>

<?php get_footer(); ?>