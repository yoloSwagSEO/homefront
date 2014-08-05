<?php

	## ---------------------------------------------------
	#  HOMEFRONT ONLINE
	## ---------------------------------------------------
	#  Developed by Brunno Pleffken Hosti
	#  File: c.router.php
	#  Release: v1.0.0
	#  Copyright: (c) 2014 - Homefront Interactive
	## ---------------------------------------------------

	class Router
	{
		// ---------------------------------------------------
		// Get full URL to a page
		// ---------------------------------------------------

		public static function URL($controller, $action = "", $id = 0)
		{
			// Get controller and action
			if($action != "") {
				$url = ROOT . "index.php?p=" . $controller . "&action=" . $action;
			}
			else {
				$url = ROOT . "index.php?p=" . $controller;
			}

			// Do we have an ID?
			if($id != 0) {
				$url = $url . "&id=" . $id;
			}
			
			return $url;
		}

	}

?>