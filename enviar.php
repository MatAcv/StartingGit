<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Enviado</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
        <!--Import materialize.css-->      
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>  
        <link rel="stylesheet" href="css.css" type="text/css" media=screen,projection"/>
        
        <title></title>
    </head>
    <body background="img/background.jpg">
       <?php


// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "soporte@chilestrike.cl";
$email_subject = "Contacto desde el sitio web";

$recaptcha=$_POST['g-recaptcha-response'];
       
       if($recaptcha !='')
       {
        // Aquí se deberían validar los datos ingresados por el usuario
if($_POST['select']=='' || $_POST['nombre']=='' || $_POST['telefono']=='' || $_POST['correo']==''    )
    {
    
 
    
 

echo "<b>Ocurrió un error y el reporte no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";


}
   


else
{

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Motivo: " . $_POST['select'] . "\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "Teléfono: " . $_POST['correo'] . "\n";
$email_message .= "E-mail:" . $_POST['telefono'] . "\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "<b>¡Se ha enviado el reporte exitosamente! </b><br/>";
echo "Nos pondremos en contacto contigo en breve.";
}

      
      
       }
       
       else
       {
           echo "<b>Ocurrió un error y el reporte no ha sido enviado. </b><br/>";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
       }


    
    


?>
        
        <a href="index.html" class="waves-effect waves-light btn">Home<i class="material-icons right">home</i></a>
    </body>
</html>
