<?php 

$arr = array('banana', 'apple', 'harpic', 'bread')

for ($i = 0; $i < count($arr); $i++) {
	echo $arr[$i];
	echo "<br>";
}


//or
foreach ($arr as $value) {
	echo "$value <br>";
}
?>
