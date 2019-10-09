<?php 
class Produto {
	private $conexao;

	function __construct() {
		$this->conexao = new conexao_db();
	}

	function filtroCategoria($cat) {
		$sql = "SELECT * FROM produto WHERE $cat IS TRUE";
		return this->conexao->select($sql);
	}

	function filtroBusca($palavraChave) {
		$sql = "SELECT * FROM produto WHERE nom LIKE '%$palavraChave%'";
		return $this->conexao->select($sql);
	}

	function filtroNovidades($palavraChave) {
		$sql = "SELECT * FROM produto ORDER BY id DESC LIMIT 5";
		return $this->conexao->select($sql);
	}
}
?>