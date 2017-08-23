<?php get_header(); ?>
<section id="content" role="main">
	<header class="header">
		<h1 class="title"><?php single_cat_title(); ?></h1>
		<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
	</header>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="entry">
			<?php if (has_post_thumbnail()):?>
				<div class="entry-thumbnail">
					<?php the_post_thumbnail(); ?>
				</div>
			<?php endif;?>
			<div class="entry-words">
				<div class="cat-links"><?php the_category( ', ' ); ?></div>
				<h1 class="entry-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
						<?php the_title(); ?>
					</a>
				</h1>
				<?php the_excerpt();?>
			</div>
		</div>
	<?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>