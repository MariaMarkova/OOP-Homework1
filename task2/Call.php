<?php

class Call {
	
	private static $priceForAMinute = 0.35;
	private $caller;
	private	$receiver;
	private	$duration;
	
	public function __construct(GSM $caller, GSM $receiver, $duration) {
		$this->caller = $caller;
		$this->receiver = $receiver; 
		$this->setDuration($duration);
	}
	
	public function setCaller(GSM $caller){
		$this->caller = $caller;
	}
	
	public function getCaller(){
		return $this->caller;
	}
	
	public function setReceiver(GSM $receiver){
		$this->receiver = $receiver;
	}
	
	public function getReceiver(){
		return $this->receiver;
	}
	
	public function getPriceForAMinute () {
		return self::$priceForAMinute;
	}
	
	public function setDuration($duration){
		if ($duration > 0 && $duration <= 120){
			$this->duration = $duration;
		} else {
			echo "Duration is between 0  and 120 minutes." , PHP_EOL;
		}
		
	}
	
	public function getDuration(){
		return $this->duration;
	}
}
