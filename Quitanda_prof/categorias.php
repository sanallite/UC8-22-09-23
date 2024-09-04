<!DOCTYPE html>
<html lang="pt-br">

<?php
    include "conexao.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stilo.css">
    <title>Categorias - Quitanda</title>
</head>

<body>
    <main>
        <header>
            <div id="logo"><a href="index.php"><img src="img/logo.png"></a></div>
            <nav>
                <?php
                    include "menu.php";
                ?>
            </nav>
        </header>
        <article>
            <?php
                $categorias = mysqli_query($conexao, "SELECT * FROM categorias");

                // Estrutura de repetição que traz todas as frutas cadastradas.
                while ( $categoria = mysqli_fetch_assoc($categorias) ) {
            ?>
            <div class="bloco cor<?= $categoria['id']; ?>">
                <a href="index.php?id=<?= $categoria['id']; ?>">
                    <main>
                        <header>
                            <div class="bolinha"></div>
                        </header>

                        <p class="titulo">
                            <?= $categoria['nome']; ?>
                        </p>
                    </main>
                </a>
            </div>
            <?php } ?>
        </article>
    </main>
</body>

</html>