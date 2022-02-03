<?php 
$name = "Harsh is good guy";
echo strlen($name);
echo "Length of my name is " . strlen($name);
echo str_word_count($name);
echo strrev($name);
echo strpos($name, "is");
echo str_replace("Harsh", "Harshil", $name);
echo str_repeat($name, 10);
echo rtrim("<pre>    is good    </pre>");
echo ltrim("<pre>    is good    </pre>"); //pre for html takes only 1 space so pre takes all spaces

 
?>