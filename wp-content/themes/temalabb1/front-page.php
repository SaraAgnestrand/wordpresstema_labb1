<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>
	<?php 
wp_head();
?>
	<?php 
	get_template_part('template-parts/header');
	?>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>


		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
						<div class="hero">
							
							<img src="<?php the_post_thumbnail_url(); ?>" />
								<div class="text">

									<?php
									if( have_posts () ){
										while(have_posts()){
											the_post();
											}
											};
									?>

									<h1><?php the_title(); ?></h1>
									<p><?php the_content(); ?></p>
						
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