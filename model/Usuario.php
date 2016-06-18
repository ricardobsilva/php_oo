<?php


class Usuario {
    public $email;
    public $nome;
    public $nascimento;

        
    public function somar($n1, $n2) {
        return  $n1 + $n2;
    } 
    
    public function autenticar() {
        echo 'usuario autenticou no sistema';
    }
    
    public function sair() {
        echo "usuario saiu do sistema";
    }
    
}
