<!-- The footer -->


<footer id="footer">
			<div class="container">
				<div class="row top">
					
					<div class="col-xs-12 col-sm-6 col-md-4">
					<?php dynamic_sidebar('Footer 1') ?>	
					</div>
					
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					<?php dynamic_sidebar('Footer 2') ?>
					</div>
					
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<ul class="social">
						<?php dynamic_sidebar('Footer 3') ?>
						</ul>
					</div>

				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright &copy; Grupp X, 2023</p>
					</div>
				</div>
			</div>
</footer>

	</div>

<?php 
wp_footer();
?>

</body>
</html>
