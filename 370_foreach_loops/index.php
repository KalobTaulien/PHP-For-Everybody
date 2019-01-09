<?php echo "<h2>Foreach Loops</h2>"; ?>
The best loop!
<hr />

<?php 


	$names = array(
		'Kalob',
		'Nathan',
		'Zephyr',
		'Spiderman'
	);

	foreach($names as $name) {
		echo "&bull; " . $name . '<br />';
	}

	echo "<hr />";

	$names = array(
		'Kalob' 		=> 28,
		'Nathan' 		=> 26,
		'Zephyr' 		=> 2,
		'Spiderman' 	=> 17
	);

	foreach($names as $key => $value) {
		echo "$key. $value <br />";
	}

	echo "<hr />";

	$names = array(
		'Kalob' 		=> array(
			'age' => 28,
			'height' => '1.83m',
			'height_ft' => '6\'',
			'weight' => '175lbs',
		),
		'Nathan' 		=> array(
			'age' => 26,
			'height' => '1.83m',
			'height_ft' => '6\'',
			'weight' => '175lbs',
		),
		'Zephyr' 		=> array(
			'age' => 2,
			'height' => '1.83m',
			'height_ft' => '6\'',
			'weight' => '175lbs',
		),
		'Spiderman' 	=> array(
			'age' => 17,
			'height' => '1.83m',
			'height_ft' => '6\'',
			'weight' => '175lbs',
		),
	);



	foreach($names as $name => $array) {

		if($array['age'] < 18) {
			continue;
		}

		echo $name . ' is ' . $array['age'] . ' <br>';
	}

	echo "<hr />";

	$names = array(
		'Kalob' 		=> array(
			'age' => 28,
			'height' => '1.83m',
			'height_ft' => '6\'',
			'weight' => '175lbs',
		),
		'Nathan' 		=> array(
			'age' => 26,
			'height' => '1.83m',
			'height_ft' => '6\'',
			'weight' => '175lbs',
		),
		'Zephyr' 		=> array(
			'age' => 2,
			'height' => null,
			'height_ft' => '11"',
			'weight' => '13lbs',
		),
		'Spiderman' 	=> array(
			'age' => 17,
			'height' => '1.83m',
			'height_ft' => '6\'',
			'weight' => '175lbs',
		),
	);



	foreach($names as $name => $array) {

		echo "<h3>$name</h3>";
		echo "<ul>";
			foreach($array as $key => $value) {
				echo "<li>";
					echo "$key -> $value";
				echo "</li>";
			}
		echo "</ul>";
	}



?>



















