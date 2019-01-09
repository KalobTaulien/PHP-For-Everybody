<?php echo "<h2>For Loops</h2>"; ?>
Your second loop!
<hr />

<?php 

	echo "While loop: <br />";
	$x = 1;
	while($x <= 10) {
		// code here  
		echo $x . ' is the number <br />';
		// 

		if($x == 5) {
			$x += 3;
		}
		$x++;
	}

	echo "<hr />";

	echo "For loop: <br />";
	for($x=1; $x<=10; $x++) {

		if($x == 5) {
			continue;
		}

		if($x == 8) {
			break;
		}

		echo $x . ' is the number <br />';
	}




?>











