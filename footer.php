<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package Cryout Creations
 * @subpackage nirvana
 * @since nirvana 0.5
 */
?>	<div style="clear:both;"></div>
	</div> <!-- #forbottom -->

	<footer id="footer" role="contentinfo">
		<div id="colophon">
		
			<?php get_sidebar( 'footer' );?>
			
		</div><!-- #colophon -->

    <?php if( is_active_sidebar( 'below-footer' ) ) : ?>
      <div class="below-footer">
        <?php dynamic_sidebar( 'below-footer' ); ?>
      </div>
    <?php endif; ?>

	</footer><!-- #footer -->

	</div><!-- #main -->
</div><!-- #wrapper -->

<?php wp_footer(); ?>

</body>
</html>
