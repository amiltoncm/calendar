<html>
<?php
  include 'inc/scripts.php';
?>
<head>
<?php    
    require_once 'inc/linkshead.php';
    require_once 'inc/scriptscalendar.php';
    include 'inc/stylecalendar.php';
?>
</head>

<body>    
    <div id='calendario'>
        <br/>
        <form id="newEvent" action="" method="post">
            Descrição: <input type="text" name="description" id="description" required/><br/><br/>            
            Data do Evento: <input type="date" name="dtEvent" id="dtEvent" required/><br/><br/>            
            Horário do Evento: <input type="time" name="tmEvent" id="tmEvent" required/><br/><br/>            
            <button type="submit"> Cadastrar novo evento </button>
        </form>
    </div>
</body>
</html>
