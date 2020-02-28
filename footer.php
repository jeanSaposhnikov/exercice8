<?php
/**
 * The template for displaying the footer
 *
 * @package Astral
 * @since 0.1
 */
?>
	</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'underscore' ) ); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'For business inquiries: Jean.Saposhnikov@hotmail.fr' ) );
			?>
		</a>
		<span class="sep"> | </span>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( 'Theme: %1$s by %2$s.', 'underscore' ), 'underscore', '<a href="http://underscores.me/">Underscores.me</a>' );
			?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>