<?php 

    session_start();
    //abrindo/criando arquivo texto
    $arquivo = fopen("chamados.txt", "a"); 

    foreach($_POST as $valor) {
        $valor = str_replace('#', '-', $valor);
    }
    //escrevendo no arquivo, delimitando o fim dos atributos por # e adicionando quebra de linha ao final
    fwrite($arquivo, $_SESSION['id'] . '#' . $_POST['titulo'] . '#' .  $_POST['categoria'] . '#' . $_POST['descricao'] . PHP_EOL); 
   
    //fechando arquivo
    fclose($arquivo); 
    header('Location: abrir_chamado.php');
?>