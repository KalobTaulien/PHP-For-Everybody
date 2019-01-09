<?php echo "Mixing HTML and PHP"; ?>


<?php 
	// file is always .php

	echo "<h1>this is h1</h1>";
	echo "<h2>this is h2</h2>";

	echo "<div style='border: 1px solid red;'>";
		echo "Hello! !!!! ! ! !";
	echo "</div>";

	$name = "Kalob";
?>


<h1>Name: <?php echo $name; ?></h1>

<div style='background-color: red;'>
	<?php echo $name; ?>
</div>



<script>
	alert("<?php echo $name; ?>");
</script>










