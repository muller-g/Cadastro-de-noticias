<?php

require_once("conexaoBanco.php");

$consulta = $conn->query("SELECT title FROM categoria");


while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "<option value='{$linha['title']}'>{$linha['title']}</option>";
}
$conn=null;
?>