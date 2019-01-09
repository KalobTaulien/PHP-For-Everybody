<?php echo "<h2>Elseif Statements</h2>"; ?>
If..elseif..else
<hr />

<?php 

	$age = -1000;

	if($age == 21) {
		echo "Bday party in vegas";
	} elseif($age == 18) {
		echo "18";
	} elseif($age == 19) {
		echo "19";
	} elseif($age == 20) {
		echo "20";
	} elseif($age == 22) {
		echo "22 because I said check if 22";
	} elseif($age == 17) {
		echo "17";
	} 

	echo "<hr />";

	$name = $_GET['name'];
	if($name == 'kalob') {
		echo "Hello Kalob!";
	} elseif($name == 'zephyr') {
		echo "My kitty!!!";
	} elseif($name == 'hulk') {
		echo "SMASSSHHHHHHH!!!!";
	} else {
		echo "Welcome, guest.";
	}





?>
