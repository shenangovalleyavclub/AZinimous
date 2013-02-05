<?php get_header(); ?>

	<?php if (have_posts()) : ?>
	
	<div id="content" class="narrowcolumn" role="main">

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<div class="date">Posted on: <?php the_date() ?></div>
				<div class="entry"><?php the_content('Read the rest of this entry &raquo;'); ?></div>
				<?php if (!is_page()) {  ?><div class="meta"><?php the_tags('Tags: [', ', ', ']'); ?> | <?php echo 'Categories: ['; the_category(', '); echo ']'; ?></div><?php } ?>

			</div>			
		<?php endwhile; ?>

		<div class="pagenavigation">
			<div class="older"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
		
	</div>
	
	<?php else : ?>
	
	<?php include dirname(__FILE__) . '/404.php'; exit; ?>
	
	<?php endif; ?>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
