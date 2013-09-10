<?php get_header(); ?>
   
<div class="row">
  <div class="large-4 columns post-front">
    <h4 class="widgettitle">Recent Posts</h4>
      <?php $temp_query = $wp_query; ?>
      <?php query_posts('category_name=&showposts=2'); ?>
      <?php while (have_posts()) : the_post(); ?>
      <div id="post">
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" 
        title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
          <div class="entry-summary">
            <div class="date"><p>Date posted: <?php the_date(); ?></p></div>
            <div class="excerpt"><?php the_excerpt(); ?></div>
          </div>
      </div>
      <?php endwhile; ?>
  </div>

    <div class="large-8 columns">
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
      tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud 
      exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum 
      iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla 
      facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit 
      augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue 
      nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; 
      est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere 
      me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem 
      consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, 
      anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo t
      ypi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
    </div>
  </div>
    <div class="row">
      <div class="large-4 columns">
        <?php get_sidebar( 'four' ); // sidebar 4 ?>
      </div>
      <div class="large-4 columns">
        <?php get_sidebar( 'two' ); // sidebar 2 ?>
      </div>
      <div class="large-4 columns">
        <?php get_sidebar('sidebar1'); // sidebar 1 ?>
      </div>
    </div>
</div>
        
<?php get_footer(); ?>