<!-- För samlingssidor med inlägg, archive, author, home -->


	<article>
		<img src="<?php the_post_thumbnail_url(); ?>" />
		<h2 class="title">
			<a href="inlagg.html"><?php the_title(); ?></a>
		</h2>
		<ul class="meta">
			<li>
				<i class="fa fa-calendar"></i> <?php the_date(); ?>
			</li>
			<li>
				<i class="fa fa-user"></i> <a href="forfattare.html"><?php echo get_the_author_link(); ?></a>
			</li>
			<li>
				<i class="fa fa-tag"></i> <a href="kategori.html"><?php the_category(', '); ?></a>
			</li>
		</ul>
		<p><?php the_excerpt(); ?></p>
	</article>
							