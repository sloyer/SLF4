<?php get_header(); ?>

    <div class="row">
        <div class="large-9 columns push-3">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>   
            <?php get_template_part('entry'); ?>
        </div>
   
    <?php endwhile; ?>          
    <?php else : ?>

        <h2>Not Found</h2>
        
        <p>Sorry, but the requested resource was not found on this site.</p>
    
    <?php endif; ?>
        <div class="large-3 columns pull-9">
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>