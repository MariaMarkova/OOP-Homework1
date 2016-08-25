<?php

class Computer {
	
	private $year;
	private $price;
	private $isNotebook;
	private $hardDiskMemory;
	private $freeMemory;
	private $operationSystem;
	
	public function __construct($yearArg, $priceArg, $isNotebookArg, $hardDiskMemoryArg, $freeMemoryArg, $operationSystemArg) {
		$this->year = $yearArg;
		$this->price = $priceArg;
		$this->isNotebook = $isNotebookArg;
		$this->hardDiskMemory = $hardDiskMemoryArg;
		$this->freeMemory = $freeMemoryArg;
		$this->operationSystem = $operationSystemArg;
	}	
		
	public function changeOperationSystem($newOperationSystem) {
		$this->operationSystem = $newOperationSystem;
	}
	
	public function useMemory($memory) {
		if ($this->freeMemory > $memory){
			$this->freeMemory = $this->freeMemory - $memory;
		} else {
			echo 'Not enough free memory!' , PHP_EOL;
		}
	}
	
	public function printInfo(){
		return $this->year . " " 
				. $this->year . " " 
				. $this->price . " " 
				. $this->isNotebook . " " 
				.  $this->hardDiskMemory . " " 
				.  $this->freeMemory . " "
				.  $this->operationSystem 
				. PHP_EOL ;
	}
}