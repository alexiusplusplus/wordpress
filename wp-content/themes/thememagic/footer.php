		<!--footer-->
		<div class="clear"></div>
		
		<div id="footer">
			
			<div id="footer-info">		
				
				<span id="copyright"><?php _e( 'Copyright', 'thememagic' ); ?> <?php echo date( 'Y' ); ?> <?php echo of_get_option('footer_cr'); ?> </a></span>
			<span id="follow-us"><?php _e( 'Follow us: ', 'thememagic' ); ?><?php if (of_get_option('footer_facebook') != '' ) { ?><a href="<?php echo of_get_option('footer_facebook'); ?>">人人网 |</a><?php }?>
				
				<?php if (of_get_option('footer_twitter') != '' ) { ?><a href="<?php echo of_get_option('footer_twitter'); ?>">新浪微博</a><?php }?>
				
				</span>
			
			</div>
		
		</div>
	
	<?php wp_footer(); ?>

</body>

</html>