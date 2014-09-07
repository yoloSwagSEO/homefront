<?php

	## ---------------------------------------------------
	#  HOMEFRONT ONLINE
	## ---------------------------------------------------
	#  Developed by Brunno Pleffken Hosti
	#  File: c.core.php
	#  Release: v1.0.0
	#  Copyright: (c) 2014 - Homefront Interactive
	## ---------------------------------------------------

	class Core
	{
		// ---------------------------------------------------
		// Request from query string
		// ---------------------------------------------------

		public static function Request($queryStringName)
		{
			if(isset($_GET[$queryStringName])) {
				$value = self::Sanitize($_GET[$queryStringName]);
				return $value;
			}
			else {
				return false;
			}
		}

		// ---------------------------------------------------
		// Prints out <PRE> tags around the output of print_r
		// ---------------------------------------------------
		
		public static function PR($var)
		{
			echo "<pre style='font-size: 12px'>";
			print_r($var);
			echo "</pre>";
		}

		// ---------------------------------------------------
		// Clean reserved characters in HTML
		// ---------------------------------------------------

		public static function Sanitize($text)
		{
			$text = str_replace("&", "&amp;", $text);
			$text = str_replace("<", "&lt;", $text);
			$text = str_replace(">", "&gt;", $text);
			$text = str_replace('"', "&quot;", $text);
			$text = str_replace("'", "&#39;", $text);

			// An extra for double slashes (escape char in PHP)
			$text = str_replace("\\", "\\\\", $text);

			return $text;
		}

		// ---------------------------------------------------
		// Get defined model (/models folder)
		// ---------------------------------------------------

		public static function GetModel($name)
		{
			require("models/" . $name . ".model.php");
			return $model;
		}
	}

?>