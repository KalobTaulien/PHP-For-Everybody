<?php echo "<h2>Comparison Operators</h2>"; ?>
If Harrison Ford was a Programmer...<br />
We'd call him.... Comparison Ford. ¯\_(ツ)_/¯
<hr />

<?php 

	$age = 20;

	// == is equal to 
	// != is not equal to
	if($age != 18) {
		echo "You are NOT 18!";
	} else {
		echo "You are 18!!!!!";
	}

	$name = "Ironman";

	if($name != "Kalob") {
		echo "You are not the teacher!!";
	}

	echo "<hr />";

	// Data types are important.


	$books = 3;

	if($books === "3") {
		echo "You have three books (string)";
	} elseif ($books === 3) {
		echo "Books is three (int)";
	} else {
		echo "Something else";
	}




















?>
