<?php
    require ("conexion.php");
    $json = array();
    
    if ($conn->connect_error) {
        $json[] = array(
            'clave' =>'error',
            'nombre' => 'Error en la conexion a base de datos'
        );
    } else {
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];
        $fecha = $_POST['fecha'];

        $sql= "INSERT INTO mensajes (correo, mensaje, fecha) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $correo, $mensaje, $fecha);
        $stmt->execute();
        
        if ($conn->query($sql) === TRUE) {
            $json[] = array(
                'clave' => 'ok',
                'nombre' => 'Los datos se han insertado correctamente'
            );
        } else {
            $json[] = array(
                'clave' => 'error',
                'nombre' => 'Error al insertar datos: ' . $conn->error
            );
        }
    }

    echo json_encode($json);
    $stmt->close();
    $conn->close();
?>