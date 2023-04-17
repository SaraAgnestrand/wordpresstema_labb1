<?php 
	get_template_part('template-parts/header');
	?>


		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">

                        <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <h1>
                                <?php the_title(); ?>
                            </h1>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
							
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							
					
					
						
						
							
							<?php
					
							 	wp_nav_menu(
							 		array(
							 		'menu' =>'Meny under',
							 		'container' => '',
							 		'theme_location' => 'Meny under',
							 		'items_wrap' => ' <ul id="" class="side-menu">%3$s</ul> '
							 	)
							 );
				
							?>
							
						</aside>
					</div>
				</div>
			</section>
		</main>

		



		<?php 
	get_template_part('template-parts/footer');
	?>