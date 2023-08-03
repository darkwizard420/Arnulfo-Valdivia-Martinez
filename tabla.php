<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vertical_onchard_utc6";


$conn = mysqli_connect($servername, $username, $password, $dbname);

//CONEXION
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

//CONSULTA REGISTRO
$sql = "SELECT * FROM temperature_history"; 

//CONSULTA
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./index.css"> 
</head>
<body>
    <div>
        <table>  
            <tr>
                <th>ID</th>
                <th>Temperatura</th>
                <th>Fecha</th>
                <th>Hora</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id_planter'] . "</td>"; 
                echo "<td>" . $row['irrigation_temperature'] . "</td>";
                echo "<td>" . $row['irrigation_temperature_date'] . "</td>"; 
                echo "<td>" . $row['irrigation_temperature_hour'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
<style>
    
    table {
    border-collapse: collapse;
    width: 100%;
}

tr {
    height: 50px; /* Ajusta el valor según tus preferencias */
}
body {
    background-color: #fefae0;
    font-family: 'Arial', sans-serif;
    text-align: center;
    color: #283618;
}

th, td {
    border: 1px solid #dda15e;
    padding: 10px;
}

th {
    font-size: 1.5em;
}

td {
    font-size: 1.2em;
}

</style>