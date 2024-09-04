<?php
    include "conexao.php";

    // Pegando a ação pela url e o valor que será usado nessa ação, apenas se tiver uma ação definida.
    if ( isset( $_GET['acao'] ) ) {
        $acao = $_GET['acao'];

        if ( $acao == "delete" ) {
            $id = $_GET['id'];
            $deletarFrutas = mysqli_query($conexao, "DELETE FROM frutas WHERE id = $id");
            
            if ( $deletarFrutas ) { echo "<br>A linha foi apagada.";
                header ('location:index.php');
            }
        }

        else if ( $acao == "atualizar") {
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $quantidade = $_POST['quantidade'];
            $estado = $_POST['estado'];
            $categoria = $_POST['categoria'];
            $data = $_POST['data'];
            $preco = $_POST['preco'];

            $atualizar = mysqli_query($conexao,
            "UPDATE frutas 
            SET nome = '$nome',
             quantidade = '$quantidade',
              estado = '$estado',
               categoria_id = '$categoria',
                data = '$data',
                preco = '$preco'
            WHERE id = '$id'");

            if ( $atualizar ) {
                echo "<br>Atualizado.";
            }
        }
    }

    else {
        // Vamos receber as informações do formulário por post e criaremos as variáveis para receber a informação.
        $nome = $_POST['nome'];
        $quantidade = $_POST['quantidade'];
        $estado = $_POST['estado'];
        $categoria = $_POST['categoria'];
        $data = $_POST['data'];

        // Query para salvar as informações no banco de dados
        $frutas = mysqli_query($conexao,
            "INSERT INTO frutas (nome, quantidade, estado, categoria_id, data)
            VALUES ('$nome', '$quantidade', '$estado', '$categoria', '$data')"
        );

        // Se salvar aparecerá uma mensagem
        if ($frutas) {
            echo "<br>A fruta foi salva";
            header ('location:index.php');
        }
    }
?>