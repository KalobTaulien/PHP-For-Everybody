<?php echo "<h2>Emptiness</h2>"; ?>
Checking if a variable is empty or not.
<hr />

<?php

	
	$email = '';

	if(empty($email)) {
		echo "Please enter your email address";
	} else {
		echo "Thank you, $email";
	}



?>



















