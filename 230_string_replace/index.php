<?php echo "<h2>String Replace</h2>"; ?>
str_replace();
<hr />

<?php 

	$sentence = "Hello World!";
	$sentence = str_replace("World", "Kalob", $sentence);

	echo $sentence;

	echo "<hr />";


	$sentence = "This sentence will have zero zeroes and oh my gawsh it has a few zeros";


	$sentence = str_replace(
		"o", "0", $sentence, $count
	);

	echo $sentence . '.. o was replaced with 0: ' . $count . ' times';



?>








