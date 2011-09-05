<?php
/**
 * @package Tygertown
 * @subpackage Tygertown_theme
 */
?>
	<?php get_header(); ?>

	<div id="content" class="contentBackground" role="main">

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div class="post-head" id="post-head-<?php the_ID(); ?>">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<div class='header-comments'>(<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>)</div>
					<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
				</div>

				<div class="entry">
					<?php the_content( 'Read the full post...'); ?>
				</div>

				<?php comments_template(); ?>

				<p class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
				</p>
			</div>

		<?php endwhile; ?>

		<div id="pages">
		<?php wp_link_pages( $args ); ?> 
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	<?php get_footer(); ?>
