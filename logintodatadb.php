resetdatadb.php
Who has access
B
System properties
Type
PHP
Size
418 bytes
Storage used
418 bytes
Location
DataBoisAPI
Owner
Bryan Yj Actub
Modified
Mar 6, 2022 by Bryan Yj Actub
Created
3:23 PM
No description
Viewers can download
<?php

header("Access-Control-Allow-Origin: *");
$conn=mysqli_connect("localhost","root","","databois");

$select_query = "DELETE FROM addtocart";
$result = $conn->query($select_query);
  
    if ($result) {
    	$Message = "Data Has Been Reset!";
        
    } else {
    	$Message = "something's wrong";
    }
    
    $Response[]=array("Message"=>$Message);
    echo json_encode($Response);


?>