<?php
    session_start();
    $chamados = array();
    $arquivo = fopen("chamados.txt", "r"); 
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
        if(($_SESSION['id_perfil'] == 2)){ //verificando se possui perfil somente de usuario, se nao possuir adiciona todos os chamados no array
            if($_SESSION['id'] == $linha[0]){  //teste para verificar se o id cadastrado no .txt é o mesmo da sessão corrente        
                $chamados[] = $linha;
                continue;
            }
        }else{
            $chamados[] = $linha;
        }
    }

    $chamados = array_filter($chamados); //eliminando valores null do array

    function converteOperador($chamado){
        $chamado = str_replace('#', '-', $chamado);
        $chamado = explode('-', $chamado);
        return $chamado;
    }
    

?>
