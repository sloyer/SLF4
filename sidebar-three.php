<div id="sidebar-3" class="sidebar">


	<?php if ( is_active_sidebar( 'sidebar-three' ) ) : ?>
	

		<?php dynamic_sidebar( 'sidebar-three' ); ?>
		

	<?php else : ?>

		
		<div class="help">
		
			<p>Please activate some Widgets.</p>
		
		</div>
		

	<?php endif; ?>
	

</div>