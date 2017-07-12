<section class="entry-content">
	<?php if ( is_singular() ) : ?>
		<?php if (has_post_thumbnail()):?>
			<div class="entry-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php endif;?>
		<div class="entry-words">
			<?php the_content();?>
		</div>
		<div class="entry-links">
			<?php wp_link_pages(); ?>
		</div>

	<?php else: ?>
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
		<div class="entry-links">
			<?php wp_link_pages(); ?>
		</div>
	<? endif; ?>
</section>