<?php get_header(); ?>
 	<h1>Brunella's Agency Website</h1>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
		<article class="post">
			<h2><?php the_title(); ?></h2>
      
        	<?php the_post_thumbnail(); ?>
            
            <p class="post__meta">
                Published on <?php the_time( get_option( 'date_format' ) ); ?> 
                by <?php the_author(); ?> • <?php comments_number(); ?>
            </p>
            
      		<?php the_excerpt(); ?>
              
      		<p>
                <a href="<?php the_permalink(); ?>" class="post__link">Read more</a>
            </p>
		</article>

	<?php endwhile; endif; ?>
<?php get_footer(); ?>