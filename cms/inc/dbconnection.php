<?php
$con = mysqli_connect("localhost","root","","domica");


//connection checkd
if (!$con) {
  die("Connectie Mislukt ".mysqli_connect_error());
}

?>
