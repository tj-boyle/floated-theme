<section class="entry-content">
	<?php if ( is_singular() ) : ?>
		<?php 
			function debug($msg) {
				$msg = str_replace('"', '\\"', $msg); // Escaping double quotes 
				echo "<script>console.log(\"$msg\")</script>";
			}

			$tags = get_the_tags();
			$sliderNum = -1;
			if($tags){
				foreach($tags as $tag){
					$pos = strpos($tag->name, '[masterslider id="');
					if($pos === 0){
						$sliderNum = explode('"', $tag->name)[1];
					}
				}
			}

			if($sliderNum > -1)	{
				masterslider($sliderNum);
			}
		?>
		<?php if (has_post_thumbnail() && $sliderNum === -1):?>
			<div class="entry-thumbnail">
				<div class="thumbnail-div" style="background-image: url('<?php echo(get_the_post_thumbnail_url(null, [768,282])); ?>') "></div>
			</div>
		<?php endif;?>
		<div class="entry-container">
			<div class="entry-words">
				<div class="entry-header">
						<h1 class="entry-title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
							<?php the_title(); ?>
						</a>
					</h1>
					<?php edit_post_link(); ?>
					<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
				</div>
				<?php the_content();?>
			</div>
			<div class="entry-links">
				<?php wp_link_pages(); ?>
			</div>
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