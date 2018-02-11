<?php get_header(); ?>
<div id="content">
<?php is_tag(); ?>
	<?php if ( have_posts() ) : ?>
		<?php $postCount=0; ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<!-- content -->
		<?php endwhile; ?>

	<?php if ( is_home() || is_archive() || is_search() ) : ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link( __( '&laquo; Older Entries', 'simpla' ) ); ?></div>
			<div class="alignright"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'simpla' ) ); ?></div>
		</div>
	<?php elseif ( is_single() ) : ?>
		<div class="navigation">
			<div class="alignleft"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&laquo;', 'Previous post link', 'simpla' ) . '</span> %title' ); ?></div>
			<div class="alignright"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&raquo;', 'Next post link', 'simpla' ) . '</span>' ); ?></div>
		</div>
	<?php endif; ?>

	<?php else : ?>

		<h2><?php _e( 'Not Found', 'simpla' ); ?></h2>
		<div class="entrybody"><?php _e( "Sorry, but you are looking for something that isn't here.", 'simpla' ); ?></div>

	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>