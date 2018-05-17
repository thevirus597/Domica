<?php 
include 'dbconnection.php';

$id = $_POST['id'];
$naam = $_POST['naam'];
$adres = $_POST['adres'];
$over = $_POST['over'];
$latitude = $_POST['latitude'];
$longtitude = $_POST['longtitude'];
$huurstatus = $_POST['status'];
$huurprijs = $_POST['prijs'];
$huurperiode = $_POST['periode'];
$tehuur = "img/green.png";
$verhuurd = "img/red.png";
$update = $_POST['update'];

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
	if(isset($update)){
		if($huurstatus == "Te Huur"){
			$sql1 = mysqli_query($con,"UPDATE markers
				SET naam='$naam',
				adres = '$adres',
				over_woning = '$over',
				latitude = '$latitude',
				longtitude = '$longtitude',
				huurstatus = '$huurstatus',
				huurprijs = '$huurprijs',
				huurperiode = '$huurperiode',
				photo_path = '$photopath',
				marker_icon = '$tehuur'
				WHERE id='$id'");
			if ($sql1) {
				header('Location:../home.php');
			}else{
				echo mysqli_error($con);
			} 
		}elseif($huurstatus == "Verhuurd"){
			$sql2 = mysqli_query($con,"UPDATE markers
				SET naam='$naam',
				adres = '$adres',
				over_woning = '$over',
				latitude = '$latitude',
				longtitude = '$longtitude',
				huurstatus = '$huurstatus',
				huurprijs = '$huurprijs',
				huurperiode = '$huurperiode',
				photo_path = '$photopath',
				marker_icon = '$verhuurd'
				WHERE id='$id'");
			if ($sql2) {
				header('Location:../home.php');
			}else{
				echo mysqli_error($con);
			} 	
		}
	}
}
?>