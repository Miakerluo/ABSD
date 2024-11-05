<?php
    session_start();

    if ( !(isset($_SESSION['zalogowany'])) || !($_SESSION['zalogowany']==true)) 
	{
        //exit("Jesteś niezalogowany");
		//header('Location: index.php');
		exit ();
    }
?>
<!DOCTYPE HTML>
</html>
<head>
	<link rel="stylesheet" href="styl.css" text="text/css">
</head>
<body>
	<div>
	<button><a href="./logout.php"><b>Jesteś zalogowany</b><br>wyloguj się</a><br><a style="color: black;" href="index.php">powrót</a></button>
	</div>
</body>
</html>