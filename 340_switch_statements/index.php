<?php echo "<h2>Switch Statements</h2>"; ?>
A faster way to write if/elseif/else
<hr />

<?php 
	$color = $_GET['color'];

	switch($color) {
		case "red":
		case "blue":
		case "yellow":
			// $color = $_GET['color']
			break;
		case "brown":
			$color = "black";
			break;
		default:
			$color = "green";
			break;
	}

?>

<div style="background-color: <?php echo $color; ?>; color: #fff; height: 300px; width: 100%; padding: 100px;">
	The BG color is <?php echo $color; ?>
</div>













