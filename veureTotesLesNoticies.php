<?php
    $db=new SQLite3('diariLocal.db');

    $resultado=$db->query("SELECT * FROM noticies");

    echo "Secciones:"."<br/><br/>";
    while($fila=$resultado->fetchArray(SQLITE3_ASSOC)){
        echo "".$fila['not_titular']."<br/>";
        echo "".$fila['not_cos']."<br/>";
        echo "".$fila['not_data']."<br/>";
        echo "".$fila['not_seccio']."<br/>";
    }
$db->close();
?>