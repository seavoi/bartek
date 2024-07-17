<?php /* Template Name: Resource Library */ ?>
<?php get_header(); ?>

<header class="" id="page">
  <?php get_template_part('components/tophat'); ?>
  <?php get_template_part('components/navigation'); ?>
</header>
<main>
	<?php get_template_part('components/billboard'); ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3">
				<span style="display: block; font-weight: bold; margin: 0 0 10px 0;">Type</span>
				<?php echo facetwp_display('facet','type'); ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<span style="display: block; font-weight: bold; margin: 0 0 10px 0;">Product</span>
				<?php echo facetwp_display('facet','product'); ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<span style="display: block; font-weight: bold; margin: 0 0 10px 0;">Pathologies &amp; Hoof Predisposition</span>
				<?php echo facetwp_display('facet','predisposition'); ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<span style="display: block; font-weight: bold; margin: 0 0 10px 0;">Usage</span>
				<?php echo facetwp_display('facet','usage'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<?php echo facetwp_display('template','resource_library'); ?>
				<?php echo facetwp_display('pager'); ?>
				<?php get_template_part('components/content'); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>