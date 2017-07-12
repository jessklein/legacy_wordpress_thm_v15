<?php get_header(); ?>
<!-- Begin Content -->
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post">
		<div class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
		<div class="post-info">Posted by <?php the_author_posts_link(); ?> on <?php the_time('F d, Y') ?></div>
		<div class="thumbnail"><?php if ( has_post_thumbnail() ) { // the current post has a thumbnail
						echo '<div class="post-thumbnail">';
						the_post_thumbnail();
						echo '</div>'; 
						} else {
							// the current post lacks a thumbnail
						}
						?>
		</div>
		<?php the_content('<p class="read-more">Continue Reading &raquo;</p>'); ?>
		<div class="post-meta">
			Filed Under: <?php the_category(', '); ?>
			<div style="float: right"><?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></div>
		</div>
	</div>
	<?php endwhile; ?>
	<div class="pagination">
		<?php if(function_exists('wp_page_numbers')) { wp_page_numbers(); } ?>
	</div>
	<?php else : ?>
	<div class="post">
		<div class="post-heading"><h2>Not Found</h2></div>
		<div class="post-content">
			<p>Sorry, but you're looking for something that isn't here.</p>
		</div>
	</div>
	<?php endif; ?>
</div><!-- End Content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>