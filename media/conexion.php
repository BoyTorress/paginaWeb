<?php
$conexion = mysqli_connect('localhost', 'root', '', 'pagina')
or die(mysql_error($mysqli));

diferencia($conexion);


function diferencia($conexion){
    if(isset($_POST['enviar'])){
        insertar($conexion);
    }
}


function insertar($conexion){
    $id = $_POST['id'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $medicion = $_POST['medicion'];
    $sensor = $_POST['sensor'];

    $consulta = "INSERT INTO formulario(fecha, hora, medicion, sensor) VALUES ('$fecha','$hora','$medicion','$sensor')";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}


?>
    
