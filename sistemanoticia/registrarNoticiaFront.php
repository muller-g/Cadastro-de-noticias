<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/registrarNoticia.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Noticia</title>
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
    <div class="form-cad">
        <form action="backEnd/registrarNoticiaBack.php" method="get">
            <div class="cad-new">
                <label for="title">Titulo</label>
                <input type="text" name="title-field" id="title-field" required>
                <label for="category">Categoria</label>
                <select name="category-field" id="category-field" required>
                    <option value="" disabled selected>Selecione uma Categoria</option>
                    <?php
                        require_once("backEnd/pegarCategoria.php");
                    ?>
                </select>
                <textarea name="new" id="new" cols="30" rows="15" required></textarea>
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </div>
    <footer>
        Desenvolvido por Gabriel Müller
    </footer>
</body>
</html>