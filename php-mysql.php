<?php

    require "./conn.php";
    // include "./conn.php";

    session_start();


    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true)) {
        //exit("Jesteś zalogowany <br> <button><a href='./zalogowany.php'> Panel </button></a>");
		header('Location: ./zalogowany.php');
        exit;
    }
?>
<!DOCTYPE html>
<head>
	<html lang="pl">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" href="styl.css" text="text/css">
</head>
<body>
	<div class="log">
    <form action="./php-mysql.php" method="post">
        <p>Logowanie PHP MySql</p>
		<p>Wprowadź nazwę użytkownika i hasło:</p>
            <input type="text" placeholder="login" name="login" required />
			<input type="password" placeholder="hasło" name="haslo" required />
			<br>
        <input name="submitForm" type="submit"></input>
	<?php
	if(isset($_POST) && isset($_POST["login"]) && isset($_POST["haslo"])){
        $polaczenie = new mysqli( $db_host, $db_user, $db_pass, $db_name );

        if ($polaczenie->connect_errno!=0)
        {
            echo "Error: ".$polaczenie->connect_errno;
        }
        else
        {
            $login = $_POST['login'];
            $haslo = $_POST['haslo'];

            if ($rezultat = @$polaczenie->query( sprintf("SELECT * FROM users WHERE login='%s' AND pass='%s'", $login, $haslo ) ) )
            {
                $ilu_userow = $rezultat->num_rows;
                if($ilu_userow>0)
                {
                    $_SESSION['zalogowany'] = true;
                    echo "<h2><br>Poprawne dane <br> <a style=\"color: black;\" href='./zalogowany.php'> Przejdź do Panelu </a></h2>";
                } else {
                    echo "<h1>Niepoprawne dane</h1>";
                }
            }
        }
    }
	?>
	<br>
	<a style="color: black;" href="index.php">powrót</a>
    </form>
	</div>
</body>
</html>