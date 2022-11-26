
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pruebas";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ESTADO FROM puertas WHERE `ID_PUERTA` ='P001'";


    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

        if ($row["ESTADO"]=='ABIERTA') {
            toggle('CERRADA');
        }else{
            toggle('ABIERTA');
        }

    }
} else {
    echo "0 results";
    }
$conn->close();


function toggle($status){
    echo "Estado: $status";
    $conexion = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conexion, "pruebas");
    $consulta = mysqli_query($conexion, "UPDATE `puertas` SET `ESTADO`= '$status'  WHERE ID_PUERTA='P001'");
}

?>