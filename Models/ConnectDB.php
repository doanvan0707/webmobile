<?php
class ConnectDB
{
		private static $servername = "localhost";
		private static $username = "root";
		private static $password = "";
		private static $dbname = "mobile_db";

		public static function connect()
		{
				// Create connection
				$conn = new mysqli(self::$servername, self::$username, self::$password, self::$dbname);
				// Check connection
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				return $conn;
		}
}







