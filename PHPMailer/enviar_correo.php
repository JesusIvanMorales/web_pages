<?php
    require ("conexion.php");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'Exception.php';
    require 'PHPMailer.php';
    require 'SMTP.php';

    $json = array();
    
    $fecha = $_POST['fecha'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug=0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  
        $mail->SMTPAuth = true;
        $mail->Username = 'cuidadodelagua61@gmail.com';  
        $mail->Password = 'tpvy yszk kxiy vdnc';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  
        $mail->Port = 587;  

        $mail->setFrom('cuidadodelagua@gmail.com', 'Cuidado del agua');
        $mail->addAddress($correo);  

        
        $mail->isHTML(true);
        $mail->Subject = 'Asunto del correo';
        $mail->Body = "Gracias por contactarse con nosotros, este al tanto de nuestra respuesta";

        $mail->send();

        if ($conn->connect_error) {
            $json[] = array(
                'clave' =>'error',
                'nombre' => 'Error en la conexion a base de datos'
            );
        } else {

            $sql= "INSERT INTO mensajes (nombre, correo, mensaje, fecha) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $nombre, $correo, $mensaje, $fecha);
            
            if ($stmt-> execute()) {
                $json[] = array(
                    'clave' =>'ok', 
                    'nombre' => 'Revise su correo'
                );
            } else {
                $json[] = array(
                    'clave' => 'error',
                    'nombre' => 'Error con ddbb'
                );
            }
        }
    } catch (Exception $e) {
        $json[] = array(
            'clave' => 'error',
            'nombre' => "Error: {$mail->ErrorInfo}"
        );
    }

    header('Content-Type: application/json');
    echo json_encode($json);
    exit;