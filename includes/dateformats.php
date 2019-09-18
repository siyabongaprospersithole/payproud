
<?php 
function randomString($length){
  $chars = "abcdefghijkmnopqrstuvwxyz0123456789";
  srand((double)microtime()*1000000);
  $str = "";
  $i = 0;

  while($i <= $length){
    $num = rand() % 33;
    $tmp = substr($chars, $num, 1);
    $str = $str . $tmp;
    $i++;
  }
  return $str;
}
function randomPass($length){
  $chars = "abcdefghijkmnopqrstuvwxyz0123456789";
  srand((double)microtime()*1000000);
  $str = "";
  $i = 0;

  while($i <= $length){
    $num = rand() % 33;
    $tmp = substr($chars, $num, 1);
    $str = $str . $tmp;
    $i++;
  }
  return $str;
}

function dateformat(){
	    $tz_object = new DateTimeZone('Africa/Johannesburg');
    $datetime = new DateTime();
    $datetime->setTimezone($tz_object);
    
    $year= $datetime->format('Y');
    $month = $datetime->format('m');
    $day = $datetime->format('d');
    $hour = $datetime->format('H');
    $min = $datetime->format('i');
    $sec = $datetime->format('s');
    $date= $year."-".$month."-".$day;
    return $date;
}
function dateformat2(){
      $tz_object = new DateTimeZone('Africa/Johannesburg');
    $datetime = new DateTime();
    $datetime->setTimezone($tz_object);
    
    $year= $datetime->format('Y');
    $month = $datetime->format('m');
    $day = $datetime->format('d');
    $hour = $datetime->format('H');
    $min = $datetime->format('i');
    $sec = $datetime->format('s');
    $date= $year."-".$month."-".$day." ".$hour.":".$min.":".$sec;
    return $date;
}

function addDate($number,$day){
  $current_date = dateformat2();
$datee = date_create($current_date);
date_add($datee,date_interval_create_from_date_string("$number $day"));
return date_format($datee,'Y-m-d H: i: s');
}
function checksunday()
{
     $tz_object = new DateTimeZone('Africa/Johannesburg');
    $datetime = new DateTime();
    $datetime->setTimezone($tz_object);
    
    $day= $datetime->format('D');

    if($day == "Sun"){
    	return true;
    }
    return false;
}
function checkmonday()
{
     $tz_object = new DateTimeZone('Africa/Johannesburg');
    $datetime = new DateTime();
    $datetime->setTimezone($tz_object);
    
    $day= $datetime->format('D');

    if($day == "Mon"){
      return true;
    }
    return false;
}
function convertToUnixStamp($value){
   	date_default_timezone_get("Africa/Johannesburg");
   	list($date,$time) = explode(' ', $value);
   	list($year, $month, $day) = explode('-', $date);
   	list($hour,$minutes,$seconds) = explode(':', $time);

   	$unit_timestamp = mktime($hour,$minutes,$seconds,$month,$day,$year);

   	return $unit_timestamp;
   }

   function convertToAgoFormat($timestamp){
   	date_default_timezone_get("Africa/Johannesburg");
   	$diffBtwCurrentTimeAndTimeStamp = time() - $timestamp;
   	$periodsString = ["sec","min","hr","day","week","month","year","decade"];
   	$periodsNumber = ["60","60","24","7","4.35","12","10"];

   	for($iterator = 0; $diffBtwCurrentTimeAndTimeStamp >= $periodsNumber[$iterator]; $iterator++)
   		$diffBtwCurrentTimeAndTimeStamp /= $periodsNumber[$iterator];
   		$diffBtwCurrentTimeAndTimeStamp = round($diffBtwCurrentTimeAndTimeStamp);

   		if($diffBtwCurrentTimeAndTimeStamp != 1) $periodsString[$iterator].="s";
   		$output = "$diffBtwCurrentTimeAndTimeStamp $periodsString[$iterator]"; 
   		return $output." ago ";
   	
   }

?>