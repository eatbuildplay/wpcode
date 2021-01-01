<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

  <header class="site-header">

		<div class="container">
	    <div class="row">

				<div class="col-md-3">
					<a id="site-logo-link" href="<?php print site_url(); ?>">
				    <div>WP <i class="fas fa-code"></i> CODE</div>
					</a>
				</div>

				<div class="col-md-9">

					<?php
						wp_nav_menu([
							'theme_location' => 'primary'
						]);
					?>

	      </div>

			</div>
		</div>

  </header>
