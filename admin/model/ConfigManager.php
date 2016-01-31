<?php
class ConfigManager{

	//attributes
	private $_db;

	//le constructeur
    public function __construct($db){
        $this->_db = $db;
    }

	//BAISC CRUD OPERATIONS
	public function add(Config $config){
    	$query = $this->_db->prepare(' INSERT INTO t_config (
		indexContent, sliderType, created, createdBy)
		VALUES (:indexContent, :sliderType, :created, :createdBy)')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':indexContent', $config->indexContent());
		$query->bindValue(':sliderType', $config->sliderType());
		$query->bindValue(':created', $config->created());
		$query->bindValue(':createdBy', $config->createdBy());
		$query->execute();
		$query->closeCursor();
	}

	public function update(Config $config){
    	$query = $this->_db->prepare(' UPDATE t_config SET 
		indexContent=:indexContent, sliderType=:sliderType, updated=:updated, updatedBy=:updatedBy
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $config->id());
		$query->bindValue(':indexContent', $config->indexContent());
		$query->bindValue(':sliderType', $config->sliderType());
		$query->bindValue(':updated', $config->updated());
		$query->bindValue(':updatedBy', $config->updatedBy());
		$query->execute();
		$query->closeCursor();
	}

    public function changeIndexContent($value){
        $query = $this->_db->prepare(
        'UPDATE t_config SET 
        indexContent=:indexContent')
        or die (print_r($this->_db->errorInfo()));
        $query->bindValue(':indexContent', $value);
        $query->execute();
        $query->closeCursor();
    }

    public function changeSliderType($value){
        $query = $this->_db->prepare(
        'UPDATE t_config SET 
        sliderType=:sliderType')
        or die (print_r($this->_db->errorInfo()));
        $query->bindValue(':sliderType', $value);
        $query->execute();
        $query->closeCursor();
    }

	public function delete($id){
    	$query = $this->_db->prepare(' DELETE FROM t_config
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $id);
		$query->execute();
		$query->closeCursor();
	}

	public function getConfigById($id){
    	$query = $this->_db->prepare(' SELECT * FROM t_config
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $id);
		$query->execute();		
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$query->closeCursor();
		return new Config($data);
	}
    
    public function getConfig(){
        $query = $this->_db->query('SELECT * FROM t_config')
        or die (print_r($this->_db->errorInfo()));   
        $data = $query->fetch(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return new Config($data);
    }

	public function getConfigs(){
		$configs = array();
		$query = $this->_db->query('SELECT * FROM t_config
		ORDER BY id DESC');
		while($data = $query->fetch(PDO::FETCH_ASSOC)){
			$configs[] = new Config($data);
		}
		$query->closeCursor();
		return $configs;
	}

	public function getConfigsByLimits($begin, $end){
		$configs = array();
		$query = $this->_db->query('SELECT * FROM t_config
		ORDER BY id DESC LIMIT '.$begin.', '.$end);
		while($data = $query->fetch(PDO::FETCH_ASSOC)){
			$configs[] = new Config($data);
		}
		$query->closeCursor();
		return $configs;
	}

	public function getLastId(){
    	$query = $this->_db->query(' SELECT id AS last_id FROM t_config
		ORDER BY id DESC LIMIT 0, 1');
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$id = $data['last_id'];
		return $id;
	}

}