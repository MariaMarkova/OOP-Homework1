<?php

class Employee {
	
	private $name;
	private $currentTask;
	private $hoursLeft;
	
	public function __construct($name) {
		$this->setName($name);
	}
	
	public function setName($name){
	if (!empty($name)){
			$this->name = $name;
		} else{ 
			echo 'Empty name field.' . PHP_EOL;
		}
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function setCurrentTask(Task $currentTask){
		$this->currentTask = $currentTask;
	}
	
	public function getCurrentTask(){
		return $this->currentTask;
	}
	
	public function setHoursLeft($hoursLeft){
		if ($hoursLeft > 0){
			$this->hoursLeft = $hoursLeft;
		}else {
			echo 'No leftHours';
		}		
	}
	
	public function getHoursLeft(){
		return $this->hoursLeft;
	}
	
	public function work() {
		if ($this->currentTask != null){
			if ($this->hoursLeft <= $this->currentTask->getWorkingHours()){
				$hoursLeftTask = $this->currentTask->getWorkingHours() - $this->hoursLeft;			
				$this->currentTask->setWorkingHours($hoursLeftTask);
				$this->hoursLeft = 0;
			} else {
				$this->hoursLeft -= $this->currentTask->getWorkingHours();
				$this->currentTask->setWorkingHours(0);
			} 
			
			$this->showReport();
		}
	}
	
	public function showReport() {
		echo "Name: " . $this->name . PHP_EOL
		. "Task: " . $this->currentTask->getName() . PHP_EOL
		. "WorkingHoursLeft: " . $this->hoursLeft . PHP_EOL
		. "TaskHoursLeft: " . $this->currentTask->getWorkingHours() . PHP_EOL
		. PHP_EOL;
	}
}