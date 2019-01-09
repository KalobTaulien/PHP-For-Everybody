<?php echo "<h2>Ternary Logic</h2>"; ?>

<?php 


	// $age = 18;
	// $age--; // 17

	// Add ?age=18 to your URL
	$age = (int) $_GET['age'];

	$can_drink = ($age >= 18 ? true : false);

	if($can_drink) {
		echo "You can drink";
	}

	var_dump($age);
	var_dump($can_drink);

?>
