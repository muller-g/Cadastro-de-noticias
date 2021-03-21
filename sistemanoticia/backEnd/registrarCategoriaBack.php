<?php
    require_once("conexaoBanco.php");
    $title = $_GET["title-field"];
    
    $stmt = $conn->prepare('INSERT INTO categoria (title) VALUES(:title)');
    $stmt->execute(array(
        ':title' => $title,
    ));

    $conn=null;
    header('Location: /sistemanoticia/registrarCategoriaFront.php');
?>