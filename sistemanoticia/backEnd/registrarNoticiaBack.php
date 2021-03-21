<?php
    require_once("conexaoBanco.php");
    $title = $_GET["title-field"];
    $category = $_GET["category-field"];
    $noticetext = $_GET["new"];

    $stmt = $conn->prepare('INSERT INTO noticia (title, category, noticetext) VALUES(:title, :category, :noticetext)');
    $stmt->execute(array(
        ':title' => $title,
        ':category' => $category,
        ':noticetext' => $noticetext,
    ));
    $conn=null;
    header('Location: /sistemanoticia/registrarNoticiaFront.php');
?>