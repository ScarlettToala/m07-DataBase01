<?php
    $db=new SQLite3('diariLocal.db');

    $resultado=$db->query("SELECT * FROM noticies");

    echo "<h1> Noticias </h1>";
    while($fila=$resultado->fetchArray(SQLITE3_ASSOC)){
        echo "<em>Titulo: </em>".$fila['not_titular']."<br/>";
        echo "<em>Noticia: </em>".$fila['not_cos']."<br/>";
        echo "<em> Fecha: </em>".$fila['not_data']."<br/>";
        echo "<em> Sección: </em>".$fila['not_seccio']."<br/>";
        echo "-------------------------<br/>";
    }
$db->close();
?>