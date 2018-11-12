<?php
class Condb {
	private $db = null;
	function __construct($dbNameParam){
		$serverName = "localhost";
        $userName = "root";
        $userPassword = "";
        $dbName = $dbNameParam;
		// $dbName = "athita";
		// $dbName = "athito";
		$this->db = new PDO("mysql:host=$serverName;dbname=$dbName;charset=utf8", $userName, $userPassword);
	}

    //     $serverName = "database";
    //     $userName = "root";
    //     $userPassword = "1234ci2";
    //     $dbName = $dbNameParam;
	// 	// $dbName = "athita";
	// 	// $dbName = "athito";
	// 	$this->db = new PDO("mysql:host=$serverName;dbname=$dbName;charset=utf8", $userName, $userPassword);
	// }
	public function db_get_status(){
		return $this->db;
	}
	public function db_close(){
		$this->db = null;
	}
	public function db_fillter($str){
		$result = 'pass';
		$pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
		if(preg_match($pattern, $str)){
			$result = 'err';
		}
		return $result;
	}
	public function db_query($sql){
		$this->db->query($sql);
	}
	public function db_fetch($sql){
		$query = $this->db->query($sql);
		return $query->fetchAll();
	}
	public function db_fetch_assoc($sql){
		$query = $this->db->query($sql);
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
}

// $con = new Condb();
// $result = $con->db_query($sql);
// $con->db_close();