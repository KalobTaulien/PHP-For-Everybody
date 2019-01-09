<?php echo "<h2>Unsetting a Variable</h2>"; ?>

<?php 
	$var = "Kalob";
	echo $var;

	unset($var, $var2, $var3, $name);
	echo $var;
	echo "stopper";
?>







