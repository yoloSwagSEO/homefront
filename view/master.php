<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Homefront Online</title>
	<!-- CSS -->
	<link href="assets/css/main.css" rel="stylesheet" type="text/css">
	<link href="assets/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
	<!-- JS PLUGINS -->
	<script src="assets/js/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
	<script src="assets/js/perfect-scrollbar.with-mousewheel.min.js" type="text/javascript"></script>
	<!-- CUSTOM HEADER -->
	<?php echo $this->head ?>
	<!-- MAIN JS FILE -->
	<script src="assets/js/main.js" type="text/javascript"></script>
</head>
<body>

	<header>
		<span class="credits"><img src="assets/images/resources/credits.png"> 100.000</span>
		<span class="metal"><img src="assets/images/resources/metal.png"> 50.000</span>
		<span class="deuterium"><img src="assets/images/resources/deuterium.png"> 15.000</span>
		<span class="food"><img src="assets/images/resources/food.png"> 20.000</span>
		<div class="fright menu"><img src="assets/images/icons/menu.png"></div>
		<div class="fright name">Tellani Confederacy</div>
	</header>

	<nav>
		<a href="<?php echo Router::URL("build") ?>" data-label="Build"><img src="assets/images/nav/build.png" class="transition"></a>
		<a href="<?php echo Router::URL("research") ?>" data-label="Research"><img src="assets/images/nav/research.png" class="transition"></a>
		<a href="<?php echo Router::URL("resources") ?>" data-label="Resources"><img src="assets/images/nav/resources.png" class="transition"></a>
		<a href="<?php echo Router::URL("colonies") ?>" data-label="Colonies"><img src="assets/images/nav/colonies.png" class="transition"></a>
		<a href="<?php echo Router::URL("economy") ?>" data-label="Economy"><img src="assets/images/nav/economy.png" class="transition"></a>
		<a href="<?php echo Router::URL("diplomacy") ?>" data-label="Diplomacy"><img src="assets/images/nav/diplomacy.png" class="transition"></a>
		<a href="<?php echo Router::URL("battles") ?>" data-label="Battles"><img src="assets/images/nav/battles.png" class="transition"></a>
		<a href="<?php echo Router::URL("map") ?>" data-label="Galaxy Map"><img src="assets/images/nav/map.png" class="transition"></a>
		<!-- <a href="#" data-label="Settings"><img src="assets/images/nav/config.png" class="transition"></a> -->
	</nav>

	<section>
		<?php echo $this->content ?>
	</section>

	<div id="slideMenu">
		<div class="top">
			<div class="fleft">GAME MENU</div>
			<div class="fright"><img src="assets/images/icons/closeMenu.png"></div>
		</div>
		<ul>
			<li><a href="#" class="transition">Player Info</a></li>
			<li><a href="#" class="transition">Statistics</a></li>
			<li><a href="#" class="transition">Preferences</a></li>
			<li><a href="#" class="transition">Help</a></li>
			<li><a href="#" class="transition">Exit</a></li>
		</ul>
		<div class="credits">&copy; 2014, Homefront Interactive</div>
	</div>

</body>
</html>