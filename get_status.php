
<?php
    $servername = "localhost";
    $username = "root";
    $password = "toringo12";
    $dbname = "pruebas";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT ESTADO FROM lamparas WHERE `ID_LAMPARA` ='L001'";


        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
    
            if ($row["ESTADO"]=='ON') {
                return toggle('OFF');
            }else{
                return toggle('ON');
            }
    
        }
    } else {
        echo "0 results";
        }
    $conn->close();




    function toggle($status){
        echo "Estado: $status";
        $conexion = mysqli_connect("localhost", "root", "toringo12");
        mysqli_select_db($conexion, "pruebas");
        $consulta = mysqli_query($conexion, "UPDATE `lamparas` SET `ESTADO`= '$status'  WHERE ID_LAMPARA='L001'");
    }

    ?>