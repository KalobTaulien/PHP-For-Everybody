<?php 

	$city_name = '';
	$first_name = '';

	if(isset($_POST['city_name'])) {
		$city_name = $_POST['city_name'];
	}

	if(isset($_POST['first_name'])) {
		$first_name = $_POST['first_name'];
	}

?>

<style>
	.error {
		background-color: red;
		padding: 10px;
		font-size: 13px;
		color: #fff;
	}
</style>

<h2>Required Fields in Forms</h2>

<form method="POST">

	<div>
		<label for="city_name">City Name *:</label>
		<input 
			type="text"
			value="<?php echo $city_name; ?>"
			name="city_name"
		>
		<?php 
			if(isset($_POST['city_name']) && 
			   empty($_POST['city_name'])) {

				echo "<div class='error'>
						Missing city name
					  </div>";
			}
		?>
	</div>
	
	<div>
		<label for="first_name">Your Name *:</label>
		<input 
			type="text"
			value="<?php echo $first_name; ?>"
			name="first_name"
		>
		
		<?php 
			if(isset($_POST['first_name']) && 
			   empty($_POST['first_name'])) {

				echo "<div class='error'>
						Missing first name
					  </div>";
			}
		?>

	</div>
	

	<button type="submit">Submit</button>
</form>


<?php 
	if(!empty($first_name) && !empty($city_name)) {
		echo "Hi $first_name welcome to $city_name";
	}
?>












