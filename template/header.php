<html lang="en-US">
<head>
	<title><?=PAGE_TITLE?> - Midwest Engineering</title>
	<meta name="MobileOtimized" content="width">
	<meta name="HandheldFriendly" content="true">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Slabo+27px" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+SC" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="/CSS/lm-tags.css">
	<link rel="stylesheet" type="text/css" href="/CSS/section.css">
	<link rel="stylesheet" type="text/css" href="/CSS/lm-plate.css">
	<link rel="stylesheet" type="text/css" href="/CSS/lm-forms.css">
	<link rel="stylesheet" type="text/css" href="/CSS/lm-plate-mobile.css">	
	<script src="/js/jquery.min.js"></script>
</head>

<body>
	<header>
		<a href="/"><img src="/img/logo-big.png" id="logo"></a>
		<nav id="Menu">
			<a href="/about">About</a>
			<a href="/locations">Our Locations</a>
			<!--a href="/clients">Our Clients</a-->
			<div class="drop">
				<a href="/services/">Services</a>
				<nav>
					<?php include("htdocs/services/services-list.inc.php") ?>
				</nav>
			</div>
			<!--div class="drop">
				<a href="/projects/">Projects</a>
				<nav>
					<?php include("htdocs/projects/project-list.inc.php") ?>
				</nav>
			</div-->
		</nav>
	</header>
	<script>
		$(".drop").hover(function(e)
		{
			child = $(this).find("nav");
			if(!child.data("h"))
			{
				child.data("h", child.height());
				child.height(0);
			}
			child.data("d", !child.data("d"));
			child.toggle(child.data("d"));
			child.animate( {height: (child.data("d") ? child.data("h") : "0px")}, 500);
		});
	</script>
