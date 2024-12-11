<?php
include ('../db_config.php'); 
$a = $_GET['pod'];

$res = mysqli_query($polaczenie, "SELECT * FROM podstrony WHERE id='" . mysqli_real_escape_string($polaczenie, $a) . "'");
if (!$res) {
    die("Błąd zapytania: " . mysqli_error($polaczenie));
}
$wiersz = mysqli_fetch_array($res, MYSQLI_ASSOC);

$nazwa = $wiersz['nazwapodstr'];
$tresc = $wiersz['tresc'];
$waga = $wiersz['waga']; 

echo '<form action="mod2.php" method="POST">
      nazwa podstrony<br><textarea cols="30" rows="1" name="nazwapodstr" class="inputbox">' . htmlspecialchars($nazwa) . '</textarea>
      <br>tresc podstrony<br><textarea cols="30" rows="5" name="trescpodstr" class="inputbox">' . htmlspecialchars($tresc) . '</textarea>
      <br>waga<br><textarea cols="30" rows="1" name="waga" class="inputbox">' . htmlspecialchars($waga) . '</textarea>
      <input type="hidden" name="pod" value="' . htmlspecialchars($a) . '">
      <br><input type=submit value="Zapisz"></form>';
mysqli_close($polaczenie);
?>
