<?php
class Marker{
	public $id;
	public $nome;
	public $lat;
	public $longi;
	public $categoria;
	public $descricao;

	function __construct( $id = NULL ){
		if( !empty($id) ){
			$db = new Db();
			$rs = $db->prepare('SELECT * FROM markers WHERE id = :id');
			$rs->bindParam(':id', $id);
			$rs->execute();
			$row = $rs->fetch(PDO::FETCH_OBJ);
			if($row){
				$this->id = $row->id;
				$this->nome = $row->nome;
				$this->lat = $row->lat;
				$this->longi = $row->longi;
				$this->categoria = $row->categoria;
				$this->descricao = $row->descricao;
			}
		}
	}

	public function save(){		
		$db = new Db();
		if( $this->id ){ 	# update, se o id existir no bd
			$sql = 'UPDATE marker SET nome=:nome, lat=:lat, longi=:longi, categoria=:categoria, descricao=:descricao WHERE id = :id';
			$sth = $db->prepare($sql);
			$sth->bindParam(':id', $this->id);
			$sth->bindParam(':nome', $this->nome);
			$sth->bindParam(':lat', $this->lat);
			$sth->bindParam(':longi', $this->longi);
			$sth->bindParam(':categoria', $this->categoria);
			$sth->bindParam(':descricao', $this->descricao);
			return $sth->execute();
		}
		else{ 			# insert, se nao tiver od id no BD
			$sql = 'INSERT INTO markers (nome, lat, longi, categoria, descricao) VALUES (:nome, :lat, :longi, :categoria, :descricao)';
			$sth = $db->prepare($sql);
			$sth->bindParam(':nome', $this->nome);
			$sth->bindParam(':lat', $this->lat);
			$sth->bindParam(':longi', $this->longi);
			$sth->bindParam(':categoria', $this->categoria);
			$sth->bindParam(':descricao', $this->descricao);
			return $sth->execute();
		}
	}

	public function listar(){
		$db = new Db();
		$rs = $db->query('SELECT * FROM markers');
		$allmarkers = $rs->fetchAll(PDO::FETCH_CLASS, 'Marker');
		return $allmarkers;
	}

	


/*	public function addImg(){
		$db = new Db();
		$local = filter_input($_POST,'local');
		$img = WideImage::load('');
		$sql = 'INSERT INTO markerImg()'
	}*/
}
?>

