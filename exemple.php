<?php
// Connectar-se a la base de dades
$db = new SQLite3('database.db');

$nom = $_POST['nom'];
echo "<p>Buscant usuaris amb el nom: $nom</p>";

// Aquí la consulta NO és segura (SQL Injection)
$sql = "SELECT * FROM usuaris WHERE usu_nom = '$nom'";
echo "<p>Consulta executada: <code>$sql</code></p>";

$resultats = $db->query($sql);

while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
    echo "ID: ". $fila['usu_id'] ." - Nom: ". $fila['usu_nom'] ." - Email: ". $fila['usu_email'] ."<br>";
}

$db->close();
?>
