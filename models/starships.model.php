<?php

	## ---------------------------------------------------
	#  HOMEFRONT ONLINE
	## ---------------------------------------------------
	#  Developed by Brunno Pleffken Hosti
	#  File: starships.model.php
	#  Release: v1.0.0
	#  Copyright: (c) 2014 - Homefront Interactive
	## ---------------------------------------------------
	
	// ---------------------------------------------------
	// Starship variables
	// ---------------------------------------------------

	$model['starships'] = array(
		"atf" => array("attack" => 1,   "defense" => 2,   "turns" => 1,  "e_wep" => 1,   "d_wep" => 0,   "name" => "Attack Fighter"),
		"sco" => array("attack" => 2,   "defense" => 4,   "turns" => 2,  "e_wep" => 1,   "d_wep" => 0,   "name" => "Scout"),
		"fri" => array("attack" => 4,   "defense" => 8,   "turns" => 3,  "e_wep" => 0.8, "d_wep" => 0.2, "name" => "Frigate"),
		"des" => array("attack" => 8,   "defense" => 16,  "turns" => 5,  "e_wep" => 0.8, "d_wep" => 0.2, "name" => "Destroyer"),
		"cru" => array("attack" => 16,  "defense" => 32,  "turns" => 7,  "e_wep" => 0.7, "d_wep" => 0.3, "name" => "Cruiser"),
		"bcr" => array("attack" => 32,  "defense" => 64,  "turns" => 10, "e_wep" => 0.6, "d_wep" => 0.4, "name" => "Battlecruiser"),
		"war" => array("attack" => 64,  "defense" => 128, "turns" => 15, "e_wep" => 0.5, "d_wep" => 0.5, "name" => "Warship"),
		"dre" => array("attack" => 128, "defense" => 256, "turns" => 23, "e_wep" => 0.4, "d_wep" => 0.6, "name" => "Dreadnought"),
		"edr" => array("attack" => 256, "defense" => 512, "turns" => 34, "e_wep" => 0.3, "d_wep" => 0.7, "name" => "Enhanced Dreadnought")
	);

	// ---------------------------------------------------
	// Starship class names
	// ---------------------------------------------------
	
	$model['starship_classes'] = array(
		"atf" => array(
			"humans" => "Miranda",
			"kellerons" => "",
			"hydrans" => "Interceptor",
			"elorans" => "Lisstra"
		),
		"sco" => array(
			"humans" => "Callisto",
			"kellerons" => "",
			"hydrans" => "Detector",
			"elorans" => "Alderamin"
		),
		"fri" => array(
			"humans" => "Ganimedes",
			"kellerons" => "",
			"hydrans" => "Assimilator",
			"elorans" => "Bellaruz"
		),
		"des" => array(
			"humans" => "Ananke",
			"kellerons" => "",
			"hydrans" => "Destroyer",
			"elorans" => "Ithilien"
		),
		"cru" => array(
			"humans" => "Europa",
			"kellerons" => "",
			"hydrans" => "Launcher",
			"elorans" => "Raridra"
		),
		"bcr" => array(
			"humans" => "Oberon",
			"kellerons" => "",
			"hydrans" => "Harbinger",
			"elorans" => "Thennon"
		),
		"war" => array(
			"humans" => "Hyperion",
			"kellerons" => "",
			"hydrans" => "Defender",
			"elorans" => "Nystemna"
		),
		"dre" => array(
			"humans" => "Adrasthea",
			"kellerons" => "",
			"hydrans" => "Predator",
			"elorans" => "Avraneen"
		),
		"edr" => array(
			"humans" => "Prometheus",
			"kellerons" => "",
			"hydrans" => "Behemoth",
			"elorans" => "Norexan"
		)
	);

?>