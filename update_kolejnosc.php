<?php 
include ('db_config.php');

mysqli_query($polaczenie, "ALTER TABLE `podstrony` ADD `waga` INT NOT NULL AFTER `tresc`;");
mysqli_query($polaczenie, "UPDATE podstrony SET waga = '1';");
echo "Dane chyba dodane!<br>";
mysqli_close($polaczenie);
?>