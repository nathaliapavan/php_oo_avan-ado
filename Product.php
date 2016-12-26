<?php

class Product{

	private $db;

	public function __construct(IConn $db){
		$this->db = $db->connect();
	}

	// método de consulta no banco de dados
	public function lista(){
		$query = 'Select * from produtos';
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}

}