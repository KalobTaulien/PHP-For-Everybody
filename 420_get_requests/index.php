<?php 
	$city_name = '';

	if(isset($_GET['city'])) {
		$city_name = $_GET['city'];
	}
?>


<h2>Forms</h2>

<form method="GET">
	<label for="city">City Name:</label>
	<input type="text" value="<?php echo $city_name; ?>" name="city">

	<button type="submit">Submit</button>
</form>

<?php 
	
	if(!empty($city_name)) {
		echo "Hey Kalob, you are from ";
		echo $city_name;
	}


?>










