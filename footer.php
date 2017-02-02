<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer1')) : endif; ?>
				</div>
				<div class="col-md-4">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer2')) : endif; ?>
				</div>
				<div class="col-md-4">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer3')) : endif; ?>
				</div>
			</div>
		</div>
	</footer>
	<div class="copyright">
		<div class="container">
			<div id="creditos">
				(C) 2017 La tele según Caamaño - Derechos reservados / Plantilla diseñada por Roberto Caamaño
			</div>
			<div id="arriba">
				<a href="#" class="boton-top"><span class="glyphicon glyphicon-chevron-up"></span></a>
			</div>
		</div>
	</div>	
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script>
		$('.boton-top').click(function(){
		    $('body,html').animate({scrollTop : 0}, 500);
		    return false;
		});
	</script>
	<script src="<?php bloginfo('template_url') ?>/js/menu.js"></script>
	<?php wp_footer(); ?>
</body>
</html>