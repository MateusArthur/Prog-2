<?php
class BD {
	private $host ="localhost";
	private $user = "admrent";
	private $senha = "12345";
	private $database = "rentavel";
	private $conexao;

	function __construct() {
		$this->conexao = mysqli_connect($this->host, $this->user, $this->senha, $this->database);
		mysqli_query($this->conexao, $sql);
	}

	function select($sql) {
		$retorno = mysqli_query($this->conexao, $sql);
		$arrayResultados = array();
		if(mysqli_num_rows($retorno) > 0) {
			while(mysqly_fetch_assoc($retorno)) {
				$arrayResultados[] = $linha;
			}
		}
		return $arrayResultados;
	}

	function query($sql) {
		return mysqli_query($this->conexao, $sql);
	}


}
?>