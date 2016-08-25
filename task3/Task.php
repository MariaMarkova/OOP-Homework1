<?php

class Task {
	
	private $name;
	private $workingHours;
	
	public function __construct($name, $workingHours) {
		$this->setName($name);
		$this->setWorkingHours($workingHours);
	}
	
	public function getName() {
		if (empty($this->name)) {
			return "No task name";
		}
		return $this->name;
	}
	
	public function setName($name) {
		if (!empty($name)){
			$this->name = $name;
		}
	}
	
	public function getWorkingHours() {
		return $this->workingHours;
	}
	
	public function setWorkingHours($workingHours) {
		if ($workingHours >= 0) {
			$this->workingHours = $workingHours;
		}
	}
}