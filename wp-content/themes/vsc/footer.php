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
<?php wp_footer(); ?>
<noscript><link href="<?php echo get_template_directory_uri() . '/style.min.css'?>" rel="stylesheet"></noscript>
	</body>
</html>
