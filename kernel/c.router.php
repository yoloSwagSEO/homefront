<?php

	## ---------------------------------------------------
	#  HOMEFRONT ONLINE
	## ---------------------------------------------------
	#  Developed by Brunno Pleffken Hosti
	#  File: c.core.php
	#  Release: v1.0.0
	#  Copyright: (c) 2014 - Homefront Interactive
	## ---------------------------------------------------

	class Router
	{
		// ---------------------------------------------------
		// Get full URL to a page
		// ---------------------------------------------------

		public static function URL($controller, $id = "")
		{
			if($id != "") {
				$url = ROOT . "index.php?p=" . $controller . "&id=" . $id;
			}
			else {
				$url = ROOT . "index.php?p=" . $controller;
			}
			
			return $url;
		}

	}

?>