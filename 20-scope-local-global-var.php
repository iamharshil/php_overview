<?php 

//scope is where is variable is accessible.
$a = 98; //global var
echo $a;
$b = 99;


// example 1

function p($var) { 
	$a = 97; //local var
	echo "value is $var";
	}//this will print 97 because function has it's own properties. if i remove local $a then it will give error. when $a is not defined in defined function then $a is out of scope.



//example 2
//if i write global $a in function then it will return 98.

function q($var) {
	global $a, $b;
	echo $a;
}



// example 3
function q($var) {
	global $a, $b;
	$a = 100;
	$b = 200;
	echo $a;
}

//here if i define $a,$b in local var like this then it will change globally.


echo var_dump($GLOBAL); // this will return all the global var like get,post,cookies, also a and b.

echo var_dump($$GLOBALS["a"]); //this will return a also same to b.

//GLOBALS is super global.

?>