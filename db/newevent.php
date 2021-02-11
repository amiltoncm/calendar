<?php 
        include "connection.php";
                            
        $date = $_POST["dtEvent"];
        $time = $_POST["tmEvent"];
        $description = $_POST["description"];
        
        $query = "INSERT INTO `calendar` (`start`, `hourev`, `title`) VALUES ('$date', '$time', '$description')";
        
        $exec = $connection->exec($query);                         
        
        if($exec){            
            echo "1";     
        }
        else{
            echo "0";
        }
?>
