<?php

class Conn implements IConn{

	private $dns;
	private $user;
	private $pass;

	// construtor
	public function __construct($dns, $user, $pass){
		$this->dns = $dns;
		$this->user = $user;
		$this->pass = $pass;
	}

	// método de conexão com o banco de dados
	public function connect(){
		return new \PDO($this->dns, $this->user, $this->pass);
	}
}