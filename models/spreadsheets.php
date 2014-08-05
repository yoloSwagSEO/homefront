<?php

	## ---------------------------------------------------
	#  HOMEFRONT ONLINE
	## ---------------------------------------------------
	#  Developed by Brunno Pleffken Hosti
	#  File: spreadsheets.php
	#  Release: v1.0.0
	#  Copyright: (c) 2014 - Homefront Interactive
	## ---------------------------------------------------


	// ---------------------------------------------------
	// Greek alphabet (for starsystems naming purposes)
	// ---------------------------------------------------

	$model['greek'] = array(
		"Alpha",	"Beta",		"Gamma",	"Delta",
		"Epsilon",	"Zeta",		"Eta",		"Theta",
		"Iota",		"Kappa",	"Lambda",	"Mu",
		"Nu",		"Xi",		"Omicron",	"Pi",
		"Rho",		"Sigma",	"Tau",		"Upsilon",
		"Phi",		"Chi",		"Psi",		"Omega"
	);

	// ---------------------------------------------------
	// Races spreadsheet
	// ---------------------------------------------------

	$model['races'] = array(
		"humans"		=> array("attack" => 1,		"defense" => 1),
		"kellerons"		=> array("attack" => 1.5,	"defense" => 0.5),
		"hydrans"		=> array("attack" => 1,		"defense" => 0.5),
		"elorans"		=> array("attack" => 0.5,	"defense" => 1.5)
	);

	// ---------------------------------------------------
	// Races spreadsheet
	// ---------------------------------------------------

	$model['government'] = array(
		"Authoritarianism", "Democracy", "Monarchy", "Anarchy"
	);

	// ---------------------------------------------------
	// Planet classes
	// ---------------------------------------------------

	$model['planet_classes'] = array(
		"C" => array("type" => "Geoinactive",		"max_population" => 0,	"probability" => 0,	"metal_res" => 0, "deuterium_res" => 0),
		"D" => array("type" => "Planetoid",			"max_population" => 0,	"probability" => 0,	"metal_res" => 0, "deuterium_res" => 0),
		"H" => array("type" => "Desert",			"max_population" => 0,	"probability" => 0,	"metal_res" => 0, "deuterium_res" => 0),
		"J" => array("type" => "Gas Giant",			"max_population" => 0,	"probability" => 0,	"metal_res" => 0, "deuterium_res" => 0),
		"K" => array("type" => "Adaptable",			"max_population" => 0,	"probability" => 0,	"metal_res" => 0, "deuterium_res" => 0),
		"L" => array("type" => "Marginal",			"max_population" => 0,	"probability" => 0,	"metal_res" => 0, "deuterium_res" => 0),
		"M" => array("type" => "Terrestrial",		"max_population" => 0,	"probability" => 0,	"metal_res" => 0, "deuterium_res" => 0),
		"N" => array("type" => "Sulfuric",			"max_population" => 0,	"probability" => 0,	"metal_res" => 0, "deuterium_res" => 0),
		"O" => array("type" => "Pelagic",			"max_population" => 0,	"probability" => 0,	"metal_res" => 0, "deuterium_res" => 0),
		"P" => array("type" => "Glaciated",			"max_population" => 0,	"probability" => 0,	"metal_res" => 0, "deuterium_res" => 0),
		"T" => array("type" => "Gas Supergiant",	"max_population" => 0,	"probability" => 0,	"metal_res" => 0, "deuterium_res" => 0)
	);

	// ---------------------------------------------------
	// Starships spreadsheet
	// ---------------------------------------------------

	$model['starships'] = array(
		"atf"	=> array("attack" => 1,		"defense" => 2,		"turns" => 1,	"e_wep" => 1,	"d_wep" => 0,	"name" => "Attack Fighter"),
		"sco"	=> array("attack" => 2,		"defense" => 4,		"turns" => 2,	"e_wep" => 1,	"d_wep" => 0,	"name" => "Scout"),
		"fri"	=> array("attack" => 4,		"defense" => 8,		"turns" => 3,	"e_wep" => 0.8,	"d_wep" => 0.2,	"name" => "Frigate"),
		"des"	=> array("attack" => 8,		"defense" => 16,	"turns" => 5,	"e_wep" => 0.8,	"d_wep" => 0.2,	"name" => "Destroyer"),
		"cru"	=> array("attack" => 16,	"defense" => 32,	"turns" => 7,	"e_wep" => 0.7,	"d_wep" => 0.3,	"name" => "Cruiser"),
		"bcr"	=> array("attack" => 32,	"defense" => 64,	"turns" => 10,	"e_wep" => 0.6,	"d_wep" => 0.4,	"name" => "Battlecruiser"),
		"war"	=> array("attack" => 64,	"defense" => 128,	"turns" => 15,	"e_wep" => 0.5,	"d_wep" => 0.5,	"name" => "Warship"),
		"dre"	=> array("attack" => 128,	"defense" => 256,	"turns" => 23,	"e_wep" => 0.4,	"d_wep" => 0.6,	"name" => "Dreadnought"),
		"edr"	=> array("attack" => 256,	"defense" => 512,	"turns" => 34,	"e_wep" => 0.3,	"d_wep" => 0.7,	"name" => "Enhanced Dreadnought")
	);

	// ---------------------------------------------------
	// Technologies spreadsheet
	// ---------------------------------------------------

	// HULL TECHNOLOGIES
	// Increase structures hull strength

	$model['technology']['hull'] = array(
		array("name" => "Steel",					"var" => 1,		"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Monotanium",				"var" => 1.1,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Duranium",					"var" => 1.2,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Kelindide",				"var" => 1.3,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Bio-Molecular",			"var" => 1.4,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Duranium/Tritanium",		"var" => 1.5,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Variethiel",				"var" => 1.6,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Parametallic",				"var" => 1.7,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Bioarmoured", 				"var" => 1.8,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Auto-Regeneration Matrix",	"var" => 1.9,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Neutronium",				"var" => 2,		"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Carbon-Neutronium",		"var" => 2.1,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0)
	);

	// ARMOR TECHNOLOGIES
	// Increase hull strength using energy immune armors (starships only)

	$model['technology']['armor'] = array(
		array("name" => "Polarized",			"var" => 1,		"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Enhanced Polarized",	"var" => 1.1,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "High Density",			"var" => 1.2,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Ablative Armor",		"var" => 1.3,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Dispersive",			"var" => 1.4,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0)
	);

	// DEFLECTOR TECHNOLOGIES
	// Increase deflector grid defenses

	$model['technology']['deflector'] = array(
		array("name" => "Force Field",				"var" => 1,		"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Deflector Grid",			"var" => 1.1,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Regenerative Deflector",	"var" => 1.2,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Corbomite Reflector",		"var" => 1.3,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0)
	);

	// PROJECTILE WEAPONS TECHNOLOGIES
	// Increase projectile weapons attack power

	$model['technology']['energy'] = array(
		array("name" => "Pulse Cannon",				"var" => 1,		"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Disruptor Beam Type VIII",	"var" => 1.1,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Disruptor Beam Type IX",	"var" => 1.2,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Disruptor Beam Type X",	"var" => 1.3,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Disruptor Beam Type XI",	"var" => 1.4,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Positron Beam",			"var" => 1.5,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Polaron Emitter Type I",	"var" => 1.6,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Polaron Emitter Type II",	"var" => 1.7,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Polaron Emitter Type III",	"var" => 1.8,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Metreon Pulse Type I",		"var" => 1.9,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Metreon Pulse Type II",	"var" => 2,		"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0)
	);

	// PROJECTILE WEAPONS TECHNOLOGIES
	// Increase projectile weapons attack power

	$model['technology']['projectile'] = array(
		array("name" => "Plasma Torpedoes",			"var" => 1,		"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Antimatter Torpedoes",		"var" => 1.1,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Photon Torpedoes",			"var" => 1.2,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Quantum Torpedoes",		"var" => 1.3,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Tri-Cobalt Torpedoes",		"var" => 1.4,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Polaron Torpedoes",		"var" => 1.5,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Chronaton Torpedoes",		"var" => 1.6,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Transphasic Torpedoes",	"var" => 1.7,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0)
	);

	// IMPULSE ENGINE TECHNOLOGIES
	// Decrease travelling time when in impulse speed

	$model['technology']['sublight'] = array(
		array("name" => "Hydrogen Energy Impulse",			"var" => 1,		"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Subatomic Unified Energy Impulse",	"var" => 0.5,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0)
	);

	// HYPERDRIVE ENGINE TECHNOLOGIES
	// Decrease travelling time when in hyperdrive speed

	$model['technology']['hyperdrive'] = array(
		array("name" => "Antimatter Reactor",			"var" => 1,		"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Coaxial Reactor",				"var" => 0.9,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Quantum Slipstream Reactor",	"var" => 0.8,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Subspace Reactor Core",		"var" => 0.7,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Transwarp Reactor",			"var" => 0.6,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0)
	);

	// COMPUTING TECHNOLOGIES
	// Decrease research and building time

	$model['technology']['computing'] = array(
		array("name" => "Duotronic System",		"var" => 1,		"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Isolinear Circuitry",	"var" => 0.9,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Bio-Neural Circuitry",	"var" => 0.8,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Positronic Matrix",	"var" => 0.7,	"credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0)
	);

?>