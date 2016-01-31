<?php
class ImageManager{

	//attributes
	private $_db;

	//le constructeur
    public function __construct($db){
        $this->_db = $db;
    }

	//BAISC CRUD OPERATIONS
	public function add(Image $image){
    	$query = $this->_db->prepare(' INSERT INTO t_image (
		name, url, description, idProjet, created, createdBy)
		VALUES (:name, :url, :description, :idProjet, :created, :createdBy)')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':name', $image->name());
		$query->bindValue(':url', $image->url());
		$query->bindValue(':description', $image->description());
		$query->bindValue(':idProjet', $image->idProjet());
		$query->bindValue(':created', $image->created());
		$query->bindValue(':createdBy', $image->createdBy());
		$query->execute();
		$query->closeCursor();
	}

	public function update(Image $image){
    	$query = $this->_db->prepare(' UPDATE t_image SET 
		name=:name, url=:url, description=:description, idProjet=:idProjet, updated=:updated, updatedBy=:updatedBy
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $image->id());
		$query->bindValue(':name', $image->name());
		$query->bindValue(':url', $image->url());
		$query->bindValue(':description', $image->description());
		$query->bindValue(':idProjet', $image->idProjet());
		$query->bindValue(':updated', $image->updated());
		$query->bindValue(':updatedBy', $image->updatedBy());
		$query->execute();
		$query->closeCursor();
	}

	public function delete($id){
    	$query = $this->_db->prepare(' DELETE FROM t_image
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $id);
		$query->execute();
		$query->closeCursor();
	}

	public function getImageById($id){
    	$query = $this->_db->prepare(
    	'SELECT * FROM t_image
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $id);
		$query->execute();		
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$query->closeCursor();
		return new Image($data);
	}

    public function getFirstImageByIdProjet($idProjet){
        $query = $this->_db->prepare(
        'SELECT * FROM t_image
        WHERE idProjet=:idProjet LIMIT 0,1')
        or die (print_r($this->_db->errorInfo()));
        $query->bindValue(':idProjet', $idProjet);
        $query->execute();      
        $data = $query->fetch(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return new Image($data);
    }
    
    public function getImageNumberByIdProjet($idProjet){
        $query = $this->_db->prepare(
        'SELECT COUNT(id) AS imageNumber FROM t_image
        WHERE idProjet=:idProjet')
        or die (print_r($this->_db->errorInfo()));
        $query->bindValue(':idProjet', $idProjet);
        $query->execute();      
        $data = $query->fetch(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return $data['imageNumber'];
    }

	public function getImages(){
		$images = array();
		$query = $this->_db->query('SELECT * FROM t_image
		ORDER BY id DESC');
		while($data = $query->fetch(PDO::FETCH_ASSOC)){
			$images[] = new Image($data);
		}
		$query->closeCursor();
		return $images;
	}
    
    public function getImagesByProjet($idProjet){
        $images = array();
        $query = $this->_db->prepare(
        'SELECT * FROM t_image
        WHERE idProjet=:idProjet
        ORDER BY id ASC');
        $query->bindValue(':idProjet', $idProjet);
        $query->execute();
        while($data = $query->fetch(PDO::FETCH_ASSOC)){
            $images[] = new Image($data);
        }
        $query->closeCursor();
        return $images;
    }

	public function getImagesByLimits($begin, $end){
		$images = array();
		$query = $this->_db->query('SELECT * FROM t_image
		ORDER BY id DESC LIMIT '.$begin.', '.$end);
		while($data = $query->fetch(PDO::FETCH_ASSOC)){
			$images[] = new Image($data);
		}
		$query->closeCursor();
		return $images;
	}

	public function getLastId(){
    	$query = $this->_db->query(' SELECT id AS last_id FROM t_image
		ORDER BY id DESC LIMIT 0, 1');
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$id = $data['last_id'];
		return $id;
	}

}