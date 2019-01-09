<?php
	// PHP logic 
	$city_name = '';

	if(isset($_POST['city_name'])) {
		$city_name = $_POST['city_name'];
	}
?>

<h2>Post Forms</h2>

<form method="POST">
	<label for="city">City Name:</label>
	<input 
		type="text"
		value="<?php echo $city_name; ?>" name="city_name"
	>

	<button type="submit">Submit</button>
</form>


<?php if(!empty($city_name)) { ?>
	<div style='background-color: red; color: white; font-size: 45px;'>
		
		<?php echo $city_name; ?>

	</div>
<?php } ?>









