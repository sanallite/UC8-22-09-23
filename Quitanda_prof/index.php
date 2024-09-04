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
    <title>Quitanda</title>
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
                if ( isset($_GET['id']) ) {
                    $id = $_GET['id'];
                    $frutas = mysqli_query($conexao, "SELECT * FROM frutas WHERE categoria_id = $id");
                }

                else {
                    $frutas = mysqli_query($conexao, "SELECT * FROM frutas");
                }

                // Estrutura de repetição que traz todas as frutas cadastradas.
                while ( $fruta = mysqli_fetch_assoc($frutas) ) {
            ?>
            <div class="bloco cor<?= $fruta['categoria_id']; ?>">
                <main>
                    <header>
                        <div class="bolinha">
                            <a href="atualizacao.php?id=<?= $fruta['id']; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </a>
                        </div>

                        <div class="bolinha2">
                            <a href="salvar.php?acao=delete&id=<?= $fruta['id']; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </a>
                        </div>

                    </header>

                    <p class="titulo">
                        <?= $fruta['nome']. " - " .$fruta['estado']; ?>
                    </p>

                    <div class="data_quantidade">
                        <div class="quantidade">
                            <p class="claro">Quantidade</p>
                            <p>
                                <?= $fruta['quantidade']; ?>
                            </p>
                        </div>

                        <div class="data">
                            <p class="claro">Data</p>
                            <p>
                                <?= $fruta['data']; ?>
                            </p>
                        </div>
                    </div>
                </main>
            </div>
            <?php } ?>
        </article>
    </main>
</body>

</html>