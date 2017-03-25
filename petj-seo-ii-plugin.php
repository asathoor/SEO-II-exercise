<?php
/*
Plugin Name: SEO II Exercise
Plugin URI:  https://github.com/asathoor/SEO-II-exercise
Description: SEO enhancements to the theader
Version:     20170325
Author:      Per Thykjaer Jensen
Author URI:  http://multimusen.dk
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: petj-seo-ii
Domain Path: /languages
*/
add_action('wp_head','petj_seo_ii'); // add via the hook wp_head() (see header.php)

function petj_seo_ii(){

	// store repeated info in variables
	$author = "Per Jensen";
	$keywords = "WordPress, Tutorials, PHP, MySQL, Linux";
	$author_email = "petj@eaaa.dk";
	?>

	<!-- SEO ( from the petj_seo_ii plugin ) -->
	<!-- On WordPress and metatags, see @url: https://codex.wordpress.org/Meta_Tags_in_WordPress -->
	
	<!-- name via bloginfo -->
	<meta name="application-name" content="<?php bloginfo('name'); ?>" />

	<!-- use bloginfo or perhaps a variable -->
	<!-- it's better to use wp standards than to hardcode information -->
	<meta name="resource-type" content="document" />
	<meta name="author" content="<?php echo $author; ?>" />
	<meta name="contact" content="<?php echo $author_email; ?>" />
	<meta name="copyright" content="Copyright (c) GPLv2 2017 <?php echo $author; ?>" />
	<meta name="distributor" content="<?php bloginfo( 'name' ); ?>" />
	<meta name="robots" content="Index" />
	<meta name="description" content="<?php bloginfo( 'description' ); ?>"  />
	<meta name="keywords" content="<?php echo $keywords; ?>" />
	<meta name="rating" content="General" />

	<!-- DC Meta-data, url: http://dublincore.org/documents/dcmi-terms/ -->
	<!-- From here the info is hardcoded. Edit to wp standards, please -->
	<meta name="dcterms.title" content="Multimusen.dk " />
	<meta name="dcterms.contributor" content="Per Thykjaer Jensen" />
	<meta name="dcterms.creator" content="Per Thykjaer Jensen" />
	<meta name="dcterms.publisher" content="Multimusen" />
	<meta name="dcterms.description" content="Tips and tutorials for multimedia developers." />
	<meta name="dcterms.rights" content="GPLv3" />

	<!-- Open Graph Protocol, url: http://ogp.me/ -->
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Multimusen.dk " />
	<meta property="og:description" content="Tips and tutorials for multimedia developers." />
	<meta property="twitter:title" content="Multimusen.dk " />
	<meta property="twitter:description" content="Tips and tutorials for multimedia developers." />

	<?php
}
?>
