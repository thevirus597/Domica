<?php

require("dbconnection.php");

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);


// Select all the rows in the markers table

$query = "SELECT * FROM markers WHERE 1";
$result = mysqli_query($con, $query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("id",$row['id']);
  $newnode->setAttribute("name",$row['naam']);
  $newnode->setAttribute("adres", $row['adres']);
  $newnode->setAttribute("about",$row['over_woning']);
  $newnode->setAttribute("lat", $row['latitude']);
  $newnode->setAttribute("lng", $row['longtitude']);
  $newnode->setAttribute("huurstatus", $row['huurstatus']);
  $newnode->setAttribute("huurprijs", $row['huurprijs']);
  $newnode->setAttribute("huurperiode", $row['huurperiode']);
  $newnode->setAttribute("photo",$row['photo_path']);
  $newnode->setAttribute("markericon", $row['marker_icon']);
}

echo $dom->saveXML();

?>
