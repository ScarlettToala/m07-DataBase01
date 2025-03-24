<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Buscar noticia parcailemnte por el titular</h2>
    <form actio="veureNoticiesParcialmentTitular.php" method="GET">

    <label for="titular"> Titutlar</label>
    <input type="text" name="titular" id="titular" value="">
    <input type="submit" value="Cercar" id="btnCercar" name="btnCercar">
    </form>
</body>
</html>

<?php 
    
    if($_SERVER["REQUEST_METHOD"]=="GET"){
        $db=new SQLite3('diariLocal.db');
        if(isset($_GET['titular'])){
            $titular=$_GET['titular'];
        }

    $consultaSegura=$db->prepare('SELECT * FROM noticies WHERE LIKE not_titular =:%titular%');
    $consultaSegura->bindValue(':titular', $titular, SQLITE3_TEXT);

    $resultado=$consultaSegura->execute();
        
            while ($fila=$resultado->fetchArray(SQLITE3_ASSOC)){
                    echo "<br/><br/>";
                    echo "<strong>".$fila['not_titular']."</strong><br/><br/>";
                    echo "<em>".$fila['not_data']."</em><br/>";
                    echo "Sección: ".$fila['not_seccio']."<br/>";
                    echo "".$fila['not_cos']."<br/>";
                    echo "<br/><br/>";
                    echo "********************************";
                }

    $db->close();
    }
    
?>

