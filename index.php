<?php
session_start();
//session_unset();
// if(isset($_SESSION['guess'])){
// 	echo 'this is guess : ' . $_SESSION['guess'] . '<br>';
// }

//var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Great Number Game</title>
</head>
<body>
	<h1>Welcome to the Great Number Game!</h1>
	<h2>I am thinking of a number between 1 and 100... Take a guess!</h2>
	<h3><?php 
			if (isset($_SESSION['answer'])) {
				echo $_SESSION['answer']; 
			}
		?></h3>
	<form action="process.php" method="post">
		<div>
			<input type="text" name="guess"/>
		</div>
		<div>
			<button name="submit">Submit</button>
		</div>
	</form>
	<form id="start-over" action="process.php" method="post">
		<input type="hidden" name="unset" value="unset">
		<input type="submit" value="start over!"/>
	</form>
</body>
</html>