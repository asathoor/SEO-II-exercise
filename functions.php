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
																
	?>

	<!-- SEO ( from my hook ) -->
	
	<!-- name via bloginfo -->
	<meta name="application-name" content="<?php bloginfo('name'); ?>" />

	<!-- use bloginfo or perhaps a variable -->
	<meta name="author" content="<?php echo $author; ?>" />
	<meta name="distributor" content="Multimusen.dk" />
	<meta name="robots" content="Index" />
	<meta name="description" content="Tips and tutorials for multimedia developers. ---- <?php wp_title(); ?>"  />
	<meta name="keywords" content="WordPress, PHP, MySQL, Jquery JavaScript, Flash, ActionScript, LAMP, XAMPP" />
	<meta name="generator" content="META Tag Generator: http://toolswebtop.com/seo/metatag" />
	<meta name="rating" content="General" />

	<!-- DC Meta-data, url: http://dublincore.org/documents/dcmi-terms/ -->
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
