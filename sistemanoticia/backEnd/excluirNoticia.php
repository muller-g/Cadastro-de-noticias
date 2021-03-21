<?php

require_once("conexaoBanco.php");
$id = $_GET['id'];
$consulta = $conn->query("DELETE FROM noticia WHERE id = $id");
$conn=null;
header('Location: /sistemanoticia/index.php');

?>