<?php
        session_start();
        $name = $email = $consulta = '';
        error_reporting(0);
        
        //Comprobar caracteres especiales. Redireccionar a otra web php para mandar el contenido al correo y redireccionar con header() otra vez a soporte.
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (empty($_POST["name"])) {
                $nameErr = "Nombre es necesario.";
            } else {
                $name = test_input($_POST["name"]);
            }

            if (empty($_POST["email"])) {
                $emailErr = "Email es necesario.";
            } else {
                $email = test_input($_POST["email"]);
            }

            if (empty($_POST["consulta"])) {
                $consultaErr = "Consulta es necesario.";
            } else {
                $consulta = test_input($_POST["consulta"]);
            }

            if (!empty($_POST["email"]) && !empty($_POST["email"]) && !empty($_POST["consulta"])) {
                $destino = "flamingrage.oriolarnau@gmail.com";
                $asunto = "Consulta";

              /*  $consulta = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>" .
                        "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />" .
                        "<title>Flaming Rage</title>" .
                        "<meta name='viewport' content='width=device-width, initial-scale=1.0'/></head>" .
                        "<body>" .
                        "<table align='center' border='1' cellpadding='0' cellspacing='0' width='600'><tr><td bgcolor='#70bbd9'>Email: $_POST[email]</td></tr>" .
                        "<tr><td bgcolor='#ffffff'>Nombre: $_POST[name]</td></tr>" .
                        "<tr><td bgcolor='#ee4c50'>Comentario: $_POST[consulta]</td></tr>" .
                        "</table></body></html>";*/
                
                $consulta = "Nombre: $_POST[name]"."\r\n"
                        . "Email: $_POST[email]"."\r\n"
                        . "Comentario: $_POST[consulta]";
                
                $headers = "From:" . $email . "\r\n";
               // $headers .= "MIME-Version: 1.0\r\n";
               // $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

                mail($destino, $asunto, $consulta, $headers);

                $_SESSION['succes'] = "<span style='color: green;'>Mensaje enviado</span>";
            }else{
                $_SESSION['error'] = "<span style='color: red;'>Campos vacios o incorrectos.</span>";
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
header('Location:soporte.php');
?>
