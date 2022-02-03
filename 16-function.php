<?php 

function processMarks($marksArr) {
	$sum = 0;
	foreach ($markArr as $value) {
		$sum += $value;
	}
	return $value;
}


function avgMarks($marksArr) {
	$sum = 0;
	$i = 1;
	foreach (markArr as $value) {
		$sum += $value;
		$i++;
	}
	return $sum/$i;
}

$rohan = [34, 98, 45, 12, 98, 93];
//$sumMarks = processMarks($rohan);
$sumMarks = avgMarks($rohan);


$harry = [99,98,93,17,100];
$sumMarksHarry = avgMarks($harry);

?>