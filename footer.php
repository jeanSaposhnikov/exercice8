<?php
/**
 * The template for displaying the footer
 *
 * @package Astral
 * @since 0.1
 */
?>
<footer class="footer py-md-5 pt-md-3 pb-sm-5">
	<?php
	/* 
	* Functions hooked into astral_footer_widget_area action
	*
	* @hooked astral_footer_widget
	*/
	do_action( 'astral_footer_widget_area' );
	?>
</footer>
<div class="cpy-right text-center mwa-theme">
	<?php
	/* 
	* Functions hooked into astral_copyright_area action
	*
	* @hooked astral_copyright
	*/
	do_action( 'astral_copyright_area' );
	?>
</div>
<!-- scroll top icon -->
<a href="#" id="scroll" class="move-top text-center scrollup" style="">
    <div class="circle"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
</a>

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore
 */

?>

	</div><!-- #content -->

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






<?php get_template_part('google', 'font'); ?>
<?php wp_footer(); ?>
</body>
</html>