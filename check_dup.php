<?php
/*
    John, Angeline Flora
    jadrn021
    Project #3
    Fall 2017
*/
$server = 'opatija.sdsu.edu:3306';
$user = 'jadrn021';
$password = 'chair';
$database = 'jadrn021';
if(!($db = mysqli_connect($server,$user,$password,$database)))
    echo "ERROR in connection ".mysqli_error($db);
$email = $_GET['email'];
$sql = "select * from runner where email='$email';";
mysqli_query($db, $sql);
$how_many = mysqli_affected_rows($db);
mysqli_close($db);
if($how_many > 0)
    echo "dup";
else if($how_many == 0)
    echo "OK";
else
    echo "ERROR, failure ".$how_many;
?>
