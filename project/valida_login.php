<?php

    session_start();

    $usuario_autenticado = false;

    $usuarios = array (
        array('email' => 'adm@teste.com', 'senha' => '123456'),
        array('email' => 'usuario@teste.com', 'senha' => '654321'),
    );

    foreach($usuarios as $usuario){
        if($usuario['email'] == $_POST['email'] && $usuario['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }

?>