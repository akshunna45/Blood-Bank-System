<?php
    $host = "localhost"; //on same server we keep localhost
    $user = "id13599128_cure_for_cure";  //username of the database
    $pass = "mw&*1g}d}gi?dR9^";   //password of the database
    $db = "id13599128_blood_bank";  //name of database
    
    $con = mysqli_connect($host,$user,$pass,$db);
    
    if($con){
        //echo "Connected to Database";
    }else{
        //echo "Failed to connect ".mysqli_connect_error();
    }
?>
