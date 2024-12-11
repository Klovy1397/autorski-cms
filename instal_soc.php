
<?php
include ('db_config.php');
$query = 'CREATE TABLE socjale(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
nazwasocjala CHAR(255) NOT NULL,
link CHAR(255) NOT NULL)';


if (!$result=@mysqli_query($polaczenie,$query)){ 
	echo 'Blad tworzenia tabeli MySQL, odpowiedz serwera: '.mysqli_error($polaczenie);   
	}
else {
	echo $result;
	echo "<br>Tabelę utworzono! Dadawanie danych:<br>";
	mysqli_query($polaczenie,"INSERT INTO socjale (nazwasocjala,link)VALUES ('Youtube.com','Tresc podstrony startowej')");
	mysqli_query($polaczenie,"INSERT INTO socjale (nazwasocjala,link)VALUES ('TikTok.ble','Opis mojego hobby')");
	mysqli_query($polaczenie,"INSERT INTO socjale (nazwasocjala,link)VALUES ('edu-update.pl','Kontakt: dane kontaktowe są już nieaktualne')");
	echo "Dane chyba dodane!<br>";
	mysqli_close($polaczenie);
	}
?>

