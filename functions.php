<?php
/**
 * Add SEO tags to a WordPress Theme
 * ( where: functions.php )
 *
 * Add stuff via the wp_head() hook
 * Don't hardcode the tag content
 * The best practise is to use the bloginfo()
 * url: https://developer.wordpress.org/reference/functions/bloginfo/
 */
add_action('wp_head','petj_add_my_metatags'); // add vua wp_head()

function petj_add_my_metatags(){

	// store repeated info in variables
	$author = "Per Jensen";
	$keywords = "WordPress, Tutorials, PHP, MySQL, Linux";
	?>

	<!-- SEO ( from my function ) -->

	<!-- On WordPress and metatags, see @url: https://codex.wordpress.org/Meta_Tags_in_WordPress -->
	
	<!-- name via bloginfo -->
	<meta name="application-name" content="<?php bloginfo('name'); ?>" />

	<!-- use bloginfo or perhaps a variable -->
	<!-- it's better to use wp standards than to hardcode information -->
	<meta name="resource-type" content="document" />
	<meta name="author" content="<?php echo $author; ?>" />
	<meta name="contact" content="petj@eaaa.dk" />
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
