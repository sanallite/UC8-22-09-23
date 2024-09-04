<?php

$conexao = mysqli_connect("localhost:403","root","#sfkmb23","quitanda",);

if($conexao) {
    echo "Sucesso";
}  else {
    echo "Deu Ruim!";
}