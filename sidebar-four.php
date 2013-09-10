<div id="sidebar-4" class="sidebar">


	<?php if ( is_active_sidebar( 'sidebar-four' ) ) : ?>
	

		<?php dynamic_sidebar( 'sidebar-four' ); ?>
		

	<?php else : ?>

		
		<div class="help">
		
			<p>Please activate some Widgets.</p>
		
		</div>
		

	<?php endif; ?>
	

</div>