<?php

    session_start();

    $usuario_autenticado = false; //controla se o usuario foi autenticado ou nao
    $usuario_id = null; //variável auxiliar para controle de login dos usuários
    $usuario_id_perfil = null; //variável auxiliar para controle de perfil dos usuários
    $usuario_perfil = ['administrador' => 1,'usuario' => 2 ]; //array para comparação de qual tipo é o usuário


    $usuarios = array (
        array('id' => '1' , 'email' => 'adm@teste.com', 'senha' => '123456' , 'usuario_perfil' => '1'),
        array('id' => '2' , 'email' => 'usuario@teste.com', 'senha' => '123456', 'usuario_perfil' => '1'),
        array('id' => '3' , 'email' => 'jose@teste.com', 'senha' => '123456', 'usuario_perfil' => '2'),
        array('id' => '4' , 'email' => 'viviane@teste.com', 'senha' => '123456', 'usuario_perfil' => '2'),
    );

    foreach($usuarios as $usuario){
        if($usuario['email'] == $_POST['email'] && $usuario['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $usuario['id'];
            $usuario_id_perfil = $usuario['usuario_perfil'];
        }
    }

    if($usuario_autenticado){
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['id_perfil'] = $usuario_id_perfil;
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }

?>