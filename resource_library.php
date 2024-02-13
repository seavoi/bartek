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
			<div class="col-md-3 col-xl-2 filter-wrapper">
				<div class="filter">
					<?php echo facetwp_display('facet','search'); ?>
					<p class="filter-title">Type</p>
					<?php echo facetwp_display('facet','type'); ?>
					<p class="filter-title">Product</p>
					<?php echo facetwp_display('facet','product'); ?>
					<p class="filter-title">Usage</p>
					<?php echo facetwp_display('facet','usage'); ?>
					<p class="filter-title">Discipline</p>
					<?php echo facetwp_display('facet','discipline'); ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-9 col-xl-10">
				<?php echo facetwp_display('template','resource_library'); ?>
				<?php echo facetwp_display('pager'); ?>
				<?php get_template_part('components/content'); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>