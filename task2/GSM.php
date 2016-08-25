<?php

class GSM {
	
	private $model;
	private $hasSimCard;
	private $simMobileNumber;
	private $outgoingCallsDuration;
	private $lastIncomingCall;
	private $lastOutgoingCall;
	
	public function __construct($model) {
		$this->model = $model;
		$this->hasSimCard = false;
	}
	
	public function insertSimCard($simMobileNumber) {		
		if (strlen($simMobileNumber) != 10 || substr($simMobileNumber, 0 , 2) != '08'){
			echo "Invalid number";
		}else {
			$this->simMobileNumber = $simMobileNumber;
			$this->hasSimCard = true;
		}
	}
	
	public function removeSimCard (){
		$this->simMobileNumber = '';
		$this->hasSimCard = false;
	}
	
	public function call(GSM $receiver, $duration) {
		$call = new Call($this, $receiver, $duration);
		
// 		if ( !$this->checkDuration($duration)) {
// 			echo 'Wrong duration' , PHP_EOL;
// 		} else if ($this->simMobileNumber == $receiver->simMobileNumber) {
// 			echo 'Same numbers' , PHP_EOL;
// 		} else if ( $this->hasSimCard == false || $receiver->hasSimCard == false) {
// 			echo 'hasSim = false' , PHP_EOL;
// 		}else {
 			//do call
 			$this->lastOutgoingCall = $receiver->simMobileNumber;
     		$receiver->lastIncomingCall = $this->simMobileNumber;
			
			$this->outgoingCallsDuration += $duration;
// 		}

		
	}
	
	public function getSumForCall() {
		
		return 'Outgoing calls sum: ' . $this->outgoingCallsDuration * (Call::getPriceForAMinute()) . PHP_EOL;
	}
	
	public function printInfoForTheLastOutgoingCall() {
		return 'Last Outgoing call: ' . $this->lastOutgoingCall . PHP_EOL;
	}
	
	public function printInfoForTheLastIncomingCall() {
		return 'Last Incoming call: ' . $this->lastIncomingCall . PHP_EOL;
	}

	public function checkDuration ($duration){
		if ($duration > 0 && $duration <= 120){
			$this->duration = $duration;
			return true;
		} else {
			return false;
		}
	}
}