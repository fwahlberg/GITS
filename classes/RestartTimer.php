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

	/**
	 * $restartTime used to store restart times of server
	 * @var array
	 */
	private $restartTimes = array("02:00","04:00","06:00", "08:00","12:00","14:00","16:00","18:00","20:00","22:00", "24:00");
	/**
	 * $todayDate initialized, value set in constructor
	 * @var dateTime
	 */	
	private $todayDate;
	/**
	 * $todayTime again, initialised in constructor, stores the time
	 * @var dateTime
	 */
	private $todayTime;
	
	/**
	 * Constructor, initialises both time and date
	 */
	public function __construct() {
        $this->todayDate = date("Y-m-d");
		$this->todayTime = date("H:i:s");
    }
	/**
	 * Gives Return class methods
	 * @return string Output format of class methods
	 */
	public function __toString()
	{
		$output = "";
		$output .= "\nThe following methods are available for " . __CLASS__ . " object: <br>";
		$output .= implode("<br>", get_class_methods(__CLASS__));
		$output .= "<br>";
		return $output;
	}
	
	/**
	 * Optional restart time overide from default
	 * @param array $times array of restart times
	 */
	public function setRestartTimes($times)
	{
		if (!is_array($times)) {
        	throw new Exception('Parameter $times must be an array');
    	}
		$this->restartTimes = $times;
	}
	/**
	 * User may want to fetch array of restart time for display
	 * @return array array of restart times
	 */
	public function getRestartTimes()
	{
		return $this->restartTimes;
	}
	
	/**
	 * Will return the next nearest restart time
	 * @return String Returns the time from array
	 */
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
	 * Will use the php built in fucntion diff to determine time between current time and next nearest restart time
	 * @return Object object of time value between now and next restart time
	 */
	private function findTimeDifference(){
		$d1 = new dateTime("$this->todayDate . $this->todayTime");  
		$d2= new DateTime("$this->todayDate ". $this->findNearestTime()); 
		return $d2->diff($d1);
	}
	/**
	 * Formats output to display how long until restart in hours and minutes
	 * @param  object $diff object containg time difference data
	 * @return string       returns formatted time before restart
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
			return $hour . $minute;
		}
		
	}
	/**
	 * Allows user to alter current time to account for any clock discrepencies
	 * @param  string $time used to specify time added
	 * @param  string $mode used to determinne whether it should be added or subtracted from current time
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
	/**
	 * Simply for debugging, if the user needs to specify a current time, it overides the computer clock.
	 * @param  dateTime $date contains the requested date in the format: "Y-m-d"
	 * @param  dateTie $time contains the requested time
	 * @return setvaraible       sets the corresponding time and date
	 */
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
	
	/**
	 * returns the restart Timer
	 * @return string returns formatted timme difference
	 */
	public function execute()
	{
		return $this->formatOutput($this->findTimeDifference());
	}
	
}

$timer = new RestartTimer;
$timer->changeTime('PT2M', 'sub');
echo $timer->execute();

?>
