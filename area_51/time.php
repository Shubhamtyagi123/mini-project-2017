<?php

function addDayswithdate($date,$days){

    $date = strtotime("+".$days." days", strtotime($date));
    return  date("Y-m-d H:i", $date);

}

	$today = date("Y-m-d H:i");
	echo "Today is : ".$today;
	$d = new DateTime('2017-11-15 10:22');
	$d3 = new DateTime($today);
	var_dump($d3->getTimestamp());
var_dump($d->getTimestamp()); // 1457690400


var_dump($d->getTimestamp()); // 1457690400


echo addDayswithdate(date('Y-m-d H:i'), 9);
?>