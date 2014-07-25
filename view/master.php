<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Homefront Online</title>
	<!-- CSS -->
	<link href="assets/css/main.css" rel="stylesheet" type="text/css">
	<link href="assets/css/jquery.jscrollpane.css" rel="stylesheet" type="text/css">
	<!-- JS -->
	<script src="assets/js/jquery-1.11.0.min.js" type="text/javascript"></script>
	<!--<script src="assets/js/jquery.mousewheel.js" type="text/javascript"></script>
	<script src="assets/js/jquery.jscrollpane.min.js" type="text/javascript"></script>-->
	<script src="assets/js/main.js" type="text/javascript"></script>
	<!-- CUSTOM HEADER -->
	<?php echo $this->head ?>
</head>
<body>

<header>
	<span class="credits"><img src="assets/images/resources/credits.png"> 100.000</span>
	<span class="metal"><img src="assets/images/resources/metal.png"> 50.000</span>
	<span class="deuterium"><img src="assets/images/resources/deuterium.png"> 15.000</span>
	<span class="food"><img src="assets/images/resources/food.png"> 20.000</span>
</header>

<nav>
	<a href="#" data-label="Build"><img src="assets/images/nav/build.png" class="transition"></a>
	<a href="#" data-label="Research"><img src="assets/images/nav/research.png" class="transition"></a>
	<a href="#" data-label="Resources"><img src="assets/images/nav/resources.png" class="transition"></a>
	<a href="#" data-label="Colonies"><img src="assets/images/nav/colonies.png" class="transition"></a>
	<a href="#" data-label="Economy"><img src="assets/images/nav/economy.png" class="transition"></a>
	<a href="#" data-label="Diplomacy"><img src="assets/images/nav/diplomacy.png" class="transition"></a>
	<a href="#" data-label="Battles"><img src="assets/images/nav/battles.png" class="transition"></a>
	<a href="#" data-label="Galaxy Map"><img src="assets/images/nav/map.png" class="transition"></a>
	<a href="#" data-label="Settings"><img src="assets/images/nav/config.png" class="transition"></a>
</nav>

<section>
	<?php echo $this->content ?>
</section>

</body>
</html>