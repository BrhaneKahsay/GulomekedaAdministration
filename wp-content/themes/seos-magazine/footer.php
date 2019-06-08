<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Seos__Magazine
 */

?>

	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
		    <summary><?php _e('All Rights Reserved', 'seos-magazine'); ?>  &copy; <?php bloginfo('name'); ?></summary>	
			<?php printf( __( '</b> Designed By:%s', 'seos-magazine' ), 'Brhane kahsay ' ); ?>			
		</div>
	</footer>
</div>
<?php wp_footer(); ?>

</body>
</html>