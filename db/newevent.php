<?php 
        include "connection.php";
                            
        $date = $_POST["start"];
        $time = $_POST["tmEvent"];
        $title = $_POST["title"];~

        $date = implode("-", array_reverse(explode("/", $date)));
        
        $query = "INSERT INTO `calendar` (`start`, `hourev`, `title`) VALUES ('$date', '$time', '$title')";
        
        $exec = $connection->exec($query);                         
        
        if($exec){            
            echo "1";     
        }
        else{
            echo "0";
        }
?>
