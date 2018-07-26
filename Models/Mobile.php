<?php
require_once 'ConnectDB.php';
class Mobile
{
		public $userName;
		public $password;
		public $email;
		public $name;
		public $phone;
		public $skype;
		public $yahoo;

		function __construct($userName, $password, $email, $name, $phone, $skype, $yahoo)
		{
				$this->userName = $userName;
				$this->password = $password;
				$this->email = $email;
				$this->name = $name;
				$this->phone = $phone;
				$this->skype = $skype;
				$this->yahoo = $yahoo;
		}

		public static function list()
		{
				$conn = ConnectDB::connect();
				$sql = "SELECT * FROM users";
				$result = $conn->query($sql);
				$arr = [];
				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				       $arr[] = $row;
				    }
				    return $arr;
				} else {
				    return false;
				}
				$conn->close();
		}
		public function insert()
		{
				$conn = ConnectDB::connect();
				$sql = "INSERT INTO users (username, password, email, name, phone, skype, yahoo)
				VALUES ('". $this->userName ."', '". $this->password ."', '". $this->email ."', '". $this->name ."', '". $this->phone ."', '". $this->skype ."', '". $this->yahoo ."')";

				if ($conn->query($sql) === TRUE) {
				    return true;
				} else {
				    return false;
				}

				$conn->close();
		}
		public static function show($id)
		{
				$conn = ConnectDB::connect();
				$sql = "SELECT * FROM users";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				    		return $row;
				    }
				} else {
				    return false;
				}
				$conn->close();
		}

		public static function delete($id)
		{
				$conn = ConnectDB::connect();
				$sql = "DELETE FROM users WHERE id = $id";

				if ($conn->query($sql) === TRUE) {
				    return true;
				} else {
				    return false;
				}

				$conn->close();
		}

		public static function checkLogin($userName, $password)
		{
				$conn = ConnectDB::connect();
				$sql = "SELECT * FROM users WHERE username = '". $userName ."' AND password =  '". $password ."'";
				$result = $conn->query($sql);
				if(!empty($result)) {
						if ($result->num_rows > 0) {
					    return true;
						} else {
						    return false;
						}
						$conn->close();
				}	
				return false;
		}

		
}