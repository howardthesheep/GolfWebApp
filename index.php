<?php
	 define("PAGE_TITLE", 'Home');
	 include("template/header.php");?>
<section id="homepage">
	<section class="content">
		<aside class="widget">
			<a href="/HoleSkeleton.php">
		    	<h3>Course Tour</h3>
		    </a>
		</aside>	
	    <aside class="widget">
			<a href="/score.php">
		    	<h3>Scorecard</h3>
		    </a>
		</aside>
	</section>
	<section class="content">   
		<aside class="widget">
			<a href="/about.php">
		    	<h3>About Us</h3>
		    </a>
		</aside>
		<aside class="widget">
			<a href="/profile.php">
				<h3>My Stats</h3>
			</a>
		</aside>
	</section>
</section>
<?php include("template/footer.php");?>
