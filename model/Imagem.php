<?php
class Imagem{
	public $id;
	public $idMarker;
	public $local;
	private $altura;
	private $largura;

	function __construct( $id = NULL ){
		if( !empty($id) ){
			$db = new Db();
			$rs = $db->prepare('SELECT * FROM imagens WHERE id = :id');
			$rs->bindParam(':id', $id);
			$rs->execute();
			$row = $rs->fetch(PDO::FETCH_OBJ);
			if($row){
				$this->id = $row->id;
				$this->idMarker = $row->idMarker;
				$this->local = $row->local;
			}
		}
	}

	public function save(){
		$db = new Db();
		if( $this->id ){
			$sql = 'UPDATE imagens SET idMarker=:idmarker, local=:local WHERE idMarker = :idmarker';
			$sth = $db->prepare($sql);
			$sth->bindParam(':idMarker', $this->idMarker);
			$sth->bindParam(':local', $this->local);
			return $sth->execute();
		}
		else{
			$sql = 'INSERT INTO imagens (idmarker, local) VALUES (:idmarker, :local)';
			$sth = $db->prepare($sql);
			$sth->bindParam(':idmarker', $this->idMarker);
			$sth->bindParam(':local', $this->local);
			return $sth->execute();
		}
	}

	public function listar(){
		$db = new Db();
		$rs = $db->query('SELECT * FROM imagens');
		$imagens = $rs->fetchAll(PDO::FETCH_CLASS, 'Imagem');
		return $imagens;
	}
}
?>
