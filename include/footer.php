<!-- footer -->	
<footer>
	<div class="container-fluid p-5">
		<div class="row footer-gap">
			<div class="col-lg-8 mb-lg-0 mb-4">
				<h5 class="text-capitalize mb-3" style="color: white;">Nossa Empresa</h5>
				<p>TARI Metais, o melhor envestimento estrutural para o seu negoócio. </p>
				<div class="row mt-4">
					<div class="col-md-6">
						<h5 class="text-capitalize mb-3" style="color: white;">Entre em Contato</h5>
						<a href="https://www.facebook.com/tarimetais/" class="facebook mr-2"><span class="fab mr-1 fa-facebook-f"></span> Facebook</a>
					</div>
					<div class="col-md-6 mt-md-0 mt-5">
						<h5 class="text-capitalize mb-3" style="color: white; ">Nosso Endereço</h5>
						<address class="mb-0">
							<p class="mb-2"><i class="fas fa-map-marker"></i> Rod. BR 354, Km 94 <br>Campo do Meio, Caxambu-MG.</p>
							<p><i class="fas mr-1 fa-phone"></i> +55 (35) 3341 4962</p>
							<p><i class="fas mr-1 fa-envelope-open"></i> <a href="mailto:info@example.com">vendas@tarimetais.com.br</a></p>
						</address>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-sm-0 p-md-0">
				<h5 class="text-capitalize mb-3" style="color: white;">Serviços</h5>
				<ul>
					<a href="estrutura.php"><li><i class="fas mr-1 fa-chevron-circle-right"></i>Estruturas Metálicas</li></a>
					<a href="predio.php"><li><i class="fas mr-1 fa-chevron-circle-right"></i>Edificios Andares Multiplos</li></a>
					<a href="solucoes.php"><li><i class="fas mr-1 fa-chevron-circle-right"></i>Soluções Personalizadas</li></a>
					<a href="projetos.php"><li><i class="fas mr-1 fa-chevron-circle-right"></i>Projetos Personalizados</li></a>
				</ul>
				<h5 class="text-capitalize mt-4 mb-3" style="color: white;">Envie seu E-mail para Contato</h5>
				<p class="mb-3">Informe seu e-mail para receber um catalogo de nossa empresa</p>
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Informe seu E-mail..." required="">
					<button class="btn1"><i class="far fa-paper-plane"></i></button>
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>
	</div>
	<div class="copyright pb-sm-5 pb-4 text-center">
		<p>© 2018 TARI Metais | Design by <a href="https://github.com/DanielmGomes" target="_blank">Daniel Moreira Gomes</a></p>
	</div>
</footer>
<!-- footer -->

	<!-- Vertically centered Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title text-uppercase text-center" id="exampleModalLongTitle"><span class="fab fa-asymmetrik"></span> Grade</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<img src="images/banner1.jpg" class="img-fluid mb-3" alt="Modal Image" />
			Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum, ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
	<!-- //Vertically centered Modal -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!-- Stats-Number-Scroller-Animation-JavaScript -->
		<script src="js/waypoints.min.js"></script> 
		<script src="js/counterup.min.js"></script> 
		<script>
			jQuery(document).ready(function( $ ) {
				$('.counter').counterUp({
					delay: 100,
					time: 1000
				});
			});
		</script>
	<!-- //Stats-Number-Scroller-Animation-JavaScript -->
	
	<!-- Banner Responsiveslides -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- // Banner Responsiveslides -->

	<!-- start-smoth-scrolling -->
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>           
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/mascara.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">

		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

	<!-- FlexSlider-JavaScript -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
				});
				$(window).load(function(){
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
						$('body').removeClass('loading');
					}
			});
		});
	</script>
	<!-- //FlexSlider-JavaScript -->

</body>
</html>