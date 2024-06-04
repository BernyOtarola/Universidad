<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Buscar Materias</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h1 {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    text-align: center;
    margin: 0;
}

.container {
    width: 80%;
    margin: 20px auto;
    padding: 20px;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

form {
    text-align: center;
    margin-bottom: 20px;
}

label {
    font-size: 18px;
    margin-right: 10px;
}

input[type="text"] {
    padding: 10px;
    width: 300px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-right: 10px;
}

input[type="submit"] {
    padding: 10px 20px;
    border: none;
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
    border-radius: 4px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

h2 {
    color: #333;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    background-color: #eee;
    padding: 10px;
    margin: 5px 0;
    border-radius: 4px;
}

    </style>
</head>
<body>
    <h1>Buscar Materias por Nombre</h1>
    <form action="" method="GET">
        <label>Nombre de la materia: </label>
        <input type="text" name="nombre">
        <input type="submit" value="Buscar">
    </form>

    <?php
    if(isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        $sql = "SELECT * FROM MATERIA WHERE nombre LIKE '%$nombre%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h2>Resultados:</h2>";
            echo "<ul>";
            while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["nombre"] . " - Profesor: " . $row["profesor"] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No se encontraron resultados.</p>";
        }
    }
    ?>

</body>
</html>
