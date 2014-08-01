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
			'module'	=> ''
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

			// Are we viewing an specific page?

			if(Core::Request("p")) {
				$this->info['module'] = Core::Request("p");
			}
			else {
				$this->info['module'] = "default";
			}

			// Load section controller/view into $this->content

			ob_start();
			require_once("controller/" . $this->info['module'] . ".php");
			require_once("view/" . $this->info['module'] . ".php");
			$this->content = ob_get_clean();

			// Master page controller and template

			require_once("controller/master.php");
			require_once("view/master.php");
		}
	}

	$main = new Main();

?>