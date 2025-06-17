<?php

class connect
{
    private $host = "localhost:3308";
	private $user = "root";
	private $password = "root";
	private $database = "pemograman_berbasis_internet";
	private $conn;

    function __construct() {
		$this->conn = $this->connect_database();
	}

    function connect_database() {
		
		
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		
		return $conn;

	}

}