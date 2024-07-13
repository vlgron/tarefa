<?php 
    require 'repositorio.php';

    $tarefarecebida = new Atividade($_REQUEST['id'], $_REQUEST['atividade']);

    $repoditorio->atualizarTarefa($tarefa);

    echo "<script> alert(Tarefa editada com sucesso!); </script>";
    echo "<scipt> location.href='index.php'; </script>";
?>