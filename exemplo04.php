<?php
if (isset($_GET['nome']) && isset($_GET['idade'])) {
    $nome = htmlspecialchars($_GET['nome']);
    $idade = (int) $_GET['idade'];

    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade . " anos";
} else {
    echo "Por favor, preencha o formulário.";
}
?>