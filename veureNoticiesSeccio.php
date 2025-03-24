<?php
$seccion;
if(!empty($_POST['seccion'])){

    $arraySeccion=explode(",",$_POST['seccion']);//método contrario al implode
}else{
    $arraySeccion =array();
}

$seccion=implode(",",$_POST['seccion']);
    $db=new SQLite3('diariLocal.db');

    $resultado=$db->query("SELECT not_titular, not_cos, not_data, not_seccio FROM noticies where not_seccio=$seccion ORDER BY not_data desc");

    while($fila=$resultado->fetchArray(SQLITE3_ASSOC)){
        echo "".$fila['not_titular']."<br/><br/>";
        echo "".$fila['not_data']."<br/>";
        echo "Sección: ".$fila['not_seccio']."<br/>";
        echo "".$fila['not_cos']."<br/>";
        echo "<br/><br/>";
        echo "<br/><br/>";
    }
$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <input type="text" name="seccion" id="seccion" placeholder="introduce la sección" value="">
    </form>
</body>
</html>