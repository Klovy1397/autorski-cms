<?php
include ('../db_config.php');

$sql = "INSERT INTO podstrony (nazwapodstr, tresc) VALUES ('nowa', 'Tresc nowej stronki')";

if (mysqli_query($polaczenie, $sql)) {
    echo "Dane zostały dodane poprawnie!<br>";
} else {
    echo "Błąd: " . mysqli_error($polaczenie) . "<br>";
}

mysqli_close($polaczenie);
?>
