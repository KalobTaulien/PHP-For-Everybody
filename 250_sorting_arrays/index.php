<?php echo "<h2>Sorting Arrays</h2>"; ?>
Sorting Arrays
<hr />

<?php 

	$names = [
		'Kalob' => 28, 
		'Nathan' => 26,
		'Zephyr' => 2,
		'Thor' => 1000,
	];

	sort($names);
	// rsort($names);
	// asort($names);
	// ksort($names);
	// krsort($names);
	// arsort($names);

	var_dump($names);
?>