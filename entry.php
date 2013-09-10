<div class="post">


    <h2>
    
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
        
            <div class="page-title"><?php the_title(); ?></div>
            
        </a>
        
    </h2>
    
    
    <p class="meta">
    
        <span class="date">Posted On: <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> </span>
    
    </p>
    
    
    <div class="post-content">
    
        <?php the_content('<span class="read-more">Read more on "'.the_title('', '', false).'" &raquo;</span>'); ?>
    
    </div>
    
    
    <p class="tags"><?php the_tags('<span class="tags">Tags:</span> ', ', ', ''); ?></p>
    
    
</div>