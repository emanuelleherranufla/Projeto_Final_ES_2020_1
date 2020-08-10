<?php

class Conexao{
	private $servername="localhost";
	private $username="root";
	private $password="";
	private $bd="bd_lilithstore";
	private $conn=null;

	function __construct(){}

	function getConnection(){
		if($this->conn == null){
			$this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->bd);
		}

		if(!$this->conn){
			die("conexão falhou:". $conn->connect_error);
		}

		return $this->conn;
	}
}

?>