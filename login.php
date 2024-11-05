<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogowanieNaTab</title>
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="styl.css"/>
</head>
<body>
    <div>
    <form method="POST" action="login.php">
			<p>Logowanie PHP Array</p>
            <p>Wprowadź nazwę użytkownika i hasło:</p>
            <input name="loginINP" type="text" placeholder="login" required /></input>
            <input name="passINP" type="password" placeholder="hasło" required /></input>
			<br>
            <input name="submitForm" type="submit"></input>
    <?php
        $loginArray = array("user1", "user2", "user3");
        $passArray = array("pass1", "pass2", "pass3");
        $loginFound = 0;
        if($_SERVER['REQUEST_METHOD']=='POST')
		{
            $login = $_POST['loginINP'];
            $password = $_POST['passINP'];
            for($i=0; $i<count($loginArray); $i++)
			{
                if($login === $loginArray[$i] && $password === $passArray[$i])
				{
                    echo "<p id='pass'>Jesteś zalogowany jako: ".$login." , ".$password."</p>";
                    $loginFound = 1;
                }
            }
				if(!$loginFound)
				{
					echo "<p id='error'>Hasło lub login są niepoprawne: ".$login." , ".$password."</p>";
				}
        }
    ?>
	<br>
	<a style="color: black;" href="index.php">powrót</a>
	</form>
	</div>
</body>
</html>