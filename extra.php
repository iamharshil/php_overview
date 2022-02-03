<?php
	
	$array = 16;
	
	
	if ($array < 5) {
	  echo "you are baby";
	}
	
	elseif ($array < 10) {
	  echo "you are under 10";
	}
	
	elseif ($array < 16) {
	  echo "you are under age";
	}
	
	elseif ($array >= 16) {
	  echo "you are eligible";
	}
	
	echo "\n";
	
	$array = 5;
	
	while ($array < 10) {
	  echo "it's $array now\n";
	  $array++;
	}
	
	echo "\n";
	
	for ($i =0; $i < 10; $i++) {
	  echo "it's $i now\n";
	}
	
	
	$times = 0;
	
	do {
	  echo "hello $times\n";
	  $times++;
	} while ($times < 4);
	
	$array = ["H", "e", "l", "l", "o"];
	
	for ($i = 0; $i < count($array); $i++) {
	  echo $array[$i];
	  echo "\n";
	};
	
	//or
	foreach ($array as $i) {
	  echo "$i \n";
	}
	
	
?>