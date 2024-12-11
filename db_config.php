
<?php
$polaczenie = new mysqli("localhost","root","","db4php");

if ($polaczenie -> connect_errno) {
  echo "Failed to connect to MySQL: " . $polaczenie -> connect_error;
  exit();
}
?>
