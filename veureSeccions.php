<?php
    $db=new SQLite3('diariLocal.db');

    $resultado=$db->query("SELECT distinct not_seccio FROM noticies ORDER BY not_seccio asc");

    echo "Secciones:"."<br/><br/>";
    while($fila=$resultado->fetchArray(SQLITE3_ASSOC)){
        echo "".$fila['not_seccio']."<br/>";

    }
$db->close();
?>