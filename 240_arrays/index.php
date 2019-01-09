<?php echo "<h2>Arrays</h2>"; ?>
Lists of values
<hr />

<?php 

	// Simple/basic array 
	$names = array(
		'Kalob',
		'Nathan',
		'Thanos',
		'Nathanos'
	);

	echo $names[2];
	var_dump($names);

	echo "<hr />";


	$names = [
		'Kalob' 	=> 28,
		'Nathan' 	=> 26,
		'Thanos' 	=> 80,
		'Nathanos' 	=> 12
	];

	// echo $names['Thanos'];

	var_dump($names);

	echo "<hr />";


	// Mutlidimensional Array 
	// Arrays inside arrays

	$names = array(
		'Kalob' 	=> array(
			'age' 		=> 28,
			'height' 	=> 1.83, // Meters
			'job' 		=> 'Programmer',
			'friends' 	=> 40
		),
		'Nathan' 	=> 26,
		'Thanos' 	=> 80,
		'Nathanos' 	=> 12
	);

	$kalob = "kalob";
	$kalobs_age = 28;
	$kalobs_friends = 40;

	$nathan = "Nathan";
	$nathans_age = 26;
	$nathans_friends = 40;

	// echo "Kalobs age is: " . $names['Kalob']['age'];

	unset($names['Nathan']);
	var_dump($names);









?>