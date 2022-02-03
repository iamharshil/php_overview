<?php

$arr = [
	[2,5,7,8],
	[1,2,3,1],
	[2,5,7,8]
];

echo $arr[1][2];


//for printing contents of a 2 dimensional array
for ($i=0; $i < count($arr); $i++) {
	echo var_dump($arr[$i]);
}

for ($i=0; $i < count($arr); $i++) {
	for ($j=0; $j< count($arr); $j++) {
		echo $arr[$i][$j];
	}
}


?>