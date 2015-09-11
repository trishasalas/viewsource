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
<script>
	var easter_egg = new Konami();
	easter_egg.code = function() {
		alert(
			'Thar be dragons!'
		);
	}
	easter_egg.load();
</script>

</body>
</html>
