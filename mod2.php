<?php
include ('../db_config.php');

$a = $_POST['pod'];
$dane = $_POST['nazwapodstr'];
$dane2 = $_POST['trescpodstr'];
$dane3 = $_POST['waga'];

mysqli_query($polaczenie, "UPDATE podstrony SET nazwapodstr = '" . mysqli_real_escape_string($polaczenie, $dane) . "' WHERE id = '" . mysqli_real_escape_string($polaczenie, $a) . "'");
mysqli_query($polaczenie, "UPDATE podstrony SET tresc = '" . mysqli_real_escape_string($polaczenie, $dane2) . "' WHERE id = '" . mysqli_real_escape_string($polaczenie, $a) . "'");
mysqli_query($polaczenie, "UPDATE podstrony SET waga = '" . mysqli_real_escape_string($polaczenie, $dane3) . "' WHERE id = '" . mysqli_real_escape_string($polaczenie, $a) . "'");

echo 'OK<br><a href="admin.php">PANEL</a><br>';
mysqli_close($polaczenie);
?>
