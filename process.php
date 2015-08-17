<?php
session_start();
if(isset($_POST['unset']) && $_POST['unset'] == "unset"){ 
	session_destroy();
	$_SESSION = array();
	//echo 'session destroyed!';
	//var_dump($_SESSION);
	header('location: index.php');
}

if(isset($_SESSION['winning_number'])){
	//echo $_SESSION['winning_number'];
} else {
	$randomNumber = floor(rand(1,100));
	$_SESSION['winning_number'] = $randomNumber;
}

if ($_POST['guess'] < $_SESSION['winning_number']) {

	$_SESSION['answer'] = 'Your guess is too low!';
	header('location: index.php');
} else if ($_POST['guess'] > $_SESSION['winning_number']) {

	$_SESSION['answer'] = 'Your guess is too high!';
	header('location: index.php');
} else {

	$_SESSION['answer'] = 'BY GOLLY, You have guessed my number!';
	unset($_SESSION['winning_number']);
	header('location: index.php');
}
?>