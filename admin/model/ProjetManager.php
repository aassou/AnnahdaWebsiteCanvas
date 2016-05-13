<?php
class ProjetManager{

	//attributes
	private $_db;

	//le constructeur
    public function __construct($db){
        $this->_db = $db;
    }

	//BAISC CRUD OPERATIONS
	public function add(Projet $projet){
    	$query = $this->_db->prepare(
    	'INSERT INTO t_projet (name, description, adresse, dateCreation, avancementConstrucion, avancementFinition, created, createdBy)
		VALUES (:name, :description, :adresse, :dateCreation, :avancementConstrucion, :avancementFinition, :created, :createdBy)')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':name', $projet->name());
		$query->bindValue(':description', $projet->description());
		$query->bindValue(':adresse', $projet->adresse());
		$query->bindValue(':dateCreation', $projet->dateCreation());
        $query->bindValue(':avancementConstrucion', $projet->avancementConstrucion());
        $query->bindValue(':avancementFinition', $projet->avancementFinition());
		$query->bindValue(':created', $projet->created());
		$query->bindValue(':createdBy', $projet->createdBy());
		$query->execute();
		$query->closeCursor();
	}

	public function update(Projet $projet){
    	$query = $this->_db->prepare(
    	'UPDATE t_projet SET 
		name=:name, description=:description, adresse=:adresse, 
		dateCreation=:dateCreation, avancementConstrucion=:avancementConstrucion,
		avancementFinition=:avancementFinition, updated=:updated, updatedBy=:updatedBy
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $projet->id());
		$query->bindValue(':name', $projet->name());
		$query->bindValue(':description', $projet->description());
		$query->bindValue(':adresse', $projet->adresse());
		$query->bindValue(':dateCreation', $projet->dateCreation());
        $query->bindValue(':avancementConstrucion', $projet->avancementConstrucion());
        $query->bindValue(':avancementFinition', $projet->avancementFinition());
		$query->bindValue(':updated', $projet->updated());
		$query->bindValue(':updatedBy', $projet->updatedBy());
		$query->execute();
		$query->closeCursor();
	}
    
    public function updateAvancementProjet($idProjet, $avancementConstrucion, $avancementFinition){
        $query = $this->_db->prepare(
        'UPDATE t_projet SET avancementConstrucion=:avancementConstrucion,
        avancementFinition=:avancementFinition WHERE id=:id')
        or die (print_r($this->_db->errorInfo()));
        $query->bindValue(':id', $idProjet);
        $query->bindValue(':avancementConstrucion', $avancementConstrucion);
        $query->bindValue(':avancementFinition', $avancementFinition);
        $query->execute();
        $query->closeCursor();
    }

	public function delete($id){
    	$query = $this->_db->prepare(' DELETE FROM t_projet
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $id);
		$query->execute();
		$query->closeCursor();
	}

	public function getProjetById($id){
    	$query = $this->_db->prepare(' SELECT * FROM t_projet
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $id);
		$query->execute();		
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$query->closeCursor();
		return new Projet($data);
	}

	public function getProjets(){
		$projets = array();
		$query = $this->_db->query('SELECT * FROM t_projet
		ORDER BY id ASC');
		while($data = $query->fetch(PDO::FETCH_ASSOC)){
			$projets[] = new Projet($data);
		}
		$query->closeCursor();
		return $projets;
	}

	public function getProjetsByLimits($begin, $end){
		$projets = array();
		$query = $this->_db->query(
		'SELECT * FROM t_projet
		ORDER BY id DESC LIMIT '.$begin.', '.$end);
		while($data = $query->fetch(PDO::FETCH_ASSOC)){
			$projets[] = new Projet($data);
		}
		$query->closeCursor();
		return $projets;
	}

	public function getLastId(){
    	$query = $this->_db->query(
    	'SELECT id AS last_id FROM t_projet
		ORDER BY id DESC LIMIT 0, 1');
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$id = $data['last_id'];
		return $id;
	}

}