<?php echo "<h2>is_* functions</h2>"; ?>
&bull; is_int &bull; is_string &bull; is_array &bull; is_numeric 

<hr />

<?php

	// Pretend we dont know that this is a string
	$age = (array) "12.123";
	


	if(is_int($age)) {
		echo "Its an int!";
	} 

	if(is_float($age)) {
		echo "its a float!";
	} 

	if(is_numeric($age)) {
		echo "Its numeric!";
		if(!is_int($age)) {
			$age = (float) $age;
		}
	} 

	if(is_array($age)) {
		echo "It's an array!";
	} 

	if(is_string($age)) {
		echo "Its a string!";
	}





?>



















