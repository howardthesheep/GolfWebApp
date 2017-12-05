<?php
	 define("PAGE_TITLE", 'Home');
	 include("template/header.php");?>
<section class="banner">
    <div id="slideshow">
    	<div><h2>Marschke Engineering: Welcome.</h2><img src="/img/slide/1.jpg"></div>
    	<div><h2>Marschke Engineering: Welcome.</h2><img src="/img/slide/2.jpg"></div>
    	<div><h2>Marschke Engineering: Welcome.</h2><img src="/img/slide/3.jpg"></div>
    	<div><h2>Marschke Engineering: Welcome.</h2><img src="/img/slide/4.jpg"></div>
    	<div><h2>Marschke Engineering: Welcome.</h2><img src="/img/slide/5.jpg"></div>
    </div>
    <script type="text/javascript">
    	$(document).ready(function() {
    	$('#slideshow div:gt(0)').hide();
		
    	setInterval(function() {
        $('#slideshow div:first').fadeOut(1000);
        $('#slideshow div:last').fadeIn(1000).prependTo('#slideshow');
    	}, 10000);
		});
    </script>
	
</section>  

<section class="content">
	
	<main>
	    <h2>Marschke Engineering</h2>
		<h3>573-216-0066</h3>
        <h3>St. Louis, Missouri</h3>
	    <article>
			<p style="display:flex;justify-content:space-evenly;">
				<img style="max-height:100px;display:inline-block;" src="img/logo-big.png">
				<img style="max-height:100px;display:inline-block;" src="img/logo.jpg">
			</p>
	      	<p>Marschke Engineering focuses on providing civil, electrical, environmental, and structural engineering along with waste management services of the highest professional caliber to entities in both the private and public sector. Whether that be governmental agencies, developers, or owners of residential and commercial properties.</p>

	    </article>
	</main>
	<aside style="padding-top: 0px;">
	    <h4>Explore</h4>
	    <nav>
			<a href="/HoleSkeleton">Hole Skeleton</a>
			<a href="/services/">What we do (Services)</a>
			<!--a href="/clients/">Who we serve (Clients)</a>
				<a href="/projects/">What we've done (Projects)</a-->
		</nav>
	</aside>
</section>
<?php include("template/footer.php");?>
