<?php
class DBConection {
	private$username; 
	private$hostname;
	private$password;
	private$dbname;
	public function DBConnection($u="",$h="",$p="",$db=""){
		$this->$username=$u;
		$this->$hostname=$h;
		$this->$password=$p;
		$this->$dbname=$db;
	}
	public function chkConnection():bool{
		try{
			$conn = new PDO ("mysql:host = $this->hostname,dbname= $this->dbname",$this->username,$this->password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return true;
		}catch (PDOException $e){
		//echo $e->getMessage();
			return false;
		}
	}
}
	// Ket thuc class
	$conn = new DBConnection("localhost","root", "","test");
	if ($conn->chkConnection(){
		echo "Connect to db sucessfully";
	else
		echo "Connection fail";
	}
?>