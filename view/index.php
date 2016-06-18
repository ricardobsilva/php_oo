<?php
    require_once '../model/Usuario.php';

    $primeiro_usuario = new Usuario();
    $primeiro_usuario->nome = "Ricardo";
    $primeiro_usuario->email = "ricardo@ricardo.com";
    $primeiro_usuario->nascimento = "26/07/1991";
    
    
    
   $resultado_soma =  $primeiro_usuario->somar(2,2);
   echo $resultado_soma;
?>