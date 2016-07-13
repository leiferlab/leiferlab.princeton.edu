<?php 
	$currfile = basename(__FILE__); 
	include('php/header.php');
?>
	<section id="content" class="container">


	<div class="hero-unit">
		<p>Contact</p>
		<iframe id="map" width="100%" height="450" src="https://maps.google.com/maps?q=carl+icahn+laboratory&amp;oe=utf-8&amp;output=embed" frameborder="0"></iframe>
		<img id="map-shadow" src="img/shadow.png" />
	</div>
	
	<div class="row">
		<div class="span4 offset1">
			<h3>Where to find us</h3>
			<p class="active lead">
				Leifer Lab <br />
				170 Carl C. Icahn Laboratory <br />
				Princeton NJ 08544<br />
			</p>
			<p class="active lead" /=>
			<i class="icon-envelope"></i> Email: <a href="mailto:leifer@princeton.edu"> leifer@princeton.edu</a> <br />
			<i class="icon-phone"></i> Ph: (609) 258-2973<br />
			<i class="icon-print"></i> Fax: (609) 258-8020<br />
			</p>
			<br />
			<h3>Social networks</h3>
			<p class="lead">
				<a href="https://twitter.com/AndrewLeifer" class="social-network icon-twitter" target="_blank"></a> &nbsp;
				<a href="https://github.com/leiferlab/" class="social-network icon-github" target="_blank"></a> &nbsp;
				<a href="https://vimeo.com/user11723595" class="social-network icon-vimeo" target="_blank"></a> &nbsp;
				<!--	<a class="social-network icon-linkedin"></a> &nbsp;
					<a class="social-network icon-facebook"></a> &nbsp; -->
			</p>
			<br />

		</div>
		<div class="span6 pull1">
				<img id="pic" src="assets/640px-Inside_Icahn.jpg" class="img-rounded" alt="Lewis Sigler Institute at the Carl. C. Ichan Laboratory">
						<p>The Lewis-Sigler Institute at Carl C. Icahn Laboratory</p>

		</div>

	</div>
	</section>

	<?php 
		include('php/footer.php');
	?>
