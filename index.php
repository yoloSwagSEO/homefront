<?php

	## ---------------------------------------------------
	#  HOMEFRONT ONLINE
	## ---------------------------------------------------
	#  Developed by Brunno Pleffken Hosti
	#  File: index.php
	#  Release: v1.0.0
	#  Copyright: (c) 2014 - Homefront Interactive
	## ---------------------------------------------------


	define("ROOT", "http://localhost/homefront/");

	class Main
	{
		// Properties

		protected $Db;
		protected $Core;
		protected $Session;

		public $info = array(
			'module'	=> '',
			'action'	=> '',
			'id'		=> 0
		);

		private $head;
		private $content;

		/**
		 * Main application constructor
		 */

		public function __construct()
		{
			// Initial configuration

			require_once("config.php");
			require_once("kernel/c.core.php");
			require_once("kernel/c.router.php");

			// Get controller

			if(Core::Request("p")) {
				$this->info['controller'] = Core::Request("p");
			}
			else {
				$this->info['controller'] = "default";
			}
			
			// Get action
			
			if(Core::Request("action")) {
				$this->info['action'] = Core::Request("action");
			}
			
			// Get ID
			
			if(Core::Request("id")) {
				$this->info['id'] = Core::Request("id");
			}

			// Load section controller/view into $this->content

			ob_start();
			
			if($this->info['action'] == "") {
				require_once("controller/" . $this->info['controller'] . ".php");
				require_once("view/" . $this->info['controller'] . ".index.php");
			}
			else {
				require_once("controller/" . $this->info['controller'] . ".php");
				require_once("view/" . $this->info['controller'] . "." . $this->info['action'] . ".php");
			}
			
			$this->content = ob_get_clean();

			// Master page controller and template

			require_once("controller/master.php");
			require_once("view/master.php");
		}
	}

	$main = new Main();

?>