<?php
class SliderVideoManager{

	//attributes
	private $_db;

	//le constructeur
    public function __construct($db){
        $this->_db = $db;
    }

	//BAISC CRUD OPERATIONS
	public function add(SliderVideo $sliderVideo){
    	$query = $this->_db->prepare(' INSERT INTO t_slidervideo (
		name, url, description, created, createdBy)
		VALUES (:name, :url, :description, :created, :createdBy)')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':name', $sliderVideo->name());
		$query->bindValue(':url', $sliderVideo->url());
		$query->bindValue(':description', $sliderVideo->description());
		$query->bindValue(':created', $sliderVideo->created());
		$query->bindValue(':createdBy', $sliderVideo->createdBy());
		$query->execute();
		$query->closeCursor();
	}

	public function update(SliderVideo $sliderVideo){
    	$query = $this->_db->prepare(' UPDATE t_slidervideo SET 
		name=:name, url=:url, description=:description, updated=:updated, updatedBy=:updatedBy
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $sliderVideo->id());
		$query->bindValue(':name', $sliderVideo->name());
		$query->bindValue(':url', $sliderVideo->url());
		$query->bindValue(':description', $sliderVideo->description());
		$query->bindValue(':updated', $sliderVideo->updated());
		$query->bindValue(':updatedBy', $sliderVideo->updatedBy());
		$query->execute();
		$query->closeCursor();
	}

	public function delete($id){
    	$query = $this->_db->prepare(' DELETE FROM t_slidervideo
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $id);
		$query->execute();
		$query->closeCursor();
	}

	public function getSliderVideoById($id){
    	$query = $this->_db->prepare(' SELECT * FROM t_slidervideo
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $id);
		$query->execute();		
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$query->closeCursor();
		return new SliderVideo($data);
	}

	public function getSliderVideos(){
		$sliderVideos = array();
		$query = $this->_db->query('SELECT * FROM t_slidervideo
		ORDER BY id DESC');
		while($data = $query->fetch(PDO::FETCH_ASSOC)){
			$sliderVideos[] = new SliderVideo($data);
		}
		$query->closeCursor();
		return $sliderVideos;
	}

	public function getSliderVideosByLimits($begin, $end){
		$sliderVideos = array();
		$query = $this->_db->query('SELECT * FROM t_slidervideo
		ORDER BY id DESC LIMIT '.$begin.', '.$end);
		while($data = $query->fetch(PDO::FETCH_ASSOC)){
			$sliderVideos[] = new SliderVideo($data);
		}
		$query->closeCursor();
		return $sliderVideos;
	}

	public function getLastId(){
    	$query = $this->_db->query(' SELECT id AS last_id FROM t_slidervideo
		ORDER BY id DESC LIMIT 0, 1');
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$id = $data['last_id'];
		return $id;
	}

}