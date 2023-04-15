<!-- The fallback  -->	
<?php 
	get_template_part('template-parts/header');
?>
	
					<?php	if( have_posts () ){
							while(have_posts()){
								the_title();
								the_post();
								the_content();
							}
						};
					
?>
<?php
	get_template_part('template-parts/footer');
	?>