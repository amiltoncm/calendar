<?php
    //Conectando ao banco de dados
    include "connection.php";

    $consSql = $connection->query("SELECT start,  TIME_FORMAT(hourev, '%h:%i') as hora, title FROM calendar 
                                ORDER BY start, hourev"); 

    $vector = array();
    while ($row = $consSql->fetch(PDO::FETCH_NAMED)) { 
        $vector[] = array(
            'title'          => $row['hora'].': '.$row['title'],
            'start'          => $row['start'],
        );
     }

    //Passando vetor em forma de json
    echo json_encode($vector);
?>
