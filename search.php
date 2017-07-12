<?php get_header(); ?><!-- Begin Content -->
<div id="content">
	<div class="post" style="font-size: 80%;"><div class="breadcrumb">
		<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<span id="breadcrumbs">','</span>'); } ?>
	</div></div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post">
		<div class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
		<div class="post-info">Posted by <?php the_author_posts_link(); ?> on <?php the_time('F d, Y') ?></div>
		<div class="post-wrap">
			<?php the_excerpt(); ?>
			<div class="post-meta">
			Filed Under: <?php the_category(', '); ?>
			<div style="float: right"><?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></div>
		</div>
		</div>
	</div>
	<?php endwhile; ?>
	<?php else : ?>
	<div class="post">
		<div class="post-title">Not Found</div>
		<div class="post-wrap">
			<p>Unfortunately, we couldn't find what you were looking for. You may have typed the name incorrectly, or it may have been moved or deleted.</p>
			<p>You can try a different search, or try checking out the posts listed in the sidebar for our most popular articles.</p>
		</div>
	</div>
<?php endif; ?>
</div><!-- End Content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>