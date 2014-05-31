<?php
if(!$HW){
	die("Hack try.");
}

class Computer
{

	private $producer;
	private $model;
	private $processor;
	private $ram;
	private $video;
	private $production_date;
	private $cooling;
	
	public function __construct($id, $producer, $model, $processor, $ram, $video, $production_date, $cooling){
		$this->producer = $producer;
		$this->model = $model;
		$this->processor = $processor;
		$this->ram = $ram;
		$this->video $video;
		$this->production_date = $production_date;
		$this->cooling = $cooling;
	}
	
	public function getProcessorAttribute($attribute){
		$object = Base::query("SELECT `{$attribute}` as `response` FROM `hw_processors` WHERE `id` = {$this->processor}");
		$array = $object->fetch_assoc();
		return $array['response'];
	}
	
	public function getRam(){
		return $this->ram;
	}
	
	public function getVideoAttribute($attribute){
		$object = Base::query("SELECT `{$attribute}` as `response` FROM `hw_videoCards` WHERE `id` = {$this->video}");
		$array = $object->fetch_assoc();
		return $array['response'];
	}
	
}

?>