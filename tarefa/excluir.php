<?php 
    require 'repositorio.php';

    $repositorio->excluirTarefa($_REQUEST['id']);

    header('index.php');
?>