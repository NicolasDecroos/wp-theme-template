<?php get_header(); ?>

	<!-- section -->
	<section class="home-section">
        <!-- article -->
		<article>
            <?php $page_id = 2; $page_data = get_page( $page_id ); echo apply_filters('the_content', $page_data->post_content); ?>
		</article>
        <!-- /article -->
	</section>
	<!-- /section -->
	<aside class="featured-boxes">
    	<?php if (have_posts()) : ?>
        <?php query_posts('cat=1&showposts=3'); ?>
		<?php while (have_posts()) : the_post(); ?>           
		<div class="post-<?php the_ID(); ?> home-featured">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail('home-featured'); } ?>
            <h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title=" <?php the_title_attribute(); ?>">Read More</a> 
		</div>
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>    		    
    </aside>
    
<?php get_sidebar(); ?>

<?php get_footer(); ?>