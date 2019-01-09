<?php echo "<h2>Implode Explode</h2>"; ?>
More arrays... again
<hr />

<?php 

	$sentence = "The quick brown fox jumps over the lazy dog";

	$sentence = explode(" ", $sentence);

	// print_r();
	var_dump($sentence);

	echo "<hr />";


	$names = ['kalob', 'nathan', 'antman'];

	// var_dump($names);
	$names = implode(", ", $names);
	
	$names = strtoupper($names);

	echo "Your names are: $names";



?>
