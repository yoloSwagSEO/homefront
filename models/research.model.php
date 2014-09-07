<?php

	## ---------------------------------------------------
	#  HOMEFRONT ONLINE
	## ---------------------------------------------------
	#  Developed by Brunno Pleffken Hosti
	#  File: research.model.php
	#  Release: v1.0.0
	#  Copyright: (c) 2014 - Homefront Interactive
	## ---------------------------------------------------

	// ---------------------------------------------------
	// Technologies spreadsheet
	// ---------------------------------------------------

	// HULL TECHNOLOGIES
	// Increase structures hull strength

	$model['hull'] = array(
		array("name" => "Steel",                    "var" => 1,   "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Monotanium",               "var" => 1.1, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Duranium",                 "var" => 1.2, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Kelindide",                "var" => 1.3, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Bio-Molecular",            "var" => 1.4, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Duranium/Tritanium",       "var" => 1.5, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Variethiel",               "var" => 1.6, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Parametallic",             "var" => 1.7, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Bioarmoured",              "var" => 1.8, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Auto-Regeneration Matrix", "var" => 1.9, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Neutronium",               "var" => 2,   "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Carbon-Neutronium",        "var" => 2.1, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0)
	);

	// ARMOR TECHNOLOGIES
	// Increase hull strength using energy immune armors (starships only)

	$model['armor'] = array(
		array("name" => "Polarized",          "var" => 1,   "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Enhanced Polarized", "var" => 1.1, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "High Density",       "var" => 1.2, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Ablative Armor",     "var" => 1.3, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Dispersive",         "var" => 1.4, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0)
	);

	// DEFLECTOR TECHNOLOGIES
	// Increase deflector grid defenses

	$model['deflector'] = array(
		array("name" => "Force Field",            "var" => 1,   "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Deflector Grid",         "var" => 1.1, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Regenerative Deflector", "var" => 1.2, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Corbomite Reflector",    "var" => 1.3, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0)
	);

	// PROJECTILE WEAPONS TECHNOLOGIES
	// Increase projectile weapons attack power

	$model['energy'] = array(
		array("name" => "Pulse Cannon",             "var" => 1,   "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Disruptor Beam Type VIII", "var" => 1.1, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Disruptor Beam Type IX",   "var" => 1.2, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Disruptor Beam Type X",    "var" => 1.3, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Disruptor Beam Type XI",   "var" => 1.4, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Positron Beam",            "var" => 1.5, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Polaron Emitter Type I",   "var" => 1.6, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Polaron Emitter Type II",  "var" => 1.7, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Polaron Emitter Type III", "var" => 1.8, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Metreon Pulse Type I",     "var" => 1.9, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Metreon Pulse Type II",    "var" => 2,   "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0)
	);

	// PROJECTILE WEAPONS TECHNOLOGIES
	// Increase projectile weapons attack power

	$model['projectile'] = array(
		array("name" => "Plasma Torpedoes",      "var" => 1,   "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Antimatter Torpedoes",  "var" => 1.1, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Photon Torpedoes",      "var" => 1.2, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Quantum Torpedoes",     "var" => 1.3, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Tri-Cobalt Torpedoes",  "var" => 1.4, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Polaron Torpedoes",     "var" => 1.5, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Chronaton Torpedoes",   "var" => 1.6, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Transphasic Torpedoes", "var" => 1.7, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0)
	);

	// IMPULSE ENGINE TECHNOLOGIES
	// Decrease travelling time when in impulse speed

	$model['sublight'] = array(
		array("name" => "Hydrogen Energy Impulse",          "var" => 1,   "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Subatomic Unified Energy Impulse", "var" => 0.5, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0)
	);

	// HYPERDRIVE ENGINE TECHNOLOGIES
	// Decrease travelling time when in hyperdrive speed

	$model['hyperdrive'] = array(
		array("name" => "Antimatter Reactor",         "var" => 1,   "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Coaxial Reactor",            "var" => 0.9, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Quantum Slipstream Reactor", "var" => 0.8, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Subspace Reactor Core",      "var" => 0.7, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Transwarp Reactor",          "var" => 0.6, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0)
	);

	// COMPUTING TECHNOLOGIES
	// Decrease research and building time

	$model['computing'] = array(
		array("name" => "Duotronic System",     "var" => 1,   "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Isolinear Circuitry",  "var" => 0.9, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Bio-Neural Circuitry", "var" => 0.8, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0),
		array("name" => "Positronic Matrix",    "var" => 0.7, "credits" => 0, "metal" => 0, "deuterium" => 0, "antimatter" => 0)
	);

?>