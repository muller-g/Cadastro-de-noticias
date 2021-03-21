<?php
require_once("conexaoBanco.php");
$consulta = $conn->query("SELECT * FROM noticia");
$id = 0;

while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    $title[] = $linha['title']; 
    $noticetext[] = $linha['noticetext']; 
    $category[] = $linha['category'];
    $idBanco[] = $linha['id'];  
    echo "<div class='grid-news-child'>";
        echo "<div class='grid-news-child-title'>$title[$id]</div>";
        echo "<div class='grid-news-child-text'>$noticetext[$id]</div>";
        echo "<div class='grid-news-child-category'>Categoria: $category[$id]</div>";
        echo "<div class='grid-news-child-link'><a href='editarNoticia.php?id=$id'>Editar Matéria</a>";
        echo "<a href='backEnd/excluirNoticia.php?id=$idBanco[$id]'>Excluir Matéria</a></div>";
    echo "</div>";
    $id++;
}
$conn=null;      
?>