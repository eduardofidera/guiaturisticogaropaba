<?php
class MarkerImg{
	public $idMarker;
	public $local;

	function __construct( $id = NULL ){
		if( !empty($id) ){
			$db = new Db();
			$rs = $db->prepare('SELECT * FROM markerimg WHERE idMarker = :id');
			$rs->bindParam(':id', $idMarker);
			$rs->execute();
			$row = $rs->fetch(PDO::FETCH_OBJ);
			if($row){
				$this->idmarker = $row->idmarker;
				$this->local = $row->local;
			}
		}
	}

	public function save(){		
		$db = new Db();
		if( $this->id ){ 
			$sql = 'UPDATE markerimg SET idMarker=:idmarker, local=:local WHERE idMarker = :idmarker';
			$sth = $db->prepare($sql);
			$sth->bindParam(':idMarker', $this->idMarker);
			$sth->bindParam(':local', $this->local);
			return $sth->execute();
		}
		else{ 	
			$sql = 'INSERT INTO markerimg (idmarker, local) VALUES (:idmarker, :local)';
			$sth = $db->prepare($sql);
			$sth->bindParam(':idmarker', $this->idMarker);
			$sth->bindParam(':local', $this->local);
			return $sth->execute();
		}
	}

	public function listar(){
		$db = new Db();
		$rs = $db->query('SELECT * FROM markerimg');
		$allimgs = $rs->fetchAll(PDO::FETCH_CLASS, 'MarkerImg');
		return $allimgs;
	}


/*	public function addImg(){
		$db = new Db();
		$local = filter_input($_POST,'local');
		$img = WideImage::load('');
		$sql = 'INSERT INTO markerImg()'
	}*/
}
?>

