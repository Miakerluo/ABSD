<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyświetlanie Tabeli z Bazy Danych</title>
</head>
<body>

<h2>Zawartość Tabeli</h2>

<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "steam3";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Błąd połączenia z bazą danych: " . $conn->connect_error);
}

$sql = "SELECT * FROM game";
$result = $conn->query($sql);

$gameLinks = array(
"https://store.steampowered.com/app/730/CounterStrike_2/",
"https://store.steampowered.com/app/648800/Raft/",
"https://store.steampowered.com/app/1966720/Lethal_Company/",
"https://store.steampowered.com/app/1623730/Palworld/",
"https://store.steampowered.com/app/105600/Terraria/",
"https://store.steampowered.com/app/252490/Rust/",
"https://store.steampowered.com/app/1326470/Sons_Of_The_Forest/",
"https://store.steampowered.com/app/2195250/EA_SPORTS_FC_24/",
"https://store.steampowered.com/app/1222670/The_Sims_4/",
"https://store.steampowered.com/app/990080/Dziedzictwo_Hogwartu/",
"https://store.steampowered.com/app/730/CounterStrike_2/",
"https://store.steampowered.com/app/648800/Raft/",
"https://store.steampowered.com/app/1966720/Lethal_Company/",
"https://store.steampowered.com/app/1623730/Palworld/",
"https://store.steampowered.com/app/105600/Terraria/",
"https://store.steampowered.com/app/252490/Rust/",
"https://store.steampowered.com/app/1326470/Sons_Of_The_Forest/",
"https://store.steampowered.com/app/2195250/EA_SPORTS_FC_24/",
"https://store.steampowered.com/app/1222670/The_Sims_4/",
"https://store.steampowered.com/app/990080/Dziedzictwo_Hogwartu/",
"https://store.steampowered.com/app/730/CounterStrike_2/",
"https://store.steampowered.com/app/648800/Raft/",
"https://store.steampowered.com/app/1966720/Lethal_Company/",
"https://store.steampowered.com/app/1623730/Palworld/",
"https://store.steampowered.com/app/105600/Terraria/",
"https://store.steampowered.com/app/252490/Rust/",
"https://store.steampowered.com/app/1326470/Sons_Of_The_Forest/",
"https://store.steampowered.com/app/2195250/EA_SPORTS_FC_24/",
"https://store.steampowered.com/app/1222670/The_Sims_4/",
"https://store.steampowered.com/app/990080/Dziedzictwo_Hogwartu/",
"https://store.steampowered.com/app/730/CounterStrike_2/",
"https://store.steampowered.com/app/648800/Raft/",
"https://store.steampowered.com/app/1966720/Lethal_Company/",
"https://store.steampowered.com/app/1623730/Palworld/",
"https://store.steampowered.com/app/105600/Terraria/",
"https://store.steampowered.com/app/252490/Rust/",
"https://store.steampowered.com/app/1326470/Sons_Of_The_Forest/",
"https://store.steampowered.com/app/2195250/EA_SPORTS_FC_24/",
"https://store.steampowered.com/app/1222670/The_Sims_4/",
"https://store.steampowered.com/app/990080/Dziedzictwo_Hogwartu/",
"https://store.steampowered.com/app/730/CounterStrike_2/",
"https://store.steampowered.com/app/648800/Raft/",
"https://store.steampowered.com/app/1966720/Lethal_Company/",
"https://store.steampowered.com/app/1623730/Palworld/",
"https://store.steampowered.com/app/105600/Terraria/",
"https://store.steampowered.com/app/252490/Rust/",
"https://store.steampowered.com/app/1326470/Sons_Of_The_Forest/",
"https://store.steampowered.com/app/2195250/EA_SPORTS_FC_24/",
"https://store.steampowered.com/app/1222670/The_Sims_4/",
"https://store.steampowered.com/app/990080/Dziedzictwo_Hogwartu/",
"https://store.steampowered.com/app/730/CounterStrike_2/",
"https://store.steampowered.com/app/648800/Raft/",
"https://store.steampowered.com/app/1966720/Lethal_Company/",
"https://store.steampowered.com/app/1623730/Palworld/",
"https://store.steampowered.com/app/105600/Terraria/",
"https://store.steampowered.com/app/252490/Rust/",
"https://store.steampowered.com/app/1326470/Sons_Of_The_Forest/",
"https://store.steampowered.com/app/2195250/EA_SPORTS_FC_24/",
"https://store.steampowered.com/app/1222670/The_Sims_4/",
"https://store.steampowered.com/app/990080/Dziedzictwo_Hogwartu/",
"https://store.steampowered.com/app/730/CounterStrike_2/",
"https://store.steampowered.com/app/648800/Raft/",
"https://store.steampowered.com/app/1966720/Lethal_Company/",
"https://store.steampowered.com/app/1623730/Palworld/",
"https://store.steampowered.com/app/105600/Terraria/",
"https://store.steampowered.com/app/252490/Rust/",
"https://store.steampowered.com/app/1326470/Sons_Of_The_Forest/",
"https://store.steampowered.com/app/2195250/EA_SPORTS_FC_24/",
"https://store.steampowered.com/app/1222670/The_Sims_4/",
"https://store.steampowered.com/app/990080/Dziedzictwo_Hogwartu/",
"https://store.steampowered.com/app/990080/Dziedzictwo_Hogwartu/",
"https://store.steampowered.com/app/990080/Dziedzictwo_Hogwartu/",
"https://store.steampowered.com/app/990080/Dziedzictwo_Hogwartu/",
"https://store.steampowered.com/app/990080/Dziedzictwo_Hogwartu/",

);

if ($result->num_rows > 0) {
$counter = 0; {
	echo "<table border='1'><tr><th>ID</th><th>Tytuł</th><th>Opis</th></tr>";
	
	while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row["ID"]."</td>";
		echo "<td><a href='".$gameLinks[$counter]."'>".$row["title"]."</td>";
		$counter++;
		echo "<td>".$row["description"]."</td></tr>";
	}
	echo "</table>";
}
}

$conn->close();
?>

</body>
</html>