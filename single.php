<?php get_header(); ?><!-- Begin Content -->
<div id="content">
	<div class="post" style="font-size: 80%;">
		<div class="breadcrumb">
			<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<span id="breadcrumbs">','</span>'); } ?>
		</div>
	</div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post">		
		<div class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
		<div class="post-info">
			Posted by <?php the_author_posts_link(); ?> on <?php the_time('F d, Y') ?> // <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?><br />
			Filed Under: <?php the_category(', '); ?> // <?php the_tags(); ?>
		</div>
		<div class="post-wrap">
			<?php the_content(); ?>
		</div>
		<div class="post-foot">
			<div class="authorimage">
				<?php the_author_image(); ?>
			</div>

			This post was published on <?php the_time('F d, Y') ?>, written by <?php the_author_posts_link(); ?> and filed under <?php the_category(', '); ?>. <?php the_tags(); ?>. If you enjoyed this post, be sure to <a href="http://feeds.feedburner.com/TheHuntersMark">subscribe to our RSS feed</a> so you don't miss a single update. Got Hunter questions? <a href="mailto:thehuntersmark@gmail.com">We've got answers</a>. You can also <a href="http://forums.thehuntersmark.net/">join us on our forums</a> to interact with other members of the community. Still need more Hunter goodness? You can follow us on <a href="http://www.twitter.com/thehuntersmark">Twitter</a> or <a href="http://www.facebook.com/thehuntersmark">Facebook</a>, or you can subscribe to our <a href="http://www.thehuntersmark.net/newsletter/">monthly email newsletter</a>. <?php edit_post_link('Edit this entry', '', ''); ?> Happy Hunting!
		</div>
		<?php wp_link_pages(array('before' => '<h3 class="pages"><strong>Post Pages:</strong> ', 'after' => '</h3>', 'next_or_number' => 'number')); ?>
		<?php comments_template('', true); ?>
	</div>
	<?php endwhile;  else : ?>
	<div class="post">
		<h2>Not Found</h2>
		<div class="post-content">
			<p>Sorry, but you're looking for something that isn't here.</p>
		</div>
	</div>
<?php endif; ?>
</div><!-- End Content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>