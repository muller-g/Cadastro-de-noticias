<?php
    require_once("conexaoBanco.php");
    $id = $_GET['id'];
    $consulta = $conn->query("SELECT * FROM noticia");

    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        $title[] = $linha['title']; 
        $noticetext[] = $linha['noticetext']; 
        $category[] = $linha['category']; 
        $idBanco[] = $linha['id']; 
    }      

        echo "<label for='title'>Titulo</label>";
        echo "<input type='text' name='title-field' id='title-field' value='$title[$id]' required>";
        echo "<label for='category'>Categoria</label>";
        echo "<select name='category-field' id='category-field' required>";
        echo "<option value='$category[$id]' selected>$category[$id]</option>"; 
        echo "</select>";
        echo "<textarea name='new' id='new' cols='30' rows='15' required>$noticetext[$id]</textarea>";
        echo "<input type='submit'>";
        echo "<input type='hidden' id='id' name='id' value='$idBanco[$id]' />";
        $conn=null;
?>