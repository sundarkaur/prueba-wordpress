<?php
/**
 * Changelog
 */

$wimpie_lite = wp_get_theme( 'wimpie-lite' );
?>
<div class="featured-section changelog">
<?php
	WP_Filesystem();
	global $wp_filesystem;
	$wimpie_lite_changelog       = $wp_filesystem->get_contents( get_template_directory() . '/README.txt' );
	$changelog_start = strpos($wimpie_lite_changelog,'== Changelog ==');
	$wimpie_lite_changelog_before = substr($wimpie_lite_changelog,0,($changelog_start+15));
	$wimpie_lite_changelog = str_replace($wimpie_lite_changelog_before,'',$wimpie_lite_changelog);
	$wimpie_lite_changelog = str_replace('**','<br/>**',$wimpie_lite_changelog);
	$wimpie_lite_changelog = str_replace('= 1.5','<br/><br/>= 1.5',$wimpie_lite_changelog);
	echo $wimpie_lite_changelog;
	echo '<hr />';
	?>
</div>

