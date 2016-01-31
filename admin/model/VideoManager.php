<?php
class VideoManager{

	//attributes
	private $_db;

	//le constructeur
    public function __construct($db){
        $this->_db = $db;
    }

	//BAISC CRUD OPERATIONS
	public function add(Video $video){
    	$query = $this->_db->prepare(' INSERT INTO t_video (
		name, url, description, idProjet, created, createdBy)
		VALUES (:name, :url, :description, :idProjet, :created, :createdBy)')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':name', $video->name());
		$query->bindValue(':url', $video->url());
		$query->bindValue(':description', $video->description());
		$query->bindValue(':idProjet', $video->idProjet());
		$query->bindValue(':created', $video->created());
		$query->bindValue(':createdBy', $video->createdBy());
		$query->execute();
		$query->closeCursor();
	}

	public function update(Video $video){
    	$query = $this->_db->prepare(' UPDATE t_video SET 
		name=:name, url=:url, description=:description, idProjet=:idProjet, updated=:updated, updatedBy=:updatedBy
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $video->id());
		$query->bindValue(':name', $video->name());
		$query->bindValue(':url', $video->url());
		$query->bindValue(':description', $video->description());
		$query->bindValue(':idProjet', $video->idProjet());
		$query->bindValue(':updated', $video->updated());
		$query->bindValue(':updatedBy', $video->updatedBy());
		$query->execute();
		$query->closeCursor();
	}

	public function delete($id){
    	$query = $this->_db->prepare(' DELETE FROM t_video
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $id);
		$query->execute();
		$query->closeCursor();
	}

	public function getVideoById($id){
    	$query = $this->_db->prepare(' SELECT * FROM t_video
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $id);
		$query->execute();		
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$query->closeCursor();
		return new Video($data);
	}

	public function getVideos(){
		$videos = array();
		$query = $this->_db->query('SELECT * FROM t_video
		ORDER BY id DESC');
		while($data = $query->fetch(PDO::FETCH_ASSOC)){
			$videos[] = new Video($data);
		}
		$query->closeCursor();
		return $videos;
	}
    
    public function getVideosByProjet($idProjet){
        $videos = array();
        $query = $this->_db->prepare(
        'SELECT * FROM t_video
        WHERE idProjet=:idProjet
        ORDER BY id DESC');
        $query->bindValue(':idProjet', $idProjet);
        $query->execute();
        while($data = $query->fetch(PDO::FETCH_ASSOC)){
            $videos[] = new Video($data);
        }
        $query->closeCursor();
        return $videos;
    }

	public function getVideosByLimits($begin, $end){
		$videos = array();
		$query = $this->_db->query('SELECT * FROM t_video
		ORDER BY id DESC LIMIT '.$begin.', '.$end);
		while($data = $query->fetch(PDO::FETCH_ASSOC)){
			$videos[] = new Video($data);
		}
		$query->closeCursor();
		return $videos;
	}

	public function getLastId(){
    	$query = $this->_db->query(' SELECT id AS last_id FROM t_video
		ORDER BY id DESC LIMIT 0, 1');
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$id = $data['last_id'];
		return $id;
	}

}