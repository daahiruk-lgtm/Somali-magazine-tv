<?php get_header(); ?>
<div id="layout"><!-- BEGIN LAYOUT -->
	<div class="layout-left">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Main Column') ) : else : ?>
		<div class="shadey"><img src="<?php bloginfo('template_directory'); ?>/images/icon_alert.png" align="left" alt="alert" style="padding: 0px 10px 10px 0px; border:0px;" />This is the <b>MAIN COLUMN</b> and is ready for widgets, <a href="<?php echo get_settings('home'); ?>/wp-admin/widgets.php/" target="_self" title="Click to add widgets"><b>click here</b></a> to add some now!</div> 
	<?php endif; ?>
	</div>
	<div class="layout-middle">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Secondary Column') ) : else : ?>
		<div class="shadey"><img src="<?php bloginfo('template_directory'); ?>/images/icon_alert.png" align="left" alt="alert" style="padding: 0px 10px 10px 0px; border:0px;" />This is the <b>SECONDARY COLUMN</b> and is ready for widgets, <a href="<?php echo get_settings('home'); ?>/wp-admin/widgets.php/" target="_self" title="Click to add widgets"><b>click here</b></a> to add some now!</div> 
	<?php endif; ?>
	</div>
	<div class="layout-right">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Side Column') ) : else : ?>
		<div class="shadey"><img src="<?php bloginfo('template_directory'); ?>/images/icon_alert.png" align="left" alt="alert" style="padding: 0px 10px 10px 0px; border:0px;" />This is the <b>SIDE COLUMN</b> and is ready for widgets, <a href="<?php echo get_settings('home'); ?>/wp-admin/widgets.php/" target="_self" title="Click to add widgets"><b>click here</b></a> to add some now!</div>  
	<?php endif; ?>
	</div>
</div><!-- END LAYOUT -->
<?php get_footer(); ?>