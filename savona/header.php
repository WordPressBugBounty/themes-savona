<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<!-- Preloader -->
	<?php get_template_part( 'templates/header/preloader' ); ?>

	<!-- Page Wrapper -->
	<div id="page-wrap">
		
		<a class="skip-link screen-reader-text" href="#page-content"><?php esc_html_e( 'Skip to content', 'savona' ); ?></a>
		
		<!-- Boxed Wrapper -->
		<div id="page-header" <?php echo esc_attr(savona_options( 'general_header_width' )) === 'boxed' ? 'class="boxed-wrapper"': ''; ?>>

		<?php

		// Top Bar
		get_template_part( 'templates/header/top', 'bar' );

		// Main Navigation
		if ( savona_options( 'main_nav_position' ) === 'above' ) {
			get_template_part( 'templates/header/main', 'navigation' );
		}

		// Page Header
		get_template_part( 'templates/header/page', 'header' );

		// Main Navigation
		if ( savona_options( 'main_nav_position' ) === 'below' ) {
			get_template_part( 'templates/header/main', 'navigation' );
		}
		
		?>

		</div><!-- .boxed-wrapper -->

		<!-- Page Content -->
		<div id="page-content">

			<?php get_template_part( 'templates/sidebars/sidebar', 'alt' ); // Sidebar Alt ?>