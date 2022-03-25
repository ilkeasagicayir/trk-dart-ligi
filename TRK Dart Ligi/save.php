<?php

    $servername = "localhost";
    $username = "hotel_trk";
    $password = "trkturizm123";
    $db = "test";
    
    $conn = mysqli_connect($servername, $username, $password,$db);
    
    $isim=$_POST['isim'];
    $deleteql= "DELETE FROM `oyuncular` ";
    
    if (mysqli_query($conn, $deleteql)) {
        echo json_encode(array("statusCode"=>200));
        $sql = "INSERT INTO `oyuncular`(`isim`) VALUES ('$isim')";
   
        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode"=>200));
        } 
        else {
            echo json_encode(array("statusCode"=>201));
        }
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
   
    mysqli_close($conn);	

?>