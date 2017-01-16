<?php
/****************************************************************************
*****************************************************************************
	Created by Felix Wahlberg for Owen Doherty on behalf of GITS Gaming Clan
	© Felix Wahlberg 2017
*****************************************************************************
****************************************************************************/
date_default_timezone_set('Europe/London');
class RestartTimer
{
	/**********************
	Set class properties
	**********************/
	private $restartTimes = array("02:00","04:00","06:00", "08:00","12:00","14:00","16:00","18:00","20:00","22:00", "24:00");
	private $todayDate;
	private $todayTime;
	
	/**********************
	Constructor & toString Method
	**********************/
	public function __construct() {
        $this->todayDate = date("Y-m-d");
		$this->todayTime = date("H:i:s");
    }
	
	public function __toString()
	{
		$output = "";
		$output .= "\nThe following methods are available for " . __CLASS__ . " object: <br>";
		$output .= implode("<br>", get_class_methods(__CLASS__));
		$output .= "<br>";
		return $output;
	}
	
	/**********************
	Get & Set
	**********************/
	public function setRestartTimes($times)
	{
		$this->restartTimes = $times;
	}
	
	public function getRestartTimes()
	{
		return $this->restartTimes;
	}
	
	/**********************
	Functionality 
	**********************/
	private function findNearestTime(){
		foreach ($this->restartTimes as $time) {
			if($this->todayTime < $time)
			{
				return $time;
				break;
			}	
		}
	}
	/**
	 * @return DateInterval
	 */
	private function findTimeDifference(){
		$d1 = new dateTime("$this->todayDate . $this->todayTime");  
		$d2= new DateTime("$this->todayDate ". $this->findNearestTime()); 
		return $d2->diff($d1);
	}
	/**
	 * @param  DateInterval
	 * @return String
	 */
	private function formatOutput($diff){
		if($diff->h > 1 || $diff->h == 0){
			$hour = "Server restart in " . $diff->h . " hours, ";
		}else{
			$hour = "Server restart in " . $diff->h . " hour, ";
		}
		if($diff->i > 1 || $diff->i == 0){
			$minute = $diff->i . " minutes.";
		}else{
			$minute = $diff->i . " minute.";
		}
		if($diff->i == 0 && $diff->h == 0){
			$output = "<script>$('.restart').addClass('animated bounce infinite');</script>";
			$output .= "<h2 class='restart'>Server Restarting</h2>";
			return $output;
		}elseif($diff->i == 59 && $diff->h == 1){
			$output = "<script>$('.restart').addClass('animated bounce infinite');</script>";
			$output .= "<h2 class='restart'>Server Restarting</h2>";
			return $output;
		}else{
			return $hour . $minute . $diff->s ;
		}
		
	}
	/**
	 * @param  String
	 * @param  String
	 * @return null
	 */
	public function changeTime($time,$mode)
	{
		$this->todayTime = new DateTime(date("Y-m-d H:i:s"));
		if($mode == strtolower("add")){
			$this->todayTime->add(new DateInterval($time));
		}elseif($mode ==strtolower("sub")){
			$this->todayTime->sub(new DateInterval($time));
		}
		$this->todayTime = $this->todayTime->format('H:i:s');
	}
	
	public function testDateTime($date = null, $time = null)
	{
		if(isset($date) && isset($time)){
			$this->todayTime = $time;
			$this->todayDate = $date;
		}elseif(isset($time)){
			$this->todayTime = $time;
		}elseif(isset($date)){
			$this->todayDate = $date;
		}
	}
	
	
	/**********************
	Main Method
	**********************/
	
	public function execute()
	{
		return $this->formatOutput($this->findTimeDifference());
	}
	
}

$timer = new RestartTimer;
$timer->changeTime('PT2M', 'sub');
echo $timer->execute();


?>
