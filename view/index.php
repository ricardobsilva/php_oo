<?php
    require_once '../model/Usuario.php';

    $primeiro_usuario = new Usuario();
    $primeiro_usuario->setNome('Ricardo');
    $primeiro_usuario->setEmail('ricardo@ricardo.com');
    
    echo $primeiro_usuario->getEmail();
    echo $primeiro_usuario->getNome();
    
?>