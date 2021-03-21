<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="grid-menu">
        <div class="btn-home">
            <span><a href="index.php"></a></span>
        </div>
        <div class="list-menu">
            <span><a href="registrarNoticiaFront.php">Cadastrar Noticia</a></span>
            <span><a href="registrarCategoriaFront.php">Cadastrar Categoria</a></span>
            <form action="buscarNoticia.php?search=" method="get">
                <span><input type="search" name="search" id="search">
                    <input type="submit" value="Buscar">
                </span>
            </form>
        </div>
    </div>
    <div class="grid-news">
        <?php  require_once("backEnd/pegarNoticia.php")?>
    </div>
    <footer>
        Desenvolvido por Gabriel Müller
    </footer>
</body>
</html>