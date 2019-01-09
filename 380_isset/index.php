<?php echo "<h2>Isset</h2>"; ?>
Checking if a variable is set.
<hr />

<?php 


	$people = array(
		'kalob' => array(
			'age' => 28,
			'sport' => 'snowboarding',
			'food' => 'tacos',
		),
		'nathan' => array(
			'age' => 26,
			'sport' => 'hockey',
			'food' => 'nachos',
			'name' => 'Your Name'
		),
		'thanos' => array(
			'age' => 1000,
			'sport' => 'destroying worlds',
			'food' => 'asguadrian people',
			'name' => 'Your Name'
		),
	);



	if(!isset($people['kalob']['name'])) {
		$people['kalob']['name'] = 'Kalob Taulien';
	}

	if(isset($people['kalob']['name'])) {
		echo "Hello, " . $people['kalob']['name'] . ", and welcome";
	} else {
		echo "Welcome, Guest!";
	}










?>
