<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
<div id="content" class="widecolumn" role="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="single-post post">
			<h2 class="post-title"><?php the_title(); ?></h2>
			<div class="post-meta">
				<span><?php the_time(__('Y year m month j day')) ?></span>
				<span><?php lmsim_theme_views(); ?> Browse</span> 
				<span><?php comments_popup_link('0 Comment', '1 Comment', '% Comment', '', 'Comments are closed'); ?></span>
			</div>
			<div class="entry">
				<?php the_content(); ?>
				<h2><?php _e('Archives by Month:'); ?></h2>
				<ul class="two-list">
					<?php wp_get_archives('type=monthly'); ?>
				</ul>

				<h2><?php _e('Archives by Subject:'); ?></h2>
				<ul class="links-entry">
					<?php wp_list_categories(); ?>
				</ul>

				<h2><?php _e('Tag Clouds:'); ?></h2>
				<ul>
					<?php wp_tag_cloud('smallest=8&largest=16'); ?>
				</ul>
			</div>
		</div>
		<?php comments_template(); ?>
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>