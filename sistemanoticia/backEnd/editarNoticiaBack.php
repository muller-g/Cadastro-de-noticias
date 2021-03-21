<?php
    require_once("conexaoBanco.php");
    
    $title = $_GET['title-field'];
    $category = $_GET['category-field'];
    $noticetext = $_GET['new'];
    $id = $_GET['id'];
    
    $stmt = $conn->prepare('UPDATE noticia SET title = :title, category = :category, noticetext = :noticetext WHERE id = :id');
    $stmt->execute(array(
        ':id' => $id,
        ':title' => $title,
        ':category' => $category,
        ':noticetext' => $noticetext,
    ));

    $conn=null;

    header('Location: /sistemanoticia/index.php');
?>