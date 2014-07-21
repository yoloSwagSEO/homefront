<?php

	## ---------------------------------------------------
	#  HOMEFRONT ONLINE
	## ---------------------------------------------------
	#  Developed by Brunno Pleffken Hosti
	#  File: c.military.php
	#  Release: v1.0.0
	#  Copyright: (c) 2014 - Homefront Interactive
	## ---------------------------------------------------

	class Military
	{
		// Chances, in decimals, in which some kind of weapon can hit the enemy
		// 1 = 100%; 0.75 = 75%; 0.5 = 50%; 0.25 = 25%; 0 = 0%

		const ENERGY_WEP_HARDPOINT = 0.5;	// Energy weapons class (like disruptors and beams)
		const DEVICE_WEP_HARDPOINT = 0.8;	// Device weapons class (like torpedoes and missiles)

		// Attacker and defender array
		// These values are inserted by constructor

		private $attacker = array();
		private $defender = array();

        // Spreadsheets

        private $techTree = array();

		// ---------------------------------------------------
		// Define attacker and defender array
		// ---------------------------------------------------

		function __construct($attacker, $defender)
		{
			// Get attacker and defender array and insert into class

			$this->attacker = $attacker;
			$this->defender = $defender;

            // Get technologies spreadsheet
			
			require_once("../data/spreadsheets.php");
		}
		
		// ---------------------------------------------------
		// Calculate final fleet attack power
		// ---------------------------------------------------

        public function CalculateFleetPower()
		{

		}
	}

?>