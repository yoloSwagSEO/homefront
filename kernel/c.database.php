<?php

	## ---------------------------------------------------
	#  HOMEFRONT ONLINE
	## ---------------------------------------------------
	#  Developed by Brunno Pleffken Hosti
	#  File: c.database.php
	#  Release: v1.0.0
	#  Copyright: (c) 2014 - Homefront Interactive
	## ---------------------------------------------------

	/**
	 * MAIN INTERFACE FOR DATABASE CLASS
	 */
	interface IMySQL
	{
		public function Query($query);
		public function Fetch($result = "");
		public function Rows($result = "");
		public function Select($table, $where = "");
		public function Insert($table, $array);
		public function Delete($table, $where);
		public function GetLastID();
	}

	/**
	 * MYSQL DATABASE ABSTRACTION LAYER
	 */
	class Database implements IMySQL
	{
		private $prefix = "c_";
		
		private $link;		// MySQL connection reference
		private $query;		// Store results from mysql_query()
		private $result;	// Store results from mysql_fetch_array()
		
		public $log = array();
		
		/**
		 * CONNECT TO MYSQL DATABASE
		 * $config	Configuration array (user, password, server address, etc.)
		 */
		public function __construct($config)
		{
			$this->prefix = $config['db_prefix'];
			$this->link = @mysql_connect($config['db_server'], $config['db_username'], $config['db_password']);
			
			if(!$this->link) {
				$this->MysqlException();
			}

			mysql_select_db($config['db_database']);
		}
		
		/**
		 * SEND SQL COMMAND TO SERVER
		 * $query	SQL query to be sent to database
		 */
		public function Query($query)
		{
			$this->query = mysql_query($query, $this->link);
			
			if(!$this->query) {
				$this->MysqlException();
			}
			
			$this->log[] = $query;
			
			return $this->query;
		}
 
		/**
		 * RETURN RESULTS FROM Query(string) COMMAND
		 * $result	Object returned from Query(string)
		 */
		public function Fetch($result = "")
		{
			if($result == "") {
				$result = $this->query;
			}
			
			$this->result = mysql_fetch_array($result, MYSQL_ASSOC);
			
			return $this->result;
		}

		/**
		 * GET NUMBER OF AFFECTED ROWS
		 * $result	Object returned from Query(string)
		 */
		public function Rows($result = "")
		{
			if($result == "") {
				$result = $this->query;
			}
			
			$this->result = mysql_num_rows($result);
			
			return $this->result;
		}

		/**
		 * GET DATA FROM A TABLE
		 * $table	Table name
		 * $where	"Where" condition shortcut
		 */
		public function Select($table, $where = "")
		{
			if($where != "") {
				$where = "WHERE " . $where;
			}
			
			$query = "SELECT * FROM {$table} {$where};";
			$this->query = mysql_query($query);

			if(!$this->query) {
				$this->MysqlException();
			}
			
			$this->log[] = $query;
			return $this->query;
		}

		/**
		 * INSERT DATA IN A TABLE FROM AN ARRAY
		 * $table	Table name
		 * $array	Array following the $field=>$value format
		 */	
		public function Insert($table, $array)
		{
			foreach($array as $f => $v) {
				$fields[] = $f;
				$values[] = "'" . $v . "'";
			}
			
			$query = "INSERT INTO {$table} (" . implode(", ", $fields) . ") VALUES (" . implode(", ", $values) . ");";
			$this->query = mysql_query($query);
			
			if(!$this->query) {
				$this->MysqlException();
			}
			
			$this->log[] = $query;
			return $this->query;
		}

		/**
		 * UPDATE TABLE FROM AN ARRAY
		 * $table	Table name
		 * $array	Array following the $field=>$value format
		 * $where	"Where" condition
		 */	
		public function Update($table, $array, $where)
		{
			foreach($array as $f => $v) {
				$fields[] = $f . " = '" . $v . "'";
			}
			
			$sql_query = "UPDATE {$table} SET " . implode(", ", $fields) . " WHERE {$where};";
			$this->query = $this->Query($sql_query);
			
			if(!$this->query) {
				$this->MysqlException();
			}
			
			$this->log[] = $query;
			
			return $this->query;
		}

		/**
		 * DELETE AN SPECIFIC REGISTRY
		 * $table	Table name
		 * $where	"Where" condition
		 */	
		public function Delete($table, $where)
		{
			$query = "DELETE FROM {$table} WHERE {$where};";
			$temp = mysql_query($query);
			$log[] = $query;
			return $temp;
		}

		/**
		 * GET LAST ID FROM LAST QUERY COMMAND (FROM AI)
		 */	
		public function GetLastID()
		{
			$id = mysql_insert_id($this->link);
			return $id;
		}

		/**
		 * IN CASE OF ERROR...
		 */	
		private function MysqlException()
		{
			Html::Error("<b>MySQL Error:</b> " . mysql_error());
			exit;
		}
	}

?>