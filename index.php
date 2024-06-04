<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador de Materias</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #50b3a2;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #e8491d 3px solid;
        }
        header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        header ul {
            padding: 0;
            list-style: none;
        }
        header li {
            display: inline;
            padding: 0 20px 0 20px;
        }
        header #branding {
            float: left;
        }
        header #branding h1 {
            margin: 0;
        }
        header nav {
            float: right;
            margin-top: 10px;
        }
        #main {
            padding: 30px;
            background: #fff;
            margin-top: 30px;
            box-shadow: 0px 0px 10px 0px #ccc;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        form label {
            margin-bottom: 10px;
            font-weight: bold;
        }
        form input[type="text"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form input[type="submit"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #50b3a2;
            color: white;
            cursor: pointer;
        }
        form input[type="submit"]:hover {
            background: #45a090;
        }
        #resultados {
            margin-top: 20px;
        }
        #resultados ul {
            list-style: none;
            padding: 0;
        }
        #resultados li {
            background: #e4e4e4;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Universidad XYZ</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Materias</a></li>
                    <li><a href="#">Profesores</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <div id="main">
            <h1>Buscador de Materias</h1>
            <form method="GET" action="buscar.php">
                <label for="nombre">Nombre de la materia:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre de la materia">
                <input type="submit" value="Buscar">
            </form>
            <div id="resultados">
                <!-- Los resultados de la búsqueda se mostrarán aquí -->
            </div>
        </div>
    </div>
</body>
</html>
