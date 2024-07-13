<?php 
    require "repositorio.php";

    $tarefarecebida = new Atividade($_REQUEST['id'], $_REQUEST['atividade']);

    $repositorio->cadastrarTarefa($tarefarecebida);

    echo "<script> alert('Tarefa cadastrada com sucesso'); </scipt>";
    echo "<script> locationa.href='index.php'; </script>";
?>