<?php 
$name = "Harsh";
$income = 200;

/* data types
1. string
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
*/

//boolean
$x = true;
$is_friend = false;
echo $x;
echo "<br>";
echo var_dump($is_friend); //var_dump will print value and type of variable.

//Object - instance of class
// Employee is class --> harsh can be object.

//array - store multiple value
$friends = array("Harsh", "H", "a", "r", "s", "h")
echo var_dump($friends);
echo $friends[1];

// null value
$name =NULL;
echo $name;
echo var_dump($name);

?>