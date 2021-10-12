<?php
	include 'include/header.php';
?>

<!-- banner -->
<section class="inner-banner">
	<div class="banner-layer">
		<h1 class="text-center">Contato</h1>
	</div>
</section>
<!-- //banner -->

<!-- contact -->
<section class="contact py-5">
	<div class="container">
		<h2 class="heading mb-lg-5 mb-4">Fale Conosco</h2>
		<div class="row contact-grids w3-agile-grid">
			<div class="row col-md-4 col-sm-6 contact-grid1 w3-agile-grid">
				<div class="col-3 text-center">
					<i class="fas fa-envelope-open"></i>
				</div>
				<div class="col-9 p-0">
					<h3>E-mail</h3>
					<p><a href="mailto:info@example.com">vendas@tarimetais.com.br</a></p>
				</div>
			</div>
			<div class="row col-md-4 col-sm-6 mt-sm-0 mt-4 contact-grid1 w3-agile-grid">
				<div class="col-3 text-center">
					<i class="fas fa-phone"></i>
				</div>
				<div class="col-9 p-0">
					<h3>Telefone</h3>
					<p>+55 (35) 3341 4962</p>
				</div>
			</div>
			<div class="row col-md-4 col-sm-6 mt-md-0 mt-4 contact-grid1 w3-agile-grid">
				<div class="col-3 text-center">
					<i class="fas fa-"></i>
				</div>
				<div class="col-9 p-0">
				</div>
			</div>
		</div>
		<div class="row contact_full w3-agile-grid">
			<div class="col-md-7 contact-us w3-agile-grid">
				<form action="#" method="post">
					<div class="row">
						<div class="col-md-6 styled-input">
							<input type="text" name="nome" placeholder="nome" required="">
						</div>
						<div class="col-md-6 styled-input">
							<input type="email" name="email" placeholder="E-mail" required=""> 
						</div> 
					</div>
					<div class="styled-input">
						<input type="text" name="telefone" id="telefone" class="telefone" placeholder="Telefone" required="">
					</div>
					<div class="styled-input">
						<textarea name="mensagem" placeholder="mensagem" required=""></textarea>
					</div>
					<div class="click mt-3">
						<input type="submit" value="enviar">
					</div>
				</form>
			</div>
			<div class="col-md-5 map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3699.1097086722557!2d-44.92619758551363!3d-22.00710698547662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9e23e07254f389%3A0x82111a20a079c3f!2sTARI+Metais!5e0!3m2!1spt-BR!2sbr!4v1540550067154" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			 </div>
		</div>
	</div>
</section>
<!-- //contact -->

<?php
	include 'include/footer.php';
?>