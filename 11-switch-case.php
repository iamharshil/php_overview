<?php
$age = 67;

// case will run all the cases which are greater than value of it.

//56 will run case 56 and default

//if case is 12 all with echo on browser.

//if i put break after all cases then it will run only one

switch($age) {
	case 12:
		echo "you are 12 yo!";
		break;

	case 45:
		echo "you are 45 Yo!";
		break;

	case 56:
		echo "you are 56 yo!";
		break;
	
	default:
		echo "You're weird";
		break;
}
?>
