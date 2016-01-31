<?php
class SliderImageManager{

	//attributes
	private $_db;

	//le constructeur
    public function __construct($db){
        $this->_db = $db;
    }

	//BAISC CRUD OPERATIONS
	public function add(SliderImage $sliderImage){
    	$query = $this->_db->prepare(' INSERT INTO t_sliderimage (
		name, url, description, created, createdBy)
		VALUES (:name, :url, :description, :created, :createdBy)')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':name', $sliderImage->name());
		$query->bindValue(':url', $sliderImage->url());
		$query->bindValue(':description', $sliderImage->description());
		$query->bindValue(':created', $sliderImage->created());
		$query->bindValue(':createdBy', $sliderImage->createdBy());
		$query->execute();
		$query->closeCursor();
	}

	public function update(SliderImage $sliderImage){
    	$query = $this->_db->prepare(' UPDATE t_sliderimage SET 
		name=:name, url=:url, description=:description, updated=:updated, updatedBy=:updatedBy
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $sliderImage->id());
		$query->bindValue(':name', $sliderImage->name());
		$query->bindValue(':url', $sliderImage->url());
		$query->bindValue(':description', $sliderImage->description());
		$query->bindValue(':updated', $sliderImage->updated());
		$query->bindValue(':updatedBy', $sliderImage->updatedBy());
		$query->execute();
		$query->closeCursor();
	}

	public function delete($id){
    	$query = $this->_db->prepare(' DELETE FROM t_sliderimage
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $id);
		$query->execute();
		$query->closeCursor();
	}

	public function getSliderImageById($id){
    	$query = $this->_db->prepare(' SELECT * FROM t_sliderimage
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $id);
		$query->execute();		
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$query->closeCursor();
		return new SliderImage($data);
	}

	public function getSliderImages(){
		$sliderImages = array();
		$query = $this->_db->query('SELECT * FROM t_sliderimage
		ORDER BY id DESC');
		while($data = $query->fetch(PDO::FETCH_ASSOC)){
			$sliderImages[] = new SliderImage($data);
		}
		$query->closeCursor();
		return $sliderImages;
	}

	public function getSliderImagesByLimits($begin, $end){
		$sliderImages = array();
		$query = $this->_db->query('SELECT * FROM t_sliderimage
		ORDER BY id DESC LIMIT '.$begin.', '.$end);
		while($data = $query->fetch(PDO::FETCH_ASSOC)){
			$sliderImages[] = new SliderImage($data);
		}
		$query->closeCursor();
		return $sliderImages;
	}

	public function getLastId(){
    	$query = $this->_db->query(' SELECT id AS last_id FROM t_sliderimage
		ORDER BY id DESC LIMIT 0, 1');
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$id = $data['last_id'];
		return $id;
	}

}