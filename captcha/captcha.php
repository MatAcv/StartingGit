<?php
$recaptcha = $_POST['g-recaptcha-response'];

if($recaptcha !='')
{
    $secret="6LcKX2wUAAAAABdtXwjYWf2wPgQSNCgG5KsAiPBg";
    $ip =$_SERVER['REMOVE_ADDR'];
    $var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");
    $array = json_decode($var, true);
    if($array['succes'])    
    {
       echo "Soy humano";
        
    }
    else
    {
        echo "soy robot";
        
    }
}else{
    echo"Rellene todos los campos";
}   
?>