<?php
    $db=new SQLite3('diariLocal.db');

    $resultado=$db->query("SELECT DISTINCT(not_seccio) FROM noticies ORDER BY not_seccio");

    echo "<h1> Noticias </h1>";
    while($noticia=$resultado->fetchArray(SQLITE3_ASSOC)){
        echo "<a href='veureNoticiesSeccio.php?not_seccio=$noticia[not_seccio]'>" . $noticia['not_seccio'] . "</a><br>";
        echo "-------------------------<br/>";
    }
$db->close();
?>