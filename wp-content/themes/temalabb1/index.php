
<!-- Förbättra denna...  -->

<?php
get_template_part('template-parts/header');
?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
							<img src="<?php the_post_thumbnail_url(); ?>" />
								<div class="text">
									<h1><?php the_title(); ?></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

		<?php
get_template_part('template-parts/footer');
?>