<?php
/**
 * Getting started template
 */
$customizer_url = admin_url() . 'customize.php';
?>

<div class="feature-section">
	<div class="cols">
		<span><?php esc_html_e('Step 1','wimpie-lite')?></span>
		<h3><?php esc_html_e( 'Follow below actions', 'wimpie-lite' ); ?></h3>
		<p><?php esc_html_e( 'We\'ve made a checklist for you to take while setting up with our theme. Go through this and you can have your website ready in minutes.', 'wimpie-lite' ); ?></p>
			<p><span class="dashicons dashicons-yes"></span> <?php esc_html_e( 'Create a post, post category, page.', 'wimpie-lite' ); ?> <a target="_blank" href="<?php echo esc_url('https://8degreethemes.com/documentation/general/#creating_a_post_page_and_category'); ?>"><?php esc_html_e( 'Click here if you need help!', 'wimpie-lite' ); ?></a> </p>
			<p><span class="dashicons dashicons-yes"></span> <?php esc_html_e( 'Set page you created to load a custom template "Homepage" that came with theme and set it as frontpage.', 'wimpie-lite' ); ?> <a target="_blank" href="<?php echo esc_url('https://8degreethemes.com/documentation/general/#creating_a_homepage'); ?>"><?php esc_html_e( 'Click here if you need help!', 'wimpie-lite' ); ?></a> </p>
			<p><span class="dashicons dashicons-yes"></span> <?php esc_html_e( 'Install required/recommerded plugins (if any).', 'wimpie-lite' ); ?> </p>
		<p><a class="button button-primary" href="<?php echo esc_url( admin_url( 'themes.php?page=wimpie-lite-about&tab=recommended_plugins' ) ); ?>"><?php esc_html_e( 'Click Me to install recommended plugins.', 'wimpie-lite' ); ?></a>
		</p>
	</div><!--/.col-->

	<div class="cols">
		<span><?php esc_html_e('Step 2','wimpie-lite')?></span>
		<h3><?php esc_html_e( 'Import Demo Contents', 'wimpie-lite' ); ?></h3>
		<p><?php esc_html_e( 'If you like to have a site as similar like our demo then, go to Import Demo tab and do the needfuls.', 'wimpie-lite' ) ?></p>
		<p><a class="button button-primary" href="<?php echo esc_url( admin_url( 'themes.php?page=wimpie-lite-about&tab=demo_import' ) ); ?>"><?php esc_html_e( 'Click Me to import demo contents.', 'wimpie-lite' ); ?></a>
		</p>
	</div><!--/.col-->

	<div class="cols">
		<span><?php esc_html_e('Step 3','wimpie-lite')?></span>
		<h3><?php esc_html_e( 'Check our documentation', 'wimpie-lite' ); ?></h3>
		<p><?php esc_html_e( 'Even if you\'re a long-time WordPress user, we still believe you should give our documentation a very quick Read.', 'wimpie-lite' ) ?></p>
		<p>
			<a class="button button-primary" target="_blank" href="<?php echo esc_url( 'https://8degreethemes.com/documentation/wimpie-lite' ); ?>"><?php esc_html_e( 'Full documentation', 'wimpie-lite' ); ?></a>
		</p>
	</div><!--/.col-->

	<div class="cols">
		<span><?php esc_html_e('Step 4','wimpie-lite')?></span>
		<h3><?php esc_html_e( 'Customize everything', 'wimpie-lite' ); ?></h3>
		<p><?php esc_html_e( 'Using the WordPress Customizer you can easily customize every aspect of the theme.', 'wimpie-lite' ); ?></p>
		<p><a target="_blank" href="<?php echo esc_url( $customizer_url ); ?>"
			class="button button-primary"><?php esc_html_e( 'Go to Customizer', 'wimpie-lite' ); ?></a>
		</p>
	</div><!--/.col-->
</div><!--/.feature-section-->