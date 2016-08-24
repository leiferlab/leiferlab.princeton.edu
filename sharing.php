<?php 
	$currfile = basename(__FILE__); 
	include('php/header.php');
?>
	<section id="content" class="container publications">

	<div class="textblock">
		<div class="hero-unit">	
			<p> Shared Code, Data and Reagents</p>
		</div>
		<p>	<a href="http://www.ncbi.nlm.nih.gov/pubmed?term=%28Leifer%20AM[Author]%29%20AND%20%28%222003%22[Date%20-%20Create]%20%3A%20%223000%22[Date%20-%20Create]%29">PubMed</a>  Listing, 
			ORCID: #<a href="http://orcid.org/0000-0002-5362-5093">0000-0002-5362-5093</a>
		</p>
	<p>
		<ul>
			<li><a href="#code">Code</a></li>
			<li><a href="#data">Data<a/></li>
			<li><a href="#worms">Worms</a></li>
			<li><a href="#plasmids">Plasmids</a></li>
		</ul>
	</p>
	
	</div>
	<hr />		
		
	<div class="meaty">			
		<h3><a name="code"></a>Code</h3>
		
		All data acquisition and analysis code used in Leifer Lab publications are publicly available for download at <a href="http://github.com/leiferlab/">http://github.com/leiferlab/</a>.
		
		<h3><a name="#data">Data</a></h3>
		<p>Extracted and processed data for all Leifer Lab senior-author publications are included as supplement in each respective journal article.</p> 
		
		<p>The sheer size of raw imaging data makes it difficult to share. Those who seek raw imaging data may provide 1TB hard drives and pre-paid shipping and we will load the hard drives with the raw data and ship them back. For Nguyen et al., PNAS 2015, we are experimenting with making all raw data publicly available through Amazon S3 using a requester-pays model.  All of the raw imaging data used in that paper (approximately half a terabyte) is now publicly available on the bucket  <a href="s3://leiferlabnguyen2015">s3://leiferlabnguyen2015</a> to any user with an <a href="http://aws.amazon.com">Amazon Web Services</a> account. The data is free to transfer to any Amazon EC2 instance. To download the data out of Amazon, the requester will be charged Amazon's data transfer rate of $0.09 USD per GB (as of this posting). The most up-to-date pricing is available <a href="https://aws.amazon.com/s3/pricing/">here</a>. For more information please see: <a href="http://docs.aws.amazon.com/AmazonS3/latest/dev/RequesterPaysBuckets.html">Amazon's Requester Pays</a>. Note in addition to an AWS account, you will also need a client that supports S3 Requester Pays buckets, such as the free <a href="https://cyberduck.io/">Cyberduck</a> client.</p> 
			
			 
		<h3><a name="worms"></a>Worms</h3>
		<p>All worms used in Leifer Lab senior author publications are publicly available from the <a href="http://www.cgc.cbs.umn.edu/">Caenorhabditis Genetics Center (CGC) at University of Minnesota</a>. Search for "AML" to find a <ahref="http://www.cgc.cbs.umn.edu/search.php?st=AML&field=all&exst=&exfield=all">list of all available strains</a>. Worms can be requested from CGC for a small nominal fee ($7 per strain plus a $25 membership fee for academics, as of time of posting).</p>
		
		<h3><a name="worms"></a>Plasmids</h3>
		<p>All published plasmids generated by the  Leifer Lab  have been made publicly available on <a href="https://www.addgene.org/Andrew_Leifer/">Addgene</a>.</p>
			
			
	</div>


	</section>
	<?php 
		include('php/footer.php');
	?>
