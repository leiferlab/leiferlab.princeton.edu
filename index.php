
<?php 
	$currfile = basename(__FILE__); 
	include('php/header.php');
?>
	
	<section id="content" class="container">

</section><!-- end .container -->

<div class="lead-container" id="frontpage">
<div class="container">

	<!-- Macbook carousel -->
	<!-- Images should be 523 x 298 -->
	<div id="carousel" class="carousel slide macbook" rel="carousel">
		<img src="img/carousel-microscope.png" class="carousel-macbook" alt="" />
		<!-- Carousel items -->
		<div class="carousel-inner">
			<!-- Item -->
			<div class="item active">
				<a href="#"><img src="assets/carousel/blueAVM.jpg" alt="" /></a>
				<div class="carousel-caption">
		        <p>To study neurocircuits, we build tools that monitor and manipulate neural activity in a worm with light.</p>
		      </div>
			</div>
			<!-- end Item -->
			
			<!-- Item -->
			<!--<div class="item">
				<img src="assets/carousel/colbertSchematic.png" alt="" />
				<div class="carousel-caption">
			        <p>A high speed camera monitors the worm as it moves.</p>
			    </div>
			</div>-->
			<!-- end Item -->			
			
			
			<!-- Item -->
			<div class="item">
				<img src="assets/carousel/computerVision.png" alt="" />
			<div class="carousel-caption">
		        <p>Computer vision software identifies targets on the moving worm.</p>
		      </div>
			</div> 
			<!-- end Item -->
			
			<!-- Item -->
			<div class="item">
				<img src="assets/carousel/greenOptics.jpg" alt="" />
				<div class="carousel-caption">
		        <p>Laser light is precisely targeted to neurons in the worm.</p>
		      </div>
			</div>
			<!-- end Item -->
			
			
			<!-- Item -->
			<div class="item">
				<img src="assets/carousel/inhibitNerveCord.png" alt="" />
				<div class="carousel-caption">
		        <p>Optogenetic proteins inhibit the worm's ventral nerve cord in response to green light. </p>
		      </div>
			</div>
			<!-- end Item -->

			<!-- Item -->
			<div class="item">
				<img src="assets/carousel/escapeCartoon.png" alt="" />
				<div class="carousel-caption">
			        <p>Changes to the worm's behavior are precisely quantified.</p>
			    </div>
			</div>
			<!-- end Item -->			
			
			<!-- Item -->
			<div class="item">
				<img src="assets/carousel/circuit.png" alt="" />
				<div class="carousel-caption">
			        <p>These tools provide functional information about how neurons work together in a circuit.</p>
			    </div>
			</div>
			<!-- end Item -->			
			

			
			<!-- Item -->
			<div class="item">
				<img src="assets/carousel/calcium_imaging.png" alt="" />
				<div class="carousel-caption">
			        <p>The worm's neural activity is measured simultaneously with behavior.</p>
			    </div>				
			</div>
			<!-- end Item -->
			
			<!-- Item -->
			<div class="item">
				<img src="assets/carousel/AVB.png" alt="" />
				<div class="carousel-caption">
			        <p>An interneuron's activity (AVB) is plotted with behavior.</p>
			    </div>				
			</div>
			<!-- end Item -->
			
			
			<!-- Item -->
			<div class="item">
				<img src="assets/carousel/CarlC_Icahn_Laboratory_Princeton_University_NewJersey_cc_carbonnyc.JPG" alt="" />
				<div class="carousel-caption">
			        <p>The Leifer Lab is located in the Carl C. Icahn Lab (credit: carbonnyc)</p>
			    </div>			
			</div>
			<!-- end Item -->			

			


			
		</div>
		<!-- Carousel navigation -->
		<a class="carousel-control left" href="#carousel" data-slide="prev"></a>
		<a class="carousel-control right" href="#carousel" data-slide="next"></a>
	</div>
	<!-- end Macbook carousel -->

</div>
</div>

<section class="container">

	<section class="row">
		<article class="span12">
			<h2><span class="grey">Optical</span> Neurophysiology of Behavior</h2>
			<p>
				Our lab seeks to understand how neural circuits encode complex behavior by combining techniques from neuroscience, physics, engineering and computer science. In particular, we study the model organism <i>C. elegans</i>, a microscopic worm with a simple nervous system capable of rich behaviors. We have pioneered optogenetic microscopy techniques  to optically manipulate and monitor neural activity in worms as they move.
			</p>
			<p><a class="" href="#">Read more &raquo;</a></p>
		</article>

	<!--	<article class="span4">
			<h2><span class="grey">Lab</span> News</h2>
			<p>New website is up and running!</p>
			<p><a class="" href="#">Read more &raquo;</a></p>
		</article> -->
	</section>
	<!-- end .row -->

	<hr />

	<section class="row" id="portfolio">

		<!-- portfolio item-->
		<article class="span4 project">

			<div class="thumbnail equalizeHeight">
				<!-- image -->
				<a href="http://www.princeton.edu/neuroscience/" title="Princeton Neuroscience Institute">
					<!--298x186 -->
					<img src="assets/PNIlogo.png">
				</a>
				<!-- description -->
				<div class="project-description">
					<!-- icon -->
					<i class="icon-link"></i>
					<!-- name -->
					<b class="project-name">The Leifer Lab</b> will be joining<!--is a new member of--> the <a href="http://www.princeton.edu/neuroscience/">Princeton Neuroscience Institute</a>.
				</div>
				<!-- ribbon -->
				<div class="ribbon"><span>New</span></div>
			</div>

		</article>
		<!-- end portfolio item-->
		<article class="span4 project">
			<div class="thumbnail equalizeHeight" >
				<a href="project.html" title="">
					<!--298x186 -->
					<img src="assets/barcode.png"></a>
			<!-- 	<a href="#"></a> -->
				<div class="project-description">
					<b class="name">DNA Origami Nanobarcode</b> paper was recently  published in <a href="http://www.nature.com/nchem/journal/v4/n10/full/nchem.1451.html">Nature Chemistry</a> with Lin et al.
					<i class="icon-file"></i>
				</div>
			</a>
				
			</div>
		</article>

		<article class="span4 project">
			<div class="thumbnail equalizeHeight" >
				<div class="vidclip"> 
				<video id="sampleMovie" poster="assets/video/touch.png" controls>
						<source src="assets/video/touch.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'/>
						<source src="assets/video/touch.theora.ogv" type='video/ogg; codecs="theora, vorbis"' />
						<source src="assets/video/touch.webm"  type='video/webm; codecs="vp8, vorbis"' />
				        
						<p><a href="https://vimeo.com/16933869">View this video on vimeo!</a></p> 
				</video>
			</div>
				
				<div class="project-description">
					<b class="name">Blue light</b>
					<i class="icon-play"></i> causes the worm to experience the sensation of touch, and so it recoils. <a href="#">More video &raquo;</a>
				</div>
			</div>
		</article>

	</section>	

	</section>

	<?php 
		include('php/footer.php');
	?>