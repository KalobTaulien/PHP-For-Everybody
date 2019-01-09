<?php echo "<h2>While Loops</h2>"; ?>
Your first loop!
<hr />

<?php 
	
	$x = 1;

	while ($x <= 1000) {

		if($x == 5) {
			$x++;
			echo "--<br />";
			continue;
		}

		echo $x . ' is the number <br />';

		if($x === 15) {
			break;
		}

		$x++;
	}

	echo "stopper";







?>











