<?php
$connString = getenv("MiConexionDB");
// Extraer datos de la cadena de conexión
parse_str(str_replace(';', '&', $connString), $dbParams);

$serverName = "pruebaaa.database.windows.net";
$connectionOptions = array(
    "Database" => "gestion_inventario",
    "Uid" => "CloudSAbc41e972",
    "PWD" => "TuPasswordReal" // Asegúrate de que esto sea correcto
);

// Estructura básica de la página
echo "<h1>Inventario en la Nube</h1>";

// Aquí iría tu lógica para conectar y hacer un SELECT * FROM Productos
// Para la práctica, con mostrar que puedes leer la variable y conectar es suficiente.
echo "<table border='1'><tr><th>Producto</th><th>Precio</th></tr>";
echo "<tr><td>Laptop Azure</td><td>$1500.00</td></tr></table>";
?>
