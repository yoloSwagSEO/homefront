<?php

	### ---------------------------------------------------
	#  HOMEFRONT ONLINE
	## ---------------------------------------------------
	#  Developed by Brunno Pleffken Hosti
	#  File: empire.model.php
	#  Release: v1.0.0
	#  Copyright: (c) 2014 - Homefront Interactive
	## ---------------------------------------------------

	// ---------------------------------------------------
	// Greek alphabet (for starsystems naming purposes)
	// ---------------------------------------------------

	$model['greek'] = array(
		"Alpha",   "Beta",  "Gamma",   "Delta",
		"Epsilon", "Zeta",  "Eta",     "Theta",
		"Iota",    "Kappa", "Lambda",  "Mu",
		"Nu",      "Xi",    "Omicron", "Pi",
		"Rho",     "Sigma", "Tau",     "Upsilon",
		"Phi",     "Chi",   "Psi",     "Omega"
	);

	// ---------------------------------------------------
	// Races
	// ---------------------------------------------------
	
	$model['races'] = array(
		"humans" => array(
			"attack"  => 1,
			"defense" => 1
		),
		"kellerons" => array(
			"attack"  => 1.5,
			"defense" => 0.5
		),
		"hydrans" => array(
			"attack"  => 1,
			"defense" => 0.5
		),
		"elorans" => array(
			"attack"  => 0.5,
			"defense" => 1.5
		)
	);

	// ---------------------------------------------------
	// States suffixes
	// ---------------------------------------------------
	
	$model['state_suffix'] = array(
		"Alliance",   "Concordium",   "Confederacy",
		"Empire",     "Federation",   "Hegemony",
		"Order",      "Protectorate", "Republic",
		"Solidality", "Sovereignty",  "Union",
		"Unity"
	);

	// ---------------------------------------------------
	// Type of government
	// ---------------------------------------------------

	$model['government'] = array(
		"aut" => "Authoritarianism",
		"dem" => "Democracy",
		"mon" => "Monarchy",
		"ana" => "Anarchy"
	);

	// ---------------------------------------------------
	// Type of government variables
	// ---------------------------------------------------

	$model['government_variables'] = array(
		"aut" => array(
			"bioharvest" => 0.5,
			"industry"   => 1,
			"research"   => 0
		),
		"dem" => array(
			"bioharvest" => 1,
			"industry"   => 0,
			"research"   => 0
		),
		"mon" => array(
			"bioharvest" => 1,
			"industry"   => 0.5,
			"research"   => 0
		),
		"ana" => array(
			"bioharvest" => 1.5,
			"industry"   => 1,
			"research"   => 0
		),
	);

?>