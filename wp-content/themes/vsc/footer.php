<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package view_source
 */

?>
	</div>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-content">
				<h2><?php _e( 'Sponsored By', 'view_source' );?></h2>
				<?php get_template_part( 'template-parts/content', 'footer' );?>
				<div class="site-info">
					<?php get_template_part( 'template-parts/content', 'footer-nav' );?>
				</div><!-- .site-info -->
			</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->
<?php get_template_part( 'template-parts/content', 'sidr' );?>
<div id="dragon">
	<i id="thar-she-goes" class="fa fa-times-circle"></i>
	<img src="<?php echo get_template_directory_uri();?>/images/mozilla-dragon.png">
</div>

<script>
	// minified loadCSS function
	function loadCSS(e,n,o,t){"use strict";var d=window.document.createElement("link"),i=n||window.document.getElementsByTagName("script")[0],s=window.document.styleSheets;return d.rel="stylesheet",d.href=e,d.media="only x",t&&(d.onload=t),i.parentNode.insertBefore(d,i),d.onloadcssdefined=function(n){for(var o,t=0;t<s.length;t++)s[t].href&&s[t].href.indexOf(e)>-1&&(o=!0);o?n():setTimeout(function(){d.onloadcssdefined(n)})},d.onloadcssdefined(function(){d.media=o||"all"}),d}
	loadCSS("<?php echo get_template_directory_uri() . '/style.css'?>");
</script>
<?php wp_footer(); ?>
<noscript><link href="<?php echo get_template_directory_uri() . '/style.css'?>" rel="stylesheet"></noscript>
	</body>
</html>