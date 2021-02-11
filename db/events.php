<?php
    //Conectando ao banco de dados
    include "connection.php";

    $consSql = $connection->query("SELECT start, hourev, title FROM calendar 
                                ORDER BY start, hourev"); 

    $vector = array();
    while ($row = $consSql->fetch(PDO::FETCH_NAMED)) { 
        $vector[] = array(
            'title'          => $row['hourev'].': '.$row['title'],
            'start'          => $row['start'],
        );
     }

    //Passando vetor em forma de json
    echo json_encode($vector);
?>
