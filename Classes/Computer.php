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
	
	function __construct($producer, $model, $processor, $ram, $video, $production_date, $cooling){
		$this->producer = $producer;
		$this->model = $model;
		$this->processor = $processor;
		$this->ram = $ram;
		$this->video = $video;
		$this->production_date = $production_date;
		$this->cooling = $cooling;
	}
	

}

?>