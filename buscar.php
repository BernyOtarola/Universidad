<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "universidad";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_GET['nombre'];

// Consulta SQL utilizando el operador LIKE
$sql = "SELECT * FROM MATERIA WHERE nombre LIKE '%$nombre%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<h2>Resultados de la búsqueda:</h2>";
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["nombre"] . " - " . $row["profesor"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No se encontraron materias.";
}

$conn->close();

