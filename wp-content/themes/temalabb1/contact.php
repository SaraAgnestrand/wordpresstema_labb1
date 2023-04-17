<!-- Contact form -->
<!-- I nuläget laddas inte sidan upp, varför ta reda på det. Jag vet inte heller om jag är nöjd med den typen av contactform jag fick till med tillägget -->

<?php 
	get_template_part('template-part/header');

	?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-md-offset-2">
							<h1>Kontakt</h1>
							<!-- Loopa ut innehållet på sidan det behöver göras ändringar här  -->
							
							<?php
						if( have_posts () ){
							while(have_posts()){
								the_content();
							}
						};
			?>
							<!-- <form>
								<label>Namn</label>
								<input type="text" />
								<label>E-post</label>
								<input type="email" />
								<label>Meddelande</label>
								<textarea></textarea>
								<input type="submit" value="Skicka" />
							</form> -->
						</div>
					</div>
				</div>
			</section>
		</main>


	<?php 
	get_template_part('template-parts/footer');
	?>

