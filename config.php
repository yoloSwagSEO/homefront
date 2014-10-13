<?php

	## ---------------------------------------------------
	#  HOMEFRONT ONLINE
	## ---------------------------------------------------
	#  Developed by Brunno Pleffken Hosti
	#  File: config.php
	#  Release: v1.0.0
	#  Copyright: (c) 2014 - Homefront Interactive
	## ---------------------------------------------------

	// Set default configuration
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');

	// Set default timezone
	date_default_timezone_set("GMT");

	// Database variables
	$config['db_server'] = "localhost";
	$config['db_user'] = "root";
	$config['db_password'] = "root";
	$config['db_database'] = "homefront";

?>