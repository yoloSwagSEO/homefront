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

		const ENERGY_WP_HARDPOINT = 0.5;	// Energy weapons class (like disruptors and beams)
		const DEVICE_WP_HARDPOINT = 0.8;	// Device weapons class (like torpedoes and missiles)

		// Attacker and defender raw array
		// These values are inserted by constructor

		private $attacker = array();
		private $defender = array();
		
		// Attacker and defender calculated array
		// These values are inserted by calculation classes
		
		private $attacker_stack = array();
		private $defender_stack = array();

        // Spreadsheets

        private $techTree = array();

        /**
         * DEFINE DEFENDER/ATTACKER ARRAY AND LOAD COMPONENTS
         * $attacker	Offensive fleet array
		 * $defender	Defensive fleet array
         */
		function __construct($attacker, $defender)
		{
			// Get attacker and defender array and insert into class

			$this->attacker = $attacker;
			$this->defender = $defender;

            // Get required models
			
			require_once("../models/spreadsheets.php");
		}
		
		
		/**
		 * CALCULATE FINAL FLEET ATTACK POWER
		 * $class			Starship/starbase class acronym (e.g.: atf, sco, bcr)
		 * $empire_race		Empire race (human, kelleron, hydran or eloran)
		 * $tech_array		Player technology array
		 */
        private function CalculateAttackPower($class, $empire_race, $tech_array)
		{
			global $ships, $races;

			// Calculate energy weapons overall power
			$energy = ($ships[$class]['attack'] * $races[$empire_race]['attack']) * $ships[$class]['e_wep'] * ENERGY_WP_HARDPOINT;
			$energy = $energy * $tech_array['energy'];

			// Calculate device weapons overall power
			$device = ($ships[$class]['attack'] * $races[$empire_race]['attack']) * $ships[$class]['d_wep'] * DEVICE_WP_HARDPOINT;
			$device = $device * $tech_array['device'];

			// Build total attack power
			$overall_attack_power = $energy + $device;

			return $overall_attack_power;
		}
		
		/**
		 * CALCULATE FINAL FLEET DEFENSE POWER
		 * $class			Starship/starbase class acronym (e.g.: atf, sco, bcr)
		 * $empire_race		Empire race (human, kelleron, hydran or eloran)
		 * $tech_array		Player technology array
		 */
		private function CalculateDefensePower($class, $empire_race, $tech_array)
		{
			global $ships, $races;

			// Calculate defense overall power
			$defense = $ships[$class]['defense'] * $races[$empire_race]['defense'];
			$overall_defense_power = ($defense * $tech_array['hull']) * $tech_array['deflector'];

			return $overall_defense_power;
		}
		
		/**
		 * CALCULATE FLEET STACK FOR EACH STARSHIP CLASS FOR EACH EMPIRE
		 */
		public function CalculateOverallPower()
		{
			foreach($ships as $class => $value)
			{
				// Generate attacker fleet stack

				$this->attacker_stack[$class] = array(
					"attack"	=> $attacker_fleet[$class] * CalculateFinalAttackPower($class, $attacker_empire['race'], $attacker_tech),
					"defense"	=> $attacker_fleet[$class] * CalculateFinalDefensePower($class, $attacker_empire['race'], $attacker_tech)
				);

				// Generate defender fleet stack

				$this->defender_stack[$class] = array(
					"attack"	=> $defender_fleet[$class] * CalculateFinalAttackPower($class, $defender_empire['race'], $defender_tech),
					"defense"	=> $defender_fleet[$class] * CalculateFinalDefensePower($class, $defender_empire['race'], $defender_tech)
				);
			}
			
			// Order starship classes of each fleet by amount of power
			
			arsort($this->attacker_stack);
			arsort($this->defender_stack);
			
			// Get ordered stack array keys
	
			$attacker_stack_key = array_keys($attacker_stack);
			$defender_stack_key = array_keys($defender_stack);
		}
	}

?>