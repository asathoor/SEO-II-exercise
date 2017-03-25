WordPress SEO Exercise
======================

## Branch: the SEO II Plugin

**In functions.php you can add new functionalities to a theme.
But functions.php only affect the theme.
If you want to use the SEO changes regardless of the theme
use a plugin. Now the code is changed to a WP plugin.**


## Important

Before you install the plugin, please remove the SEO-II-additions from functions.php. 

## Install

1. Download the .zip file.
2. In the WordPress Dashboard / Plugins / Add New (the button is on the top)
3. Select and upload the .zip.
4. Activate the plugin.


## Finish the code

The code sample is *not* up to the best practise.

Edit the code according to WordPress best practise:

1. Read about bloginfo() here.
2. Add bloginfos whereever you can, e.g.

`<meta name="application-name" content="<?php bloginfo('name'); ?>" />`

So don't use or accept hardcoded stuff like:

`<meta name="distributor" content="Multimusen.dk" />`

3. If WordPress doesn't have an appropriate tag, you may use some *variables*. 


# SoMe Meta Tags

* Add advanced meta-tags from Dublin Core or OGP. 

## WordPress on Meta-tags

* [See this page](https://codex.wordpress.org/Meta_Tags_in_WordPress)

The page lists these common Meta tags:

~~~~
<meta name="resource-type" content="document" />
<meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
<meta http-equiv="content-language" content="en-us" />
<meta name="author" content="Harriet Smith" />
<meta name="contact" content="harrietsmith@harrietsmith.us" />
<meta name="copyright" content="Copyright (c)1997-2004 
Harriet Smith. All Rights Reserved." />
<meta name="description" content="Story about my dog 
giving birth to puppies." />
<meta name="keywords" content="stories, tales, harriet, smith, 
harriet smith, storytelling, day, life, dog, birth, puppies, happy" />
~~~~

## Advanced Meta tags

* [Dublin Core](http://dublincore.org/documents/dcmi-terms/)
* [Open Graph Protocol](http://ogp.me/)
