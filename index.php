<? php
echo "<h1>¡Servidor de Azure funcionando !< /
h1>";

// Intentar conectar a la base de datos
usando la variable que configuramos
$connString = getenv("MiConexionDB");

if ($connString) {
echo "<p>La variable de conexión se
detectó correctamente. </p>";
} else {
echo "<p>Error: No se encuentra
la variable 'MiConexionDB' en la
configuración. </p>";

?>
