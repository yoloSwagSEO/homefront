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
		// Get defined spreadsheet (/data folder)
		// ---------------------------------------------------

		public static function GetSpreadsheet($spreadsheetName)
		{
			$filePath = ROOT . "data/" . $spreadsheetName . ".json";
			if(file_exists($filePath)) {
				$json = file_get_contents($filePath);
				$array = json_decode($json, true);
			}
			else {
				throw new Exception("The requested spreadsheet could not be found.");
			}

			return $array;
		}
	}

?>