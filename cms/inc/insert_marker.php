<?php
include 'dbconnection.php';

if (isset($_POST['insert'])) {
	$naam = $_POST['naam'];
	$adres = $_POST['adres'];
	$over = $_POST['over'];
	$latitude = $_POST['latitude'];
	$longtitude = $_POST['longtitude'];
	$huurstatus = $_POST['huurstatus'];
	$huurprijs = $_POST['huurprijs'];
	$huurperiode = $_POST['huurperiode'];
	$tehuur = "img/green.png";
	$verhuurd = "img/red.png";
	$insert = $_POST['insert'];


	$file = $_FILES["image"];
	$error = array();
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_type = $_FILES['image']['type'];

	$tmp = explode('.', $file_name);
	$file_ext = strtolower(end($tmp));

	$extensions = array("jpeg", "jpg", "png");

	if(in_array($file_ext, $extensions) == false){
		print_r($error);
	}
	if(empty($error) == true){
		$path = "../../img/markerfoto/" . $file_name;
		$photopath = "img/markerfoto/" . $file_name;
		move_uploaded_file($file_tmp, $path);
		if(isset($insert)){
			if($huurstatus == "Te Huur"){
				$sql1 = "INSERT INTO markers (naam,adres,over_woning,latitude,longtitude,huurstatus,huurprijs,huurperiode,photo_path,marker_icon)
				VALUES ('$naam','$adres','$over','$latitude','$longtitude','$huurstatus','$huurprijs','$huurperiode','$photopath','$tehuur')";
				$result1 = $con->query($sql1);
				if($result1){
					header('Location: ../home.php');
				}else{
					echo mysqli_error($con);
				} 
			}elseif($huurstatus == "Verhuurd"){
				$sql2 = "INSERT INTO markers (naam,adres,over_woning,latitude,longtitude,huurstatus,huurprijs,huurperiode,photo_path,marker_icon)
				VALUES ('$naam','$adres','$over','$latitude','$longtitude','$huurstatus','$huurprijs','$huurperiode','$photopath','$verhuurd')";
				$result2 = $con->query($sql2);
				if($result2){
					header('Location: ../home.php');
				}else{
					echo mysqli_error($con);
				} 
			}
		}
	}	
}
?>
